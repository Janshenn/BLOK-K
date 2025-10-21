<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login BLOK-K</title>
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
    .login-box {
      background: #fff; 
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      width: 100%;
      max-width: 400px;
    }
    .login-box h2 {
      font-size: 28px;
      margin-bottom: 20px;
      text-align: center;
      color: #111827;
    }
    .login-box label {
      display: block;
      margin-bottom: 6px;
      font-size: 14px;
      font-weight: 600;
      color: #374151;
    }
    .login-box input {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      margin-bottom: 8px;
      font-size: 14px;
    }
    .login-box input:focus {
      border-color: #C5C7BC;
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
      margin-top: 8px;
    }
    .btn-primary {
      background: #C5C7BC;
      color: #000000ff;
    }
    
    .login-footer {
      margin-top: 20px;
      font-size: 14px;
      text-align: center;
    }
    .login-footer a {
      color: #2563eb;
      text-decoration: none;
      font-weight: 500;
    }
    .alert-success {
      background:#d1fae5;
      color:#065f46;
      padding:12px;
      border-radius:8px;
      margin-bottom:16px;
      text-align:center;
      font-weight:600;
    }
    .alert-error {
      background:#fee2e2;
      color:#991b1b;
      padding:12px;
      border-radius:8px;
      margin-bottom:16px;
      text-align:center;
      font-weight:600;
    }
    .field-error {
      color:#dc2626;
      font-size:13px;
      margin-bottom:10px;
    }
  </style>
</head>
<body>

  <div class="login-box">
    @if(session('success'))
      <div class="alert-success">
          {{ session('success') }}
      </div>
    @endif

    @if ($errors->any())
      <div class="alert-error">
          {{ $errors->first() }}
      </div>
    @endif

    <h2>Login ke BLOG</h2>
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Masukkan email" required value="{{ old('email') }}">
     

      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Masukkan password" required>
      @error('password')
        <div class="field-error">{{ $message }}</div>
      @enderror

      <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <div class="login-footer">
      <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
    </div>
  </div>

</body>
</html>
