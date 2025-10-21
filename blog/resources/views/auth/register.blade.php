<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register BLOK-K</title>
  @vite('resources/css/app.css') 
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(-45deg, #B6AE9F, #C5C7BC, #DEDED1, #FBF3D1);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    .form-box {
      background: #fff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      width: 100%;
      max-width: 420px;
    }
    .form-box h2 {
      font-size: 28px;
      margin-bottom: 24px;
      text-align: center;
      color: #111827;
    }
    .form-group {
      margin-bottom: 16px;
    }
    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-size: 14px;
      font-weight: 600;
      color: #374151;
    }
    .form-group input {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      font-size: 14px;
    }
    .form-group input:focus {
      border-color: #2563eb;
      outline: none;
      box-shadow: 0 0 0 2px #bfdbfe;
    }
    .btn {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.2s;
    }
    .btn-primary {
      background: #C5C7BC;
      color: #000000ff;
    }

    .form-footer {
      margin-top: 20px;
      font-size: 14px;
      text-align: center;
    }
    .form-footer a {
      color: #2563eb;
      text-decoration: none;
      font-weight: 500;
    }
  </style>
</head>
<body>

  <div class="form-box">
    <h2>Daftar Akun BLOG</h2>
   <form method="POST" action="{{ route('register.post') }}">
    @csrf

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Masukkan username" value="{{ old('username') }}" required>
        @error('username')
            <span style="color:red;font-size:13px">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="no_telp">No. Telp</label>
        <input type="tel" name="no_telp" id="no_telp" placeholder="Masukkan no telp" value="{{ old('no_telp') }}" required>
        @error('no_telp')
            <span style="color:red;font-size:13px">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Masukkan email" value="{{ old('email') }}" required>
        @error('email')
            <span style="color:red;font-size:13px">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukkan password" required>
        @error('password')
            <span style="color:red;font-size:13px">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ulangi password" required>
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>


    <div class="form-footer">
      <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
    </div>
  </div>

</body>
</html>
