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
    <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous">
    <title>Employee Dashboard: @yield('title')</title>
    <style>
        /*
    DEMO STYLE
*/
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

        .jumbotron {
            background-color: #9de2e2;
            height: 100px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
        .wrapper {
            display: flex;
            align-items: stretch;
            perspective: 1500px;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #7386D5;
            color: #fff;
            transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
            transform-origin: bottom left;
        }

        #sidebar.active {
            margin-left: -250px;
            transform: rotateY(100deg);
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #6d7fcc;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }


        a[data-toggle="collapse"] {
            position: relative;
        }

        a[aria-expanded="false"]::before,
        a[aria-expanded="true"]::before {
            content: '\e259';
            display: block;
            position: absolute;
            right: 20px;
            font-family: 'Glyphicons Halflings';
            font-size: 0.6em;
        }

        a[aria-expanded="true"]::before {
            content: '\e260';
        }


        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article,
        a.article:hover {
            background: #6d7fcc !important;
            color: #fff !important;
        }



        /* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
        #content {
            padding: 20px;
            min-height: 100vh;
            min-width: 100vw;
            transition: all 0.3s;
        }

        #sidebarCollapse {
            width: 40px;
            height: 40px;
            background: #f5f5f5;
        }

        #sidebarCollapse span {
            width: 80%;
            height: 2px;
            margin: 0 auto;
            display: block;
            background: #555;
            transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
            transition-delay: 0.2s;
        }

        #sidebarCollapse span:first-of-type {
            transform: rotate(45deg) translate(2px, 2px);
        }

        #sidebarCollapse span:nth-of-type(2) {
            opacity: 0;
        }

        #sidebarCollapse span:last-of-type {
            transform: rotate(-45deg) translate(1px, -1px);
        }


        #sidebarCollapse.active span {
            transform: none;
            opacity: 1;
            margin: 5px auto;
        }


        /* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
                transform: rotateY(90deg);
            }

            #sidebar.active {
                margin-left: 0;
                transform: none;
            }

            #sidebarCollapse span:first-of-type,
            #sidebarCollapse span:nth-of-type(2),
            #sidebarCollapse span:last-of-type {
                transform: none;
                opacity: 1;
                margin: 5px auto;
            }

            #sidebarCollapse.active span {
                margin: 0 auto;
            }

            #sidebarCollapse.active span:first-of-type {
                transform: rotate(45deg) translate(2px, 2px);
            }

            #sidebarCollapse.active span:nth-of-type(2) {
                opacity: 0;
            }

            #sidebarCollapse.active span:last-of-type {
                transform: rotate(-45deg) translate(1px, -1px);
            }
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#sidebarCollapse").on("click", function() {
                $("#sidebar").toggleClass("active");
                $(this).toggleClass("active");
            });
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>@yield('system') Information Systems</h3>
            </div>

            <ul class="list-unstyled components">
                <p>@yield('page-title')</p>
                <li>
                    <a href="/employee"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="12.25"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                        </svg>
                        All @yield('system') Data</a>
                </li>
                <li>
                    <a href="/employee/create"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="12.25"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                        </svg> Add @yield('system') Data</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">All Links</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="/employee">Latihan 1: Cowok NRP Genap</a></li>
                        <li><a href="/pagecounter">Latihan 2: Cowok NRP Ganjil</a></li>
                        <li><a href="/">Latihan 3</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">

                <li><a href="/" class="article">Back to the root page</a></li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="jumbotron text-center mx-auto">
                <h1>Muhammad Ade Dzakwan : 5026231154</h1>
            </div>

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
                </ul>
            </nav>
            @if ($message = session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Jika ada pesan error validasi atau pesan gagal lainnya --}}
            @if ($message = session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @yield('content')
        </div>
</body>

</html>
