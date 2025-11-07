<?php
// portfolio.php
$company = "DeoLang";
$tagline = "Innovative SaaS Solutions That Scale";
$hero_text = "We craft cutting-edge software for education, fitness, and enterprise clients. From concept to deployment, we build platforms that empower thousands of users.";

$about = [
  "title" => "Who We Are",
  "description" => "DeoLang is a technology company based in Assam, India, specializing in building scalable SaaS applications. With expertise in full-stack development, we transform ideas into powerful digital solutions that serve thousands of users daily.",
  "stats" => [
    ["number" => "10K+", "label" => "Active Users"],
    ["number" => "3", "label" => "Products Launched"],
    ["number" => "99.9%", "label" => "Uptime"],
    ["number" => "24/7", "label" => "Support"]
  ]
];

$projects = [
  [
    "title" => "ClassWix",
    "subtitle" => "Complete School Management Ecosystem",
    "desc" => "A modern ERP platform designed for K-12 schools with intuitive admin panels, student portals, attendance tracking, grade management, and parent communication tools. Built with performance-first architecture to handle 10,000+ concurrent users.",
    "url" => "https://www.classwix.com",
    "tech" => "Laravel · Vue.js · PostgreSQL",
    "btn_color" => "bg-blue-600 hover:bg-blue-700",
    "accent_color" => "text-blue-400",
    "display_type" => "phone",
    "use_iframe" => true
  ],
  [
    "title" => "Sundaram Developers",
    "subtitle" => "Modern Living Spaces in Jorhat",
    "desc" => "Real estate solutions focused on affordable housing and smart homes across Upper Assam. Connected living with world-class facilities, sustainable green spaces, and round-the-clock surveillance. Making modern living accessible in the heart of Jorhat.",
    "url" => "https://www.sundaramdevelopers.in",
    "screenshot" => "https://pk.deolang.com/api/files/pbc_4285667772/oex0p2137mtpnes/asd_xyyjkab0m8.png?thumb=400x400&token=",
    "tech" => "Real Estate · Smart Homes · Sustainable Living",
    "btn_color" => "bg-green-600 hover:bg-green-700",
    "accent_color" => "text-green-400",
    "display_type" => "desktop",
    "use_iframe" => false
  ],
  [
    "title" => "ARPS Jorhat",
    "subtitle" => "Assam Rifles Public School",
    "desc" => "CBSE-affiliated English-medium school established in 1977, offering comprehensive education from Nursery to Class XII. Excellence in academics with streams in Humanities, Commerce, and Science. Nurturing young minds with modern educational practices.",
    "url" => "https://www.arpsjorhat.in",
    "screenshot" => "https://pk.deolang.com/api/files/pbc_4285667772/jiszgx0uersa0ix/arps_jorhat_hl2uijt6y8.webp?thumb=400x400&token=",
    "tech" => "Education · CBSE Curriculum · Since 1977",
    "btn_color" => "bg-purple-600 hover:bg-purple-700",
    "accent_color" => "text-purple-400",
    "display_type" => "tablet",
    "use_iframe" => false
  ]
];

$skills = [
  ["name" => "Full-Stack Development", "icon" => "💻"],
  ["name" => "Laravel & Vue.js", "icon" => "⚡"],
  ["name" => "Go & Fiber", "icon" => "🚀"],
  ["name" => "Multi-Tenant SaaS", "icon" => "🏢"],
  ["name" => "PostgreSQL & MySQL", "icon" => "🗄️"],
  ["name" => "Authentication Systems", "icon" => "🔐"]
];

$testimonials = [
  [
    "name" => "Rajesh Kumar",
    "role" => "School Principal",
    "company" => "Modern Academy",
    "text" => "ClassWix transformed our school management. The intuitive interface and powerful features helped us digitize our entire operations seamlessly.",
    "rating" => 5
  ],
  [
    "name" => "Priya Sharma",
    "role" => "Real Estate Investor",
    "company" => "Sundaram Developers",
    "text" => "The website showcases our properties beautifully. Customer inquiries have increased by 300% since launch.",
    "rating" => 5
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $company ?> - Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .hero-animate { animation: fadeIn 1.2s ease-out; }
    
    /* Scroll Reveal Animation */
    .scroll-reveal {
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }
    .scroll-reveal.revealed {
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Smooth Scroll */
    html { scroll-behavior: smooth; }
    
    /* Navigation */
    .nav-sticky {
      position: sticky;
      top: 0;
      z-index: 50;
      backdrop-filter: blur(12px);
    }
    
    /* Phone Frame with Punch Hole */
    .phone-frame {
      position: relative;
      transition: transform 0.6s ease;
      perspective: 1000px;
    }
    .phone-frame:hover {
      transform: rotateY(5deg) rotateX(2deg) scale(1.02);
    }
    .phone-frame::before {
      content: '';
      position: absolute;
      top: 20px;
      right: 30px;
      width: 12px;
      height: 12px;
      background: #18181b;
      border-radius: 50%;
      z-index: 10;
      box-shadow: 0 0 0 2px #27272a;
    }
    
    /* Desktop Browser Frame */
    .browser-frame {
      position: relative;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0,0,0,0.5);
      transition: transform 0.6s ease;
      cursor: pointer;
    }
    .browser-frame:hover { transform: scale(1.02); }
    .browser-header {
      height: 35px;
      background: #27272a;
      display: flex;
      align-items: center;
      padding: 0 12px;
      gap: 6px;
    }
    .browser-dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
    }
    
    /* Tablet Frame */
    .tablet-frame {
      position: relative;
      transition: transform 0.6s ease;
      cursor: pointer;
    }
    .tablet-frame:hover {
      transform: scale(1.02) rotateZ(-1deg);
    }
    
    .screenshot-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top;
    }
    
    /* Mobile Menu */
    .mobile-menu {
      transform: translateX(100%);
      transition: transform 0.3s ease;
    }
    .mobile-menu.active {
      transform: translateX(0);
    }
  </style>
</head>
<body class="bg-zinc-900 text-zinc-100">
  
  <!-- Navigation -->
  <nav class="nav-sticky bg-zinc-950/80 border-b border-zinc-800">
    <div class="max-w-7xl mx-auto px-5 py-4 flex items-center justify-between">
      <a href="#" class="text-2xl font-bold bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text text-transparent">
        <?= $company ?>
      </a>
      
      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center gap-8">
        <a href="#about" class="text-zinc-300 hover:text-yellow-500 transition-colors">About</a>
        <a href="#projects" class="text-zinc-300 hover:text-yellow-500 transition-colors">Projects</a>
        <a href="#skills" class="text-zinc-300 hover:text-yellow-500 transition-colors">Skills</a>
        <a href="#testimonials" class="text-zinc-300 hover:text-yellow-500 transition-colors">Testimonials</a>
        <a href="#contact" class="px-6 py-2 bg-yellow-500 hover:bg-yellow-600 text-zinc-900 font-semibold rounded-lg transition-all">
          Contact
        </a>
      </div>
      
      <!-- Mobile Menu Button -->
      <button class="md:hidden text-zinc-300" onclick="toggleMenu()">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu md:hidden fixed top-0 right-0 h-full w-64 bg-zinc-950 border-l border-zinc-800 p-6 flex flex-col gap-6">
      <button onclick="toggleMenu()" class="self-end text-zinc-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
      <a href="#about" onclick="toggleMenu()" class="text-zinc-300 hover:text-yellow-500">About</a>
      <a href="#projects" onclick="toggleMenu()" class="text-zinc-300 hover:text-yellow-500">Projects</a>
      <a href="#skills" onclick="toggleMenu()" class="text-zinc-300 hover:text-yellow-500">Skills</a>
      <a href="#testimonials" onclick="toggleMenu()" class="text-zinc-300 hover:text-yellow-500">Testimonials</a>
      <a href="#contact" onclick="toggleMenu()" class="text-zinc-300 hover:text-yellow-500">Contact</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-animate text-center px-5 py-24 bg-zinc-950">
    <h1 class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 bg-clip-text text-transparent mb-4 tracking-tight">
      <?= $company ?>
    </h1>
    <div class="text-2xl md:text-3xl text-zinc-400 mb-6 font-light tracking-wide">
      <?= $tagline ?>
    </div>
    <p class="max-w-3xl mx-auto text-lg md:text-xl text-zinc-300 mb-8 leading-relaxed">
      <?= $hero_text ?>
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="#projects" class="px-8 py-3 bg-yellow-500 hover:bg-yellow-600 text-zinc-900 font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
        View Our Work
      </a>
      <a href="#contact" class="px-8 py-3 bg-zinc-800 hover:bg-zinc-700 text-zinc-100 font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
        Get in Touch
      </a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="scroll-reveal px-5 py-20 bg-zinc-800/40">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-bold text-yellow-500 text-center mb-8">
        <?= $about['title'] ?>
      </h2>
      <p class="text-lg text-zinc-300 text-center max-w-3xl mx-auto mb-16 leading-relaxed">
        <?= $about['description'] ?>
      </p>
      
      <!-- Stats -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <?php foreach ($about['stats'] as $stat): ?>
          <div class="text-center">
            <div class="text-4xl md:text-5xl font-bold text-yellow-500 mb-2">
              <?= $stat['number'] ?>
            </div>
            <div class="text-zinc-400">
              <?= $stat['label'] ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <div id="projects" class="max-w-7xl mx-auto">
    <?php foreach ($projects as $index => $project): ?>
    <section class="scroll-reveal px-5 py-20 <?= $index % 2 === 1 ? 'bg-zinc-800/40' : '' ?>">
      <div class="max-w-4xl mx-auto text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-bold <?= $project['accent_color'] ?> mb-3">
          <?= $project['title'] ?>
        </h2>
        <h3 class="text-xl md:text-2xl text-zinc-400 font-normal mb-5">
          <?= $project['subtitle'] ?>
        </h3>
        <p class="text-base md:text-lg text-zinc-300 leading-relaxed mb-4">
          <?= $project['desc'] ?>
        </p>
        <div class="text-sm text-zinc-500 italic">
          Tech Stack: <?= $project['tech'] ?>
        </div>
      </div>
      
      <div class="flex justify-center mb-10">
        <?php if ($project['display_type'] === 'phone'): ?>
          <div class="phone-frame w-80 h-[640px] bg-zinc-950 border-[14px] border-zinc-800 rounded-[36px] shadow-2xl overflow-hidden">
            <?php if ($project['use_iframe']): ?>
              <iframe src="<?= $project['url'] ?>" title="<?= $project['title'] ?> Preview" loading="lazy" class="w-full h-full border-0 rounded-[22px]"></iframe>
            <?php else: ?>
              <a href="<?= $project['url'] ?>" target="_blank" class="block w-full h-full">
                <img src="<?= asset($project['screenshot']) ?>" alt="<?= $project['title'] ?>" class="screenshot-img rounded-[22px]">
              </a>
            <?php endif; ?>
          </div>
        <?php elseif ($project['display_type'] === 'desktop'): ?>
          <a href="<?= $project['url'] ?>" target="_blank" class="browser-frame w-full max-w-5xl bg-zinc-950 block">
            <div class="browser-header">
              <div class="browser-dot bg-red-500"></div>
              <div class="browser-dot bg-yellow-500"></div>
              <div class="browser-dot bg-green-500"></div>
            </div>
            <?php if ($project['use_iframe']): ?>
              <iframe src="<?= $project['url'] ?>" title="<?= $project['title'] ?> Preview" loading="lazy" class="w-full h-[600px] border-0"></iframe>
            <?php else: ?>
              <img src="<?= $project['screenshot'] ?>" alt="<?= $project['title'] ?>" class="screenshot-img h-[600px]">
            <?php endif; ?>
          </a>
        <?php elseif ($project['display_type'] === 'tablet'): ?>
          <a href="<?= $project['url'] ?>" target="_blank" class="tablet-frame w-full max-w-2xl bg-zinc-950 border-[16px] border-zinc-800 rounded-[24px] shadow-2xl overflow-hidden block">
            <?php if ($project['use_iframe']): ?>
              <iframe src="<?= $project['url'] ?>" title="<?= $project['title'] ?> Preview" loading="lazy" class="w-full h-[550px] border-0 rounded-[8px]"></iframe>
            <?php else: ?>
              <img src="<?= $project['screenshot'] ?>" alt="<?= $project['title'] ?>" class="screenshot-img rounded-[8px] h-[550px]">
            <?php endif; ?>
          </a>
        <?php endif; ?>
      </div>
      
      <div class="flex flex-wrap justify-center gap-4">
        <a href="<?= $project['url'] ?>" target="_blank" class="px-8 py-3 <?= $project['btn_color'] ?> text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
          Visit Website
        </a>
        <a href="<?= $project['url'] ?>" target="_blank" class="px-8 py-3 bg-yellow-500 hover:bg-yellow-600 text-zinc-900 font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
          Explore More
        </a>
      </div>
    </section>
    <?php endforeach; ?>
  </div>

  <!-- Skills Section -->
  <section id="skills" class="scroll-reveal px-5 py-20 bg-zinc-800/40">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-bold text-yellow-500 text-center mb-12">
        Our Expertise
      </h2>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
        <?php foreach ($skills as $skill): ?>
          <div class="bg-zinc-900 border border-zinc-800 rounded-lg p-6 text-center hover:border-yellow-500 transition-all hover:scale-105">
            <div class="text-4xl mb-3"><?= $skill['icon'] ?></div>
            <div class="text-lg font-semibold text-zinc-200"><?= $skill['name'] ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="scroll-reveal px-5 py-20">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-bold text-yellow-500 text-center mb-12">
        Client Testimonials
      </h2>
      <div class="grid md:grid-cols-2 gap-8">
        <?php foreach ($testimonials as $testimonial): ?>
          <div class="bg-zinc-800 border border-zinc-700 rounded-lg p-8">
            <div class="flex mb-4">
              <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                <span class="text-yellow-500 text-xl">★</span>
              <?php endfor; ?>
            </div>
            <p class="text-zinc-300 mb-6 italic">"<?= $testimonial['text'] ?>"</p>
            <div>
              <div class="font-semibold text-zinc-100"><?= $testimonial['name'] ?></div>
              <div class="text-sm text-zinc-400"><?= $testimonial['role'] ?> at <?= $testimonial['company'] ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="scroll-reveal px-5 py-20 bg-zinc-800/40">
    <div class="max-w-2xl mx-auto text-center">
      <h2 class="text-4xl md:text-5xl font-bold text-yellow-500 mb-6">
        Let's Build Something Amazing
      </h2>
      <p class="text-lg text-zinc-300 mb-10">
        Ready to transform your ideas into reality? Get in touch with us today.
      </p>
      
      <!-- Contact Form -->
      <form class="space-y-6">
        <div>
          <input type="text" placeholder="Your Name" required 
                 class="w-full px-6 py-4 bg-zinc-900 border border-zinc-700 rounded-lg text-zinc-100 focus:border-yellow-500 focus:outline-none transition-colors">
        </div>
        <div>
          <input type="email" placeholder="Your Email" required 
                 class="w-full px-6 py-4 bg-zinc-900 border border-zinc-700 rounded-lg text-zinc-100 focus:border-yellow-500 focus:outline-none transition-colors">
        </div>
        <div>
          <textarea placeholder="Your Message" rows="5" required 
                    class="w-full px-6 py-4 bg-zinc-900 border border-zinc-700 rounded-lg text-zinc-100 focus:border-yellow-500 focus:outline-none transition-colors resize-none"></textarea>
        </div>
        <button type="submit" 
                class="w-full px-8 py-4 bg-yellow-500 hover:bg-yellow-600 text-zinc-900 font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
          Send Message
        </button>
      </form>
      
      <!-- Contact Info -->
      <div class="mt-12 text-zinc-400">
        <p>Email: contact@deolang.com</p>
        <p>Location: Assam, India</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <!-- <footer class="text-center px-5 py-12 bg-zinc-950 text-zinc-500 border-t border-zinc-800">
    <p class="mb-2">&copy; <?= date('Y') ?> <?= $company ?>. Building the future of SaaS, one product at a time.</p>
    <p>Assam, India | contact@deolang.com</p>
  </footer> -->
  {{ use_nav }}

  <!-- Scripts -->
  <script>
    // Scroll Reveal
    const observerOptions = {
      threshold: 0.15,
      rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
        }
      });
    }, observerOptions);

    document.querySelectorAll('.scroll-reveal').forEach(el => {
      observer.observe(el);
    });

    // Mobile Menu Toggle
    function toggleMenu() {
      document.getElementById('mobileMenu').classList.toggle('active');
    }
  </script>

</body>
</html>
