<?php
$pageTitle = 'FAQ — DeoLang | Frequently Asked Questions';
$metaDesc = 'Got questions about DeoLang? Find answers to the most common questions about our software development services, pricing, timelines, and process in Jorhat, Assam.';
$keywords = 'DeoLang FAQ, frequently asked questions, software company Jorhat, web app development questions, custom software cost Assam';
?>

<div class="font-sans text-zinc-200 bg-zinc-900 overflow-x-hidden selection:bg-yellow-500 selection:text-white">
  <header class="bg-zinc-900/80 backdrop-blur text-zinc-200 fixed w-full top-0 z-50">
    {{ use_nav }}
  </header>

  <main>
    <!-- Hero -->
    <section class="relative overflow-hidden bg-zinc-900 text-white pt-32 pb-20">
      <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/10 via-zinc-900 to-zinc-900 pointer-events-none"></div>
      <div class="relative container mx-auto px-4 lg:px-8 max-w-4xl text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-yellow-500/10 text-yellow-400 text-sm font-semibold mb-6 border border-yellow-500/20">
          <span class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></span> Help Center
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight mb-6 leading-tight">
          Frequently Asked <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Questions</span>
        </h1>
        <p class="text-zinc-400 text-lg max-w-2xl mx-auto leading-relaxed">
          Everything you need to know about DeoLang, our services, timelines, and how we work. Can't find what you need? <a href="/contact" class="text-yellow-400 hover:underline">Contact us directly.</a>
        </p>
      </div>
    </section>

    <!-- FAQ Categories -->
    <section class="py-4 bg-zinc-900 sticky top-16 z-40 border-b border-zinc-800/60">
      <div class="container mx-auto px-4 lg:px-8 max-w-4xl">
        <div class="flex items-center gap-3 overflow-x-auto pb-1 scrollbar-hide">
          <button onclick="filterFaq('all')" id="btn-all" class="faq-cat-btn active whitespace-nowrap px-4 py-2 rounded-full text-sm font-semibold transition-all bg-yellow-500 text-zinc-900">
            All Questions
          </button>
          <button onclick="filterFaq('general')" id="btn-general" class="faq-cat-btn whitespace-nowrap px-4 py-2 rounded-full text-sm font-semibold transition-all bg-zinc-800 text-zinc-300 hover:bg-zinc-700">
            General
          </button>
          <button onclick="filterFaq('services')" id="btn-services" class="faq-cat-btn whitespace-nowrap px-4 py-2 rounded-full text-sm font-semibold transition-all bg-zinc-800 text-zinc-300 hover:bg-zinc-700">
            Services
          </button>
          <button onclick="filterFaq('process')" id="btn-process" class="faq-cat-btn whitespace-nowrap px-4 py-2 rounded-full text-sm font-semibold transition-all bg-zinc-800 text-zinc-300 hover:bg-zinc-700">
            Process
          </button>
          <button onclick="filterFaq('pricing')" id="btn-pricing" class="faq-cat-btn whitespace-nowrap px-4 py-2 rounded-full text-sm font-semibold transition-all bg-zinc-800 text-zinc-300 hover:bg-zinc-700">
            Pricing
          </button>
          <button onclick="filterFaq('technical')" id="btn-technical" class="faq-cat-btn whitespace-nowrap px-4 py-2 rounded-full text-sm font-semibold transition-all bg-zinc-800 text-zinc-300 hover:bg-zinc-700">
            Technical
          </button>
        </div>
      </div>
    </section>

    <!-- FAQ Items -->
    <section class="py-16 bg-zinc-900">
      <div class="container mx-auto px-4 lg:px-8 max-w-4xl">
        <div id="faq-list" class="space-y-4">

          <!-- General -->
          <div class="faq-item" data-category="general">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">What is DeoLang?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                DeoLang is a forward-thinking IT company headquartered in Jorhat, Assam, India. We are a unit of BlueTech Labs. We specialize in building custom enterprise software, web applications, mobile apps, business automation systems, and providing SEO services — primarily serving businesses in Northeast India and beyond.
              </div>
            </details>
          </div>

          <div class="faq-item" data-category="general">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">Where is DeoLang based? Do you work with clients outside Jorhat?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                We are headquartered in Jorhat, Assam, India. While we have strong roots in Northeast India, we work with clients across India and internationally. Our team operates fully remotely for client collaboration, so geography is never a barrier.
              </div>
            </details>
          </div>

          <div class="faq-item" data-category="general">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">Who leads DeoLang?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                DeoLang is led by a core leadership team: <strong class="text-zinc-200">Sumeet Bharali</strong> (CEO), <strong class="text-zinc-200">Ankit Gupta</strong> (COO), and <strong class="text-zinc-200">Gaurab Gogoi</strong> (CTO). Together, the team brings expertise in business strategy, operations, and cutting-edge technology.
              </div>
            </details>
          </div>

          <!-- Services -->
          <div class="faq-item" data-category="services">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">What services does DeoLang offer?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                <p class="mb-3">Our core services include:</p>
                <ul class="space-y-2 list-disc list-inside">
                  <li><strong class="text-zinc-300">Custom Web Applications</strong> — Scalable, high-performance web apps tailored to your business logic</li>
                  <li><strong class="text-zinc-300">Enterprise Software & ERP</strong> — Business management, inventory, HR, and workflow systems</li>
                  <li><strong class="text-zinc-300">Mobile App Development</strong> — Android & iOS apps built with modern frameworks</li>
                  <li><strong class="text-zinc-300">Business Automation</strong> — Automating repetitive workflows to boost efficiency</li>
                  <li><strong class="text-zinc-300">SEO & Digital Presence</strong> — Search engine optimization and technical SEO for local and national visibility</li>
                  <li><strong class="text-zinc-300">Admin Dashboards</strong> — Real-time dashboards and analytics interfaces</li>
                </ul>
              </div>
            </details>
          </div>

          <div class="faq-item" data-category="services">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">Do you build mobile apps?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                Yes! We develop mobile applications for both Android and iOS platforms. We use cross-platform frameworks where appropriate to ensure cost-efficiency without compromising on performance or native feel.
              </div>
            </details>
          </div>

          <div class="faq-item" data-category="services">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">Can DeoLang help improve our website's Google ranking?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                Absolutely. We offer SEO services covering technical SEO, on-page optimization, keyword strategy, content planning, and local SEO — which is especially powerful for Jorhat and Assam-based businesses. Our team has hands-on experience ranking businesses in competitive local markets.
              </div>
            </details>
          </div>

          <!-- Process -->
          <div class="faq-item" data-category="process">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">How does the project process work?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                <p class="mb-3">Our typical engagement follows these steps:</p>
                <ol class="space-y-2 list-decimal list-inside">
                  <li><strong class="text-zinc-300">Discovery Call</strong> — We understand your requirements, goals, and existing systems</li>
                  <li><strong class="text-zinc-300">Proposal & SOW</strong> — We draft a clear Statement of Work with timelines and cost breakdown</li>
                  <li><strong class="text-zinc-300">Design & Prototype</strong> — UI/UX mockups for your review and approval</li>
                  <li><strong class="text-zinc-300">Development Sprints</strong> — Iterative development with regular progress updates</li>
                  <li><strong class="text-zinc-300">Testing & QA</strong> — Thorough testing before any deployment</li>
                  <li><strong class="text-zinc-300">Launch & Handover</strong> — Deployment, training, and complete documentation</li>
                  <li><strong class="text-zinc-300">Ongoing Support</strong> — Post-launch maintenance and feature enhancements</li>
                </ol>
              </div>
            </details>
          </div>

          <div class="faq-item" data-category="process">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">How long does a typical project take?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                Project timelines vary based on complexity. A basic web application typically takes 4–8 weeks. Enterprise-level systems or ERP platforms may take 3–6 months. We provide a detailed timeline estimate during the proposal phase, and we commit to delivering on schedule.
              </div>
            </details>
          </div>

          <div class="faq-item" data-category="process">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">Will I have a point of contact throughout the project?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                Yes. Every client is assigned a dedicated project manager who is your primary contact for updates, decisions, and queries. We use clear communication channels (email, WhatsApp, or your preferred tool) and provide weekly progress reports.
              </div>
            </details>
          </div>

          <!-- Pricing -->
          <div class="faq-item" data-category="pricing">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">How is pricing determined?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                Pricing depends on the scope, complexity, and timeline of your project. We offer both fixed-price contracts (for well-defined projects) and time-and-materials pricing (for evolving requirements). We provide a transparent, itemized quote after our initial consultation so you know exactly what you're paying for.
              </div>
            </details>
          </div>

          <div class="faq-item" data-category="pricing">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">Do you offer payment plans or milestones?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                Yes. We typically structure payments into milestones tied to project deliverables — for example, 30% upfront, 40% at mid-project, and 30% upon delivery. This ensures both parties are aligned and committed at every stage.
              </div>
            </details>
          </div>

          <div class="faq-item" data-category="pricing">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">Do you offer post-launch maintenance?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                Yes. We offer monthly maintenance retainers and annual support contracts that include bug fixes, security patches, feature updates, and performance monitoring. We can also train your in-house team to manage the system independently if preferred.
              </div>
            </details>
          </div>

          <!-- Technical -->
          <div class="faq-item" data-category="technical">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">What technologies does DeoLang use?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                <p class="mb-3">Our stack is chosen based on project requirements. We're proficient in:</p>
                <div class="grid grid-cols-2 gap-3">
                  <div class="bg-zinc-900 rounded-xl p-3 border border-zinc-800">
                    <p class="text-xs font-semibold text-zinc-400 mb-1 uppercase tracking-wider">Backend</p>
                    <p class="text-zinc-300 text-sm">PHP, Laravel, Node.js, Python</p>
                  </div>
                  <div class="bg-zinc-900 rounded-xl p-3 border border-zinc-800">
                    <p class="text-xs font-semibold text-zinc-400 mb-1 uppercase tracking-wider">Frontend</p>
                    <p class="text-zinc-300 text-sm">React, Next.js, Vue, Tailwind CSS</p>
                  </div>
                  <div class="bg-zinc-900 rounded-xl p-3 border border-zinc-800">
                    <p class="text-xs font-semibold text-zinc-400 mb-1 uppercase tracking-wider">Databases</p>
                    <p class="text-zinc-300 text-sm">MySQL, PostgreSQL, SQLite, PocketBase</p>
                  </div>
                  <div class="bg-zinc-900 rounded-xl p-3 border border-zinc-800">
                    <p class="text-xs font-semibold text-zinc-400 mb-1 uppercase tracking-wider">DevOps</p>
                    <p class="text-zinc-300 text-sm">Docker, Linux VPS, Nginx, CI/CD</p>
                  </div>
                </div>
              </div>
            </details>
          </div>

          <div class="faq-item" data-category="technical">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">Will I own the source code of my project?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                Upon full payment, clients receive complete ownership of all deliverables and source code as agreed in the project contract. We also provide full documentation and code handover, so you are never locked into DeoLang as a vendor.
              </div>
            </details>
          </div>

          <div class="faq-item" data-category="technical">
            <details class="group bg-zinc-800/50 border border-zinc-800 rounded-2xl hover:border-yellow-500/30 transition-colors overflow-hidden">
              <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
                <h3 class="font-semibold text-zinc-100 pr-4">Can you integrate with our existing systems or third-party APIs?</h3>
                <i class="ph ph-plus text-yellow-400 text-xl shrink-0 group-open:hidden"></i>
                <i class="ph ph-minus text-yellow-400 text-xl shrink-0 hidden group-open:block"></i>
              </summary>
              <div class="px-6 pb-6 text-zinc-400 leading-relaxed text-sm">
                Yes. Integration is one of our core strengths. We regularly integrate with payment gateways (Razorpay, Stripe), CRMs, ERP systems, government APIs, WhatsApp Business API, Google services, and custom third-party APIs. Let us know your requirements and we'll assess feasibility.
              </div>
            </details>
          </div>

        </div>

        <!-- CTA -->
        <div class="mt-16 bg-zinc-800/50 border border-zinc-700 rounded-3xl p-10 text-center">
          <div class="w-16 h-16 bg-yellow-500/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
            <i class="ph ph-chats-circle text-yellow-400 text-3xl"></i>
          </div>
          <h2 class="text-2xl font-bold text-white mb-3">Still Have a Question?</h2>
          <p class="text-zinc-400 mb-6 max-w-md mx-auto">Our team is happy to help. Reach out and we'll respond within one business day.</p>
          <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/contact" id="faq-cta-contact" class="inline-flex items-center gap-2 rounded-full bg-yellow-500 px-8 py-3.5 text-base font-bold text-zinc-900 hover:bg-yellow-400 hover:scale-105 transition-all duration-300">
              <i class="ph ph-paper-plane-tilt"></i> Send Us a Message
            </a>
            <a href="mailto:contact@deolang.com" class="inline-flex items-center gap-2 rounded-full bg-zinc-800 border border-zinc-700 px-8 py-3.5 text-base font-semibold text-zinc-200 hover:bg-zinc-700 transition-all duration-300">
              <i class="ph ph-envelope-simple"></i> Email Directly
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  {{ use_footer }}
</div>

<style>
  summary::-webkit-details-marker { display: none; }
  details[open] summary { border-bottom: 1px solid rgba(255,255,255,0.06); margin-bottom: 0; padding-bottom: 1rem; }
  .faq-item.hidden { display: none; }
  .scrollbar-hide::-webkit-scrollbar { display: none; }
</style>

<script>
  function filterFaq(category) {
    const items = document.querySelectorAll('.faq-item');
    const buttons = document.querySelectorAll('.faq-cat-btn');

    buttons.forEach(btn => {
      btn.classList.remove('bg-yellow-500', 'text-zinc-900');
      btn.classList.add('bg-zinc-800', 'text-zinc-300');
    });

    const activeBtn = document.getElementById('btn-' + category);
    if (activeBtn) {
      activeBtn.classList.remove('bg-zinc-800', 'text-zinc-300');
      activeBtn.classList.add('bg-yellow-500', 'text-zinc-900');
    }

    items.forEach(item => {
      if (category === 'all' || item.dataset.category === category) {
        item.classList.remove('hidden');
      } else {
        item.classList.add('hidden');
      }
    });
  }
</script>
