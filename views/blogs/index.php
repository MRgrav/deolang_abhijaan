<div class="max-h-screen relative bg-zinc-300">
  {{ use_nav }}    
    <div class="container mx-auto grid lg:grid-cols-7">
        <main id="blogs-wrapper" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 col-span-5 justify-center px-4 max-h-[90vh] overflow-auto">
            <div class="p-4">
                <div class="w-full h-full min-h-[200px] bg-white p-4 rounded shdaow hover:shadow-lg">
                    
                </div>
            </div>
        </main>
        <aside class="lg:min-w-[300px] col-span-2 bg-zinc-400/50">
            <h2>Others</h2>
        </aside>
    </div>
    
</div>

<!-- keep your existing markup above, then add this script -->
<script>
(function(){
  const demoData = [
    { title: "Build fast", desc: "Create responsive UIs with utility-first CSS and plain JS.", img: "https://via.placeholder.com/800x420?text=Fast" },
    { title: "Design system", desc: "Reusable components and consistent styles for your app.", img: "https://via.placeholder.com/800x420?text=Design" },
    { title: "Performance", desc: "Optimized layout and minimal JS for snappy interactions.", img: "https://via.placeholder.com/800x420?text=Speed" },
    { title: "Deploy easily", desc: "Static-ready pages work well on any CDN or hosting.", img: "https://via.placeholder.com/800x420?text=Deploy" }
  ];

  const wrapper = document.getElementById('blogs-wrapper');
  if (!wrapper) return;

  // find the existing single template card (first .p-4 > .... card)
  const templateCol = wrapper.querySelector(':scope > div');
  if (!templateCol) {
    // fallback: create a column wrapper if none exists
    console.warn('Template column not found inside #blogs-wrapper. Creating new columns.');
  }

  // clear wrapper
  wrapper.innerHTML = '';

  demoData.forEach(item => {
    // column wrapper (matches your markup)
    const col = document.createElement('div');
    col.className = 'p-4';

    // card
    const card = document.createElement('div');
    card.className = 'w-full h-full bg-white p-4 rounded shdaow hover:shadow-lg min-h-[200px] flex flex-col';
    
    // image
    const img = document.createElement('img');
    img.src = item.img;
    img.alt = item.title;
    img.className = 'w-full h-40 object-cover rounded';

    // title
    const h3 = document.createElement('h3');
    h3.textContent = item.title;
    h3.className = 'mt-3 text-lg font-semibold';

    // description
    const p = document.createElement('p');
    p.textContent = item.desc;
    p.className = 'mt-1 text-sm text-zinc-700 flex-grow';

    // action
    const a = document.createElement('a');
    a.href = '?a=10';
    a.textContent = 'Learn more';
    a.className = 'inline-block mt-3 text-yellow-500 hover:text-yellow-600';

    card.appendChild(img);
    card.appendChild(h3);
    card.appendChild(p);
    card.appendChild(a);

    col.appendChild(card);
    wrapper.appendChild(col);
  });
})();
</script>

