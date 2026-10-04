<footer class="bg-zinc-950 text-zinc-300 pt-16 pb-8 border-t border-zinc-800/60 font-sans">
    <div class="max-w-7xl w-[90%] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-zinc-800/80">

            <!-- Brand Info Column -->
            <div class="lg:col-span-1 space-y-4">
                <a href="/" class="flex items-center gap-3">
                    <img src="<?= asset('images/deolang_dark.svg') ?>" alt="DeoLang Logo" class="w-9 h-9" />
                    <span class="font-extrabold text-3xl text-yellow-400 tracking-wide">DeoLang</span>
                </a>
                <p class="text-sm text-zinc-400 leading-relaxed">
                    Innovative IT solutions from Jorhat, Assam. Crafting smart, scalable web apps, desktop software, and
                    mobile apps.
                </p>
                <div class="pt-2 text-xs text-zinc-500 font-medium">
                    DeoLang is a unit of <span class="text-zinc-300">BlueTech Labs</span>.
                </div>
                <!-- Social Icons -->
                <div class="flex items-center gap-3 pt-1">
                    <a href="https://www.linkedin.com/company/deolang/" target="_blank" rel="noopener"
                        aria-label="LinkedIn"
                        class="w-10 h-10 rounded-lg bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-300 hover:text-yellow-400 hover:border-yellow-400/50 hover:bg-zinc-800 transition-all">
                        <i class="ph ph-linkedin-logo text-xl"></i>
                    </a>
                    <a href="mailto:contact@deolang.com" aria-label="Email"
                        class="w-10 h-10 rounded-lg bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-300 hover:text-yellow-400 hover:border-yellow-400/50 hover:bg-zinc-800 transition-all">
                        <i class="ph ph-envelope-simple text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="lg:col-span-1">
                <h3
                    class="font-bold text-base text-zinc-100 uppercase tracking-wider mb-4 border-l-2 border-yellow-400 pl-2.5">
                    Quick Links
                </h3>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="/#hero" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5"><i
                                class="ph ph-caret-right text-xs text-zinc-500"></i> Home</a></li>
                    <li><a href="/#about" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5"><i
                                class="ph ph-caret-right text-xs text-zinc-500"></i> About Us</a></li>
                    <li><a href="/#services"
                            class="hover:text-yellow-400 transition-colors flex items-center gap-1.5"><i
                                class="ph ph-caret-right text-xs text-zinc-500"></i> Services</a></li>
                    <li><a href="/blogs" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5"><i
                                class="ph ph-caret-right text-xs text-zinc-500"></i> Blogs</a></li>
                    <li><a href="/faq" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5"><i
                                class="ph ph-caret-right text-xs text-zinc-500"></i> FAQ</a></li>
                    <li><a href="/career" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5"><i
                                class="ph ph-caret-right text-xs text-zinc-500"></i> Career</a></li>
                    <li><a href="/contact" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5"><i
                                class="ph ph-caret-right text-xs text-zinc-500"></i> Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info Column -->
            <div class="lg:col-span-1">
                <h3
                    class="font-bold text-base text-zinc-100 uppercase tracking-wider mb-4 border-l-2 border-yellow-400 pl-2.5">
                    Contact
                </h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-3">
                        <i class="ph ph-map-pin text-lg text-yellow-400 shrink-0 mt-0.5"></i>
                        <span>Jorhat, Assam, India</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ph ph-envelope-simple text-lg text-yellow-400 shrink-0"></i>
                        <a href="mailto:contact@deolang.com" class="hover:text-yellow-400 transition-colors">
                            contact@deolang.com
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ph ph-globe text-lg text-yellow-400 shrink-0"></i>
                        <a href="https://deolang.com" class="hover:text-yellow-400 transition-colors">
                            deolang.com
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Mini Contact Form -->
            <div class="lg:col-span-2">
                <h3
                    class="font-bold text-base text-zinc-100 uppercase tracking-wider mb-4 border-l-2 border-yellow-400 pl-2.5">
                    Quick Message
                </h3>

                <div id="footer-form-success"
                    class="hidden mb-3 bg-green-500/10 border border-green-500/30 rounded-xl p-3 text-sm text-green-300 flex items-center gap-2">
                    <i class="ph-fill ph-check-circle text-green-100 text-lg shrink-0"></i>
                    <span>Message sent! We'll get back to you soon.</span>
                </div>

                <form id="footer-contact-form" class="space-y-3" novalidate>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="text" id="footer-name" name="name" placeholder="Your Name" required
                            class="w-full bg-zinc-900 border border-zinc-800 rounded-xl px-3.5 py-2.5 text-zinc-200 placeholder-zinc-600 text-sm focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500/30 transition-all">
                        <input type="email" id="footer-email" name="email" placeholder="Your Email" required
                            class="w-full bg-zinc-900 border border-zinc-800 rounded-xl px-3.5 py-2.5 text-zinc-200 placeholder-zinc-600 text-sm focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500/30 transition-all">
                    </div>
                    <textarea id="footer-message" name="message" rows="3" placeholder="Your message..." required
                        class="w-full bg-zinc-900 border border-zinc-800 rounded-xl px-3.5 py-2.5 text-zinc-200 placeholder-zinc-600 text-sm focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500/30 transition-all resize-none"></textarea>
                    <button type="submit" id="footer-submit"
                        class="w-full inline-flex items-center justify-center gap-2 rounded-xl bg-yellow-500 px-5 py-2.5 text-sm font-bold text-zinc-900 hover:bg-yellow-400 transition-all duration-300">
                        <i class="ph ph-paper-plane-tilt"></i>
                        <span id="footer-submit-label">Send Message</span>
                    </button>
                    <p class="text-xs text-zinc-600">Or use our <a href="/contact"
                            class="text-zinc-500 hover:text-yellow-400 transition-colors">full contact page</a>.</p>
                </form>
            </div>

        </div>

        <!-- Bottom Copyright & Legal Links -->
        <div class="pt-8 text-xs text-zinc-500 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p>&copy; <?= date('Y') ?> <span class="text-zinc-300 font-semibold">DeoLang</span>. All rights reserved.
            </p>
            <nav class="flex items-center gap-6">
                <a href="/privacy-policy" class="hover:text-zinc-300 transition-colors">Privacy Policy</a>
                <a href="/terms-of-service" class="hover:text-zinc-300 transition-colors">Terms of Service</a>
                <a href="/cookie-policy" class="hover:text-zinc-300 transition-colors">Cookie Policy</a>
            </nav>
        </div>
    </div>
</footer>

<script>
    (function () {
        // ==========================================
        // CONFIG — update PocketBase URL & collection
        // ==========================================
        const PB_URL = 'https://pb.deolang.com';
        const PB_COLLECTION = 'contact_messages';
        // ==========================================

        const form = document.getElementById('footer-contact-form');
        if (!form) return;

        const submitBtn = document.getElementById('footer-submit');
        const submitLabel = document.getElementById('footer-submit-label');
        const successBox = document.getElementById('footer-form-success');

        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            const name = document.getElementById('footer-name').value.trim();
            const email = document.getElementById('footer-email').value.trim();
            const message = document.getElementById('footer-message').value.trim();

            if (!name || !email || !message) return;

            submitBtn.disabled = true;
            submitLabel.textContent = 'Sending...';

            try {
                const res = await fetch(`${PB_URL}/api/collections/${PB_COLLECTION}/records`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name, email, service: 'Quick Message (Footer)', message })
                });

                if (res.ok) {
                    successBox.classList.remove('hidden');
                    form.reset();
                }
            } catch (err) {
                // Silently fail — user can use the full contact page
            } finally {
                submitBtn.disabled = false;
                submitLabel.textContent = 'Send Message';
            }
        });
    })();
</script>