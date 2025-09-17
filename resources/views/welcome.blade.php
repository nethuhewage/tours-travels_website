<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galle Tours & Travels</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body class="font-sans antialiased bg-white">
<div id="slider" class="relative h-screen bg-cover bg-center transition-all duration-1000"
     style="background-image: url('https://www.galletourssrilanka.com/upload/slider/-249828927_190953311979_1569301381_n.jpg');">
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold uppercase">Choose the Best Tour Package</h1>
            <p class="mt-4 text-lg md:text-xl max-w-2xl">
                Thousands of tourists take vacations to these exotic places every year.<br>
                Our private guided travel service is your best bet.
            </p>
            <a href="#contact" 
               class="mt-6 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-6 py-3 rounded-full">
               Contact Us
            </a>
        </div>

        <!-- Bottom Badges -->
        <div class="absolute right-6 -mt-[80px] flex space-x-4">
            <img src="https://www.galletourssrilanka.com/assets/img/recomendado-por-tripadvisortri.jpg" class="h-16" alt="Tripadvisor">
            <img src="https://www.galletourssrilanka.com/assets/img/viator-top-rated.jpg" class="h-16" alt="Viator">
        </div>

    <!-- Navigation buttons -->
    <button onclick="prevHeroSlide()" 
            class="absolute left-5 top-1/2 transform -translate-y-1/2 bg-white/30 text-white px-4 py-2 rounded-full hover:bg-white/50">‹</button>
    <button onclick="nextHeroSlide()" 
            class="absolute right-5 top-1/2 transform -translate-y-1/2 bg-white/30 text-white px-4 py-2 rounded-full hover:bg-white/50">›</button>


    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 bg-transparent transition-transform duration-300">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="https://www.galletourssrilanka.com/assets/img/logo.png" class="h-13 w-auto" alt="Logo">
        </div>

        <!-- Nav Links -->
        <div class="hidden md:flex space-x-8 text-white font-semibold" id="nav-links">
            <a href="#" class="hover:text-yellow-600">Home</a>
            <a href="#" class="hover:text-yellow-600">About Us</a>
            <a href="#" class="hover:text-yellow-600">Service</a>
            <a href="#" class="hover:text-yellow-600">Tour Packages</a>
            <a href="#" class="hover:text-yellow-600">Contact Us</a>
        </div>

        <!-- Call Button -->
        <a href="tel:+94777220979" 
           class="hidden md:flex bg-yellow-400 hover:bg-yellow-500 text-white font-bold px-4 py-2 rounded-full flex items-center space-x-2">
            <i class="fas fa-phone"></i>
            <span>Call Us: +94 (77) 722 0979</span>
        </a>

        <!-- Hamburger Button -->
        <button id="nav-toggle" class="md:hidden text-white focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <div class="hidden md:hidden bg-black/90" id="mobile-menu">
        <a href="#" class="block px-6 py-3 text-white hover:bg-yellow-500">Home</a>
        <a href="#" class="block px-6 py-3 text-white hover:bg-yellow-500">About Us</a>
        <a href="#" class="block px-6 py-3 text-white hover:bg-yellow-500">Service</a>
        <a href="#" class="block px-6 py-3 text-white hover:bg-yellow-500">Tour Packages</a>
        <a href="#" class="block px-6 py-3 text-white hover:bg-yellow-500">Contact Us</a>
        <a href="tel:+94777220979" class="block px-6 py-3 text-white hover:bg-yellow-500 flex items-center space-x-2">
            <i class="fas fa-phone"></i>
            <span>Call Us: +94 (77) 722 0979</span>
        </a>
    </div>
</nav>
</div>

<section class="bg-gray-50 py-16">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">
    <!-- Heading -->
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-4xl md:text-4xl font-bold text-gray-900">Why Choose Us</h2>
      <p class="mt-4 text-gray-600 leading-relaxed">
        Galle Tours is a full-service, luxury travel and tour company in Sri Lanka. 
        We are dedicated to providing impeccable customer satisfaction by rendering 
        excellent service and quality tourist care in order to furnish a fun, clean, 
        enjoyable atmosphere at an acceptable price. We maintain a friendly, creative, 
        hassle-free vacation experience to our clients around the world.
      </p>
    </div>

    <!-- Content -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <!-- Left Image Stack -->
      <div class="relative left-10">
        <!-- Main Big Image -->
        <img src="https://www.galletourssrilanka.com/assets/img/why-choose-us/why-choose-us.jpg" 
             alt="Why Choose Us Main" 
             class="rounded-xl shadow-lg w-62">

        <!-- Small Image Top Left -->
        <img src="https://www.galletourssrilanka.com/assets/img/why-choose-us/thumb.jpg" 
             alt="Whale Watching" 
             class="absolute -top-8 -left-8 w-35 h-27 object-cover rounded-xl shadow-lg">

        <!-- Small Image Bottom Right -->
        <img src="https://www.galletourssrilanka.com/assets/img/why-choose-us/thumb-2.jpg" 
             alt="Surfing" 
             class="absolute -bottom-8 left-[250px] w-35 h-27 object-cover rounded-xl shadow-lg">
      </div>

      <div class="grid grid-cols-2 gap-8 text-center">
        <!-- Service 1 -->
        <div>
            <div class="flex justify-center items-center w-20 h-20 mx-auto rounded-full text-yellow-500 border text-3xl">
                <i class="fas fa-plane"></i>
            </div>
            <h3 class="mt-4 font-semibold text-gray-900 text-xl">Airport Transfer</h3>
            <p class="text-gray-600 text-sm mt-2">
                Travel to your desired destinations with some of the best airport transfers.
            </p>
        </div>


        <!-- Service 2 -->
        <div>
          <div class="flex justify-center items-center w-20 h-20 mx-auto rounded-full text-yellow-500 border text-3xl">
            <i class="fas fa-map"></i>
          </div>
          <h3 class="mt-4 font-semibold text-gray-900 text-xl">Arrange Tours</h3>
          <p class="text-gray-600 text-sm mt-2">
            Arrange exclusive tours which let you discover the best of Sri Lanka.
          </p>
        </div>

        <!-- Service 3 -->
        <div>
          <div class="flex justify-center items-center w-20 h-20 mx-auto rounded-full text-yellow-500 border text-3xl">
            <i class="fas fa-taxi"></i>
          </div>
          <h3 class="mt-4 font-semibold text-gray-900 text-xl">Taxi Service</h3>
          <p class="text-gray-600 text-sm mt-2">
            Providing comfortable clean vehicles with professional drivers.
          </p>
        </div>

        <!-- Service 4 -->
        <div>
          <div class="flex justify-center items-center w-20 h-20 mx-auto rounded-full text-yellow-500 border text-3xl">
            <i class="fas fa-hotel"></i>
          </div>
          <h3 class="mt-4 font-semibold text-gray-900 text-xl">Arrange Accommodation</h3>
          <p class="text-gray-600 text-sm mt-2">
            Arrange accommodation for you as per your comfort and budget.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <!-- Heading -->
    <div class="text-center max-w-3xl mx-auto">
      <h2 class="text-4xl md:text-4xl font-bold text-gray-900">Popular Tour Package</h2>
      <p class="mt-4 text-gray-600 leading-relaxed">
        Thousands of tourists take vacations this exotic places every year.
         If you have a penchant for traveling, but wish to avert any potential
          mishaps in the chaos of tourism, 
          our private guided travel service is your best bet.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
        <div class="border rounded-lg overflow-hidden shadow-lg">
            <img src="https://www.galletourssrilanka.com/upload/tour-package/-116689403647_74513737259_1570513994_n.jpg" alt="Whale Watching" class="w-full h-48 object-cover">
            <div class="p-4">
                <img src="https://www.galletourssrilanka.com/assets/img/rated.png" alt="USD 50.00" class="absolute w-20 h-20 -mt-[200px]">
                <h3 class="text-xl font-semibold">Whale Watching Group Tour</h3>
                <p class="text-gray-600">Whale and Dolphin watching is an easy sport that you can take up during the months of December to April. All you need to take is...</p>
                <a href="#" class="mt-4 inline-block bg-yellow-400 text-white px-4 py-2 rounded">Explore Now</a>
            </div>
        </div>
        <div class="border rounded-lg overflow-hidden shadow-lg">
            <img src="https://www.galletourssrilanka.com/upload/tour-package/-323879409_190879261497_1569302004_n.jpg" alt="Udawalewe Safari" class="w-full h-48 object-cover">
            <div class="p-4">
                <img src="https://www.galletourssrilanka.com/assets/img/rated.png" alt="USD 70.00" class="absolute w-20 h-20 -mt-[200px]">
                <h3 class="text-xl font-semibold">One Day Udawalewe Safari</h3>
                <p class="text-gray-600">If there's one word that defines Sri Lanka, it's 'wild'. And as home to some 500 elephants, Udawalewe National Park is c...</p>
                <a href="#" class="mt-4 inline-block bg-yellow-400 text-white px-4 py-2 rounded">Explore Now</a>
            </div>
        </div>
        <div class="border rounded-lg overflow-hidden shadow-lg">
            <img src="https://www.galletourssrilanka.com/upload/tour-package/-133111608049_58091532857_1570511468_n.jpg" alt="Two Days Udawalewe Safari" class="w-full h-48 object-cover">
            <div class="p-4">
                <img src="https://www.galletourssrilanka.com/assets/img/rated.png" alt="USD 80.00" class="absolute w-20 h-20 -mt-[200px]">
                <h3 class="text-xl font-semibold">Two Days Udawalewe Safari</h3>
                <p class="text-gray-600">If there's one word that defines Sri Lanka, it's 'wild'. And as home to some 500 elephants, Udawalewe National Park is c...</p>
                <a href="#" class="mt-4 inline-block bg-yellow-400 text-white px-4 py-2 rounded">Explore Now</a>
            </div>
        </div>
    </div>
</div>
</section>


<!-- Feedback -->

<section class="bg-gray-100 py-16">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800">What Our Clients Say</h2>
      <p class="text-gray-600 mt-2">A few words from clients who toured with us in Sri Lanka</p>
    </div>


   <div class="flex flex-col lg:flex-row items-start lg:items-stretch gap-4 lg:ml-[250px] ml-4 mb-10">
      
      <!-- Carousel -->
      <div class="relative max-w-3xl w-full lg:w-3/4">
        <div id="testimonialCarousel" class="overflow-hidden relative">
          <!-- Slides -->
          <div class="flex transition-transform duration-500" id="slides">
            
            <!-- Testimonial 1 -->
            <div class="w-full flex-shrink-0 px-6 h-50">
              <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col md:flex-row items-center h-60">
                <img src="https://www.galletourssrilanka.com/upload/comments/-580447156_190622693750_1569302115_n.jpg" 
                     alt="testimonial" class="w-24 h-24 rounded-full shadow-md object-cover mr-6">
                <div class="flex-1">
                  <h3 class="text-xl font-semibold text-gray-900">Dors Mcdonald</h3>
                  <span class="text-sm text-gray-500">United Kingdom</span>
                  <p class="mt-4 text-gray-600 text-base leading-relaxed">
                    Galle Tours is a wonderful tour company. We have used them both times we
                    visited. They are knowledgeable, trustworthy and always helpful!
                  </p>
                  <!-- Stars -->
                  <div class="mt-3 flex text-yellow-400 text-lg">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="w-full flex-shrink-0 px-6">
              <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col md:flex-row items-center h-60">
                <img src="https://www.galletourssrilanka.com/upload/comments/-336237761_190866903145_1569302198_n.jpg" 
                     alt="testimonial" class="w-24 h-24 rounded-full shadow-md object-cover mr-6">
                <div class="flex-1">
                  <h3 class="text-xl font-semibold text-gray-900">Mini Morley-Fletcher</h3>
                  <span class="text-sm text-gray-500">United Kingdom</span>
                  <p class="mt-4 text-gray-600 text-base leading-relaxed">
                    I highly recommend Galle Tours and Mahesh Kumara. His knowledge is second
                    to none and he treats you like family. Highly recommended!
                  </p>
                  <!-- Stars -->
                  <div class="mt-3 flex text-yellow-400 text-lg">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Controls -->
        <button onclick="prevSlide()" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full p-2">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button onclick="nextSlide()" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white shadow-md rounded-full p-2">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>

      <!-- TripAdvisor Embed -->
      <div class="lg:w-1/4 w-full flex justify-center lg:justify-end">
        <div id="TA_selfserveprop837" class="w-full max-w-sm">
          <script src="https://www.tripadvisor.com/WidgetEmbed-selfserveprop?border=true&popIdx=true&iswide=false&locationId=16632663&display_version=2&uniq=837&rating=true&lang=en_US&nreviews=0&writereviewlink=true" async></script>
        </div>
      </div>
    </div>
  </div>
</section>




<!--  Contact Us  -->

  <section class="bg-gray-50 py-16">
  <div class="container mx-auto px-4 text-center">
    <!-- Heading -->
    <div class="max-w-3xl mx-auto mb-12">
      <h2 class="text-3xl font-bold text-gray-800">Contact Us</h2>
      <p class="text-gray-600 mt-2">
        Our goal is to create a Tailormade vacation of your dreams. The possibilities are endless, 
        so with your help we can get to know you and your interests and create the perfect travel experience just for you.
      </p>
    </div>

    <!-- Contact Cards -->
    <div class="flex flex-col md:flex-row justify-center items-stretch gap-8 mb-12">
      
      <!-- Location -->
      <div class="flex-1 bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4 hover:shadow-2xl transition">
        <div class="bg-yellow-400 text-white p-4 rounded-full flex items-center justify-center text-2xl">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="text-left">
          <h4 class="font-bold text-gray-900">Our Location</h4>
          <p class="text-gray-600 mt-1">186, Colombo Road, Mahamodara, Galle, Sri Lanka</p>
        </div>
      </div>

      <!-- Phone -->
      <div class="flex-1 bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4 hover:shadow-2xl transition">
        <div class="bg-yellow-400 text-white p-4 rounded-full flex items-center justify-center text-2xl">
          <i class="fas fa-phone"></i>
        </div>
        <div class="text-left">
          <h4 class="font-bold text-gray-900">Call Us</h4>
          <p class="text-gray-600 mt-1">+94 (77) 722 0979</p>
        </div>
      </div>

      <!-- Email -->
      <div class="flex-1 bg-white rounded-xl shadow-lg p-6 flex items-center space-x-4 hover:shadow-2xl transition">
        <div class="bg-yellow-400 text-white p-4 rounded-full flex items-center justify-center text-2xl">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="text-left">
          <h4 class="font-bold text-gray-900">Email</h4>
          <p class="text-gray-600 mt-1">galletourssrilanka@gmail.com</p>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg p-8">
      <h3 class="text-3xl font-bold text-gray-900 mb-6">Send Us a Message</h3>
      <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <input type="text" placeholder="Your Name" class="p-4 border rounded-lg w-full focus:ring-2 focus:ring-yellow-400 focus:outline-none">
        <input type="email" placeholder="Your Email" class="p-4 border rounded-lg w-full focus:ring-2 focus:ring-yellow-400 focus:outline-none">
        <input type="text" placeholder="Subject" class="p-4 border rounded-lg w-full md:col-span-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
        <textarea placeholder="Message" rows="5" class="p-4 border rounded-lg w-full md:col-span-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none"></textarea>
        <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold px-6 py-3 rounded-full md:col-span-2 transition">Send Message</button>
      </form>
    </div>
  </div>
</section>

<section>
    
<footer class="bg-gray-900 text-white text-center py-6">
    <div class="mb-4">
        <img src="https://www.galletourssrilanka.com/assets/img/logo.png" alt="Galle Tours & Travels Logo" class="mx-auto mb-2 h-13 w-auto">
        <h3 class="text-xl font-semibold">Galle Tours & Travels</h3>
    </div>
    <nav class="mb-4">
        <a href="#" class="mx-2 hover:text-yellow-400">Home</a>
        <a href="#" class="mx-2 hover:text-yellow-400">About Us</a>
        <a href="#" class="mx-2 hover:text-yellow-400">Services</a>
        <a href="#" class="mx-2 hover:text-yellow-400">Tour Packages</a>
        <a href="#" class="mx-2 hover:text-yellow-400">Contact</a>
    </nav>
    <p>Copyright © 2019 | All Rights Reserved. | Made With <a href="http://www.webmaker.lk" class="text-yellow-400">Www.Webmaker.lk</a></p>
</footer>
</section>
<!-- Scripts for Slider -->

<script>
    const images = [
        "https://www.galletourssrilanka.com/upload/slider/-249828927_190953311979_1569301381_n.jpg",
        "https://www.galletourssrilanka.com/upload/slider/-473881134_190729259772_1569301280_n.jpg",
        "https://www.galletourssrilanka.com/upload/slider/-102807244_191100333662_1569301185_n.jpg",
        "https://www.galletourssrilanka.com/upload/slider/-61931170441_129271970465_1569570971_n.jpg",
        "https://www.galletourssrilanka.com/upload/slider/-115391016469_75812124437_1569569705_n.jpg",
        "https://www.galletourssrilanka.com/upload/slider/-127879947539_63323193367_1569569593_n.jpg"
    ];

    let heroIndex = 0;
    const slider = document.getElementById("slider");
    const navbar = document.querySelector("nav");

    function showHeroSlide(i) {
        slider.style.backgroundImage = `url('${images[i]}')`;
    }

    function nextHeroSlide() {
        heroIndex = (heroIndex + 1) % images.length;
        showHeroSlide(heroIndex);
    }

    function prevHeroSlide() {
        heroIndex = (heroIndex - 1 + images.length) % images.length;
        showHeroSlide(heroIndex);
    }

    // Auto-slide every 5 seconds
    setInterval(nextHeroSlide, 5000);

    // Navbar hide/show logic
    let lastScrollTop = 0;
    window.addEventListener("scroll", function () {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > lastScrollTop) {
            navbar.classList.add("-translate-y-full");
        } else {
            navbar.classList.remove("-translate-y-full");
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });
</script>
<script>
  const slides = document.getElementById("slides");
  const totalSlides = slides.children.length;
  let testimonialIndex = 0;

  function showSlide(i) {
    slides.style.transform = `translateX(-${i * 100}%)`;
  }

  function nextSlide() {
    testimonialIndex = (testimonialIndex + 1) % totalSlides;
    showSlide(testimonialIndex);
  }

  function prevSlide() {
    testimonialIndex = (testimonialIndex - 1 + totalSlides) % totalSlides;
    showSlide(testimonialIndex);
  }

  // Auto-slide every 5s
  setInterval(nextSlide, 5000);
</script>

<script>
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    navToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>


</body>
</html>
