  <!DOCTYPE html>
  <html lang="id">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOK-K - Website Lengkap</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
      /* Semua CSS yang sudah ada sebelumnya */
      :root {
        --bg: #f8fafc;
        --white: #ffffff;
        --muted: #6b7280;
        --primary: #0b5cff;
        --accent: #06b6d4;
        --card-shadow: 0 10px 30px rgba(2, 6, 23, 0.06);
        --radius: 14px;
        font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      }

      * {
        box-sizing: border-box;
      }

      body {
        margin: 0;
        background: var(--bg);
        color: #0f172a;
        -webkit-font-smoothing: antialiased;
      }

      a {
        color: inherit;
        text-decoration: none;
      }

      /* NAV */
      header.site-nav {
        position: sticky;
        top: 0;
        z-index: 50;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.7));
        backdrop-filter: blur(6px);
        border-bottom: 1px solid rgba(15, 23, 42, 0.05);
      }

      .nav-inner {
        max-width: 1200px;
        margin: 0 auto;
        padding: 16px 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
      }

      .brand {
        display: flex;
        align-items: center;
        gap: 12px;
      }

      .brand .logo-mark {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        object-fit: cover;
        box-shadow: 0 6px 18px rgba(11, 92, 255, 0.12);
      }

      .brand .title {
        font-weight: 800;
        font-size: 18px;
      }

      nav.site-menu {
        display: flex;
        gap: 18px;
        align-items: center;
      }

      nav.site-menu a {
        font-weight: 600;
        color: #0f172a;
        opacity: 0.9;
      }

      .cta {
        display: flex;
        gap: 10px;
        align-items: center;
      }

      .btn {
        padding: 10px 16px;
        border-radius: 10px;
        border: 0;
        cursor: pointer;
        font-weight: 700;
      }

      .btn.ghost {
        background: transparent;
        color: var(--primary);
        border: 1px solid rgba(11, 92, 255, 0.08);
      }

      .btn.primary {
        background: var(--primary);
        color: #fff;
      }

      /* HERO */
      .hero {
        max-width: 1200px;
        margin: 36px auto;
        padding: 48px 24px;
        display: grid;
        grid-template-columns: 1fr 420px;
        gap: 32px;
        align-items: center;
      }

      .kicker {
        display: inline-block;
        background: rgba(6, 182, 212, 0.12);
        color: var(--accent);
        padding: 6px 10px;
        border-radius: 999px;
        font-weight: 700;
        font-size: 13px;
      }

      .hero h1 {
        font-size: 40px;
        line-height: 1.03;
        margin: 14px 0 12px;
      }

      .hero p.lead {
        color: var(--muted);
        font-size: 16px;
        margin: 0 0 22px;
      }

      .hero .actions {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
      }

      .hero-card {
        background: linear-gradient(180deg, rgba(6, 182, 212, 0.06), rgba(11, 92, 255, 0.03));
        border-radius: 14px;
        padding: 18px;
        box-shadow: var(--card-shadow);
        height: 100%;
      }

      .hero-illustration {
        height: 260px;
        border-radius: 10px;
        background: linear-gradient(135deg, #eef2ff, #e6fffa);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .carousel {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  width: 100%;
  max-width: 400px; /* bisa kamu atur sesuai card */
  margin: 0 auto;
}

.carousel .slides {
  display: flex;
  transition: transform 0.5s ease;
  width: 300%; /* kalau ada 3 gambar (100% * jumlah gambar) */
}

.carousel img {
  width: 100%; /* lebar penuh per "slot" */
  height: 200px;
  object-fit: cover;
  flex: 0 0 100%; /* setiap gambar ambil 100% container */
}
      /* FEATURES */
      .features {
        display: flex;
        gap: 12px;
        margin-top: 18px;
        flex-wrap: wrap;
      }

      .feature {
        background: var(--white);
        padding: 12px 14px;
        border-radius: 10px;
        box-shadow: 0 6px 16px rgba(2, 6, 23, 0.04);
        min-width: 170px;
      }

      /* POSTS */
      .section {
        max-width: 1200px;
        margin: 36px auto;
        padding: 0 24px;
      }

      .posts-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
      }

      .card {
        background: var(--white);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--card-shadow);
        display: flex;
        flex-direction: column;
      }

      .card .thumb {
        height: 180px;
        background-size: cover;
        background-position: center;
      }

      .card .content {
        padding: 18px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        flex: 1;
      }

      .card h3 {
        margin: 0;
        font-size: 18px;
      }

      .card p {
        margin: 0;
        color: var(--muted);
        font-size: 14px;
        flex: 1;
      }

      /* TEAM */
      .team-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-top: 12px;
      }

      .member {
        background: var(--white);
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(2, 6, 23, 0.04);
      }

      .member img {
        width: 112px;
        height: 112px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 12px;
      }

      .member .name {
        font-weight: 700;
      }

      .member .role {
        color: var(--muted);
        font-size: 14px;
        margin-bottom: 8px;
      }

      .member .bio {
        font-size: 13px;
        color: var(--muted);
      }

      /* SKILLS */
      .skills {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        margin-top: 18px;
      }

      .skill {
        background: linear-gradient(90deg, #fff, #fbfdff);
        padding: 10px 14px;
        border-radius: 10px;
        box-shadow: 0 6px 18px rgba(2, 6, 23, 0.03);
        font-weight: 600;
      }

      /* ABOUT */
      .about {
        background: var(--white);
        padding: 26px;
        border-radius: 12px;
        box-shadow: var(--card-shadow);
        margin-top: 28px;
      }

      /* CTA STRIP */
      .cta-strip {
        margin-top: 36px;
        padding: 22px;
        border-radius: 12px;
        background: linear-gradient(90deg, var(--primary), var(--accent));
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
      }

      /* FOOTER */
      footer {
        background: #1f2937;
        color: #fff;
        padding: 60px 40px 20px;
        margin-top: 60px;
      }

      .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
        margin-bottom: 40px;
      }

      .footer-section h3 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 16px;
      }

      .footer-section ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .footer-section li {
        margin-bottom: 8px;
      }

      .footer-section a {
        color: #d1d5db;
        font-size: 14px;
      }

      .footer-bottom {
        max-width: 1200px;
        margin: 0 auto;
        border-top: 1px solid #374151;
        padding-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .social-links {
        display: flex;
        gap: 16px;
      }

      .social-links a {
        color: #d1d5db;
      }

      /* RESPONSIVE */
      @media (max-width:1024px) {
        .hero {
          grid-template-columns: 1fr;
          text-align: left;
        }

        .hero-card {
          margin-top: 18px;
        }

        .posts-grid {
          grid-template-columns: repeat(2, 1fr);
        }

        .team-grid {
          grid-template-columns: repeat(2, 1fr);
        }

        .footer-content {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      @media (max-width:640px) {
        .nav-inner {
          padding: 12px;
        }

        .hero {
          padding: 28px 16px;
        }

        .hero h1 {
          font-size: 28px;
        }

        .posts-grid {
          grid-template-columns: 1fr;
        }

        .team-grid {
          grid-template-columns: 1fr;
        }

        .cta-strip {
          flex-direction: column;
          align-items: flex-start;
        }

        .footer-content {
          grid-template-columns: 1fr;
          gap: 30px;
        }

        .footer-bottom {
          flex-direction: column;
          gap: 20px;
          text-align: center;
        }
      }
    </style>
  </head>

  <body>
    <!-- NAVBAR -->
    <header class="site-nav" role="banner">
      <div class="nav-inner">
        <div class="brand">
          <img src="{{ asset('images/logo.png') }}" alt="Logo BLOK-K" class="logo-mark">

          <div class="title">BLOK-K</div>

        </div>
        <nav class="site-menu" role="navigation" aria-label="Main navigation">
          <a href="#">Home</a>
          <a href="#about">About</a>
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

  <!-- HERO -->
    <section class="hero" aria-labelledby="hero-title">
      <div>
        <h1 id="hero-title">Bergabunglah dengan kami untuk melatih pengalaman organisasi dan bangun portofolio anda!</h1>
        <p class="lead">Tunjukkan karya terbaik organisasi Anda. Bangun citra profesional, raih dukungan, dan perluas jaringan bersama kami.</p>
        <div class="actions">
          <a class="btn primary" href="#">Mulai Sekarang</a>
          <a class="btn ghost" href="#">Lihat Template</a>
        </div>
        <div class="features" aria-hidden="true">
          <div class="feature"><strong>Drag & Drop</strong>
            <div style="font-size:13px;color:var(--muted)">Susun halaman tanpa coding</div>
          </div>
          <div class="feature"><strong>SEO Friendly</strong>
            <div style="font-size:13px;color:var(--muted)">Optimasi agar mudah ditemukan</div>
          </div>
          <div class="feature"><strong>Responsive</strong>
            <div style="font-size:13px;color:var(--muted)">Tampil baik di semua perangkat</div>
          </div>
        </div>
      </div>
      <!-- Preview Template -->
      <aside class="hero-card" aria-hidden="true">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px">
          <div style="font-weight:800">Preview Template</div>
          <div style="font-size:13px;color:var(--muted)">Live demo</div>
        </div>

        <div class="hero-illustration carousel">
          <div class="slides">
            <img src="images/logo.png" alt="Template 1">
            <img src="https://via.placeholder.com/400x200/06b6d4/ffffff?text=Template+2" alt="Template 2">
            <img src="https://via.placeholder.com/400x200/10b981/ffffff?text=Template+3" alt="Template 3">
          </div>
        </div>

        <div style="margin-top:auto;display:flex;justify-content:space-between;align-items:center">
          <div>
            <div style="font-weight:700">Tema: Cozy</div>
            <div style="font-size:13px;color:var(--muted)">Minimal & modern</div>
          </div>
          <button class="btn ghost">Preview</button>
        </div>
      </aside>
    </section>

      <!-- POSTS -->
      <section id="posts" class="section" aria-labelledby="posts-title">
        <h2 id="posts-title" style="text-align:center;font-size:28px;margin-bottom:20px">Artikel Terbaru</h2>
        <div class="posts-grid">
          <article class="card">
            <div class="thumb" style="background-image:url('https://via.placeholder.com/800x400?text=Artikel+1');"></div>
            <div class="content">
              <h3>5 Kebiasaan Produktif Setiap Hari</h3>
              <p>Pelajari kebiasaan sederhana yang meningkatkan fokus dan hasil kerja harianmu.</p>
              <div style="margin-top:auto"><a href="#" style="color:var(--primary);font-weight:700">Baca Selengkapnya
                  →</a></div>
            </div>
            
          </article>
          <article class="card">
            <div class="thumb" style="background-image:url('https://via.placeholder.com/800x400?text=Artikel+2');"></div>
            <div class="content">
              <h3>Panduan Lengkap SEO untuk Pemula</h3>
              <p>Langkah praktis menaikkan visibilitas situs tanpa biaya iklan besar.</p>
              <div style="margin-top:auto"><a href="#" style="color:var(--primary);font-weight:700">Baca Selengkapnya
                  →</a></div>
            </div>
          </article>
          <article class="card">
            <div class="thumb" style="background-image:url('https://via.placeholder.com/800x400?text=Artikel+3');"></div>
            <div class="content">
              <h3>Desain Responsif: Kunci Tampilan Lebih Baik</h3>
              <p>Tips mendesain agar tampilan situs rapi di desktop maupun ponsel.</p>
              <div style="margin-top:auto"><a href="#" style="color:var(--primary);font-weight:700">Baca Selengkapnya
                  →</a></div>
            </div>
          </article>
        </div>
      </section>

      <!-- TEAM -->
      <section id="team" class="section" aria-labelledby="team-title">
        <h2 id="team-title" style="text-align:center;font-size:28px;margin-bottom:20px">Penulis Kami</h2>
        <div class="team-grid">
          <div class="member">
            <img src="https://via.placeholder.com/240?text=Andi" alt="Andi Pratama">
            <div class="name">M. Budiman Rocky Setiawan</div>
            <div class="role">BackEnd Programming</div>
            <div class="bio">Menulis tutorial pemrograman, best practices, dan tips debugging.</div>
            <div class="skills" style="margin-top:12px;">
              <span class="skill">HTML</span><span class="skill">CSS</span><span class="skill">Laravel</span>
            </div>
          </div>
          <div class="member">
            <img src="https://via.placeholder.com/240?text=Janshen" alt="Janshen">
            <div class="name">Janshen</div>
            <div class="role">FrontEnd Programming</div>
            <div class="bio">Fokus pada artikel lifestyle, wellness, dan storytelling.</div>
            <div class="skills" style="margin-top:12px;">
              <span class="skill">Penulisan</span><span class="skill">SEO</span><span class="skill">Editorial</span>
            </div>
          </div>
          <div class="member">
            <img src="https://via.placeholder.com/240?text=Citra" alt="Citra Dewi">
            <div class="name">Dennis Ananda</div>
            <div class="role">BackEnd Programming</div>
            <div class="bio">Membahas UI/UX, desain produk, dan aset visual untuk web.</div>
            <div class="skills" style="margin-top:12px;">
              <span class="skill">UI/UX</span><span class="skill">Figma</span><span class="skill">Illustration</span>
            </div>
          </div>
          <div class="member">
            <img src="https://via.placeholder.com/240?text=Dimas" alt="Dimas Saputra">
            <div class="name">Isro Indra Septian</div>
            <div class="role">FrontEnd Programming</div>
            <div class="bio">Menjelajah tempat baru dan berbagi cerita kuliner & budaya.</div>
            <div class="skills" style="margin-top:12px;">
              <span class="skill">Fotografi</span><span class="skill">Storytelling</span><span class="skill">Travel</span>
            </div>
          </div>
        </div>
      </section>

      <!-- ABOUT -->
      <section id="about" class="section" aria-labelledby="about-title">
        <div class="about">
          <h2 id="about-title" style="text-align:center">Tentang Kami</h2>
          <p style="text-align:center;color:var(--muted);max-width:900px;margin:12px auto 0">
            Blog dibuat untuk membantu penulis berbagi ide dan pengalaman dalam dunia pemrograman, desain, dan teknologi.
            Kami percaya bahwa berbagi pengetahuan adalah kunci untuk pertumbuhan bersama.
          </p>
        </div>
      </section>

      <!-- CTA STRIP -->
      <section class="section">
        <div class="cta-strip">
          <div>
            <h3 style="margin:0;font-size:20px">Siap Membangun Website Organisasi Anda?</h3>
            <p style="margin:8px 0 0;opacity:0.9">Mulai gratis dan tingkatkan kapan saja</p>
          </div>
          <a href="#" class="btn" style="background:white;color:var(--primary)">Daftar Sekarang</a>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <footer role="contentinfo">
      <div class="footer-content">
        <!-- Brand Section -->
        <div class="footer-section">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
            <img src="https://via.placeholder.com/42" alt="Logo BLOK-K"
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
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#posts">Artikel</a></li>
            <li><a href="#team">Penulis</a></li>
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
            <p style="margin-bottom: 8px;">Email: info@blok-k.com</p>
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
          <a href="#" aria-label="Twitter">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
            </svg>
          </a>
          <a href="#" aria-label="Instagram">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
          </a>
          <a href="#" aria-label="LinkedIn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
            </svg>
          </a>
        </div>
      </div>
    </footer>
      <script>
      const carousel = document.querySelector('.carousel');
      const slides = carousel.querySelector('.slides');
      const images = carousel.querySelectorAll('img');
      

      let index = 0;
      function showSlide(i) {
        index = (i + images.length) % images.length;
        slides.style.transform = `translateX(-${index * 260}px)`;
      }
      setInterval(() => showSlide(index + 1), 3000);
    </script>
  </body>


  </html>