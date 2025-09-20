<style>
@keyframes marquee {
  0% { transform: translateX(0%); }
  100% { transform: translateX(-100%); }
}
@keyframes marquee2 {
  0% { transform: translateX(100%); }
  100% { transform: translateX(0%); }
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
<div class="font-sans text-gray-800 bg-zinc-900 ">
  <section class="relative bg-red-900">
  <top class="w-fit flex flex-row flex-nowrap animate-marquee-top justify-around gap-6 md:gap-20 overflow-hidden text-sm px-3 py-1 font-semibold text-red-100">
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
  <header class="bg-zinc-900/80 backdrop-blur text-zinc-200 sticky top-0 z-50">
    <!-- <x_use_nav /> -->
    <?php include ROOT.'/views/components/nav.php' ?>
  </header>
  
  <main>
    <!-- hero -->
    <section id="hero" class="lg:min-h-[500px] min-h-screen flex justify-center bg-zinc-900 top-0 bg-cover bg-center bg-no-repeat mb-20 md:mb-0" >
        <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between gap-4 absolute z-[32] p-20">
          <div>
            <h1 class="font-extrabold text-[360%] text-yellow-300 tracking-wider">Your Partner in Tech Solutions</h1>
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
          <div class="">
            <div class="relative h-[400px] w-[400px] scale-75 md:scale-100 group hover:scale-105">
              <img src="<?= asset('calling.jpg') ?>" class="absolute top-0 aspect-square object-cover w-[300px] rounded-2xl mb-6 border-4 border-yellow-500 hover:scale-105 hover:rotate-[-5deg] group-hover:scale-105 group-hover:rotate-[-5deg] duration-150" />
              <img src="<?= asset('hiii.jpg') ?>" class="absolute top-55 left-55 aspect-square object-cover w-[140px] rounded-xl mb-6 border-4 border-purple-500 shadow hover:scale-110 group-hover:rotate-10 duration-150" />
              <div class="absolute w-6 h-6 rounded bg-yellow-500 bottom-0 left-0 group-hover:scale-125 duration-150 delay-50"></div>
              <div class="absolute w-3 h-3 rounded bg-yellow-500 bottom-0 left-10 group-hover:w-6 group-hover:scale-125 duration-100 delay-100"></div>
              <div class="absolute w-6 h-6 rounded bg-white top-0 right-0 group-hover:scale-125 duration-150 delay-50"></div>
              <div class="absolute w-3 h-3 rounded-[2px] bg-white top-10 right-10 group-hover:scale-125 duration-100 delay-100"></div>
            </div>
          </div>
        </div>
    </section>
    <!-- <section>
        <div class="flex gap-20 justify-center items-center bg-zinc-950 p-10 overflow-auto">
            <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
                <img src="<?= asset('laravel.png') ?>" />
            </div>
            <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
                <img src="<?= asset('solid.png') ?>" />
            </div>
            <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
                <img src="<?= asset('flutter.png') ?>" />
            </div>
            <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
                <img src="<?= asset('vue.png') ?>" />
            </div>
            <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
                <img src="<?= asset('ElysiaJS.svg') ?>" />
            </div>
            <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
                <img src="<?= asset('golang.png') ?>" />
            </div>
            <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
                <img src="<?= asset('tauri.png') ?>" />
            </div>
        </div>
    </section> -->
    <section class="bg-zinc-50 bg-zinc-900">
      <div class="relative max-w-[90%] lg:max-w-[80%] mx-auto rounded z-40 shadow-xl -bottom-20 overflow-x-hidden overflow-y-hidden bg-zinc-100 border-2 border-zinc-100 p-10">
        <div class="flex gap-10 md:gap-20 animate-marquee whitespace-nowrap top-0">
          <!-- Your logos (repeat for smoothness) -->
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('laravel.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('solid.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('flutter.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('vue.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('ElysiaJS.svg') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('golang.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('tauri.png') ?>" />
          </div>
          <!-- Repeat same logos for seamless loop -->
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('laravel.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('solid.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('flutter.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('vue.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('ElysiaJS.svg') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('golang.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('tauri.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('laravel.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('solid.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('flutter.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('vue.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('ElysiaJS.svg') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('golang.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('tauri.png') ?>" />
          </div>
          <!-- ...repeat as needed -->
        </div>
        <div class="hidden gap-20 animate-marquee2 whitespace-nowrap absolute top-10 left-30">
          <!-- Repeat logos for seamless loop as above -->
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('laravel.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('solid.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('flutter.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('vue.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('ElysiaJS.svg') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('golang.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('tauri.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('laravel.png') ?>" />
          </div>
          <div class="bg-zinc-500/20 rounded-xl shadow min-w-20 md:min-w-32 p-4">
            <img src="<?= asset('solid.png') ?>" />
          </div>
          <!-- ...repeat as needed -->
        </div>
      </div>
    </section>
    <!--app-->
    <section class="bg-zinc-200 p-4 text-lg pt-20">
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
                <p class="max-w-[500px] text-center leading-8">Our expert in-house team uses cutting edge technologies to build IOS and Android Apps that are stunning, robust and scalable.</p>
                <div class="flex gap-2 text-xl">
                  <i class="ph-duotone ph-app-store-logo text-purple-600"></i>
                  <i class="ph-duotone ph-google-play-logo text-green-600"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- web -->
    <section class="bg-zinc-200 p-4">
        <div class="grid md:grid-cols-2 flex-col justify-between gap-8 mx-auto container my-20">
            <div class="order-2 flex flex-col justify-center items-center gap-4 p-4">
                <!-- From Uiverse.io by Juanes200122 --> 
                <div class="container_SevMini">
                    <div class="SevMini">
                        <svg
                        width="74"
                        height="90"
                        viewBox="0 0 74 90"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M40 76.5L72 57V69.8615C72 70.5673 71.628 71.2209 71.0211 71.5812L40 90V76.5Z"
                            fill="#396CAA"
                        ></path>
                        <path
                            d="M34 75.7077L2 57V69.8615C2 70.5673 2.37203 71.2209 2.97892 71.5812L34 90V75.7077Z"
                            fill="#396DAC"
                        ></path>
                        <path d="M34 76.5H40V90H34V76.5Z" fill="#396CAA"></path>
                        <path
                            d="M3.27905 55.593L35.2806 37.5438C36.3478 36.9419 37.6522 36.9419 38.7194 37.5438L70.721 55.593C71.7294 56.1618 71.7406 57.6102 70.7411 58.1945L39.2712 76.593C37.8682 77.4133 36.1318 77.4133 34.7288 76.593L3.25887 58.1945C2.25937 57.6102 2.27061 56.1618 3.27905 55.593Z"
                            fill="#163C79"
                            stroke="#396CAA"
                        ></path>
                        <path
                            d="M40 79L72 60V70.4001C72 71.1151 71.6183 71.7758 70.9987 72.1329L40 90V79Z"
                            fill="#173D7A"
                        ></path>
                        <path d="M34 79L3 61V71.5751L34 90V79Z" fill="#0665B2"></path>
                        <path
                            id="strobe_color1"
                            d="M58 72.5L60.5 71V74L58 75.5V72.5Z"
                            fill="#FF715E"
                        ></path>
                        <path
                            id="strobe_color2"
                            d="M63 69.5L65.5 68V71L63 72.5V69.5Z"
                            fill="#17e300b4"
                        ></path>
                        <path d="M68 66.5L70.5 65V68L68 69.5V66.5Z" fill="#FF715E"></path>
                        <path
                            d="M40 58.5L72 39V51.8615C72 52.5673 71.628 53.2209 71.0211 53.5812L40 72V58.5Z"
                            fill="#396CAA"
                        ></path>
                        <path
                            d="M34 57.7077L2 39V51.8615C2 52.5673 2.37203 53.2209 2.97892 53.5812L34 72V57.7077Z"
                            fill="#396DAC"
                        ></path>
                        <path d="M34 58.5H40V72H34V58.5Z" fill="#396CAA"></path>
                        <path
                            d="M3.27905 37.593L35.2806 19.5438C36.3478 18.9419 37.6522 18.9419 38.7194 19.5438L70.721 37.593C71.7294 38.1618 71.7406 39.6102 70.7411 40.1945L39.2712 58.593C37.8682 59.4133 36.1318 59.4133 34.7288 58.593L3.25887 40.1945C2.25937 39.6102 2.27061 38.1618 3.27905 37.593Z"
                            fill="#163C79"
                            stroke="#396CAA"
                        ></path>
                        <path
                            d="M40 61L72 42V52.4001C72 53.1151 71.6183 53.7758 70.9987 54.1329L40 72V61Z"
                            fill="#173D7A"
                        ></path>
                        <path d="M34 61L3 43V53.5751L34 72V61Z" fill="#0665B2"></path>
                        <path d="M58 54.5L60.5 53V56L58 57.5V54.5Z" fill="#FF715E"></path>
                        <path d="M63 51.5L65.5 50V53L63 54.5V51.5Z" fill="black"></path>
                        <path
                            id="strobe_color1"
                            d="M63 51.5L65.5 50V53L63 54.5V51.5Z"
                            fill="#FF715E"
                        ></path>
                        <path d="M68 48.5L70.5 47V50L68 51.5V48.5Z" fill="#FF715E"></path>
                        <path
                            d="M40 40.5L72 21V33.8615C72 34.5673 71.628 35.2209 71.0211 35.5812L40 54V40.5Z"
                            fill="#396CAA"
                        ></path>
                        <path
                            d="M34 39.7077L2 21V33.8615C2 34.5673 2.37203 35.2209 2.97892 35.5812L34 54V39.7077Z"
                            fill="#396DAC"
                        ></path>
                        <path d="M34 40.5H40V54H34V40.5Z" fill="#396CAA"></path>
                        <path
                            d="M3.27905 19.593L35.2806 1.54381C36.3478 0.941872 37.6522 0.941872 38.7194 1.54381L70.721 19.593C71.7294 20.1618 71.7406 21.6102 70.7411 22.1945L39.2712 40.593C37.8682 41.4133 36.1318 41.4133 34.7288 40.593L3.25887 22.1945C2.25937 21.6102 2.27061 20.1618 3.27905 19.593Z"
                            fill="#124E89"
                            stroke="#396CAA"
                        ></path>
                        <path
                            d="M40 43L72 24V34.4001C72 35.1151 71.6183 35.7758 70.9987 36.1329L40 54V43Z"
                            fill="#173D7A"
                        ></path>
                        <path d="M34 43L3 25V35.5751L34 54V43Z" fill="#0665B2"></path>
                        <path d="M68 30.5L70.5 29V32L68 33.5V30.5Z" fill="#FF715E"></path>
                        <path
                            id="strobe_color3"
                            d="M58 36.5L60.5 35V38L58 39.5V36.5Z"
                            fill="#FF715E"
                        ></path>
                        <path d="M63 33.5L65.5 32V35L63 36.5V33.5Z" fill="#FF715E"></path>
                        <path
                            d="M20.1902 22.0719C18.8101 21.3026 18.8252 19.3119 20.2168 18.5636L36.1054 10.0189C37.2884 9.3827 38.7116 9.3827 39.8946 10.0189L55.7832 18.5636C57.1748 19.3119 57.1899 21.3026 55.8098 22.0719L40.4345 30.6429C38.9211 31.4865 37.0789 31.4865 35.5655 30.6429L20.1902 22.0719Z"
                            fill="#396CAA"
                        ></path>
                        <path
                            d="M11 52.755C11 51.9801 11.8432 51.4997 12.5098 51.8947L23.5196 58.419C24.1273 58.7792 24.5 59.4332 24.5 60.1396V60.245C24.5 61.0199 23.6568 61.5003 22.9902 61.1053L11.9804 54.581C11.3727 54.2208 11 53.5668 11 52.8604V52.755Z"
                            fill="#396CAA"
                        ></path>
                        <mask
                            id="mask0_2_176"
                            style="mask-type:alpha"
                            maskUnits="userSpaceOnUse"
                            x="11"
                            y="51"
                            width="14"
                            height="11"
                        >
                            <path
                            d="M11 52.755C11 51.9801 11.8432 51.4997 12.5098 51.8947L23.5196 58.419C24.1273 58.7792 24.5 59.4332 24.5 60.1396V60.245C24.5 61.0199 23.6568 61.5003 22.9902 61.1053L11.9804 54.581C11.3727 54.2208 11 53.5668 11 52.8604V52.755Z"
                            fill="#396CAA"
                            ></path>
                        </mask>
                        <g mask="url(#mask0_2_176)">
                            <path
                            d="M11.5 52.7417C11.5 51.9803 12.3349 51.5138 12.9833 51.9128L23.5482 58.4143C24.1397 58.7783 24.5 59.4231 24.5 60.1176V61.5L12.4598 54.4195C11.8651 54.0698 11.5 53.4315 11.5 52.7417V52.7417Z"
                            fill="#163874"
                            ></path>
                        </g>
                        <mask
                            id="mask1_2_176"
                            style="mask-type:alpha"
                            maskUnits="userSpaceOnUse"
                            x="19"
                            y="9"
                            width="38"
                            height="23"
                        >
                            <path
                            d="M20.1902 22.0719C18.8101 21.3026 18.8252 19.3119 20.2168 18.5636L36.1054 10.0189C37.2884 9.3827 38.7116 9.3827 39.8946 10.0189L55.7832 18.5636C57.1748 19.3119 57.1899 21.3026 55.8098 22.0719L40.4345 30.6429C38.9211 31.4865 37.0789 31.4865 35.5655 30.6429L20.1902 22.0719Z"
                            fill="#396CAA"
                            ></path>
                        </mask>
                        <g mask="url(#mask1_2_176)">
                            <path
                            d="M18 21.3115L36.167 11.9451C37.3171 11.3521 38.6829 11.3521 39.833 11.9451L58 21.3115L40.3567 30.7405C38.8841 31.5275 37.1159 31.5275 35.6433 30.7405L18 21.3115Z"
                            fill="#173D7A"
                            ></path>
                        </g>
                        <path
                            d="M37.447 21.565L35 19.9799L37.6941 18.66L40.141 20.245L37.447 21.565Z"
                            fill="#FF715E"
                        ></path>
                        <path
                            d="M48.9738 30.8646L47.0741 29.7745L49.1792 28.684L51.0789 29.7741L48.9738 30.8646Z"
                            fill="#173E7B"
                        ></path>
                        <path
                            d="M52.0661 29.0093L50.1635 27.9242L52.2657 26.8282L54.1682 27.9133L52.0661 29.0093Z"
                            fill="#173E7B"
                        ></path>
                        <path
                            id="strobe_led1"
                            d="M55.1521 27.1464L53.2538 26.054L55.3602 24.9661L57.2585 26.0586L55.1521 27.1464Z"
                            fill="#3A6DAB"
                        ></path>
                        </svg>
                    </div>
                    <div class="Ghost">
                        <svg
                        width="60"
                        height="36"
                        viewBox="0 0 60 36"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M1.96545 19.4296C0.643777 18.6484 0.658726 16.7309 1.99242 15.9705L28.0186 1.12982C29.2467 0.429534 30.7533 0.429533 31.9814 1.12982L58.0076 15.9704C59.3413 16.7309 59.3562 18.6484 58.0346 19.4296L32.5442 34.4962C30.9749 35.4238 29.0251 35.4238 27.4558 34.4962L1.96545 19.4296Z"
                            fill="#3C4F6D"
                        ></path>
                        </svg>
                    </div>
                </div>
                <p class="text-2xl font-bold">Web-Apps/Desktop Apps</p>
                <p class="max-w-[500px] text-center leading-8">Our expert in-house team uses cutting edge technologies to build softwares and custom web applications that are stunning, robust and scalable.</p>
                <div class="flex gap-2 text-xl">
                  <i class="ph-duotone ph-linux-logo text-black-600"></i>
                  <i class="ph-duotone ph-windows-logo text-sky-600"></i>
                  <i class="ph-duotone ph-google-chrome-logo text-orange-600"></i>
                  <i class="ph-duotone ph-apple-logo text-violet-600"></i>
                </div>
            </div>
            <div class="flex justify-center p-4">
                <div class="laptop ">
                    <div class="screen">
                        <div class="header"></div>
                        <div class="text text-5xl">Namaskar DeoLang</div>
                    </div>
                    <div class="keyboard"></div>
                </div>
            </div>
        </div>
    </section>
   
    <section id="clients" class="bg-zinc-200 p-10 pb-20">
      <h2 class="text-3xl font-bold text-indigo-700 text-center mb-8">Our Happy Clients</h2>
        <div class="flex flex-col md:flex-row gap-x-40 gap-y-20 justify-center items-center ">
            <div class="text-5xl font-bold text-orange-600 tracking-wider">
                <img src="<?= asset('classwix.png') ?>" class="w-20 h-20 rounded-md mx-auto" />
                <h3>CLASSWiX</h3>
            </div>
            <div class="text-5xl font-bold text-blue-600 tracking-wider">
            <img src="<?= asset('arps.png') ?>" class="w-20 h-20 rounded-md mx-auto" />
                <h3>ARPS Jorhat</h3>
            </div>
        </div>
    </section>
        
    <!-- Services Section -->
    <section id="services" class="bg-zinc-50 py-16 px-6">
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
            class="w-64 shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-9 space-y-3 relative overflow-hidden bg-gradient-to-tl from-white to-white hover:from-violet-100 hover:shadow-xl transition hover:scale-[103%]"
          >
            <div class="w-24 h-24 bg-violet-500 rounded-full absolute -right-5 -top-7">
              <p class="absolute bottom-6 left-7 text-white text-2xl">01</p>
            </div>
            <div class="fill-violet-500 w-12">
              <img src="<?= asset('idea.gif') ?>" class="scale-125" />
            </div>
            <h1 class="font-bold text-xl">App Development</h1>
            <p class="text-sm text-zinc-500 leading-6">
              Develop stunning, modern custom apps for both android and ios.
            </p>
          </card>
          <card
            class="w-64 shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-9 space-y-3 relative overflow-hidden bg-gradient-to-tl from-white to-white hover:from-violet-100 hover:shadow-xl transition hover:scale-[103%]"
          >
            <div class="w-24 h-24 bg-violet-500 rounded-full absolute -right-5 -top-7">
              <p class="absolute bottom-6 left-7 text-white text-2xl">02</p>
            </div>
            <div class="fill-violet-500 w-12">
              <img src="<?= asset('website.gif') ?>" class="scale-125" />
            </div>
            <h1 class="font-bold text-xl">Web Development</h1>
            <p class="text-sm text-zinc-500 leading-6">
              Have your custom sites, webapps ready to serve with responsive designs.
            </p>
          </card>
          <card
            class="w-64 shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-9 space-y-3 relative overflow-hidden bg-gradient-to-tl from-white to-white hover:from-violet-100 hover:shadow-xl transition hover:scale-[103%]"
          >
            <div class="w-24 h-24 bg-violet-500 rounded-full absolute -right-5 -top-7">
              <p class="absolute bottom-6 left-7 text-white text-2xl">03</p>
            </div>
            <div class="fill-violet-500 w-12">
              <img src="<?= asset('seo.gif') ?>" class="scale-125" />
            </div>
            <h1 class="font-bold text-xl">SEO Optimization</h1>
            <p class="text-sm text-zinc-500 leading-6">
              Rank your brand on internet with well optimized SEO and be the next trend.
            </p>
          </card>
        </div>
      </div>
    </section>
    
    <!-- About Section -->
    <section id="about" class="py-16 px-6 bg-gradient-to-b from-zinc-50 to-red-100">
      <div class="container mx-auto flex flex-col justify-center items-center">
        <h2 class="text-3xl font-bold mb-4 text-indigo-700">About Us</h2>
        <p class="text-center mb-6 leading-8 md:max-w-[86%]">DeoLang is a forward-thinking IT company committed to delivering high-quality software solutions. Our team of experienced developers, designers, and IT professionals work collaboratively to ensure that we meet and exceed our clients' expectations.</p>
      </div>
    </section>

    
    <!-- Team Section -->
    <section id="team" class="px-4 bg-red-100">
      <!-- From Uiverse.io by Smit-Prajapati --> 
       <div class=" py-20">
       <h2 class="text-indigo-700 text-center mb-10 font-bold text-3xl">Meet The Team</h2>
      <div class="flex lg:flex-row flex-col gap-5 lg:gap-8 xl:gap-16 justify-around w-fit mx-auto">
        <div class="card">
          <button class="mail">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
          </button>
          <div class="profile-pic">
              
            <img src="<?= asset('/smt.jpeg') ?>" />
          </div>
          <div class="bottom">
              <div class="content">
                  <span class="name">CEO</span>
                  <span class="about-me">Sumeet Bharali</span>
              </div>
            <div class="bottom-bottom">
              <div class="social-links-container">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999" viewBox="0 0 16 15.999">
                      <path id="Subtraction_4" data-name="Subtraction 4" d="M6-582H-2a4,4,0,0,1-4-4v-8a4,4,0,0,1,4-4H6a4,4,0,0,1,4,4v8A4,4,0,0,1,6-582ZM2-594a4,4,0,0,0-4,4,4,4,0,0,0,4,4,4,4,0,0,0,4-4A4.005,4.005,0,0,0,2-594Zm4.5-2a1,1,0,0,0-1,1,1,1,0,0,0,1,1,1,1,0,0,0,1-1A1,1,0,0,0,6.5-596ZM2-587.5A2.5,2.5,0,0,1-.5-590,2.5,2.5,0,0,1,2-592.5,2.5,2.5,0,0,1,4.5-590,2.5,2.5,0,0,1,2-587.5Z" transform="translate(6 598)"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
                    
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
              </div>
              <button class="button">Contact Me</button>
            </div>
          </div>
        </div>

        <div class="card">
          <button class="mail">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
          </button>
          <div class="profile-pic">
              
            <img src="<?= asset('/ank.jpg') ?>" />
          </div>
          <div class="bottom">
              <div class="content">
                  <span class="name">COO</span>
                  <span class="about-me">Ankit Gupta</span>
              </div>
            <div class="bottom-bottom">
              <div class="social-links-container">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999" viewBox="0 0 16 15.999">
                      <path id="Subtraction_4" data-name="Subtraction 4" d="M6-582H-2a4,4,0,0,1-4-4v-8a4,4,0,0,1,4-4H6a4,4,0,0,1,4,4v8A4,4,0,0,1,6-582ZM2-594a4,4,0,0,0-4,4,4,4,0,0,0,4,4,4,4,0,0,0,4-4A4.005,4.005,0,0,0,2-594Zm4.5-2a1,1,0,0,0-1,1,1,1,0,0,0,1,1,1,1,0,0,0,1-1A1,1,0,0,0,6.5-596ZM2-587.5A2.5,2.5,0,0,1-.5-590,2.5,2.5,0,0,1,2-592.5,2.5,2.5,0,0,1,4.5-590,2.5,2.5,0,0,1,2-587.5Z" transform="translate(6 598)"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
                    
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
              </div>
              <button class="button">Contact Me</button>
            </div>
          </div>
        </div>

        <div class="card">
          <button class="mail">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
          </button>
          <div class="profile-pic">
              
            <img src="<?= asset('/me21.png') ?>" class="bg-gradient-to-br from-yellow-600 to-purple-500" />
          </div>
          <div class="bottom">
              <div class="content">
                  <span class="name">CTO</span>
                  <span class="about-me">Gaurab Gogoi</span>
              </div>
            <div class="bottom-bottom">
              <div class="social-links-container">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999" viewBox="0 0 16 15.999">
                      <path id="Subtraction_4" data-name="Subtraction 4" d="M6-582H-2a4,4,0,0,1-4-4v-8a4,4,0,0,1,4-4H6a4,4,0,0,1,4,4v8A4,4,0,0,1,6-582ZM2-594a4,4,0,0,0-4,4,4,4,0,0,0,4,4,4,4,0,0,0,4-4A4.005,4.005,0,0,0,2-594Zm4.5-2a1,1,0,0,0-1,1,1,1,0,0,0,1,1,1,1,0,0,0,1-1A1,1,0,0,0,6.5-596ZM2-587.5A2.5,2.5,0,0,1-.5-590,2.5,2.5,0,0,1,2-592.5,2.5,2.5,0,0,1,4.5-590,2.5,2.5,0,0,1,2-587.5Z" transform="translate(6 598)"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
                    
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
              </div>
              <button class="button">Contact Me</button>
            </div>
          </div>
        </div>
      </div>
       </div>
    </section>
    
    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-gradient-to-r from-indigo-500 to-pink-500 text-white py-16 px-6">
      <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-8">What Clients Say</h2>
        <blockquote class="max-w-xl mx-auto italic text-lg">
          "Professional, reliable, and incredibly creative!"<br>
          <span class="block mt-4 font-semibold not-italic">- Client Name</span>
        </blockquote>
      </div>
    </section>
    
    <!-- Contact Section -->
    
    <section id="contact" class="container mx-auto py-16 px-6">
      <h2 class="text-3xl font-bold mb-4 text-indigo-700">Contact Us</h2>
      <form class="max-w-lg bg-white p-8 rounded-lg shadow-md flex flex-col gap-4 mb-8" action="/deolang/mail/contact" method="POST">
        <label for="name" class="font-semibold">Name</label>
        <input id="name" name="name" type="text" required class="border border-gray-300 rounded p-2 focus:outline-indigo-500">
        
        <label for="email" class="font-semibold">Email</label>
        <input id="email" name="email" type="email" required class="border border-gray-300 rounded p-2 focus:outline-indigo-500">
        
        <label for="message" class="font-semibold">Message</label>
        <textarea id="message" name="message" required class="border border-gray-300 rounded p-2 h-24 focus:outline-indigo-500"></textarea>
        <input type="hidden" name="csrf_token"  value="<?php echo generateCSRFToken(); ?>">
        <button type="submit" class="bg-indigo-600 text-white font-bold py-2 px-6 rounded shadow hover:bg-indigo-700 transition">Send</button>
      </form>
      <address class="not-italic text-gray-600">
        Email: <a href="mailto:info@company.com" class="text-indigo-600 hover:underline">info@company.com</a><br>
        Phone: +91-12345-67890
      </address>
    </section>
  </main>
  
  <footer class="bg-gray-100 py-6 mt-8">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-6">
      <p class="text-gray-700">&copy; 2025 Your Company Name. All rights reserved.</p>
      <nav class="mt-2 md:mt-0">
        <a href="#privacy" class="text-indigo-600 hover:underline mx-2">Privacy Policy</a>
        <a href="#terms" class="text-indigo-600 hover:underline mx-2">Terms of Service</a>
      </nav>
    </div>
  </footer>
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