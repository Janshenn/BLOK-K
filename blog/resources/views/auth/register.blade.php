<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login BLOG</title>
  @vite('resources/css/app.css') 
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
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
      margin-bottom: 16px;
      font-size: 14px;
    }
    .login-box input:focus {
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
      background: #2563eb;
      color: #fff;
    }
    .btn-primary:hover {
      background: #1d4ed8;
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
  </style>
</head>
<body>

  <div class="register-box">
    <h2>Login ke BLOG</h2>
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Masukkan email" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Masukkan password" required>

      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

</body>
</html>
