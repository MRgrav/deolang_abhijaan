<footer class="bg-zinc-950 text-zinc-300 pt-16 pb-8 border-t border-zinc-800/60 font-sans">
    <div class="max-w-7xl w-[90%] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-zinc-800/80">
            
            <!-- Brand Info Column -->
            <div class="space-y-4">
                <a href="/" class="flex items-center gap-3">
                    <img src="<?= asset('images/deolang_dark.svg') ?>" alt="DeoLang Logo" class="w-9 h-9" />
                    <span class="font-extrabold text-3xl text-yellow-400 tracking-wide">DeoLang</span>
                </a>
                <p class="text-sm text-zinc-400 leading-relaxed">
                    Innovative IT solutions from Jorhat, Assam. Crafting smart, scalable web apps, desktop software, and mobile apps.
                </p>
                <div class="pt-2 text-xs text-zinc-500 font-medium">
                    DeoLang is a unit of <span class="text-zinc-300">BlueTech Labs</span>.
                </div>
            </div>

            <!-- Quick Links Column -->
            <div>
                <h3 class="font-bold text-base text-zinc-100 uppercase tracking-wider mb-4 border-l-2 border-yellow-400 pl-2.5">
                    Quick Links
                </h3>
                <ul class="space-y-2.5 text-sm">
                    <li>
                        <a href="/#hero" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5">
                            <i class="ph ph-caret-right text-xs text-zinc-500"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="/#about" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5">
                            <i class="ph ph-caret-right text-xs text-zinc-500"></i> About Us
                        </a>
                    </li>
                    <li>
                        <a href="/#services" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5">
                            <i class="ph ph-caret-right text-xs text-zinc-500"></i> Services
                        </a>
                    </li>
                    <li>
                        <a href="/blogs.asm" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5">
                            <i class="ph ph-caret-right text-xs text-zinc-500"></i> Blogs & Articles
                        </a>
                    </li>
                    <li>
                        <a href="/career" class="hover:text-yellow-400 transition-colors flex items-center gap-1.5">
                            <i class="ph ph-caret-right text-xs text-zinc-500"></i> Career
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info Column -->
            <div>
                <h3 class="font-bold text-base text-zinc-100 uppercase tracking-wider mb-4 border-l-2 border-yellow-400 pl-2.5">
                    Contact Us
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

            <!-- Social Links & Connect -->
            <div>
                <h3 class="font-bold text-base text-zinc-100 uppercase tracking-wider mb-4 border-l-2 border-yellow-400 pl-2.5">
                    Connect
                </h3>
                <p class="text-xs text-zinc-400 mb-4">Follow us on our official networks to stay updated.</p>
                <div class="flex items-center gap-3">
                    <a href="https://www.linkedin.com/company/deolang/" target="_blank" rel="noopener" aria-label="LinkedIn"
                       class="w-10 h-10 rounded-lg bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-300 hover:text-yellow-400 hover:border-yellow-400/50 hover:bg-zinc-800 transition-all">
                        <i class="ph ph-linkedin-logo text-xl"></i>
                    </a>
                    <a href="mailto:contact@deolang.com" aria-label="Email"
                       class="w-10 h-10 rounded-lg bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-300 hover:text-yellow-400 hover:border-yellow-400/50 hover:bg-zinc-800 transition-all">
                        <i class="ph ph-envelope-simple text-xl"></i>
                    </a>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright & Legal Links -->
        <div class="pt-8 text-xs text-zinc-500 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p>&copy; <?= date('Y') ?> <span class="text-zinc-300 font-semibold">DeoLang</span>. All rights reserved.</p>
            <nav class="flex items-center gap-6">
                <a href="#privacy" class="hover:text-zinc-300 transition-colors">Privacy Policy</a>
                <a href="#terms" class="hover:text-zinc-300 transition-colors">Terms of Service</a>
            </nav>
        </div>
    </div>
</footer>