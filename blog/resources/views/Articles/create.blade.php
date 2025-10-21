<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat Artikel Baru - BLOK-K</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="font-family:'Inter',sans-serif; background:#f9fafb;">

<div style="max-width:600px; margin:60px auto; background:#fff; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.05);">
  <h2 style="text-align:center; margin-bottom:20px;">Tambah Artikel Baru</h2>

  @if ($errors->any())
    <div style="background:#fee2e2; color:#991b1b; padding:10px; border-radius:8px; margin-bottom:16px;">
      <ul style="margin:0; padding-left:16px;">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" style="display:flex; flex-direction:column; gap:16px;">
    @csrf

    <div>
      <label for="title" style="font-weight:600;">Judul Artikel</label>
      <input type="text" id="title" name="title" value="{{ old('title') }}" 
             style="width:100%; padding:10px; border:1px solid #d1d5db; border-radius:8px;">
    </div>

    <div>
      <label for="content" style="font-weight:600;">Isi Artikel</label>
      <textarea id="content" name="content" rows="6" 
                style="width:100%; padding:10px; border:1px solid #d1d5db; border-radius:8px;">{{ old('content') }}</textarea>
    </div>

    <div>
      <label for="image" style="font-weight:600;">Upload Gambar (Opsional)</label>
      <input type="file" id="image" name="image" accept="image/*">
    </div>

    <div style="display:flex; justify-content:space-between; align-items:center;">
      <a href="{{ route('articles.index') }}" 
         style="color:#2563eb; text-decoration:none;">← Kembali</a>
      <button type="submit" 
              style="background:#2563eb; color:white; padding:10px 20px; border:none; border-radius:8px;">
        Simpan Artikel
      </button>
    </div>
  </form>
</div>

</body>
</html>
