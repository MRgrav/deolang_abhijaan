<?php
// Server-side data fetching for SEO
$apiUrl = 'https://pk.deolang.com/api/collections/blogs/records?sort=-created&perPage=50';
$cacheFile = sys_get_temp_dir() . '/deolang_blog_cache_' . md5($apiUrl) . '.json';
$cacheTime = 300; // 5 minutes

$response = null;
$httpCode = 0;

if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime) {
    $response = file_get_contents($cacheFile);
    $httpCode = 200;
} else {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode === 200 && $response) {
        file_put_contents($cacheFile, $response);
    }
}

$blogs = [];
if ($httpCode === 200 && $response) {
    $data = json_decode($response, true);
    if (isset($data['items']) && is_array($data['items'])) {
        $blogs = $data['items'];
    }
}

// Prepare JSON-LD
$jsonLdItems = [];
foreach ($blogs as $index => $item) {
    $title = $item['title'] ?? 'Untitled';
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/blogs?id=" . $item['id'];
    $desc = $item['meta_description'] ?? '';
    
    $jsonLdItems[] = [
        "@type" => "ListItem",
        "position" => $index + 1,
        "name" => $title,
        "url" => $url,
        "description" => $desc
    ];
}

$jsonLdData = [
    "@context" => "https://schema.org",
    "@type" => "ItemList",
    "itemListElement" => $jsonLdItems
];
?>
<div class="min-h-screen relative bg-zinc-100 font-sans antialiased text-zinc-800">
  {{ use_nav }}    
  <div class="container mx-auto px-4 py-8 max-w-7xl">
    <div class="grid grid-cols-1 lg:grid-cols-7 gap-8">
      
      <!-- Main Content Area -->
      <main class="lg:col-span-5">
        <header class="flex items-center justify-between mb-6 pb-2 border-b border-zinc-300">
          <h1 class="text-2xl font-bold tracking-tight text-zinc-900">Latest Articles & Insights</h1>
          <span id="blog-count" class="text-xs font-semibold px-2.5 py-1 bg-zinc-200 text-zinc-700 rounded-full">
            <?php echo count($blogs) . ' ' . (count($blogs) === 1 ? 'Article' : 'Articles'); ?>
          </span>
        </header>

        <!-- Dynamic Blog Cards Grid -->
        <div id="blogs-wrapper" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <?php if (empty($blogs)): ?>
            <div class="col-span-full py-16 text-center text-zinc-500 bg-white rounded-xl border border-zinc-200">
              <i class="ph ph-article-ny text-4xl text-zinc-300 mb-2"></i>
              <p class="text-base font-medium text-zinc-700">No blog posts found</p>
              <p class="text-xs text-zinc-400 mt-1">Check back later for new updates.</p>
            </div>
          <?php else: ?>
            <?php foreach ($blogs as $item): 
              $title = $item['title'] ?? 'Untitled';
              $coverImg = !empty($item['cover_image']) 
                ? "https://pk.deolang.com/api/files/" . $item['collectionId'] . "/" . $item['id'] . "/" . $item['cover_image']
                : 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=800&q=80';
              
              $descPreview = $item['meta_description'] ?? '';
              if (empty($descPreview)) {
                  $plainText = strip_tags($item['content'] ?? '');
                  $descPreview = strlen($plainText) > 130 ? substr($plainText, 0, 130) . '...' : $plainText;
              }

              $dateStr = !empty($item['created']) ? date('M j, Y', strtotime($item['created'])) : '';
              $authorName = !empty($item['author']) ? $item['author'] : 'DeoLang Team';
              
              $tagList = !empty($item['keywords']) ? $item['keywords'] : ($item['tags'] ?? '');
              $tags = array_filter(array_map('trim', explode(',', $tagList)));
            ?>
              <article class="group bg-white rounded-xl border border-zinc-200/80 shadow-sm hover:shadow-md transition-all duration-200 overflow-hidden flex flex-col h-full" itemscope itemtype="https://schema.org/BlogPosting">
                <div class="aspect-video w-full overflow-hidden bg-zinc-100 relative">
                  <img 
                    src="<?php echo htmlspecialchars($coverImg); ?>" 
                    alt="<?php echo htmlspecialchars($title); ?>" 
                    itemprop="image"
                    loading="lazy"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                    onerror="this.src='https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=800&q=80'"
                  />
                </div>
                
                <div class="p-5 flex flex-col flex-grow">
                  <div class="flex items-center justify-between text-xs text-zinc-400 mb-2">
                    <?php if ($dateStr): ?>
                      <time itemprop="datePublished" datetime="<?php echo htmlspecialchars($item['created']); ?>"><?php echo htmlspecialchars($dateStr); ?></time>
                    <?php endif; ?>
                    <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                      <span itemprop="name" class="font-medium text-zinc-500"><?php echo htmlspecialchars($authorName); ?></span>
                    </span>
                  </div>
                  
                  <h2 class="text-lg font-bold text-zinc-900 group-hover:text-indigo-600 transition-colors line-clamp-2 leading-snug mb-2" itemprop="headline">
                    <a href="/blogs?id=<?php echo htmlspecialchars($item['id']); ?>" itemprop="url"><?php echo htmlspecialchars($title); ?></a>
                  </h2>

                  <p class="text-sm text-zinc-600 line-clamp-3 mb-4 flex-grow leading-relaxed" itemprop="description">
                    <?php echo htmlspecialchars($descPreview ?: 'Click to read full article content.'); ?>
                  </p>

                  <?php if (!empty($tags)): ?>
                    <div class="flex flex-wrap gap-1.5 mb-4">
                      <?php foreach (array_slice($tags, 0, 3) as $tag): ?>
                        <span class="text-[11px] font-medium bg-zinc-100 text-zinc-600 px-2 py-0.5 rounded-md">#<?php echo htmlspecialchars($tag); ?></span>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>

                  <div class="pt-3 border-t border-zinc-100 flex items-center justify-between mt-auto">
                    <a href="/blogs?id=<?php echo htmlspecialchars($item['id']); ?>" class="inline-flex items-center gap-1 text-sm font-semibold text-indigo-600 hover:text-indigo-700 transition-colors">
                      Read Article
                      <i class="ph ph-arrow-right text-xs"></i>
                    </a>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </main>

      <!-- Sidebar -->
      <aside class="lg:col-span-2">
        <div class="sticky top-24 bg-white p-6 rounded-xl shadow-sm border border-zinc-200/80">
          <h2 class="text-lg font-bold text-zinc-900 mb-4 pb-2 border-b border-zinc-100 flex items-center gap-2">
            <i class="ph ph-newspaper text-indigo-600 text-xl"></i>
            Recent Posts
          </h2>
          <ul id="sidebar-blogs" class="space-y-3">
            <?php if (empty($blogs)): ?>
              <li class="text-sm text-zinc-400 italic">No posts available</li>
            <?php else: ?>
              <?php foreach (array_slice($blogs, 0, 5) as $item): ?>
                <li>
                  <a href="/blogs?id=<?php echo htmlspecialchars($item['id']); ?>" class="group block py-1.5 hover:bg-zinc-50 rounded-md transition-colors">
                    <h3 class="text-sm font-semibold text-zinc-800 group-hover:text-indigo-600 line-clamp-1 transition-colors">
                      <?php echo htmlspecialchars($item['title'] ?? 'Untitled'); ?>
                    </h3>
                    <?php if (!empty($item['created'])): ?>
                      <span class="text-[11px] text-zinc-400"><?php echo date('M j', strtotime($item['created'])); ?></span>
                    <?php endif; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>
      </aside>

    </div>
  </div>
</div>

<script type="application/ld+json">
<?php echo json_encode($jsonLdData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
</script>
