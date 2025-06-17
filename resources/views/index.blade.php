<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CareBridge - Home</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="Style/style.css" />
    <script src="{{ asset('Script/script.js') }}"></script>
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar">
      <div class="container">
        <h1 class="logo"><span style="color: #021373">Care</span>Bridge</h1>
        <ul class="nav-links">
          <li><a href="#home">Doctors</a></li>
          <li><a href="#about">services</a></li>
          <li><a href="#how-it-works">How it Works</a></li>
          <li><a href="#doctors">Testimonials</a></li>
          <li><a href="#contact">Doctor Blogs</a></li>
        </ul>
        <div class="auth-buttons">
            
          <button class="login-btn" onclick="openLoginModal()">Login</button>
          <button class="register-btn" onclick="openModal()">Register</button>
        </div>
        <button class="menu-toggle" onclick="toggleMenu()">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>

      

      <div id="mobile-menu" class="mobile-menu">
        <!-- <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#how-it-works">How it Works</a></li>
        </ul> -->
      </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="hero-content">
          <p id="text">|</p>
          <h2>Your Health, Our Mission</h2>
          <p>
            Connect with verified doctors, schedule appointments, and access
            healthcare from anywhere.
          </p>
          <div class="hero-buttons">
            <a href="#doctors" class="find-doctor-btn">Find a Doctor</a>
            <a href="#about" class="learn-more-btn">Learn More</a>
          </div>
        </div>
        <div class="hero-image">
          <img src="{{ asset('Doctor1.jpeg') }}" alt="Doctor and patient" />
        </div>
      </div>
    </section>
    <!-- health care services -->
    <section id="categories" class="healthcare-section">
      <div class="container2">
        <div class="section-header">
          <h2>Our Healthcare Services</h2>
          <p>
            Access a wide range of medical specialties and services through our
            virtual healthcare platform
          </p>
        </div>

        <div class="services-grid">
          <!-- Service Cards -->
          <div class="service-card">
            <img
              src="{{ asset('Images/primary care.jpeg') }}"
              alt="General Medicine"
            />
            <div class="overlay"></div>
            <div class="card-content">
              <h3>Primary Care</h3>
              <p>
                Common illnesses, preventive care, chronic conditions management
              </p>
              <a href="#">Find a Doctor <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

          <div class="service-card delay-200">
            <img
              src="{{ asset('Images/Pediatrics.jpeg') }}"
              alt="Pediatrics"
            />
            <div class="overlay"></div>
            <div class="card-content">
              <h3>Pediatrics</h3>
              <p>Child wellness visits, development monitoring, teen health</p>
              <a href="#"
                >Find a Pediatrician <i class="fas fa-arrow-right"></i
              ></a>
            </div>
          </div>

          <div class="service-card delay-400">
            <img
              src="{{ asset('Images/mental health.jpeg') }}"
            />
            <div class="overlay"></div>
            <div class="card-content">
              <h3>Mental Health</h3>
              <p>
                Therapy, counseling, psychiatric care, medication management
              </p>
              <a href="#"
                >Speak with a Therapist <i class="fas fa-arrow-right"></i
              ></a>
            </div>
          </div>

          <div class="service-card">
            <img
              src="{{ asset('Images/Dermatology.jpeg') }}"
            />
            <div class="overlay"></div>
            <div class="card-content">
              <h3>Dermatology</h3>
              <p>Skin conditions, rashes, acne, eczema, virtual skin checks</p>
              <a href="#"
                >See a Dermatologist <i class="fas fa-arrow-right"></i
              ></a>
            </div>
          </div>

          <div class="service-card delay-200">
            <img
              src="{{ asset('Images/Cardiology.jpeg') }}"
              alt="Cardiology"
            />
            <div class="overlay"></div>
            <div class="card-content">
              <h3>Cardiology</h3>
              <p>Heart health, blood pressure, cholesterol management</p>
              <a href="#"
                >Heart Health Consult <i class="fas fa-arrow-right"></i
              ></a>
            </div>
          </div>

          <div class="service-card delay-400">
            <img
              src="{{ asset('Images/specialist.jpeg') }}"
              alt="Specialist Referrals"
            />
            <div class="overlay"></div>
            <div class="card-content">
              <h3>Specialist Referrals</h3>
              <p>Connect with specialists for complex medical conditions</p>
              <a href="#"
                >Request Referral <i class="fas fa-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- Modal Overlay -->
<div id="registerModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 hidden items-center justify-center">
  <div class="bg-white rounded-lg w-full max-w-md p-4 max-h-[80vh] overflow-y-auto relative">
    
    <!-- Close Button -->
    <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl">&times;</button>

    <h2 class="text-2xl font-semibold text-center mb-4">Register as Doctor or Patient</h2>

   <form id="registrationForm" action="{{ route('register') }}" method="POST" class="space-y-4">
    @csrf

    <!-- User Type Selection -->
    <div>
        <label class="block font-medium mb-1">I am a:</label>
        <select id="userType" name="type" onchange="toggleFields()" class="w-full border border-gray-300 rounded px-3 py-2" required>
            <option value="" disabled {{ old('type') ? '' : 'selected' }}>Select user type</option>
            <option value="doctor" {{ old('type') == 'doctor' ? 'selected' : '' }}>Doctor</option>
            <option value="patient" {{ old('type') == 'patient' ? 'selected' : '' }}>Patient</option>
        </select>
        @error('type')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Full Name -->
    <div>
        <label class="block mb-1">Full Name</label>
        <input type="text" class="w-full border border-gray-300 rounded px-3 py-2" name="name" value="{{ old('name') }}" required />
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Email -->
    <div>
        <label class="block mb-1">Email</label>
        <input type="email" class="w-full border border-gray-300 rounded px-3 py-2" name="email" value="{{ old('email') }}" required />
        @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Phone Number -->
    <div>
        <label class="block mb-1">Phone Number</label>
        <input type="text" class="w-full border border-gray-300 rounded px-3 py-2" name="number" value="{{ old('number') }}" required />
        @error('number')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label class="block mb-1">Password</label>
        <input type="password" class="w-full border border-gray-300 rounded px-3 py-2" name="password" required />
        @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div>
        <label class="block mb-1">Confirm Password</label>
        <input type="password" class="w-full border border-gray-300 rounded px-3 py-2" name="password_confirmation" required />
    </div>

    <!-- Doctor-only Fields -->
    <div id="doctorFields" class="{{ old('type') == 'doctor' ? '' : 'hidden' }}">
        <div>
            <label class="block mb-1">Specialization</label>
            <input type="text" class="w-full border border-gray-300 rounded px-3 py-2" name="specialization" value="{{ old('specialization') }}" />
            @error('specialization')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block mb-1">Years of Experience</label>
            <input type="number" min="0" class="w-full border border-gray-300 rounded px-3 py-2" name="experience" value="{{ old('experience') }}" />
            @error('experience')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Submit Buttons -->
    <div class="flex justify-center space-x-4 mt-4">
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
            Register
        </button>
        <button type="button" onclick="closeModal()" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded">
            Cancel
        </button>
    </div>
</form>

  </div>
</div>

 <!-- Login Modal -->
    <div id="loginModal" class="fixed inset-0 z-50 bg-black bg-opacity-50 hidden items-center justify-center">
      <div class="bg-white rounded-lg w-full max-w-lg p-6 relative">
        <button onclick="closeLoginModal()" class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl">&times;</button>
        <h2 class="text-2xl font-semibold text-center mb-6">Login to Your Account</h2>
        <form id="loginForm" method="POST" action="{{ Route('login') }}" class="space-y-4">
          @csrf
          <div>
            <label class="block mb-1">Email</label>
            <input type="email" class="w-full border border-gray-300 rounded px-3 py-2" name="email" required />
            @error('email')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div>
            <label class="block mb-1">Password</label>
            <input type="password" class="w-full border border-gray-300 rounded px-3 py-2" name="password" required />
              @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
              @enderror
          </div>
          <div class="text-center">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">Login</button>
            <button type="button" onclick="closeLoginModal()" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded">Cancel</button>
          </div>
        </form>
      </div>
    </div>

    <section id="how-it-works" class="section">
      <div class="container1">
        <div class="section-header">
          <h2>How It Works</h2>
          <p>
            Experience healthcare from the comfort of your home with our
            easy-to-use online consultation platform.
          </p>
        </div>

        <div class="steps">
          <!-- Step 1 -->
          <div class="step">
            <div class="icon">
              <i class="fas fa-search"></i>
            </div>
            <h3>1. Choose Your Doctor</h3>
            <p>
              Browse our network of board-certified physicians. Filter by
              specialty, availability, language, or rating to find the perfect
              match for your healthcare needs.
            </p>
          </div>

          <!-- Step 2 -->
          <div class="step delay-1">
            <div class="icon">
              <i class="fas fa-calendar-check"></i>
            </div>
            <h3>2. Schedule & Connect</h3>
            <p>
              Book an appointment at your convenience or connect with available
              doctors immediately. Consultations take place through secure
              video, audio, or chat.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="step delay-2">
            <div class="icon">
              <i class="fas fa-clipboard-check"></i>
            </div>
            <h3>3. Receive Care</h3>
            <p>
              Get diagnosis, treatment plans, prescriptions, lab orders,
              specialist referrals, and follow-up care. All medical records are
              securely stored in your account.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial section  -->
    <section class="section4">
      <div class="container5">
        <div class="text-center">
          <h2 class="title">Patient Success Stories</h2>
          <p class="subtitle">
            Hear from our patients who received exceptional care through our
            online consultation platform
          </p>
        </div>

        <div class="text-center">
          <button class="btn" onclick="toggleTestimonyForm()">
            Add a Testimony
          </button>
        </div>

        <div id="testimonyForm" class="form-container">
          <button class="close-btn" onclick="toggleTestimonyForm()">
            &times;
          </button>
          <h2>Post a Testimony</h2>
          <form>
            <label for="rating">Rating (1–5)</label>
            <input
              type="number"
              id="rating"
              min="1"
              max="5"
              oninput="generateStars()"
            />
            <div id="starPreview" class="stars"></div>

            <label for="testimony">Your Testimony</label>
            <textarea id="testimony" rows="4"></textarea>

            <button type="submit" class="btn" style="background-color: #16a34a">
              Submit Testimony
            </button>
          </form>
        </div>

        <div class="testimonial-slider">
          <div class="testimonial-track" id="testimonialTrack">
            <div class="testimonial-slide">
              <div class="testimonial-box">
                <div class="stars">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i>
                </div>
                <p class="testimonial-text">
                  "Great service! I felt cared for and the doctor was amazing!"
                </p>
                <div class="testimonial-author">
                  <img src="https://via.placeholder.com/48" alt="Patient" />
                  <div>
                    <h4>Jane Doe</h4>
                    <p>Patient since 2024</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Add more testimonial-slide divs as needed -->
          </div>

          <div class="testimonial-slider-nav">
            <button onclick="prevSlide()">
              <i class="fas fa-chevron-left"></i>
            </button>
            <div class="testimonial-dot active"></div>
            <div class="testimonial-dot"></div>
            <button onclick="nextSlide()">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section
      class="py-20 bg-gradient-to-r from-gray-800 to-gray-900 text-white"
    >
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center fade-in">
          <h2 class="text-4xl md:text-5xl font-bold font-display mb-6">
            Stay Informed About Your Health
          </h2>
          <p class="text-lg md:text-xl opacity-90 mb-10">
            Subscribe to our newsletter for expert health tips, wellness
            guidance, and exclusive CareBridge updates.
          </p>

          <form class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto">
            <input
              type="email"
              placeholder="Enter your email address"
              class="flex-1 px-5 py-3 rounded-lg text-gray-800 bg-white shadow focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-900 text-base transition"
              required
            />
            <button
              type="submit"
              class="px-6 py-3 bg-white text-blue-900 font-semibold rounded-lg shadow hover:bg-blue-100 transition duration-300"
            >
              Subscribe Now
            </button>
          </form>

          <p class="text-sm opacity-90 mt-6">
            We respect your privacy. Unsubscribe at any time.
          </p>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
      <div class="container mx-auto px-4">
        <!-- Grid Section -->
        <div
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12"
        >
          <!-- Company Info -->
          <div>
            <h3 class="text-2xl font-bold mb-4 flex items-center gap-2">
              <i class="fas fa-heartbeat text-primary"></i>CareBridge
            </h3>
            <p class="text-gray-400 mb-4 leading-relaxed">
              Your trusted source for premium online healthcare services and
              virtual consultations.
            </p>
            <div class="flex space-x-4 mt-4">
              <a href="#" class="text-gray-400 hover:text-white transition">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-white transition">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-white transition">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-white transition">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>

          <!-- Quick Links -->
          <div>
            <h4 class="text-xl font-semibold mb-4">Quick Links</h4>
            <ul class="space-y-2 text-gray-400">
              <li>
                <a href="#" class="hover:text-white transition"
                  >Find a Doctor</a
                >
              </li>
              <li>
                <a href="#" class="hover:text-white transition"
                  >Healthcare Plans</a
                >
              </li>
              <li>
                <a href="#" class="hover:text-white transition">For Doctors</a>
              </li>
              <li>
                <a href="#" class="hover:text-white transition"
                  >Billing Information</a
                >
              </li>
              <li>
                <a href="#" class="hover:text-white transition">About Us</a>
              </li>
            </ul>
          </div>

          <!-- Help & Support -->
          <div>
            <h4 class="text-xl font-semibold mb-4">Help & Support</h4>
            <ul class="space-y-2 text-gray-400">
              <li><a href="#" class="hover:text-white transition">FAQ</a></li>
              <li>
                <a href="#" class="hover:text-white transition">Contact Us</a>
              </li>
              <li>
                <a href="#" class="hover:text-white transition"
                  >Patient Resources</a
                >
              </li>
              <li>
                <a href="#" class="hover:text-white transition"
                  >Terms of Service</a
                >
              </li>
              <li>
                <a href="#" class="hover:text-white transition"
                  >Privacy Policy</a
                >
              </li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div>
            <h4 class="text-xl font-semibold mb-4">Contact Us</h4>
            <ul class="space-y-3 text-gray-400 text-sm">
              <li class="flex items-start">
                <i class="fas fa-map-marker-alt text-primary mt-1 mr-3"></i>
                <span
                  >123 Health Avenue, Suite 500<br />Healthcare City, CA
                  90210</span
                >
              </li>
              <li class="flex items-center">
                <i class="fas fa-phone text-primary mr-3"></i>
                <span>1-800-CareBridge</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-envelope text-primary mr-3"></i>
                <span>support@CareBridge.com</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-clock text-primary mr-3"></i>
                <span>24/7 Support Available</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Divider -->
        <hr class="border-gray-800 mb-6" />
      </div>
      <!-- Bottom Note -->
      <div class="text-center">
        <p class="text-gray-500 text-sm">
          &copy; 2025 CareBridge. All rights reserved.
        </p>
      </div>
    </footer>
  </body>
</html>
