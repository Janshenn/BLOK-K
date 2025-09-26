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
        <a href="#contact">Kontak</a>
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
      <h2>Tentang Saya</h2>
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