<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BLOK-K - Kontak</title>
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