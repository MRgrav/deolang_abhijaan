<?php
$pageTitle = 'Contact Us — DeoLang | Get in Touch';
$metaDesc = 'Contact DeoLang — your trusted IT partner in Jorhat, Assam. Send us a message, start a project, or reach our team directly. We respond within one business day.';
$keywords = 'contact DeoLang, hire software company Jorhat, IT services inquiry Assam, get a quote web app development';
?>

<div class="font-sans text-zinc-200 bg-zinc-900 overflow-x-hidden selection:bg-yellow-500 selection:text-white">
  <header class="bg-zinc-900/80 backdrop-blur text-zinc-200 fixed w-full top-0 z-50">
    {{ use_nav }}
  </header>

  <main>

    <!-- Hero -->
    <section class="relative overflow-hidden bg-zinc-900 text-white pt-32 pb-20">
      <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/10 via-zinc-900 to-zinc-900 pointer-events-none"></div>
      <!-- Decorative circles -->
      <div class="absolute -top-20 -right-20 w-96 h-96 rounded-full bg-yellow-500/5 blur-3xl pointer-events-none"></div>
      <div class="absolute -bottom-10 -left-10 w-72 h-72 rounded-full bg-yellow-600/5 blur-3xl pointer-events-none"></div>

      <div class="relative container mx-auto px-4 lg:px-8 max-w-5xl text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-yellow-500/10 text-yellow-400 text-sm font-semibold mb-6 border border-yellow-500/20">
          <span class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></span> We're Here to Help
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight mb-6 leading-tight">
          Let's Build Something <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Remarkable</span>
        </h1>
        <p class="text-zinc-400 text-lg max-w-2xl mx-auto leading-relaxed">
          Have a project idea, a question, or want a quote? Drop us a message and our team will get back to you within one business day.
        </p>
      </div>
    </section>

    <!-- Info Cards + Form -->
    <section class="py-16 bg-zinc-900">
      <div class="container mx-auto px-4 lg:px-8 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10">

          <!-- Left: Info Sidebar -->
          <div class="lg:col-span-2 space-y-6">

            <div class="bg-zinc-800/50 border border-zinc-800 rounded-2xl p-6 hover:border-yellow-500/30 transition-colors">
              <div class="w-12 h-12 bg-yellow-500/10 rounded-xl flex items-center justify-center mb-4 text-yellow-400">
                <i class="ph ph-map-pin text-2xl"></i>
              </div>
              <h3 class="text-white font-bold mb-1">Our Location</h3>
              <p class="text-zinc-400 text-sm leading-relaxed">Jorhat, Assam — 785001<br>India</p>
            </div>

            <div class="bg-zinc-800/50 border border-zinc-800 rounded-2xl p-6 hover:border-yellow-500/30 transition-colors">
              <div class="w-12 h-12 bg-yellow-500/10 rounded-xl flex items-center justify-center mb-4 text-yellow-400">
                <i class="ph ph-envelope-simple text-2xl"></i>
              </div>
              <h3 class="text-white font-bold mb-1">Email Us</h3>
              <a href="mailto:contact@deolang.com" class="text-yellow-400 hover:underline text-sm">contact@deolang.com</a>
              <p class="text-zinc-500 text-xs mt-1">We reply within 1 business day</p>
            </div>

            <div class="bg-zinc-800/50 border border-zinc-800 rounded-2xl p-6 hover:border-yellow-500/30 transition-colors">
              <div class="w-12 h-12 bg-yellow-500/10 rounded-xl flex items-center justify-center mb-4 text-yellow-400">
                <i class="ph ph-linkedin-logo text-2xl"></i>
              </div>
              <h3 class="text-white font-bold mb-2">Connect on LinkedIn</h3>
              <a href="https://www.linkedin.com/company/deolang/" target="_blank" rel="noopener" class="text-yellow-400 hover:underline text-sm">DeoLang Official Page</a>
            </div>

            <!-- Team Quick Contacts -->
            <div class="bg-zinc-800/50 border border-zinc-800 rounded-2xl p-6">
              <h3 class="text-white font-bold mb-4 text-sm uppercase tracking-wider">Direct Team Contacts</h3>
              <div class="space-y-4">
                <div class="flex items-center gap-3">
                  <img src="<?= asset('images/team/sb.jpg') ?>" alt="Sumeet Bharali CEO" class="w-10 h-10 rounded-full object-cover border border-yellow-400/40">
                  <div>
                    <p class="text-zinc-200 text-sm font-semibold">Sumeet Bharali</p>
                    <p class="text-yellow-400 text-xs">CEO &mdash; <a href="https://www.linkedin.com/in/sumeet-bharali/" target="_blank" class="hover:underline">LinkedIn</a></p>
                  </div>
                </div>
                <div class="flex items-center gap-3">
                  <img src="<?= asset('images/team/ank.jpg') ?>" alt="Ankit Gupta COO" class="w-10 h-10 rounded-full object-cover border border-yellow-400/40">
                  <div>
                    <p class="text-zinc-200 text-sm font-semibold">Ankit Gupta</p>
                    <p class="text-yellow-400 text-xs">COO &mdash; <a href="https://www.linkedin.com/in/ankit-gupta-858464249/" target="_blank" class="hover:underline">LinkedIn</a></p>
                  </div>
                </div>
                <div class="flex items-center gap-3">
                  <img src="<?= asset('images/team/cgg.jpg') ?>" alt="Gaurab Gogoi CTO" class="w-10 h-10 rounded-full object-cover border border-yellow-400/40">
                  <div>
                    <p class="text-zinc-200 text-sm font-semibold">Gaurab Gogoi</p>
                    <p class="text-yellow-400 text-xs">CTO &mdash; <a href="https://www.linkedin.com/in/gaurab-gogoi-3a6746246/" target="_blank" class="hover:underline">LinkedIn</a></p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Right: Contact Form -->
          <div class="lg:col-span-3">
            <div class="bg-zinc-800/40 border border-zinc-800 rounded-3xl p-8 lg:p-10">
              <h2 class="text-2xl font-bold text-white mb-2">Send Us a Message</h2>
              <p class="text-zinc-400 text-sm mb-8">Fill out the form below and we'll get back to you shortly.</p>

              <!-- Success / Error States -->
              <div id="contact-success" class="hidden mb-6 bg-green-500/10 border border-green-500/30 rounded-2xl p-5 flex items-start gap-3">
                <i class="ph-fill ph-check-circle text-green-400 text-2xl shrink-0 mt-0.5"></i>
                <div>
                  <p class="text-green-300 font-semibold">Message Sent Successfully!</p>
                  <p class="text-green-400/70 text-sm mt-1">Thank you for reaching out. We'll respond within one business day.</p>
                </div>
              </div>
              <div id="contact-error" class="hidden mb-6 bg-red-500/10 border border-red-500/30 rounded-2xl p-5 flex items-start gap-3">
                <i class="ph-fill ph-warning-circle text-red-400 text-2xl shrink-0 mt-0.5"></i>
                <div>
                  <p class="text-red-300 font-semibold">Something went wrong.</p>
                  <p class="text-red-400/70 text-sm mt-1" id="contact-error-msg">Please try again or email us directly at contact@deolang.com.</p>
                </div>
              </div>

              <form id="contact-form" class="space-y-5" novalidate>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                  <div>
                    <label for="contact-name" class="block text-sm font-semibold text-zinc-300 mb-2">Full Name <span class="text-yellow-400">*</span></label>
                    <input type="text" id="contact-name" name="name" required placeholder="Eg. Rahul Dey"
                      class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3 text-zinc-200 placeholder-zinc-600 text-sm focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500/50 transition-all">
                  </div>
                  <div>
                    <label for="contact-email" class="block text-sm font-semibold text-zinc-300 mb-2">Email Address <span class="text-yellow-400">*</span></label>
                    <input type="email" id="contact-email" name="email" required placeholder="you@company.com"
                      class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3 text-zinc-200 placeholder-zinc-600 text-sm focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500/50 transition-all">
                  </div>
                </div>

                <div>
                  <label for="contact-company" class="block text-sm font-semibold text-zinc-300 mb-2">Company / Organization <span class="text-zinc-600 font-normal">(optional)</span></label>
                  <input type="text" id="contact-company" name="company" placeholder="Your Business Name"
                    class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3 text-zinc-200 placeholder-zinc-600 text-sm focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500/50 transition-all">
                </div>

                <div>
                  <label for="contact-service" class="block text-sm font-semibold text-zinc-300 mb-2">What are you looking for? <span class="text-yellow-400">*</span></label>
                  <select id="contact-service" name="service" required
                    class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3 text-zinc-200 text-sm focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500/50 transition-all appearance-none cursor-pointer">
                    <option value="" disabled selected class="text-zinc-600">Select a service...</option>
                    <option value="Web Application">Custom Web Application</option>
                    <option value="Enterprise Software / ERP">Enterprise Software / ERP</option>
                    <option value="Mobile App">Mobile App Development</option>
                    <option value="Business Automation">Business Automation</option>
                    <option value="SEO Services">SEO & Digital Presence</option>
                    <option value="Admin Dashboard">Admin Dashboard</option>
                    <option value="General Inquiry">General Inquiry</option>
                    <option value="Other">Other</option>
                  </select>
                </div>

                <div>
                  <label for="contact-message" class="block text-sm font-semibold text-zinc-300 mb-2">Your Message <span class="text-yellow-400">*</span></label>
                  <textarea id="contact-message" name="message" rows="5" required placeholder="Tell us about your project, goals, or questions..."
                    class="w-full bg-zinc-900 border border-zinc-700 rounded-xl px-4 py-3 text-zinc-200 placeholder-zinc-600 text-sm focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500/50 transition-all resize-none"></textarea>
                </div>

                <button type="submit" id="contact-submit"
                  class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-yellow-500 px-8 py-4 text-base font-bold text-zinc-900 hover:bg-yellow-400 hover:scale-[1.02] transition-all duration-300 shadow-lg shadow-yellow-500/20">
                  <i class="ph ph-paper-plane-tilt text-lg"></i>
                  <span id="contact-submit-label">Send Message</span>
                </button>

                <p class="text-center text-zinc-600 text-xs">
                  By submitting this form, you agree to our <a href="/privacy-policy" class="text-zinc-500 hover:text-yellow-400 transition-colors">Privacy Policy</a>.
                </p>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  {{ use_footer }}
</div>

<script>
  (function () {
    // ==========================================
    // CONFIG — update PocketBase URL & collection
    // ==========================================
    const PB_URL = 'https://pb.deolang.com';         // << Your PocketBase URL
    const PB_COLLECTION = 'contact_messages';          // << Your PocketBase collection name
    // ==========================================

    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('contact-submit');
    const submitLabel = document.getElementById('contact-submit-label');
    const successBox = document.getElementById('contact-success');
    const errorBox = document.getElementById('contact-error');
    const errorMsg = document.getElementById('contact-error-msg');

    form.addEventListener('submit', async function (e) {
      e.preventDefault();

      const name    = document.getElementById('contact-name').value.trim();
      const email   = document.getElementById('contact-email').value.trim();
      const company = document.getElementById('contact-company').value.trim();
      const service = document.getElementById('contact-service').value;
      const message = document.getElementById('contact-message').value.trim();

      if (!name || !email || !service || !message) {
        errorBox.classList.remove('hidden');
        errorMsg.textContent = 'Please fill in all required fields.';
        successBox.classList.add('hidden');
        return;
      }

      // Loading state
      submitBtn.disabled = true;
      submitLabel.textContent = 'Sending...';
      submitBtn.classList.add('opacity-70', 'cursor-not-allowed');

      try {
        const res = await fetch(`${PB_URL}/api/collections/${PB_COLLECTION}/records`, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ name, email, company, service, message })
        });

        if (!res.ok) {
          const data = await res.json();
          throw new Error(data?.message || 'Submission failed.');
        }

        // Success
        successBox.classList.remove('hidden');
        errorBox.classList.add('hidden');
        form.reset();
      } catch (err) {
        errorBox.classList.remove('hidden');
        successBox.classList.add('hidden');
        errorMsg.textContent = err.message || 'Something went wrong. Please email us directly.';
      } finally {
        submitBtn.disabled = false;
        submitLabel.textContent = 'Send Message';
        submitBtn.classList.remove('opacity-70', 'cursor-not-allowed');
      }
    });
  })();
</script>
