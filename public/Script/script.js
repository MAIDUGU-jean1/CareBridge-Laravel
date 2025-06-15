const toggleBtn = document.getElementById('menu-toggle');
const menu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
      });
      function toggleMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
      }
            // Mobile nav toggle
      function toggleMenu() {
        const menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
      }

      //testimonial section 
      function toggleTestimonyForm() {
      document.getElementById('testimonyForm').classList.toggle('active');
    }

    function generateStars() {
      const rating = parseInt(document.getElementById('rating').value);
      const starPreview = document.getElementById('starPreview');
      starPreview.innerHTML = '';
      if (!isNaN(rating) && rating >= 1 && rating <= 5) {
        for (let i = 0; i < rating; i++) {
          starPreview.innerHTML += '<i class="fas fa-star"></i>';
        }
      }
    }

    let currentIndex = 0;
    function updateSlider() {
      const track = document.getElementById('testimonialTrack');
      track.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function nextSlide() {
      const slides = document.querySelectorAll('.testimonial-slide');
      if (currentIndex < slides.length - 1) {
        currentIndex++;
        updateSlider();
      }
    }

    function prevSlide() {
      if (currentIndex > 0) {
        currentIndex--;
        updateSlider();
      }
    }


    // FAQ part 
      document.querySelectorAll('.faq-toggle').forEach(button => {
    button.addEventListener('click', () => {
      const content = button.nextElementSibling;
      const icon = button.querySelector('.faq-icon');

      content.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    });
  });

   function openModal() {
    document.getElementById('registerModal').classList.remove('hidden');
    document.getElementById('registerModal').classList.add('flex');

  }
  function openLoginModal() {
    document.getElementById('loginModal').classList.remove('hidden');
    document.getElementById('loginModal').classList.add('flex');
  }

  function closeLoginModal() {
     document.getElementById('loginModal').classList.add('hidden');
    document.getElementById('loginModal').classList.remove('flex');
  }

  function closeModal() {
    document.getElementById('registerModal').classList.add('hidden');
    document.getElementById('registerModal').classList.remove('flex');
  }

  function toggleFields() {
    const userType = document.getElementById('userType').value;
    const doctorFields = document.getElementById('doctorFields');
    if (userType === 'doctor') {
      doctorFields.classList.remove('hidden');
    } else {
      doctorFields.classList.add('hidden');
    }
  }
  