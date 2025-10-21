<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Artikel - BLOK-K</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body style="font-family:'Inter', sans-serif; background:#f9fafb; margin:0; padding:0;">

<header class="site-nav" style="background:#fff; border-bottom:1px solid #e5e7eb; padding:16px 24px; display:flex; justify-content:space-between; align-items:center;">
  <div style="display:flex; align-items:center; gap:10px;">
    <img src="{{ asset('images/logo.png') }}" alt="Logo BLOK-K" style="width:42px; height:42px;">
    <div style="font-weight:800; font-size:18px;">BLOK-K</div>
  </div>

  <nav style="display:flex; gap:20px;">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('About') }}">About</a>
    <a href="{{ route('articles.index') }}" class="active">Artikel</a>
  </nav>

  <div class="cta" style="display:flex;align-items:center;gap:10px;">
    @auth
      <a href="{{ route('profile') }}" style="display:flex;align-items:center;gap:10px;text-decoration:none;color:inherit;">
        <img src="{{ Auth::user()->profile_photo ? asset('storage/' . Auth::user()->profile_photo) : asset('images/Avatar.png') }}" 
             alt="Avatar" style="width:38px;height:38px;border-radius:50%;object-fit:cover;">
        <span style="font-weight:600;">{{ Auth::user()->name }}</span>
      </a>
      <form action="{{ route('logout') }}" method="POST" style="margin:0;">
        @csrf
        <button type="submit" class="btn primary">Logout</button>
      </form>
    @endauth

    @guest
      <a href="{{ route('login') }}" class="btn ghost">Login</a>
      <a href="{{ route('register') }}" class="btn primary">Buat Website</a>
    @endguest
  </div>
</header>

<main style="max-width:1000px; margin:40px auto; padding:0 16px;">
  <h1 style="text-align:center; font-weight:800; margin-bottom:24px;">Artikel Terbaru</h1>

  @auth
    <div style="text-align:right; margin-bottom:20px;">
      <a href="{{ route('articles.create') }}" 
         style="background:#2563eb; color:#fff; padding:10px 18px; border-radius:8px; text-decoration:none;">
         + Tambah Artikel
      </a>
    </div>
  @endauth

  @if(session('success'))
    <div style="background:#dcfce7; color:#166534; padding:12px 16px; border-radius:8px; margin-bottom:20px;">
      {{ session('success') }}
    </div>
  @endif

  @if($articles->count())
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:24px;">
      @foreach($articles as $article)
        <div style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; overflow:hidden;">
          @if($article->image)
            <img src="{{ asset('storage/'.$article->image) }}" 
                 alt="{{ $article->title }}" 
                 style="width:100%; height:200px; object-fit:cover;">
          @else
            <img src="https://via.placeholder.com/800x400?text=No+Image" 
                 style="width:100%; height:200px; object-fit:cover;">
          @endif

          <div style="padding:16px;">
            <h3 style="margin:0 0 8px; font-size:18px;">{{ $article->title }}</h3>
            <p style="color:#4b5563; font-size:14px;">{{ Str::limit($article->content, 120) }}</p>
            <small style="color:#9ca3af;">Oleh: {{ $article->user->name ?? 'Anonim' }}</small>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p style="text-align:center; color:#6b7280;">Belum ada artikel.</p>
  @endif
</main>

</body>
</html>
