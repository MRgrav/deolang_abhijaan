<style>
  @keyframes marquee {
    0% {
      transform: translateX(0%);
    }

    100% {
      transform: translateX(-100%);
    }
  }

  @keyframes marquee2 {
    0% {
      transform: translateX(100%);
    }

    100% {
      transform: translateX(0%);
    }
  }

  @keyframes marquee3 {
    0% {
      transform: translateX(0%);
    }

    100% {
      transform: translateX(-86%);
    }
  }

  .animate-marquee {
    animation: marquee 22s linear infinite;
  }

  .animate-marquee2 {
    animation: marquee2 28s linear infinite;
  }

  .animate-marquee-top {
    animation: marquee 100s linear infinite;
  }
</style>
<div class="font-sans text-zinc-800 bg-zinc-900 overflow-x-hidden">
  <header class="bg-zinc-900/80 backdrop-blur text-zinc-200 fixed w-full top-0 z-50">
    {{ use_nav }}
  </header>

  <main>
    <?php
    // $env = parse_ini_file('.env');
    // echo $env;
    // echo getenv('APPL'); 
    ?>
    <!-- hero -->
    <!-- <section id="hero" class="flex justify-center bg-zinc-900 bg-cover bg-center top-0 bg-no-repeat mb-20 md:mb-0" >
        <div class="h-fit container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between gap-4 z-[32] p-8 pt-40">
          <div class="h-fit">
            <h2 class="font-extrabold text-[360%] text-yellow-300 tracking-wider">Your Partner in Tech Solutions</h2>
            <div class="w-[200px] bg-yellow-300 p-1 rounded mt-4 mb-8"></div>
            <p class="font-semibold text-2xl text-purple-200 mb-20">Empowering businesses with smart, scalable software.</p>
            <button class="cta">
              <span class="span">GET START</span>
              <span class="second">
                <svg
                  width="50px"
                  height="20px"
                  viewBox="0 0 66 43"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <g
                    id="arrow"
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <path
                      class="one"
                      d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                      fill="#FFFFFF"
                    ></path>
                    <path
                      class="two"
                      d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                      fill="#FFFFFF"
                    ></path>
                    <path
                      class="three"
                      d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                      fill="#FFFFFF"
                    ></path>
                  </g>
                </svg>
              </span>
            </button>
          </div>
          <div class="h-fit">
            <div class="relative h-[400px] w-[400px] scale-75 md:scale-100 group hover:scale-105">
              <img src="<?= asset('images/calling.webp') ?>" alt="calling_men" class="absolute top-0 aspect-square object-cover w-[300px] rounded-2xl mb-6 border-4 border-yellow-500 hover:scale-105 hover:rotate-[-5deg] group-hover:scale-105 group-hover:rotate-[-5deg] duration-150" />
              <img src="<?= asset('images/hiii.webp') ?>" alt="happy_girl" class="absolute top-55 left-55 aspect-square object-cover w-[140px] rounded-xl mb-6 border-4 border-purple-500 shadow hover:scale-110 group-hover:rotate-10 duration-150" />
              <div class="absolute w-6 h-6 rounded bg-yellow-500 bottom-0 left-0 group-hover:scale-125 duration-150 delay-50"></div>
              <div class="absolute w-3 h-3 rounded bg-yellow-500 bottom-0 left-10 group-hover:w-6 group-hover:scale-125 duration-100 delay-100"></div>
              <div class="absolute w-6 h-6 rounded bg-white top-0 right-0 group-hover:scale-125 duration-150 delay-50"></div>
              <div class="absolute w-3 h-3 rounded-[2px] bg-white top-10 right-10 group-hover:scale-125 duration-100 delay-100"></div>
            </div>
          </div>
        </div>
    </section> -->

    <!-- Hero Section -->
    <!-- <section id="hero" class="relative flex justify-center bg-zinc-900 bg-cover bg-center top-0 bg-no-repeat mb-20 md:mb-0 pb-44" >
      <span class="absolute p-10 rounded-full border-2 border-yellow-400/10 top-72 right-11" ></span>
      <span class="absolute p-14 rounded-full border-3 border-yellow-400/10 top-36 left-20" ></span>
      <span class="absolute p-16 rounded-full border-2 border-yellow-400/10 bottom-20 right-72" ></span>
      <span class="absolute p-18 rounded-full border-2 border-yellow-400/10 top-1/2 right-3/5" ></span>
      <span class="absolute p-14 rounded-full border-3 border-yellow-400/10 top-1/2 left-30" ></span>
      <span class="absolute p-12 rounded-full border-2 border-yellow-400/10 bottom-40 right-1/3" ></span>

        <div class="h-fit container mx-auto flex flex-col-reverse lg:flex-row items-center justify-center text-center gap-4 z-[32] p-8 pt-40">
          <div class="h-fit">
            <div class=" flex rounded-full bg-zinc-500 border border-yellow-400 text-zinc-900 font-semibold w-fit mx-auto mb-10">
              <span class="px-4 py-2">Wellcome to </span>
              <span class="text-yellow-400 bg-zinc-800 px-4 py-2 rounded-full">DeoLang</span>
            </div>
            <h2 class="font-extrabold text-lg lg:text-7xl text-zinc-100 tracking-wider uppercase my-4">Step into the digital world with Us</h2>
            <p class="font-semibold text-2xl text-purple-300 mb-20">Empowering businesses with smart, scalable software.</p>
            <button class="relative px-6 py-2 text-xl font-bold shadow-md shadow-purple-700 border bg-purple-600 text-white hover:shadow-xl hover:text-purple-300 hover:tracking-wider transition-all duration-300 delay-100">
              GET START
              <span class="absolute shadow-lg shadow-purple-600 -mt-4 right-10 bg-purple-100 rounded-full p-2"></span>
              <span class="absolute shadow-lg shadow-purple-600 -mb-4 right-30 bg-purple-100 rounded-full p-2.5"></span>
              <span class="absolute shadow-lg shadow-purple-600 -top-4 left-0 bg-purple-100 rounded-full p-1"></span>
              <span class="absolute shadow-lg shadow-purple-600 -bottom-4 right-20 bg-purple-100 rounded-full p-1"></span>
              <span class="absolute shadow-lg shadow-purple-600 bottom-4 -right-4 bg-purple-100 rounded-full p-3"></span>
              <span class="absolute shadow-lg shadow-purple-600 bottom-0 -right-7 bg-purple-100 rounded-full p-1"></span>
            </button>
            <button class="cta mx-auto hidden">
              <span class="span">GET START</span>
              <span class="second">
                <svg
                  width="50px"
                  height="20px"
                  viewBox="0 0 66 43"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <g
                    id="arrow"
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <path
                      class="one"
                      d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                      fill="#FFFFFF"
                    ></path>
                    <path
                      class="two"
                      d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                      fill="#FFFFFF"
                    ></path>
                    <path
                      class="three"
                      d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                      fill="#FFFFFF"
                    ></path>
                  </g>
                </svg>
              </span>
            </button>
          </div>
        </div>
    </section> -->

    <style>
      /* Rotating background animation - smooth linear infinite loop */
      @keyframes rotate-bg {
        0% {
          transform: rotate(0deg) scale(1.3);
        }

        100% {
          transform: rotate(360deg) scale(1.3);
        }
      }

      /* Floating circles animation */
      @keyframes float {

        0%,
        100% {
          transform: translateY(0px);
        }

        50% {
          transform: translateY(-18px);
        }
      }

      .hero-bg-container {
        position: absolute;
        inset: 0;
        overflow: hidden;
        z-index: 1;
        pointer-events: none;
      }

      .hero-bg-rotate {
        position: absolute;
        inset: -60%;
        background-color: #09090b;
        background-image: url('/public/images/max-petrunin-sm.webp');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        animation: rotate-bg 90s linear infinite;
        transition: transform 1.2s ease-out, opacity 0.5s ease;
        will-change: transform;
      }

      #hero:hover .hero-bg-rotate {
        transform: rotate(15deg) scale(1.45);
      }

      .hero-circle {
        animation: float 6s ease-in-out infinite;
      }

      .hero-circle:nth-child(2) {
        animation-delay: 1s;
      }

      .hero-circle:nth-child(3) {
        animation-delay: 2s;
      }

      .hero-circle:nth-child(4) {
        animation-delay: 1.5s;
      }

      .hero-circle:nth-child(5) {
        animation-delay: 2.5s;
      }
    </style>

    <!-- Hero Section -->
    <section id="hero"
      class="relative flex justify-center bg-zinc-950 bg-cover bg-center top-0 bg-no-repeat pb-40 lg:pb-52 overflow-hidden">

      <!-- Animated Background & Glow Gradients -->
      <div class="hero-bg-container">
        <div class="hero-bg-rotate opacity-40"></div>
      </div>

      <!-- Glowing Accent Radial Orbs -->
      <div
        class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-purple-600/20 blur-[120px] rounded-full pointer-events-none">
      </div>
      <div
        class="absolute top-1/3 right-10 w-[350px] h-[350px] bg-yellow-500/15 blur-[100px] rounded-full pointer-events-none">
      </div>

      <!-- Floating Decorative Circles -->
      <span
        class="hero-circle absolute p-10 rounded-full border border-yellow-400/20 top-72 right-11 pointer-events-none"></span>
      <span
        class="hero-circle absolute p-14 rounded-full border border-purple-400/20 top-36 left-20 pointer-events-none"></span>
      <span
        class="hero-circle absolute p-16 rounded-full border border-yellow-400/15 bottom-20 right-72 pointer-events-none"></span>
      <span
        class="hero-circle absolute p-12 rounded-full border border-purple-400/20 bottom-40 right-1/3 pointer-events-none"></span>

      <!-- Content -->
      <div
        class="h-fit container mx-auto flex flex-col items-center justify-center text-center gap-6 z-10 px-4 sm:px-6 pt-36 sm:pt-44 relative max-w-5xl">

        <!-- Badge -->
        <div
          class="inline-flex items-center gap-2 rounded-full bg-zinc-900/80 border border-yellow-500/40 px-4 py-1.5 backdrop-blur-md shadow-lg transition-transform hover:scale-105">
          <span class="flex h-2 w-2 rounded-full bg-yellow-400 animate-pulse"></span>
          <span class="text-xs sm:text-sm font-semibold text-zinc-200">Welcome to <span
              class="text-yellow-400 font-bold">DeoLang</span></span>
        </div>

        <!-- Main Headline -->
        <h1 class="font-extrabold text-3xl sm:text-5xl lg:text-7xl text-white tracking-tight leading-tight uppercase">
          Step Into The <span
            class="bg-gradient-to-r from-yellow-300 via-amber-400 to-purple-400 bg-clip-text text-transparent">Digital
            World</span> With Us
        </h1>

        <!-- Subheading -->
        <p class="font-medium text-lg sm:text-2xl text-zinc-300 max-w-3xl leading-relaxed">
          Empowering businesses with smart, scalable software, custom web applications, and mobile solutions.
        </p>

        <!-- CTA Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center gap-4 mt-6">
          <a href="#services"
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 text-base font-bold rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-lg shadow-purple-600/30 hover:shadow-purple-600/50 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200">
            <span>GET STARTED</span>
            <i class="ph ph-arrow-right text-lg"></i>
          </a>
          <a href="/blogs.asm"
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 text-base font-semibold rounded-xl bg-zinc-900/80 hover:bg-zinc-800 text-zinc-200 border border-zinc-700/80 backdrop-blur-md hover:text-white transition-all duration-200">
            <i class="ph ph-newspaper text-lg text-yellow-400"></i>
            <span>Read Articles</span>
          </a>
        </div>

      </div>
    </section>


    <section class=" bg-zinc-900 -mt-56">
      <div
        class="relative max-w-[90%] lg:max-w-[80%] mx-auto rounded z-40 shadow-xl -bottom-20 overflow-x-hidden overflow-y-hidden bg-zinc-100 border-2 border-zinc-100 p-10">
        <div class="flex gap-10 md:gap-20 animate-marquee whitespace-nowrap top-0">
          <!-- Your logos (repeat for smoothness) -->
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/laravel.png') ?>" alt="laravel" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/solid.png') ?>" alt="solidjs" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/flutter.png') ?>" alt="flutter" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/vue.png') ?>" alt="vuejs" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/ElysiaJS.svg') ?>" alt="elysiajs" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/golang.png') ?>" alt="golang" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/tauri.png') ?>" alt="tauri" />
          </div>
          <!-- Repeat same logos for seamless loop -->
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/laravel.png') ?>" alt="laravel" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/solid.png') ?>" alt="solid" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/flutter.png') ?>" alt="flutter" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/vue.png') ?>" alt="vue" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/ElysiaJS.svg') ?>" alt="elysiabun" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/golang.png') ?>" alt="go" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/tauri.png') ?>" alt="tauri2.0" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/laravel.png') ?>" alt="laravel" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/solid.png') ?>" alt="solidjs" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/flutter.png') ?>" alt="flutter" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/vue.png') ?>" alt="vue" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/ElysiaJS.svg') ?>" alt="elysia" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/golang.png') ?>" alt="golang" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/tauri.png') ?>" alt="tauri" />
          </div>
          <!-- ...repeat as needed -->
        </div>
        <div class="hidden gap-20 animate-marquee2 whitespace-nowrap absolute top-10 left-30">
          <!-- Repeat logos for seamless loop as above -->
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/laravel.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/solid.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/flutter.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/vue.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/ElysiaJS.svg') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/golang.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/tauri.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/laravel.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('images/solid.png') ?>" />
          </div>
          <!-- ...repeat as needed -->
        </div>
      </div>
    </section>


    <!-- About Section -->
    <section id="about" class="scroll-reveal px-5 py-36 bg-zinc-100">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold text-yellow-500 text-center mb-8">
          Who We Are
        </h2>
        <p class="text-lg text-zinc-600 text-center max-w-3xl mx-auto mb-16 leading-relaxed">
          DeoLang is a technology company based in Assam, India, specializing in building scalable SaaS applications.
          With expertise in full-stack development, we transform ideas into powerful digital solutions that serve
          thousands of users daily.
        </p>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
          <div class="text-center">
            <div class="text-4xl md:text-5xl font-bold text-yellow-500 mb-2">10K+</div>
            <div class="text-zinc-500">Active Users</div>
          </div>
          <div class="text-center">
            <div class="text-4xl md:text-5xl font-bold text-yellow-500 mb-2">3</div>
            <div class="text-zinc-500">Products Launched</div>
          </div>
          <div class="text-center">
            <div class="text-4xl md:text-5xl font-bold text-yellow-500 mb-2">99.9%</div>
            <div class="text-zinc-500">Uptime</div>
          </div>
          <div class="text-center">
            <div class="text-4xl md:text-5xl font-bold text-yellow-500 mb-2">24/7</div>
            <div class="text-zinc-500">Support</div>
          </div>
        </div>
      </div>
    </section>

    <!--app-->
    <section class="bg-zinc-200 p-4 text-lg pt-28">
      <div class="grid md:grid-cols-2 mx-auto container my-20">
        <div class="md:order-2 mx-auto mb-20 md:mb-0">
          <!-- From Uiverse.io by Rodrypaladin -->
          <div class="phone">
            <div class="btn1"></div>
            <div class="btn2"></div>
            <div class="btn3"></div>
            <div class="btn4"></div>
            <div class="phone-int">
              <div class="hello">Namaskar
                <span class="hidden">DeoLang</span>
              </div>
            </div>
            <div class="top">
              <div class="camera">
                <div class="int"></div>
              </div>
              <div class="speaker"></div>
            </div>
          </div>
        </div>
        <div class="flex flex-col justify-center items-center gap-4">
          <!-- From Uiverse.io by csozidev -->
          <div class="app-building mb-12">
            <div class="box box-1">
              <div class="side-left"></div>
              <div class="side-right"></div>
              <div class="side-top"></div>
            </div>
            <div class="box box-2">
              <div class="side-left"></div>
              <div class="side-right"></div>
              <div class="side-top"></div>
            </div>
            <div class="box box-3">
              <div class="side-left"></div>
              <div class="side-right"></div>
              <div class="side-top"></div>
            </div>
            <div class="box box-4">
              <div class="side-left"></div>
              <div class="side-right"></div>
              <div class="side-top"></div>
            </div>
          </div>
          <p class="text-2xl font-bold">Android/IOS Apps</p>
          <p class="max-w-[500px] text-center leading-8">Our expert in-house team uses cutting edge technologies to
            build IOS and Android Apps that are stunning, robust and scalable.</p>
          <div class="flex gap-2 text-xl">
            <i class="ph-duotone ph-app-store-logo text-purple-600"></i>
            <i class="ph-duotone ph-google-play-logo text-green-600"></i>
          </div>
        </div>
      </div>
    </section>
    <!-- web -->
    <section class="bg-zinc-200 p-4">
      <div class="grid md:grid-cols-2 mx-auto container my-20">
        <div class="order-2 flex flex-col justify-center items-center gap-4 p-4">
          <!-- From Uiverse.io by Juanes200122 -->
          <div class="container_SevMini">
            <div class="SevMini">
              <svg width="74" height="90" viewBox="0 0 74 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M40 76.5L72 57V69.8615C72 70.5673 71.628 71.2209 71.0211 71.5812L40 90V76.5Z" fill="#396CAA">
                </path>
                <path d="M34 75.7077L2 57V69.8615C2 70.5673 2.37203 71.2209 2.97892 71.5812L34 90V75.7077Z"
                  fill="#396DAC"></path>
                <path d="M34 76.5H40V90H34V76.5Z" fill="#396CAA"></path>
                <path
                  d="M3.27905 55.593L35.2806 37.5438C36.3478 36.9419 37.6522 36.9419 38.7194 37.5438L70.721 55.593C71.7294 56.1618 71.7406 57.6102 70.7411 58.1945L39.2712 76.593C37.8682 77.4133 36.1318 77.4133 34.7288 76.593L3.25887 58.1945C2.25937 57.6102 2.27061 56.1618 3.27905 55.593Z"
                  fill="#163C79" stroke="#396CAA"></path>
                <path d="M40 79L72 60V70.4001C72 71.1151 71.6183 71.7758 70.9987 72.1329L40 90V79Z" fill="#173D7A">
                </path>
                <path d="M34 79L3 61V71.5751L34 90V79Z" fill="#0665B2"></path>
                <path id="strobe_color1" d="M58 72.5L60.5 71V74L58 75.5V72.5Z" fill="#FF715E"></path>
                <path id="strobe_color2" d="M63 69.5L65.5 68V71L63 72.5V69.5Z" fill="#17e300b4"></path>
                <path d="M68 66.5L70.5 65V68L68 69.5V66.5Z" fill="#FF715E"></path>
                <path d="M40 58.5L72 39V51.8615C72 52.5673 71.628 53.2209 71.0211 53.5812L40 72V58.5Z" fill="#396CAA">
                </path>
                <path d="M34 57.7077L2 39V51.8615C2 52.5673 2.37203 53.2209 2.97892 53.5812L34 72V57.7077Z"
                  fill="#396DAC"></path>
                <path d="M34 58.5H40V72H34V58.5Z" fill="#396CAA"></path>
                <path
                  d="M3.27905 37.593L35.2806 19.5438C36.3478 18.9419 37.6522 18.9419 38.7194 19.5438L70.721 37.593C71.7294 38.1618 71.7406 39.6102 70.7411 40.1945L39.2712 58.593C37.8682 59.4133 36.1318 59.4133 34.7288 58.593L3.25887 40.1945C2.25937 39.6102 2.27061 38.1618 3.27905 37.593Z"
                  fill="#163C79" stroke="#396CAA"></path>
                <path d="M40 61L72 42V52.4001C72 53.1151 71.6183 53.7758 70.9987 54.1329L40 72V61Z" fill="#173D7A">
                </path>
                <path d="M34 61L3 43V53.5751L34 72V61Z" fill="#0665B2"></path>
                <path d="M58 54.5L60.5 53V56L58 57.5V54.5Z" fill="#FF715E"></path>
                <path d="M63 51.5L65.5 50V53L63 54.5V51.5Z" fill="black"></path>
                <path id="strobe_color1" d="M63 51.5L65.5 50V53L63 54.5V51.5Z" fill="#FF715E"></path>
                <path d="M68 48.5L70.5 47V50L68 51.5V48.5Z" fill="#FF715E"></path>
                <path d="M40 40.5L72 21V33.8615C72 34.5673 71.628 35.2209 71.0211 35.5812L40 54V40.5Z" fill="#396CAA">
                </path>
                <path d="M34 39.7077L2 21V33.8615C2 34.5673 2.37203 35.2209 2.97892 35.5812L34 54V39.7077Z"
                  fill="#396DAC"></path>
                <path d="M34 40.5H40V54H34V40.5Z" fill="#396CAA"></path>
                <path
                  d="M3.27905 19.593L35.2806 1.54381C36.3478 0.941872 37.6522 0.941872 38.7194 1.54381L70.721 19.593C71.7294 20.1618 71.7406 21.6102 70.7411 22.1945L39.2712 40.593C37.8682 41.4133 36.1318 41.4133 34.7288 40.593L3.25887 22.1945C2.25937 21.6102 2.27061 20.1618 3.27905 19.593Z"
                  fill="#124E89" stroke="#396CAA"></path>
                <path d="M40 43L72 24V34.4001C72 35.1151 71.6183 35.7758 70.9987 36.1329L40 54V43Z" fill="#173D7A">
                </path>
                <path d="M34 43L3 25V35.5751L34 54V43Z" fill="#0665B2"></path>
                <path d="M68 30.5L70.5 29V32L68 33.5V30.5Z" fill="#FF715E"></path>
                <path id="strobe_color3" d="M58 36.5L60.5 35V38L58 39.5V36.5Z" fill="#FF715E"></path>
                <path d="M63 33.5L65.5 32V35L63 36.5V33.5Z" fill="#FF715E"></path>
                <path
                  d="M20.1902 22.0719C18.8101 21.3026 18.8252 19.3119 20.2168 18.5636L36.1054 10.0189C37.2884 9.3827 38.7116 9.3827 39.8946 10.0189L55.7832 18.5636C57.1748 19.3119 57.1899 21.3026 55.8098 22.0719L40.4345 30.6429C38.9211 31.4865 37.0789 31.4865 35.5655 30.6429L20.1902 22.0719Z"
                  fill="#396CAA"></path>
                <path
                  d="M11 52.755C11 51.9801 11.8432 51.4997 12.5098 51.8947L23.5196 58.419C24.1273 58.7792 24.5 59.4332 24.5 60.1396V60.245C24.5 61.0199 23.6568 61.5003 22.9902 61.1053L11.9804 54.581C11.3727 54.2208 11 53.5668 11 52.8604V52.755Z"
                  fill="#396CAA"></path>
                <mask id="mask0_2_176" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="11" y="51" width="14"
                  height="11">
                  <path
                    d="M11 52.755C11 51.9801 11.8432 51.4997 12.5098 51.8947L23.5196 58.419C24.1273 58.7792 24.5 59.4332 24.5 60.1396V60.245C24.5 61.0199 23.6568 61.5003 22.9902 61.1053L11.9804 54.581C11.3727 54.2208 11 53.5668 11 52.8604V52.755Z"
                    fill="#396CAA"></path>
                </mask>
                <g mask="url(#mask0_2_176)">
                  <path
                    d="M11.5 52.7417C11.5 51.9803 12.3349 51.5138 12.9833 51.9128L23.5482 58.4143C24.1397 58.7783 24.5 59.4231 24.5 60.1176V61.5L12.4598 54.4195C11.8651 54.0698 11.5 53.4315 11.5 52.7417V52.7417Z"
                    fill="#163874"></path>
                </g>
                <mask id="mask1_2_176" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="19" y="9" width="38"
                  height="23">
                  <path
                    d="M20.1902 22.0719C18.8101 21.3026 18.8252 19.3119 20.2168 18.5636L36.1054 10.0189C37.2884 9.3827 38.7116 9.3827 39.8946 10.0189L55.7832 18.5636C57.1748 19.3119 57.1899 21.3026 55.8098 22.0719L40.4345 30.6429C38.9211 31.4865 37.0789 31.4865 35.5655 30.6429L20.1902 22.0719Z"
                    fill="#396CAA"></path>
                </mask>
                <g mask="url(#mask1_2_176)">
                  <path
                    d="M18 21.3115L36.167 11.9451C37.3171 11.3521 38.6829 11.3521 39.833 11.9451L58 21.3115L40.3567 30.7405C38.8841 31.5275 37.1159 31.5275 35.6433 30.7405L18 21.3115Z"
                    fill="#173D7A"></path>
                </g>
                <path d="M37.447 21.565L35 19.9799L37.6941 18.66L40.141 20.245L37.447 21.565Z" fill="#FF715E"></path>
                <path d="M48.9738 30.8646L47.0741 29.7745L49.1792 28.684L51.0789 29.7741L48.9738 30.8646Z"
                  fill="#173E7B"></path>
                <path d="M52.0661 29.0093L50.1635 27.9242L52.2657 26.8282L54.1682 27.9133L52.0661 29.0093Z"
                  fill="#173E7B"></path>
                <path id="strobe_led1"
                  d="M55.1521 27.1464L53.2538 26.054L55.3602 24.9661L57.2585 26.0586L55.1521 27.1464Z" fill="#3A6DAB">
                </path>
              </svg>
            </div>
            <div class="Ghost">
              <svg width="60" height="36" viewBox="0 0 60 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1.96545 19.4296C0.643777 18.6484 0.658726 16.7309 1.99242 15.9705L28.0186 1.12982C29.2467 0.429534 30.7533 0.429533 31.9814 1.12982L58.0076 15.9704C59.3413 16.7309 59.3562 18.6484 58.0346 19.4296L32.5442 34.4962C30.9749 35.4238 29.0251 35.4238 27.4558 34.4962L1.96545 19.4296Z"
                  fill="#3C4F6D"></path>
              </svg>
            </div>
          </div>
          <p class="text-2xl font-bold">Web-Apps/Desktop Apps</p>
          <p class="max-w-[500px] text-center leading-8">Our expert in-house team uses cutting edge technologies to
            build softwares and custom web applications that are stunning, robust and scalable.</p>
          <div class="flex gap-2 text-xl">
            <i class="ph-duotone ph-linux-logo text-black-600"></i>
            <i class="ph-duotone ph-windows-logo text-sky-600"></i>
            <i class="ph-duotone ph-google-chrome-logo text-orange-600"></i>
            <i class="ph-duotone ph-apple-logo text-violet-600"></i>
          </div>
        </div>
        <div class="flex justify-center p-4 ">
          <div class="laptop">
            <div class="screen">
              <div class="header"></div>
              <div class="text text-3xl">Namaskar DeoLang</div>
            </div>
            <div class="keyboard"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section id="clients" class="bg-zinc-200 p-10 pb-20">
            <h2 class="text-3xl font-bold text-indigo-700 text-center mb-8">Our Happy Clients</h2>
              <div class="flex flex-col md:flex-row gap-x-40 gap-y-20 justify-center items-center " id="clientsWrapper">
                  <div class="text-5xl font-bold text-orange-600 tracking-wider">
                      <img src="<?= asset('classwix.png') ?>" alt="classwix" class="w-20 h-20 rounded-md mx-auto" />
                      <h3>CLASSWiX</h3>
                  </div>
                  <div class="text-5xl font-bold text-blue-600 tracking-wider">
                  <img src="<?= asset('arps.png') ?>" alt="arps" class="w-20 h-20 rounded-md mx-auto" />
                      <h3>ARPS Jorhat</h3>
                  </div>
              </div>
          </section> -->
    {{ use_clients }}

    <!-- Services Section -->
    <section id="services" class="bg-zinc-50 pt-28 pb-10 px-6">
      <div class="container mx-auto">
        <h2 class="text-3xl text-center font-bold mb-8 text-indigo-700">Our Services</h2>
        <!-- <ul class="grid md:grid-cols-3 gap-8">
                <li class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                  <h3 class="text-xl font-semibold mb-2 text-indigo-600">Custom Software Development</h3>
                  <p>We create software tailored to your business needs.</p>
                </li>
                <li class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-lg transition">
                  <h3 class="text-xl font-semibold mb-2 text-indigo-600">Cloud Solutions</h3>
                  <p>Maximize efficiency and agility with our cloud services.</p>
                </li>
                <li class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-lg transition">
                  <h3 class="text-xl font-semibold mb-2 text-indigo-600">SEO Optimization</h3>
                  <p>Get expert guidance for your digital transformation.</p>
                </li>
              </ul> -->
        <div class="grid lg:grid-cols-3 w-fit gap-10 mx-auto">
          <card
            class="w-64 shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-9 space-y-3 relative overflow-hidden bg-gradient-to-tl from-white to-white hover:from-violet-100 hover:shadow-xl transition hover:scale-[103%]">
            <div class="w-24 h-24 bg-violet-500 rounded-full absolute -right-5 -top-7">
              <p class="absolute bottom-6 left-7 text-white text-2xl">01</p>
            </div>
            <div class="fill-violet-500 w-12">
              <img src="<?= asset('images/idea.gif') ?>" alt="app development" class="scale-125" />
            </div>
            <h3 class="font-bold text-xl">App Development</h3>
            <p class="text-sm text-zinc-500 leading-6">
              Develop stunning, modern custom apps for both android and ios.
            </p>
          </card>
          <card
            class="w-64 shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-9 space-y-3 relative overflow-hidden bg-gradient-to-tl from-white to-white hover:from-violet-100 hover:shadow-xl transition hover:scale-[103%]">
            <div class="w-24 h-24 bg-violet-500 rounded-full absolute -right-5 -top-7">
              <p class="absolute bottom-6 left-7 text-white text-2xl">02</p>
            </div>
            <div class="fill-violet-500 w-12">
              <img src="<?= asset('images/website.gif') ?>" alt="web development" class="scale-125" />
            </div>
            <h3 class="font-bold text-xl">Web Development</h3>
            <p class="text-sm text-zinc-500 leading-6">
              Have your custom sites, webapps ready to serve with responsive designs.
            </p>
          </card>
          <card
            class="w-64 shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-9 space-y-3 relative overflow-hidden bg-gradient-to-tl from-white to-white hover:from-violet-100 hover:shadow-xl transition hover:scale-[103%]">
            <div class="w-24 h-24 bg-violet-500 rounded-full absolute -right-5 -top-7">
              <p class="absolute bottom-6 left-7 text-white text-2xl">03</p>
            </div>
            <div class="fill-violet-500 w-12">
              <img src="<?= asset('images/seo.gif') ?>" alt="seo" class="scale-125" />
            </div>
            <h3 class="font-bold text-xl">SEO Optimization</h3>
            <p class="text-sm text-zinc-500 leading-6">
              Rank your brand on internet with well optimized SEO and be the next trend.
            </p>
          </card>
        </div>
      </div>
    </section>

    <!-- Products & Solutions Section -->
    <section id="products" class="py-24 px-6 bg-zinc-50 text-zinc-800 border-t border-zinc-200/80 relative">
      <div class="container mx-auto max-w-6xl">
        <div class="text-center max-w-3xl mx-auto mb-16">
          <span
            class="text-xs font-bold uppercase tracking-widest text-indigo-700 bg-indigo-100 px-3.5 py-1.5 rounded-full border border-indigo-200">
            Turnkey Enterprise Solutions
          </span>
          <h2 class="text-3xl sm:text-5xl font-extrabold text-zinc-900 mt-4 mb-4 tracking-tight">Our Products & Platforms</h2>
          <p class="text-zinc-600 text-base sm:text-lg">
            Ready-to-deploy software products tailored for educational institutions, businesses, and digital creators.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

          <!-- Product Card: Education ERP -->
          <div
            class="group bg-white hover:bg-zinc-50/80 border border-zinc-200/80 shadow-sm rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1 hover:border-purple-300 hover:shadow-md">
            <div
              class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
              <i class="ph ph-graduation-cap"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-zinc-900 group-hover:text-purple-600 transition-colors">Education ERP
            </h3>
            <p class="text-sm text-zinc-600 leading-relaxed mb-4">
              All-in-one management platform for schools and institutions covering student records, admissions, fees,
              and attendance.
            </p>
            <span class="inline-flex items-center gap-1 text-xs font-semibold text-purple-600">
              Enterprise Ready <i class="ph ph-arrow-right"></i>
            </span>
          </div>

          <!-- Product Card: Library Management System -->
          <div
            class="group bg-white hover:bg-zinc-50/80 border border-zinc-200/80 shadow-sm rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1 hover:border-amber-300 hover:shadow-md">
            <div
              class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
              <i class="ph ph-books"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-zinc-900 group-hover:text-amber-600 transition-colors">Library
              System</h3>
            <p class="text-sm text-zinc-600 leading-relaxed mb-4">
              Smart digital cataloging, member issue/return tracking, automated fine calculations, and barcode
              inventory.
            </p>
            <span class="inline-flex items-center gap-1 text-xs font-semibold text-amber-600">
              Automated Cataloging <i class="ph ph-arrow-right"></i>
            </span>
          </div>

          <!-- Product Card: Headless CMS -->
          <div
            class="group bg-white hover:bg-zinc-50/80 border border-zinc-200/80 shadow-sm rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1 hover:border-indigo-300 hover:shadow-md">
            <div
              class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
              <i class="ph ph-article"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-zinc-900 group-hover:text-indigo-600 transition-colors">Custom CMS
            </h3>
            <p class="text-sm text-zinc-600 leading-relaxed mb-4">
              High-performance content management systems with customizable media workflows and multi-channel API
              publishing.
            </p>
            <span class="inline-flex items-center gap-1 text-xs font-semibold text-indigo-600">
              API First <i class="ph ph-arrow-right"></i>
            </span>
          </div>

          <!-- Product Card: Dynamic Forms Engine -->
          <div
            class="group bg-white hover:bg-zinc-50/80 border border-zinc-200/80 shadow-sm rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1 hover:border-emerald-300 hover:shadow-md">
            <div
              class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
              <i class="ph ph-textbox"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-zinc-900 group-hover:text-emerald-600 transition-colors">Dynamic Forms
            </h3>
            <p class="text-sm text-zinc-600 leading-relaxed mb-4">
              No-code form builder supporting conditional logic, secure payment collection, and instant webhook
              integrations.
            </p>
            <span class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-600">
              No-Code Builder <i class="ph ph-arrow-right"></i>
            </span>
          </div>

          <!-- Product Card: Custom Web Portals -->
          <div
            class="group bg-white hover:bg-zinc-50/80 border border-zinc-200/80 shadow-sm rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1 hover:border-blue-300 hover:shadow-md">
            <div
              class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
              <i class="ph ph-globe-hemisphere-west"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-zinc-900 group-hover:text-blue-600 transition-colors">Business
              Portals</h3>
            <p class="text-sm text-zinc-600 leading-relaxed mb-4">
              High-converting responsive websites and client dashboards engineered for speed, accessibility, and modern
              UI.
            </p>
            <span class="inline-flex items-center gap-1 text-xs font-semibold text-blue-600">
              SEO Optimized <i class="ph ph-arrow-right"></i>
            </span>
          </div>

          <!-- Product Card: Analytics & Reporting -->
          <div
            class="group bg-white hover:bg-zinc-50/80 border border-zinc-200/80 shadow-sm rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1 hover:border-rose-300 hover:shadow-md">
            <div
              class="w-12 h-12 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition-transform">
              <i class="ph ph-chart-line-up"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-zinc-900 group-hover:text-rose-600 transition-colors">Custom
              Dashboards</h3>
            <p class="text-sm text-zinc-600 leading-relaxed mb-4">
              Real-time analytics and business intelligence suites designed to visualize metrics and monitor
              performance.
            </p>
            <span class="inline-flex items-center gap-1 text-xs font-semibold text-rose-600">
              Real-time Data <i class="ph ph-arrow-right"></i>
            </span>
          </div>

        </div>
      </div>
    </section>

    <!-- Tech Ecosystem & Infrastructure Partners Section -->
    <section id="infrastructure" class="py-20 px-6 bg-zinc-100 text-zinc-800 border-t border-zinc-200">
      <div class="container mx-auto max-w-6xl text-center">
        <span
          class="text-xs font-bold uppercase tracking-widest text-indigo-700 bg-indigo-100 px-3.5 py-1.5 rounded-full border border-indigo-200">
          Global Cloud & Infrastructure
        </span>
        <h2 class="text-2xl sm:text-4xl font-extrabold text-zinc-900 mt-4 mb-3">Powered By Industry Leaders</h2>
        <p class="text-zinc-600 text-sm sm:text-base max-w-2xl mx-auto mb-12">
          We leverage enterprise-grade cloud, security, and communications infrastructure to deliver maximum reliability
          and performance.
        </p>

        <!-- Dynamic Container Rendered from JS Array -->
        <div id="tech-partners-grid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 items-center">
          <!-- Rendered dynamically below -->
        </div>
      </div>
    </section>

    <script>
      (function () {
        // ARRAY OF TECH/INFRASTRUCTURE PARTNERS
        // You can easily add, remove, or replace logo URLs, names, and subtitles here!
        const partnerLogos = [
          {
            name: "Cloudflare",
            category: "Security & CDN",
            logoUrl: "https://upload.wikimedia.org/wikipedia/commons/4/4b/Cloudflare_Logo.svg"
          },
          {
            name: "Hostinger",
            category: "VPS & Cloud",
            logoUrl: "https://upload.wikimedia.org/wikipedia/commons/6/6d/Hostinger_logo.svg"
          },
          {
            name: "Zoho",
            category: "Workplace Mail",
            logoUrl: "https://upload.wikimedia.org/wikipedia/commons/a/af/Zoho_logo.svg"
          },
          {
            name: "Google Cloud",
            category: "Cloud Infra",
            logoUrl: "https://upload.wikimedia.org/wikipedia/commons/5/51/Google_Cloud_logo.svg"
          },
          {
            name: "Meta",
            category: "Developer API",
            logoUrl: "https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg"
          }
        ];

        const grid = document.getElementById('tech-partners-grid');
        if (!grid) return;

        grid.innerHTML = partnerLogos.map(partner => `
        <div class="p-6 rounded-2xl bg-white border border-zinc-200/80 shadow-sm flex flex-col items-center justify-center gap-3 hover:shadow-md hover:border-indigo-300 transition-all hover:-translate-y-1 group min-h-[130px]">
          <img 
            src="${partner.logoUrl}" 
            alt="${partner.name} logo" 
            class="h-8 sm:h-9 w-auto max-w-[130px] object-contain group-hover:scale-105 transition-transform"
            style="object-fit: contain;"
            loading="lazy"
            onerror="this.onerror=null; this.parentElement.querySelector('.fallback-name').classList.remove('hidden'); this.style.display='none';"
          />
          <span class="fallback-name hidden font-bold text-sm text-zinc-800">${partner.name}</span>
          <span class="text-[11px] font-semibold text-zinc-500 uppercase tracking-wider">${partner.category}</span>
        </div>
      `).join('');
      })();
    </script>

    <!-- About Section -->
    <section id="about" class="pt-28 px-6 bg-gradient-to-b from-zinc-50 to-red-100">
      <div class="container mx-auto flex flex-col justify-center items-center">
        <h2 class="text-3xl font-bold mb-4 text-indigo-700">About Us</h2>
        <p class="text-center mb-6 leading-8 md:max-w-[86%]">DeoLang is a forward-thinking IT company committed to
          delivering high-quality software solutions. Our team of experienced developers, designers, and IT
          professionals work collaboratively to ensure that we meet and exceed our clients' expectations.</p>
      </div>
    </section>


    <!-- Team Section -->
    <section id="team" class="px-4 bg-red-100">
      <!-- From Uiverse.io by Smit-Prajapati -->
      <div class=" py-28">
        <h2 class="text-indigo-700 text-center mb-10 font-bold text-3xl">Meet The Team</h2>
        <div class="flex lg:flex-row flex-col gap-5 lg:gap-8 xl:gap-16 justify-around w-fit mx-auto">
          <div class="card">
            <button class="mail">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
              </svg>
            </button>
            <div class="profile-pic">
              <img src="<?= asset('images/team/smt.jpeg') ?>" alt="sumeet bharali" />
            </div>
            <div class="bottom">
              <div class="content">
                <span class="name">CEO</span>
                <span class="about-me">Sumeet Bharali</span>
              </div>
              <div class="bottom-bottom">
                <div class="social-links-container">
                  <a href="mailto:ceo@deolang.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z">
                      </path>
                    </svg>
                  </a>
                  <a href="https://www.linkedin.com/in/sumeetbharali/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z">
                      </path>
                    </svg>
                  </a>
                  <a href="https://github.com/Sumeetbharali" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C2.00098 16.425 4.86348 20.1625 8.83848 21.4875C9.33848 21.575 9.52598 21.275 9.52598 21.0125C9.52598 20.775 9.51348 19.9875 9.51348 19.15C7.00098 19.6125 6.35098 18.5375 6.15098 17.975C6.03848 17.6875 5.55098 16.8 5.12598 16.5625C4.77598 16.375 4.27598 15.9125 5.11348 15.9C5.90098 15.8875 6.46348 16.625 6.65098 16.925C7.55098 18.4375 8.98848 18.0125 9.56348 17.75C9.65098 17.1 9.91348 16.6625 10.201 16.4125C7.97598 16.1625 5.65098 15.3 5.65098 11.475C5.65098 10.3875 6.03848 9.4875 6.67598 8.7875C6.57598 8.5375 6.22598 7.5125 6.77598 6.1375C6.77598 6.1375 7.61348 5.875 9.52598 7.1625C10.326 6.9375 11.176 6.825 12.026 6.825C12.876 6.825 13.726 6.9375 14.526 7.1625C16.4385 5.8625 17.276 6.1375 17.276 6.1375C17.826 7.5125 17.476 8.5375 17.376 8.7875C18.0135 9.4875 18.401 10.375 18.401 11.475C18.401 15.3125 16.0635 16.1625 13.8385 16.4125C14.201 16.725 14.5135 17.325 14.5135 18.2625C14.5135 19.6 14.501 20.675 14.501 21.0125C14.501 21.275 14.6885 21.5875 15.1885 21.4875C19.259 20.1133 21.9999 16.2963 22.001 12C22.001 6.475 17.526 2 12.001 2Z">
                      </path>
                    </svg>
                  </a>
                </div>
                <button class="button">Contact Me</button>
              </div>
            </div>
          </div>

          <div class="card">
            <button class="mail">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
              </svg>
            </button>
            <div class="profile-pic">

              <img src="<?= asset('images/team/ank.jpg') ?>" alt="ankit gupta" />
            </div>
            <div class="bottom">
              <div class="content">
                <span class="name">COO</span>
                <span class="about-me">Ankit Gupta</span>
              </div>
              <div class="bottom-bottom">
                <div class="social-links-container">
                  <a href="mailto:info@deolang.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z">
                      </path>
                    </svg>
                  </a>
                  <a href="https://www.linkedin.com/in/ankit-gupta-858464249/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z">
                      </path>
                    </svg>
                  </a>
                  <a href="" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C2.00098 16.425 4.86348 20.1625 8.83848 21.4875C9.33848 21.575 9.52598 21.275 9.52598 21.0125C9.52598 20.775 9.51348 19.9875 9.51348 19.15C7.00098 19.6125 6.35098 18.5375 6.15098 17.975C6.03848 17.6875 5.55098 16.8 5.12598 16.5625C4.77598 16.375 4.27598 15.9125 5.11348 15.9C5.90098 15.8875 6.46348 16.625 6.65098 16.925C7.55098 18.4375 8.98848 18.0125 9.56348 17.75C9.65098 17.1 9.91348 16.6625 10.201 16.4125C7.97598 16.1625 5.65098 15.3 5.65098 11.475C5.65098 10.3875 6.03848 9.4875 6.67598 8.7875C6.57598 8.5375 6.22598 7.5125 6.77598 6.1375C6.77598 6.1375 7.61348 5.875 9.52598 7.1625C10.326 6.9375 11.176 6.825 12.026 6.825C12.876 6.825 13.726 6.9375 14.526 7.1625C16.4385 5.8625 17.276 6.1375 17.276 6.1375C17.826 7.5125 17.476 8.5375 17.376 8.7875C18.0135 9.4875 18.401 10.375 18.401 11.475C18.401 15.3125 16.0635 16.1625 13.8385 16.4125C14.201 16.725 14.5135 17.325 14.5135 18.2625C14.5135 19.6 14.501 20.675 14.501 21.0125C14.501 21.275 14.6885 21.5875 15.1885 21.4875C19.259 20.1133 21.9999 16.2963 22.001 12C22.001 6.475 17.526 2 12.001 2Z">
                      </path>
                    </svg>
                  </a>
                </div>
                <button class="button">Contact Me</button>
              </div>
            </div>
          </div>

          <div class="card">
            <button class="mail">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-mail">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
              </svg>
            </button>
            <div class="profile-pic">

              <img src="<?= asset('images/team/cgg.jpg') ?>" alt="gaurab gogoi"
                class="bg-gradient-to-br from-yellow-600 to-purple-500" />
            </div>
            <div class="bottom">
              <div class="content">
                <span class="name">CTO</span>
                <span class="about-me">Gaurab Gogoi</span>
              </div>
              <div class="bottom-bottom">
                <div class="social-links-container">
                  <a href="mailto:gaurabgogoi@zohomail.in" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z">
                      </path>
                    </svg>
                  </a>
                  <a href="https://www.linkedin.com/in/gaurab-gogoi-3a6746246/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z">
                      </path>
                    </svg>
                  </a>
                  <a href="https://www.github.com/MRgrav/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C2.00098 16.425 4.86348 20.1625 8.83848 21.4875C9.33848 21.575 9.52598 21.275 9.52598 21.0125C9.52598 20.775 9.51348 19.9875 9.51348 19.15C7.00098 19.6125 6.35098 18.5375 6.15098 17.975C6.03848 17.6875 5.55098 16.8 5.12598 16.5625C4.77598 16.375 4.27598 15.9125 5.11348 15.9C5.90098 15.8875 6.46348 16.625 6.65098 16.925C7.55098 18.4375 8.98848 18.0125 9.56348 17.75C9.65098 17.1 9.91348 16.6625 10.201 16.4125C7.97598 16.1625 5.65098 15.3 5.65098 11.475C5.65098 10.3875 6.03848 9.4875 6.67598 8.7875C6.57598 8.5375 6.22598 7.5125 6.77598 6.1375C6.77598 6.1375 7.61348 5.875 9.52598 7.1625C10.326 6.9375 11.176 6.825 12.026 6.825C12.876 6.825 13.726 6.9375 14.526 7.1625C16.4385 5.8625 17.276 6.1375 17.276 6.1375C17.826 7.5125 17.476 8.5375 17.376 8.7875C18.0135 9.4875 18.401 10.375 18.401 11.475C18.401 15.3125 16.0635 16.1625 13.8385 16.4125C14.201 16.725 14.5135 17.325 14.5135 18.2625C14.5135 19.6 14.501 20.675 14.501 21.0125C14.501 21.275 14.6885 21.5875 15.1885 21.4875C19.259 20.1133 21.9999 16.2963 22.001 12C22.001 6.475 17.526 2 12.001 2Z">
                      </path>
                    </svg>
                  </a>
                </div>
                <button class="button">Contact Me</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="relative bg-red-900">
      <top
        class="w-fit flex flex-row flex-nowrap animate-marquee-top justify-around gap-6 md:gap-20 overflow-x-hidden text-sm tracking-wide px-3 py-1 font-semibold text-red-100">
        <p class="whitespace-nowrap">নমস্কাৰ</p>
        <p class="whitespace-nowrap">नमस्ते</p>
        <p class="whitespace-nowrap">नमस्कार</p>
        <p class="whitespace-nowrap">নমস্কার</p>
        <p class="whitespace-nowrap">Kem Chho</p>
        <p class="whitespace-nowrap">Tashi Delek</p>
        <p class="whitespace-nowrap">Chonglai</p>
        <p class="whitespace-nowrap">Chibai</p>
        <p class="whitespace-nowrap">Khurumjari</p>
        <p class="whitespace-nowrap ahom">Màu sung khāa</p>
        <p class="whitespace-nowrap">Khulumkha</p>
        <p class="whitespace-nowrap">Hola</p>
        <p class="whitespace-nowrap">নমস্কাৰ</p>
        <p class="whitespace-nowrap">नमस्ते</p>
        <p class="whitespace-nowrap">नमस्कार</p>
        <p class="whitespace-nowrap">Tashi Delek</p>
        <p class="whitespace-nowrap">Chonglai</p>
        <p class="whitespace-nowrap">Chibai</p>
        <p class="whitespace-nowrap ahom">Màu sung khāa</p>
        <p class="whitespace-nowrap">Khulumkha</p>
      </top>
    </section>
    <!-- Testimonials Section -->
    <!-- <section id="testimonials" class="hidden bg-gradient-to-r from-indigo-500 to-pink-500 text-white py-16 px-6">
            <div class="container mx-auto">
              <h2 class="text-3xl font-bold mb-8">What Clients Say</h2>
              <blockquote class="max-w-xl mx-auto italic text-lg">
                "Professional, reliable, and incredibly creative!"<br>
                <span class="block mt-4 font-semibold not-italic">- Client Name</span>
              </blockquote>
            </div>
          </section> -->

    <!-- Contact Section -->

    <!-- <section id="contact" class="container mx-auto py-16 px-6 text-center">
            <h2 class="text-3xl font-bold mb-4 text-yellow-600">Contact Us</h2>
            <address class="not-italic text-zinc-600 tracking-wider">
              Email: <a href="mailto:info@deolang.com" class="text-indigo-600 hover:underline">info@deolang.com</a><br>
              LinkedIn: <a href="https://www.linkedin.com/company/deolang" target="_blank" class="text-blue-500">DeoLang</a>
            </address>
          </section> -->
  </main>

  <?php include ROOT . '/views/components/footer.php' ?>

  <!-- <footer class="bg-zinc-700 text-zinc-50 py-6 mt-8">
          <div class="container mx-auto text-sm flex flex-col md:flex-row justify-between items-center px-6">
            <p class="text-zinc-400">&copy; 2025 DeoLang. All rights reserved.</p>
            <nav class="mt-2 md:mt-0">
              <a href="#privacy" class="hover:text-indigo-500 hover:underline mx-2">Privacy Policy</a>
              <a href="#terms" class="hover:text-indigo-500 hover:underline mx-2">Terms of Service</a>
            </nav>
          </div>
        </footer> -->
  <div>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/loaders/GLTFLoader.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scene setup
    const scene = new THREE.Scene();
    const canvas = document.getElementById('3dModelCanvas');
    const renderer = new THREE.WebGLRenderer({ 
        canvas: canvas, 
        alpha: true,  // Allow transparent background
        antialias: true 
    });
    
    // Set canvas size
    renderer.setSize(300, 300);
    
    // Camera
    const camera = new THREE.PerspectiveCamera(45, 1, 0.1, 1000);
    camera.position.set(0, 2, 5);
    
    // Lighting
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.7);
    scene.add(ambientLight);
    
    const directionalLight = new THREE.DirectionalLight(0xffffff, 0.5);
    directionalLight.position.set(0, 1, 0);
    scene.add(directionalLight);

    // GLTF Loader
    const loader = new THREE.GLTFLoader();
    
    loader.load(
        // Path to your 3D model (replace with your actual model path)
        '<?= asset('your-3d-model.glb') ?>',
        function(gltf) {
            const model = gltf.scene;
            
            // Scale and position the model
            model.scale.set(1, 1, 1);  // Adjust scale as needed
            model.position.set(0, 0, 0);
            
            scene.add(model);
            
            // Optional: Rotate the model
            function animate() {
                requestAnimationFrame(animate);
                model.rotation.y += 0.01;
                renderer.render(scene, camera);
            }
            animate();
        },
        function(xhr) {
            // Loading progress
            console.log((xhr.loaded / xhr.total * 100) + '% loaded');
        },
        function(error) {
            console.error('An error occurred loading the model:', error);
        }
    );
});


</script> -->