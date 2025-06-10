<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <title>My Dashboard: @yield('title')</title>
  <style>
    .header {
      background-image: url('{{ asset('header.png') }}');
      background-size: cover;
      background-position: center;
      padding: 120px;
      text-align: center;
    }

    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
    }

    .footer {
      background-color: #1249b4;
      color: white;
      padding: 40px;
      text-align: center;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>
  <header class="header">
    <h1>VGA Product Dashboard</h1>
    <div>
      <h3>@yield('subtitle') | 5026231154 | Muhammad Ade Dzakwan</h3>
    </div>
  </header>

   <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/frontend">All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/week1">Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/week2">Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/bootstrap1">Latihan 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/js1">Latihan 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/js2">Latihan 5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/linktree">Tugas Linktree</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/vga">Tugas VGA CRUD</a>
            </li>
        </ul>
    </nav>

  <main class="container">
    @yield('content')
  </main>

  <footer class="footer">
    <p>&copy; 2025 Awan Dashboard</p>
  </footer>
</body>
</html>