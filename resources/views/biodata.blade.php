<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata</title>
</head>
<body>
  Halo ini adalah biodata saya
  <h1>Nama: {{ $name }}</h1>
  <h1>Umur: {{ $age }}</h1>

  <h1>Makanan Favorit</h1>
  <ul>
    @foreach ($makanan_favorit as $makanan)
    <li>{{ $makanan }}</li>
    @endforeach
  </ul>

</body>
</html>