<div class="min-h-screen relative bg-zinc-100 font-sans antialiased text-zinc-800">
  {{ use_nav }}

  <div class="container mx-auto px-4 py-8 max-w-7xl">
    <div class="grid grid-cols-1 lg:grid-cols-7 gap-8">

      <!-- Main Blog Details Content -->
      <main class="lg:col-span-5 bg-white p-6 sm:p-8 rounded-xl shadow-sm border border-zinc-200/80" itemscope itemtype="https://schema.org/BlogPosting">
        <div id="blog-detail-container">
          <div class="py-16 text-center text-zinc-500">
            <svg class="animate-spin h-8 w-8 mx-auto text-zinc-400 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <p class="text-sm font-medium">Loading article details...</p>
          </div>
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
            <li class="text-sm text-zinc-400 italic">Loading...</li>
          </ul>
        </div>
      </aside>

    </div>
  </div>
</div>

<script>
(function() {
  function updateHeadSEO(blog) {
    if (!blog) return;

    const pageTitle = `${blog.title || 'Blog'} | DeoLang`;
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = blog.content || '';
    const plainContent = tempDiv.textContent || tempDiv.innerText || '';
    
    const metaDesc = blog.meta_description || plainContent.substring(0, 160) || 'Read latest software development and tech insights from DeoLang.';
    const keywords = blog.keywords || blog.tags || 'software, technology, app development, deolang';
    const author = blog.author || 'DeoLang';
    const canonicalUrl = `${window.location.origin}/blogs?id=${blog.id}`;

    const coverImg = blog.cover_image 
      ? `https://pk.deolang.com/api/files/${blog.collectionId}/${blog.id}/${blog.cover_image}`
      : `${window.location.origin}/public/images/logo_192.png`;

    // 1. Title
    document.title = pageTitle;

    // Helper for Meta Tags
    function setMeta(selector, attrName, attrVal, content) {
      let el = document.querySelector(selector);
      if (!el) {
        el = document.createElement('meta');
        el.setAttribute(attrName, attrVal);
        document.head.appendChild(el);
      }
      el.setAttribute('content', content);
    }

    setMeta('meta[name="description"]', 'name', 'description', metaDesc);
    setMeta('meta[name="keywords"]', 'name', 'keywords', keywords);
    setMeta('meta[name="author"]', 'name', 'author', author);

    // Open Graph
    setMeta('meta[property="og:title"]', 'property', 'og:title', pageTitle);
    setMeta('meta[property="og:description"]', 'property', 'og:description', metaDesc);
    setMeta('meta[property="og:type"]', 'property', 'og:type', 'article');
    setMeta('meta[property="og:url"]', 'property', 'og:url', canonicalUrl);
    setMeta('meta[property="og:image"]', 'property', 'og:image', coverImg);

    // Twitter Card
    setMeta('meta[name="twitter:card"]', 'name', 'twitter:card', 'summary_large_image');
    setMeta('meta[name="twitter:title"]', 'name', 'twitter:title', pageTitle);
    setMeta('meta[name="twitter:description"]', 'name', 'twitter:description', metaDesc);
    setMeta('meta[name="twitter:image"]', 'name', 'twitter:image', coverImg);

    // Canonical link
    let canonical = document.querySelector('link[rel="canonical"]');
    if (!canonical) {
      canonical = document.createElement('link');
      canonical.rel = 'canonical';
      document.head.appendChild(canonical);
    }
    canonical.href = canonicalUrl;

    // 2. Structured Data (JSON-LD)
    const jsonLdData = {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "headline": blog.title || '',
      "image": [coverImg],
      "datePublished": blog.created,
      "dateModified": blog.updated || blog.created,
      "author": [{
        "@type": "Person",
        "name": author
      }],
      "publisher": {
        "@type": "Organization",
        "name": "DeoLang",
        "logo": {
          "@type": "ImageObject",
          "url": `${window.location.origin}/public/images/logo_192.png`
        }
      },
      "description": metaDesc,
      "articleBody": plainContent
    };

    let scriptTag = document.getElementById('jsonld-blog-post');
    if (!scriptTag) {
      scriptTag = document.createElement('script');
      scriptTag.id = 'jsonld-blog-post';
      scriptTag.type = 'application/ld+json';
      document.head.appendChild(scriptTag);
    }
    scriptTag.textContent = JSON.stringify(jsonLdData);
  }

  async function loadBlogDetails() {
    const container = document.getElementById('blog-detail-container');
    const sidebar = document.getElementById('sidebar-blogs');
    if (!container) return;

    const urlParams = new URLSearchParams(window.location.search);
    const blogId = urlParams.get('id') || urlParams.get('a');

    try {
      let blog = null;
      if (blogId && blogId.length > 5) {
        try {
          blog = await pb.collection('blogs').getOne(blogId);
        } catch (e) {
          console.warn('Record not found by ID, falling back to latest blog.', e);
        }
      }

      if (!blog) {
        const latestRes = await pb.collection('blogs').getList(1, 1, { sort: '-created' });
        if (latestRes.items && latestRes.items.length > 0) {
          blog = latestRes.items[0];
        }
      }

      if (!blog) {
        container.innerHTML = `
          <div class="py-12 text-center text-zinc-500">
            <i class="ph ph-article-ny text-4xl text-zinc-300 mb-2"></i>
            <h1 class="text-lg font-semibold text-zinc-700">Article Not Found</h1>
            <a href="/blogs.asm" class="inline-block mt-4 text-sm text-indigo-600 hover:text-indigo-700 font-semibold">
              &larr; Back to all blogs
            </a>
          </div>
        `;
        return;
      }

      // Dynamically update document head meta tags and JSON-LD
      updateHeadSEO(blog);

      const coverImg = blog.cover_image 
        ? `https://pk.deolang.com/api/files/${blog.collectionId}/${blog.id}/${blog.cover_image}`
        : null;

      const dateStr = blog.created ? new Date(blog.created).toLocaleDateString('en-US', {
        month: 'long',
        day: 'numeric',
        year: 'numeric'
      }) : '';

      const authorName = blog.author || 'DeoLang Team';

      const tagList = blog.keywords || blog.tags || '';
      const tags = tagList ? tagList.split(',').map(t => t.trim()).filter(Boolean) : [];

      container.innerHTML = `
        <header class="mb-6">
          <a href="/blogs.asm" class="inline-flex items-center gap-1.5 text-xs font-semibold text-zinc-500 hover:text-indigo-600 transition-colors mb-4">
            <i class="ph ph-arrow-left"></i>
            Back to Articles
          </a>
          <h1 class="text-2xl sm:text-3xl font-extrabold text-zinc-900 tracking-tight leading-tight mb-3" itemprop="headline">
            ${blog.title || 'Untitled'}
          </h1>
          <div class="flex flex-wrap items-center gap-3 text-xs text-zinc-500">
            <span itemprop="author" itemscope itemtype="https://schema.org/Person">
              By <strong itemprop="name" class="text-zinc-700">${authorName}</strong>
            </span>
            ${dateStr ? `<span>•</span><time itemprop="datePublished" datetime="${blog.created}">${dateStr}</time>` : ''}
            ${tags.length ? `<span>•</span><div class="flex flex-wrap gap-1">${tags.map(t => `<span class="bg-zinc-100 text-zinc-600 px-2 py-0.5 rounded">#${t}</span>`).join('')}</div>` : ''}
          </div>
        </header>

        ${coverImg ? `
          <div class="mb-6 rounded-xl overflow-hidden bg-zinc-100 max-h-[400px]">
            <img src="${coverImg}" alt="${blog.title}" itemprop="image" class="w-full h-full object-cover" />
          </div>
        ` : ''}

        <div class="prose prose-zinc max-w-none text-zinc-700 leading-relaxed text-base" itemprop="articleBody">
          ${blog.content || '<p class="italic text-zinc-400">No content provided.</p>'}
        </div>
      `;

      // Populate Sidebar Other Articles
      if (sidebar) {
        const othersRes = await pb.collection('blogs').getList(1, 6, { sort: '-created' });
        const others = (othersRes.items || []).filter(item => item.id !== blog.id);

        if (others.length === 0) {
          sidebar.innerHTML = `<li class="text-sm text-zinc-400 italic">No other posts</li>`;
        } else {
          sidebar.innerHTML = others.map(item => `
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
      }

    } catch (err) {
      console.error('Failed to load blog detail:', err);
      container.innerHTML = `
        <div class="py-12 text-center text-red-500">
          <i class="ph ph-warning-circle text-3xl mb-2"></i>
          <p class="font-semibold text-sm">Failed to load article details</p>
        </div>
      `;
    }
  }

  document.addEventListener('DOMContentLoaded', loadBlogDetails);
})();
</script>