<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Akun - BLOK-K</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <style>
    .dashboard-container {
        max-width: 1200px;
        margin: 60px auto;
        padding: 30px;
        border-radius: var(--radius);
        background: var(--white);
        box-shadow: 0 10px 30px rgba(11, 92, 255, 0.2), 
                    0 15px 45px rgba(6, 182, 212, 0.15);
        animation: fadeInUp 0.8s ease forwards;
    }

    .profile-card {
        display: flex;
        gap: 30px;
        align-items: center;
        padding: 30px;
        border-radius: var(--radius);
        box-shadow: 0 6px 20px rgba(2,6,23,0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 28px rgba(11,92,255,0.2);
    }

    .profile-avatar {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 4px 12px rgba(11,92,255,0.25);
        flex-shrink: 0;
    }

    .profile-info {
        flex: 1;
    }

    .profile-info h1 {
        font-size: 28px;
        margin: 0 0 8px;
        color: #222;
    }

    .profile-info h3 {
        font-size: 16px;
        font-weight: normal;
        color: var(--muted);
        margin: 0 0 20px;
    }

    .profile-info p {
        font-size: 16px;
        line-height: 1.8;
        margin: 6px 0;
    }

    .btn-back {
        display: inline-block;
        background-color: var(--primary);        
        color: #fff;
        padding: 10px 20px;
        border-radius: var(--radius);
        text-decoration: none;
        font-weight: 600;
        margin-top: 20px;
        transition: background 0.3s, transform 0.2s;
    }

    .btn-back:hover {
        background-color: var(--accent);
        transform: translateY(-2px);
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
        .profile-card {
            flex-direction: column;
            text-align: center;
        }
        .profile-avatar {
            width: 150px;
            height: 150px;
        }
    }
  </style>
</head>
<body>
  <div class="dashboard-container">
    <div class="profile-card">
      <img src="{{ $user->profile_photo ? asset('storage/' . $user->profile_photo) : asset('images/Avatar.png') }}"
           alt="Foto Profil" class="profile-avatar">

      <div class="profile-info">
        <h1>{{ $user->name }}</h1>
        <h3>{{ $user->email }}</h3>
        @if($user->no_telp)
          <p><strong>No. Telepon:</strong> {{ $user->no_telp }}</p>
        @endif

        <!-- Tombol kembali di bawah no telp -->
        <a href="{{ url('/') }}" class="btn-back">← Kembali ke Home</a>
      </div>
    </div>
  </div>
</body>
</html>
