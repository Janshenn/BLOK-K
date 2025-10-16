<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil - BLOK-K</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* ---------- Container ---------- */
        .dashboard-container {
            max-width: 600px;
            margin: 60px auto;
            padding: 30px;
            border-radius: 16px;
            background: linear-gradient(-45deg, #B6AE9F, #C5C7BC, #DEDED1, #FBF3D1);
            animation: fadeInUp 0.8s ease forwards;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
        }

        /* ---------- Heading ---------- */
        h1 {
            font-size: 28px;
            color: #222;
            margin-bottom: 20px;
        }

        /* ---------- Success Message ---------- */
        .success-msg {
            color: green;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* ---------- Profile Avatar ---------- */
        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
        }

        /* ---------- Form Styles ---------- */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            text-align: left;
        }

        label {
            font-weight: 600;
            color: #444;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            padding: 10px 15px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
            outline: none;
            transition: border 0.3s, box-shadow 0.3s;
            width: 100%;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="file"]:focus {
            border-color: #000000ff;
        }

        /* ---------- Buttons ---------- */
        button[type="submit"] {
            background-color: #000000ff;
            color: #fff;
            padding: 12px 20px;
            border-radius: 12px;
            border: none;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #000000ff;
            transform: translateY(-2px);
        }

        /* ---------- Back Link ---------- */
        a.back-link {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #000000ff;
            font-weight: 600;
            transition: color 0.3s, transform 0.2s;
        }

        a.back-link:hover {
            color: #000000ff;
            transform: translateY(-2px);
        }

        /* ---------- Animation ---------- */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 768px) {
            .dashboard-container {
                margin: 40px 20px;
                padding: 20px;
            }
            .profile-avatar {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Edit Profil</h1>

        @if(session('success'))
            <div class="success-msg">{{ session('success') }}</div>
        @endif

        <!-- Tampilkan Foto Profil -->
        @if($user->profile_photo)
    <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Avatar" class="profile-avatar">
@else
    <img src="{{ asset('images/Avatar.png') }}" alt="Avatar Default" class="profile-avatar">
@endif

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Nama:</label>
            <input type="text" name="name" value="{{ $user->name }}" required>

            <label>Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" required>

            <label>No. Telepon:</label>
            <input type="text" name="no_telp" value="{{ $user->no_telp }}">

            <label>Foto Profil:</label>
            <input type="file" name="profile_photo">

            <button type="submit">Simpan Perubahan</button>
        </form>

        <a href="{{ route('profile') }}" class="back-link">← Kembali ke Profil</a>
    </div>
</body>
</html>
