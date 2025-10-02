<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BLOK-K - Tentang Kami</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <!-- NAVBAR sama dengan home -->
  <header class="site-nav" role="banner">
    <div class="nav-inner">
      <div class="brand">
        <img src="{{ asset('images/logo.png') }}" alt="Logo BLOK-K" class="logo-mark">
        <div class="title">BLOK-K</div>
      </div>
      <nav class="site-menu" role="navigation" aria-label="Main navigation">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('About') }}" class="active">About</a>
        <a href="{{ route('Kontak') }}" class="active">Kontak</a>
        
      </nav>
      <div class="cta">
        @guest
          <a href="{{ route('login') }}" class="btn ghost">Login</a>
          <a href="{{ route('register') }}" class="btn primary">Buat Website</a>
        @endguest
        @auth
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn primary">Logout</button>
          </form>
        @endauth
      </div>
    </div>
  </header>

  <section class="about-section">
  <div class="about-container">
    <!-- FOTO CAROUSEL -->
    <div class="about-photo-carousel">
      <div class="slides">
        <img src="./images/rocky.jpg" alt="Foto 1">
        <img src="foto2.jpg" alt="Foto 2">
        <img src="foto3.jpg" alt="Foto 3">
      </div>
    </div>

    <!-- TEKS -->
    <div class="about-text">
      <h2>M.Budiman Rocky S</h2>
      <h4>BackEnd Programming</h4>
      <p>
        Saya seorang developer yang suka membuat UI/UX yang bersih dan modern,
        dengan fokus pada performa dan pengalaman pengguna.
      </p>
      <a href="#" class="btn-primary">Hubungi Saya</a>
    </div>
  </div>
</section>

<section class="about-section">
  <div class="about-container">
    <!-- FOTO CAROUSEL -->
    <div class="about-photo-carousel">
      <div class="slides">
        <img src="./images/rocky.jpg" alt="Foto 1">
        <img src="foto2.jpg" alt="Foto 2">
        <img src="foto3.jpg" alt="Foto 3">
      </div>
    </div>

    <!-- TEKS -->
    <div class="about-text">
      <h2>Janshen</h2>
      <h4>Frontend Developer</h4>
      <p>
        Saya seorang developer yang suka membuat UI/UX yang bersih dan modern,
        dengan fokus pada performa dan pengalaman pengguna.
      </p>
      <a href="#" class="btn-primary">Hubungi Saya</a>
    </div>
  </div>
</section>

<script>
let index = 0;
const slides = document.querySelector(".about-photo-carousel .slides");
const totalSlides = slides.children.length;

setInterval(() => {
  index = (index + 1) % totalSlides;
  slides.style.transform = `translateX(-${index * 100}%)`;
}, 3000);
</script>

</body>
</html>

<!-- FOOTER -->
    <footer role="contentinfo">
      <div class="footer-content">
        <!-- Brand Section -->
        <div class="footer-section">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
            <img src="{{ asset('images/logo.png') }}" alt="Logo BLOK-K"
              style="width: 42px; height: 42px; border-radius: 10px;">
            <div style="font-weight: 800; font-size: 18px;">BLOK-K</div>
          </div>
          <p style="color: #d1d5db; font-size: 14px; line-height: 1.5;">
            Platform untuk melatih pengalaman organisasi dan membangun portofolio yang mengesankan.
          </p>
        </div>

        <!-- Quick Links -->
        <div class="footer-section">
          <h3>Tautan Cepat</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Kontak</a></li>
          </ul>
        </div>

        <!-- Services -->
        <div class="footer-section">
          <h3>Layanan</h3>
          <ul>
            <li><a href="#">Template Website</a></li>
            <li><a href="#">Panduan SEO</a></li>
            <li><a href="#">Desain Responsif</a></li>
            <li><a href="#">Konsultasi Organisasi</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer-section">
          <h3>Kontak</h3>
          <div style="color: #d1d5db; font-size: 14px; line-height: 1.8;">
            <p style="margin-bottom: 8px;">Email: blok-k@gmail.com</p>
            <p style="margin-bottom: 8px;">Telepon: (021) 1234-5678</p>
            <p style="margin-bottom: 8px;">Alamat: Jl. Teknologi No. 123, Jakarta</p>
          </div>
        </div>
      </div>

      <!-- Copyright & Social -->
      <div class="footer-bottom">
        <div style="color: #9ca3af; font-size: 14px;">
          © 2023 BLOK-K. Hak Cipta Dilindungi.
        </div>
        <div class="social-links">
          <a href="#" aria-label="Facebook">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
            </svg>
          </a>
          <a href="#" aria-label="Instagram">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
          </a>
    </footer>