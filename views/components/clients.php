<section id="clients" class="bg-zinc-200 p-10 pb-20">
        <h2 class="text-3xl font-bold text-indigo-700 text-center mb-8">Our Happy Clients</h2>
        <div class="w-fit mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-x-40 gap-y-20 justify-center items-center " id="clientsWrapper">
            <!-- <div class="text-5xl font-bold text-orange-600 tracking-wider">
                <img src="<?= asset('classwix.png') ?>" alt="classwix" class="w-20 h-20 rounded-md mx-auto" />
                <h3>CLASSWiX</h3>
            </div>
            <div class="text-5xl font-bold text-blue-600 tracking-wider">
            <img src="<?= asset('arps.png') ?>" alt="arps" class="w-20 h-20 rounded-md mx-auto" />
                <h3>ARPS Jorhat</h3>
            </div> -->
        </div>
        <!-- {{ use_cardwrap }} -->
    </section>


    <script>

async function loadClients() {
    try {
        const res = await pb.collection(COLLECTION).getFullList();
        // If you receive an object with items key, use res.items; otherwise res may already be array
        const items = Array.isArray(res) ? res : (res.items || []);
        const container = document.getElementById('clientsWrapper');
        container.innerHTML = ''; // clear any placeholders

        items.forEach(item => {
            const card = document.createElement('div');
            card.className = 'text-3xl font-bold tracking-wider text-center';

            // image element
            const img = document.createElement('img');
            img.className = 'w-20 h-20 rounded-md mx-auto mb-4';
            // build PocketBase file URL: /api/files/{collection}/{recordId}/{filename}
            if (item.logo) {
                const filename = encodeURIComponent(item.logo);
                // img.src = `${window.APP_CONFIG.config.PB_HOST}/api/files/${COLLECTION}/${item.id}/${filename}`;
                img.src = `https://pk.deolang.com/api/files/${COLLECTION}/${item.id}/${filename}`;
            } else {
                img.alt = 'No image';
            }

            // name element
            const h3 = document.createElement('h3');
            h3.textContent = item.name || '';

            // if you want each card to link to the client's URL
            const wrapper = document.createElement('a');
            wrapper.href = item.link || '#';
            wrapper.target = '_blank';
            wrapper.rel = 'noopener noreferrer';
            wrapper.className = item.color_code;

            wrapper.appendChild(img);
            wrapper.appendChild(h3);
            card.appendChild(wrapper);
            container.appendChild(card);
        });
    } catch (err) {
        console.error('failed to load clients', err);
    }
}

document.addEventListener('DOMContentLoaded', loadClients);
</script>