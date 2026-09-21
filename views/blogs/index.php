<div class="min-h-screen relative bg-zinc-100 font-sans antialiased text-zinc-800">
  {{ use_nav }}    
  <div class="container mx-auto px-4 py-8 max-w-7xl">
    <div class="grid grid-cols-1 lg:grid-cols-7 gap-8">
      
      <!-- Main Content Area -->
      <main class="lg:col-span-5">
        <header class="flex items-center justify-between mb-6 pb-2 border-b border-zinc-300">
          <h1 class="text-2xl font-bold tracking-tight text-zinc-900">Latest Articles & Insights</h1>
          <span id="blog-count" class="text-xs font-semibold px-2.5 py-1 bg-zinc-200 text-zinc-700 rounded-full">Loading...</span>
        </header>

        <!-- Dynamic Blog Cards Grid -->
        <div id="blogs-wrapper" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <div class="col-span-full py-16 text-center text-zinc-500">
            <svg class="animate-spin h-8 w-8 mx-auto text-zinc-400 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <p class="text-sm font-medium">Loading blogs...</p>
          </div>
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
            <li class="text-sm text-zinc-400 italic">Loading suggestions...</li>
          </ul>
        </div>
      </aside>

    </div>
  </div>
</div>

<script>
(function() {
  async function loadBlogs() {
    const wrapper = document.getElementById('blogs-wrapper');
    const sidebar = document.getElementById('sidebar-blogs');
    const blogCount = document.getElementById('blog-count');
    if (!wrapper) return;

    try {
      // Fetch blogs ordered by creation date descending
      const res = await pb.collection('blogs').getList(1, 50, {
        sort: '-created'
      });
      const blogs = res.items || [];

      if (blogCount) {
        blogCount.textContent = `${blogs.length} ${blogs.length === 1 ? 'Article' : 'Articles'}`;
      }

      if (blogs.length === 0) {
        wrapper.innerHTML = `
          <div class="col-span-full py-16 text-center text-zinc-500 bg-white rounded-xl border border-zinc-200">
            <i class="ph ph-article-ny text-4xl text-zinc-300 mb-2"></i>
            <p class="text-base font-medium text-zinc-700">No blog posts found</p>
            <p class="text-xs text-zinc-400 mt-1">Check back later for new updates.</p>
          </div>
        `;
        if (sidebar) sidebar.innerHTML = `<li class="text-sm text-zinc-400 italic">No posts available</li>`;
        return;
      }

      // Add ItemList JSON-LD for SEO structured data
      const jsonLdData = {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "itemListElement": blogs.map((item, index) => ({
          "@type": "ListItem",
          "position": index + 1,
          "name": item.title || 'Untitled',
          "url": `${window.location.origin}/blogs?id=${item.id}`,
          "description": item.meta_description || ''
        }))
      };
      let scriptTag = document.getElementById('jsonld-blogs');
      if (!scriptTag) {
        scriptTag = document.createElement('script');
        scriptTag.id = 'jsonld-blogs';
        scriptTag.type = 'application/ld+json';
        document.head.appendChild(scriptTag);
      }
      scriptTag.textContent = JSON.stringify(jsonLdData);

      // Render Grid Items
      wrapper.innerHTML = blogs.map(item => {
        const title = item.title || 'Untitled';
        const coverImg = item.cover_image 
          ? `https://pk.deolang.com/api/files/${item.collectionId}/${item.id}/${item.cover_image}`
          : 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=800&q=80';
        
        // SEO: Use explicit meta_description or fall back to stripped HTML excerpt
        let descPreview = item.meta_description || '';
        if (!descPreview) {
          const tempDiv = document.createElement('div');
          tempDiv.innerHTML = item.content || '';
          const plainText = tempDiv.textContent || tempDiv.innerText || '';
          descPreview = plainText.length > 130 ? plainText.substring(0, 130) + '...' : plainText;
        }

        const dateStr = item.created ? new Date(item.created).toLocaleDateString('en-US', {
          month: 'short',
          day: 'numeric',
          year: 'numeric'
        }) : '';

        const authorName = item.author || 'DeoLang Team';

        const tagList = item.keywords || item.tags || '';
        const tags = tagList ? tagList.split(',').map(t => t.trim()).filter(Boolean) : [];

        return `
          <article class="group bg-white rounded-xl border border-zinc-200/80 shadow-sm hover:shadow-md transition-all duration-200 overflow-hidden flex flex-col h-full" itemscope itemtype="https://schema.org/BlogPosting">
            <div class="aspect-video w-full overflow-hidden bg-zinc-100 relative">
              <img 
                src="${coverImg}" 
                alt="${title}" 
                itemprop="image"
                loading="lazy"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                onerror="this.src='https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=800&q=80'"
              />
            </div>
            
            <div class="p-5 flex flex-col flex-grow">
              <div class="flex items-center justify-between text-xs text-zinc-400 mb-2">
                ${dateStr ? `<time itemprop="datePublished" datetime="${item.created}">${dateStr}</time>` : ''}
                <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                  <span itemprop="name" class="font-medium text-zinc-500">${authorName}</span>
                </span>
              </div>
              
              <h2 class="text-lg font-bold text-zinc-900 group-hover:text-indigo-600 transition-colors line-clamp-2 leading-snug mb-2" itemprop="headline">
                <a href="/blogs?id=${item.id}" itemprop="url">${title}</a>
              </h2>

              <p class="text-sm text-zinc-600 line-clamp-3 mb-4 flex-grow leading-relaxed" itemprop="description">
                ${descPreview || 'Click to read full article content.'}
              </p>

              ${tags.length ? `
                <div class="flex flex-wrap gap-1.5 mb-4">
                  ${tags.slice(0, 3).map(tag => `<span class="text-[11px] font-medium bg-zinc-100 text-zinc-600 px-2 py-0.5 rounded-md">#${tag}</span>`).join('')}
                </div>
              ` : ''}

              <div class="pt-3 border-t border-zinc-100 flex items-center justify-between mt-auto">
                <a href="/blogs?id=${item.id}" class="inline-flex items-center gap-1 text-sm font-semibold text-indigo-600 hover:text-indigo-700 transition-colors">
                  Read Article
                  <i class="ph ph-arrow-right text-xs"></i>
                </a>
              </div>
            </div>
          </article>
        `;
      }).join('');

      // Render Sidebar Recent Posts
      if (sidebar) {
        sidebar.innerHTML = blogs.slice(0, 5).map(item => `
          <li>
            <a href="/blogs?id=${item.id}" class="group block py-1.5 hover:bg-zinc-50 rounded-md transition-colors">
              <h3 class="text-sm font-semibold text-zinc-800 group-hover:text-indigo-600 line-clamp-1 transition-colors">
                ${item.title || 'Untitled'}
              </h3>
              ${item.created ? `<span class="text-[11px] text-zinc-400">${new Date(item.created).toLocaleDateString('en-US', { month: 'short', day: 'numeric' })}</span>` : ''}
            </a>
          </li>
        `).join('');
      }

    } catch (err) {
      console.error('Failed to fetch PocketBase blogs:', err);
      wrapper.innerHTML = `
        <div class="col-span-full py-12 text-center text-red-500 bg-red-50 rounded-xl border border-red-200">
          <i class="ph ph-warning-circle text-3xl mb-2"></i>
          <p class="font-semibold text-sm">Failed to load blogs</p>
          <p class="text-xs text-red-400 mt-1">Please try refreshing the page.</p>
        </div>
      `;
    }
  }

  document.addEventListener('DOMContentLoaded', loadBlogs);
})();
</script>
