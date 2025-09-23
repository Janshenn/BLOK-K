  <!doctype html>
  <html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>BLOK-K</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
      :root {
        --bg: #f8fafc;
        --white: #ffffff;
        --muted: #6b7280;
        --primary: #0b5cff;
        --accent: #06b6d4;
        --card-shadow: 0 10px 30px rgba(2,6,23,0.06);
        --radius: 14px;
        font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      }
      * { box-sizing: border-box; }
      body { margin: 0; background: var(--bg); color: #0f172a; -webkit-font-smoothing: antialiased; }
      a { color: inherit; text-decoration: none; }

      /* NAV */
      header.site-nav {
        position: sticky;
        top: 0;
        z-index: 50;
        background: linear-gradient(180deg, rgba(255,255,255,0.85), rgba(255,255,255,0.7));
        backdrop-filter: blur(6px);
        border-bottom: 1px solid rgba(15,23,42,0.05);
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
        box-shadow: 0 6px 18px rgba(11,92,255,0.12);
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
        border: 1px solid rgba(11,92,255,0.08);
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
        background: rgba(6,182,212,0.12);
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
        background: linear-gradient(180deg, rgba(6,182,212,0.06), rgba(11,92,255,0.03));
        border-radius: 14px;
        padding: 18px;
        box-shadow: var(--card-shadow);
        height: 100%;
      }
      .hero-illustration {
        height: 260px;
        border-radius: 10px;
        background: linear-gradient(135deg,#eef2ff,#e6fffa);
        display: flex;
        align-items: center;
        justify-content: center;
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
        box-shadow: 0 6px 16px rgba(2,6,23,0.04);
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
        grid-template-columns: repeat(3,1fr);
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
      .card h3 { margin: 0; font-size: 18px; }
      .card p { margin: 0; color: var(--muted); font-size: 14px; flex: 1; }

      /* TEAM */
      .team-grid {
        display: grid;
        grid-template-columns: repeat(4,1fr);
        gap: 20px;
        margin-top: 12px;
      }
      .member {
        background: var(--white);
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(2,6,23,0.04);
      }
      .member img {
        width: 112px;
        height: 112px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 12px;
      }
      .member .name { font-weight: 700; }
      .member .role { color: var(--muted); font-size: 14px; margin-bottom: 8px; }
      .member .bio { font-size: 13px; color: var(--muted); }

      /* SKILLS */
      .skills {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        margin-top: 18px;
      }
      .skill {
        background: linear-gradient(90deg,#fff,#fbfdff);
        padding: 10px 14px;
        border-radius: 10px;
        box-shadow: 0 6px 18px rgba(2,6,23,0.03);
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
        background: linear-gradient(90deg,var(--primary),var(--accent));
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

      /* RESPONSIVE */
      @media (max-width:1024px) {
        .hero { grid-template-columns:1fr; text-align:left; }
        .hero-card { margin-top:18px; }
        .posts-grid { grid-template-columns:repeat(2,1fr); }
        .team-grid { grid-template-columns:repeat(2,1fr); }
      }
      @media (max-width:640px) {
        .nav-inner { padding:12px; }
        .hero { padding:28px 16px; }
        .hero h1 { font-size:28px; }
        .posts-grid { grid-template-columns:1fr; }
        .team-grid { grid-template-columns:1fr; }
        .cta-strip { flex-direction:column; align-items:flex-start; }
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
    <main>
      <section class="hero" aria-labelledby="hero-title">
        <div>
          <span class="kicker">Template Gratis • Mudah</span>
          <h1 id="hero-title">Buat blog pribadi yang profesional — cepat dan mudah</h1>
          <p class="lead">Template siap pakai, editor drag & drop, dan performa cepat. Cocok untuk portofolio, catatan, dan usaha kecil.</p>
          <div class="actions">
            <a class="btn primary" href="#">Mulai Sekarang</a>
            <a class="btn ghost" href="#">Lihat Template</a>
          </div>
          <div class="features" aria-hidden="true">
            <div class="feature"><strong>Drag & Drop</strong><div style="font-size:13px;color:var(--muted)">Susun halaman tanpa coding</div></div>
            <div class="feature"><strong>SEO Friendly</strong><div style="font-size:13px;color:var(--muted)">Optimasi agar mudah ditemukan</div></div>
            <div class="feature"><strong>Responsive</strong><div style="font-size:13px;color:var(--muted)">Tampil baik di semua perangkat</div></div>
          </div>
        </div>

        <aside class="hero-card" aria-hidden="true">
          <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px">
            <div style="font-weight:800">Preview Template</div>
            <div style="font-size:13px;color:var(--muted)">Live demo</div>
          </div>
          <div class="hero-illustration" role="img" aria-label="Ilustrasi preview template">
            <svg width="260" height="160" viewBox="0 0 260 160" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <rect x="8" y="10" rx="8" ry="8" width="244" height="120" fill="#fff"/>
              <rect x="20" y="28" width="84" height="14" rx="6" fill="#eef2ff"/>
              <rect x="20" y="54" width="200" height="10" rx="6" fill="#f0f9ff"/>
              <rect x="20" y="74" width="140" height="10" rx="6" fill="#eef2ff"/>
            </svg>
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
              <div style="margin-top:auto"><a href="#" style="color:var(--primary);font-weight:700">Baca Selengkapnya →</a></div>
            </div>
          </article>
          <article class="card">
            <div class="thumb" style="background-image:url('https://via.placeholder.com/800x400?text=Artikel+2');"></div>
            <div class="content">
              <h3>Panduan Lengkap SEO untuk Pemula</h3>
              <p>Langkah praktis menaikkan visibilitas situs tanpa biaya iklan besar.</p>
              <div style="margin-top:auto"><a href="#" style="color:var(--primary);font-weight:700">Baca Selengkapnya →</a></div>
            </div>
          </article>
          <article class="card">
            <div class="thumb" style="background-image:url('https://via.placeholder.com/800x400?text=Artikel+3');"></div>
            <div class="content">
              <h3>Desain Responsif: Kunci Tampilan Lebih Baik</h3>
              <p>Tips mendesain agar tampilan situs rapi di desktop maupun ponsel.</p>
              <div style="margin-top:auto"><a href="#" style="color:var(--primary);font-weight:700">Baca Selengkapnya →</a></div>
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
            <img src="{{ asset('images/Testing.png') }}" alt="Logo" width="150">
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
            Blog dibuat untuk membantu penulis berbagi ide
