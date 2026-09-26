<?php
// Server-side data fetching for SEO with Caching
function fetchCachedApi($url, $cacheTime = 300) {
    $cacheFile = sys_get_temp_dir() . '/deolang_blog_cache_' . md5($url) . '.json';
    if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime) {
        $data = file_get_contents($cacheFile);
        if ($data) return ['code' => 200, 'response' => $data];
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200 && $response) {
        file_put_contents($cacheFile, $response);
    }
    return ['code' => $httpCode, 'response' => $response];
}

$blogId = $_GET['id'] ?? ($_GET['a'] ?? null);

$blog = null;
$others = [];

if ($blogId && strlen($blogId) > 5) {
    $apiUrl = 'https://pk.deolang.com/api/collections/blogs/records/' . urlencode($blogId);
    $res = fetchCachedApi($apiUrl);

    if ($res['code'] === 200 && $res['response']) {
        $blog = json_decode($res['response'], true);
    }
}

// Fallback to getting the latest blog if ID is invalid or not provided
if (!$blog) {
    $apiUrl = 'https://pk.deolang.com/api/collections/blogs/records?sort=-created&perPage=1';
    $res = fetchCachedApi($apiUrl);

    if ($res['code'] === 200 && $res['response']) {
        $data = json_decode($res['response'], true);
        if (!empty($data['items'])) {
            $blog = $data['items'][0];
        }
    }
}

// Fetch "Other Articles" (Latest 6)
$othersApiUrl = 'https://pk.deolang.com/api/collections/blogs/records?sort=-created&perPage=6';
$res = fetchCachedApi($othersApiUrl);

if ($res['code'] === 200 && $res['response']) {
    $data = json_decode($res['response'], true);
    if (isset($data['items'])) {
        $others = array_filter($data['items'], function($item) use ($blog) {
            return !$blog || $item['id'] !== $blog['id'];
        });
    }
}

// SEO Metadata Preparation
$pageTitle = "Blog | DeoLang";
$metaDesc = 'Read latest software development and tech insights from DeoLang.';
$keywords = 'software, technology, app development, deolang';
$author = 'DeoLang Team';
$canonicalUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . $_SERVER['REQUEST_URI'];
$coverImg = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/public/images/logo_192.png";
$jsonLdData = null;

if ($blog) {
    $pageTitle = ($blog['title'] ?? 'Blog') . " | DeoLang";
    $plainContent = strip_tags($blog['content'] ?? '');
    
    $metaDesc = $blog['meta_description'] ?? (strlen($plainContent) > 160 ? substr($plainContent, 0, 160) . '...' : $plainContent);
    $metaDesc = $metaDesc ?: 'Read latest software development and tech insights from DeoLang.';
    
    $keywords = $blog['keywords'] ?? ($blog['tags'] ?? 'software, technology, app development, deolang');
    $author = $blog['author'] ?? 'DeoLang Team';
    $canonicalUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/blogs?id=" . $blog['id'];

    if (!empty($blog['cover_image'])) {
        $coverImg = "https://pk.deolang.com/api/files/" . $blog['collectionId'] . "/" . $blog['id'] . "/" . $blog['cover_image'];
    }

    $jsonLdData = [
        "@context" => "https://schema.org",
        "@type" => "BlogPosting",
        "headline" => $blog['title'] ?? '',
        "image" => [$coverImg],
        "datePublished" => $blog['created'] ?? '',
        "dateModified" => $blog['updated'] ?? ($blog['created'] ?? ''),
        "author" => [
            [
                "@type" => "Person",
                "name" => $author
            ]
        ],
        "publisher" => [
            "@type" => "Organization",
            "name" => "DeoLang",
            "logo" => [
                "@type" => "ImageObject",
                "url" => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/public/images/logo_192.png"
            ]
        ],
        "description" => $metaDesc,
        "articleBody" => $plainContent
    ];
    $ogType = 'article';
}
?>

<div class="min-h-screen relative bg-zinc-100 font-sans antialiased text-zinc-800">
  <?php require '/opt/lampp/htdocs/deolang/views/components/nav.php'; ?>

  <div class="container mx-auto px-4 py-8 max-w-7xl">
    <div class="grid grid-cols-1 lg:grid-cols-7 gap-8">

      <!-- Main Blog Details Content -->
      <main class="lg:col-span-5 bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-zinc-200/80" itemscope itemtype="https://schema.org/BlogPosting">
        <div id="blog-detail-container">
          <?php if (!$blog): ?>
            <div class="py-12 text-center text-zinc-500">
              <i class="ph ph-article-ny text-4xl text-zinc-300 mb-2"></i>
              <h1 class="text-lg font-semibold text-zinc-700">Article Not Found</h1>
              <a href="/blogs" class="inline-block mt-4 text-sm text-indigo-600 hover:text-indigo-700 font-semibold">
                &larr; Back to all blogs
              </a>
            </div>
          <?php else: 
            $dateStr = !empty($blog['created']) ? date('F j, Y', strtotime($blog['created'])) : '';
            $tagList = !empty($blog['tags']) ? $blog['tags'] : ($blog['keywords'] ?? '');
            $tags = array_slice(array_filter(array_map('trim', explode(',', $tagList))), 0, 5);
          ?>
            <header class="mb-6">
              <a href="/blogs" class="inline-flex items-center gap-1.5 text-xs font-semibold text-zinc-500 hover:text-indigo-600 transition-colors mb-4">
                <i class="ph ph-arrow-left"></i>
                Back to Articles
              </a>
              <h1 class="text-2xl sm:text-3xl font-extrabold text-zinc-900 tracking-tight leading-tight mb-3" itemprop="headline">
                <?php echo htmlspecialchars($blog['title'] ?? 'Untitled'); ?>
              </h1>
              <div class="flex flex-wrap items-center gap-3 text-xs text-zinc-500">
                <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                  By <strong itemprop="name" class="text-zinc-700"><?php echo htmlspecialchars($author); ?></strong>
                </span>
                <?php if ($dateStr): ?>
                  <span>•</span><time itemprop="datePublished" datetime="<?php echo htmlspecialchars($blog['created']); ?>"><?php echo htmlspecialchars($dateStr); ?></time>
                <?php endif; ?>
                <?php if (!empty($tags)): ?>
                  <span>•</span>
                  <div class="flex flex-wrap gap-1">
                    <?php foreach ($tags as $t): ?>
                      <span class="bg-zinc-100 text-zinc-600 px-2 py-0.5 rounded">#<?php echo htmlspecialchars($t); ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </header>

            <?php if (!empty($blog['cover_image'])): ?>
              <div class="mb-6 rounded-xl overflow-hidden bg-zinc-100 max-h-[400px]">
                <img src="<?php echo htmlspecialchars($coverImg); ?>" alt="<?php echo htmlspecialchars($blog['title'] ?? 'Cover'); ?>" itemprop="image" class="w-full h-full object-cover" />
              </div>
            <?php endif; ?>

            <div class="prose prose-zinc max-w-none text-zinc-700 leading-relaxed text-base blog-content-body" itemprop="articleBody">
              <style>
                .blog-content-body h1 { font-size: 2.25rem !important; font-weight: 800 !important; margin-top: 1.75rem !important; margin-bottom: 1rem !important; color: #18181b !important; line-height: 1.25 !important; display: block !important; }
                .blog-content-body h2 { font-size: 1.75rem !important; font-weight: 700 !important; margin-top: 1.5rem !important; margin-bottom: 0.75rem !important; color: #18181b !important; line-height: 1.35 !important; border-bottom: 2px solid #e4e4e7 !important; padding-bottom: 0.35rem !important; display: block !important; }
                .blog-content-body h3 { font-size: 1.35rem !important; font-weight: 700 !important; margin-top: 1.25rem !important; margin-bottom: 0.5rem !important; color: #27272a !important; line-height: 1.4 !important; display: block !important; }
                .blog-content-body h4 { font-size: 1.15rem !important; font-weight: 600 !important; margin-top: 1rem !important; margin-bottom: 0.5rem !important; color: #3f3f46 !important; display: block !important; }
                .blog-content-body ul { list-style-type: disc !important; padding-left: 1.5rem !important; margin: 1rem 0 !important; }
                .blog-content-body ol { list-style-type: decimal !important; padding-left: 1.5rem !important; margin: 1rem 0 !important; }
                .blog-content-body blockquote { border-left: 4px solid #4f46e5 !important; padding-left: 1rem !important; font-style: italic !important; background: #f8fafc !important; margin: 1rem 0 !important; padding-top: 0.5rem !important; padding-bottom: 0.5rem !important; }
              </style>
              <?php echo $blog['content'] ?? '<p class="italic text-zinc-400">No content provided.</p>'; ?>
            </div>
          <?php endif; ?>
        </div>
      </main>

      <!-- Sidebar -->
      <aside class="lg:col-span-2">
        <div class="sticky top-24 bg-white p-6 rounded-xl shadow-sm border border-zinc-200/80">
          <h2 class="text-lg font-bold text-zinc-900 mb-4 pb-2 border-b border-zinc-100 flex items-center gap-2">
            <i class="ph ph-newspaper text-indigo-600 text-xl"></i>
            Other Articles
          </h2>
          <ul id="sidebar-blogs" class="space-y-3">
            <?php if (empty($others)): ?>
              <li class="text-sm text-zinc-400 italic">No other posts</li>
            <?php else: ?>
              <?php foreach (array_slice($others, 0, 6) as $item): ?>
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

<?php if ($jsonLdData): ?>
<script type="application/ld+json">
<?php echo json_encode($jsonLdData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
</script>
<?php endif; ?>