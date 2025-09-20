<!-- <nav class="flex items-center justify-between py-4 px-6 w-full">
      <div class="text-2xl font-bold text-yellow-500">
        <a href="#" class="flex gap-3 items-center">
          <img src="<?= asset('deolang_dark.svg') ?>" class="w-8 h-8" />
          DeoLang
        </a>
      </div>
      <ul class="sm:flex gap-6 text-base max-w-fit max-h-16">
        <li><a href="#hero" class="hover:text-indigo-600 transition">Home</a></li>
        <li><a href="#about" class="hover:text-indigo-600 transition">About</a></li>
        <li><a href="#services" class="hover:text-indigo-600 transition">Services</a></li>
        <li><a href="#team" class="hover:text-indigo-600 transition">Team</a></li>
        <li><a href="#contact" class="hover:text-indigo-600 transition">Contact</a></li>
      </ul>
      <div>
        <i class="ph ph-equals text-3xl"></i>
      </div>
    </nav> -->

<nav class="flex items-center justify-between py-4 px-6 w-full relative bg-zinc-950/30">
  <!-- LOGO -->
  <div class="text-2xl font-bold text-yellow-500 z-20">
    <a href="#" class="flex gap-3 items-center">
      <img src="<?= asset('deolang_dark.svg') ?>" class="w-8 h-8" />
      DeoLang
    </a>
  </div>

  <!-- Hamburger (on mobile) -->
  <input type="checkbox" id="mobile-menu" class="peer hidden" />
  <label for="mobile-menu" class="ml-auto cursor-pointer block md:hidden z-20">
    <i class="ph ph-equals text-3xl text-yellow-500"></i>
  </label>

  <!-- Main Menu -->
  <ul
    class="
      flex-col items-center gap-4 absolute top-full left-0 w-full md:w-fit bg-zinc-900/95 backdrop-blur-md py-8
      peer-checked:flex
      peer-checked:opacity-100
      peer-checked:pointer-events-auto
      opacity-0 pointer-events-none
      transition-all duration-300
      md:static md:flex md:flex-row md:gap-6 md:py-0 md:opacity-100 md:pointer-events-auto md:bg-transparent"
  >
    <li><a href="#hero" class="hover:text-indigo-400 transition text-yellow-100 block px-4 py-2">Home</a></li>
    <li><a href="#about" class="hover:text-indigo-400 transition text-yellow-100 block px-4 py-2">About</a></li>
    <li><a href="#services" class="hover:text-indigo-400 transition text-yellow-100 block px-4 py-2">Services</a></li>
    <li><a href="#team" class="hover:text-indigo-400 transition text-yellow-100 block px-4 py-2">Team</a></li>
    <li><a href="#contact" class="hover:text-indigo-400 transition text-yellow-100 block px-4 py-2">Contact</a></li>
  </ul>
</nav>
