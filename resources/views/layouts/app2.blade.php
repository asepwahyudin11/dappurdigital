<html>
    <head>
        <title>Admin BT | BINUS Travel</title>

        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>
        <div class="main-content">

            <nav class="sb-topnav navbar navbar-expand navbar-light bg-light shadow">
                <a class="navbar-brand" href="dashboard">BINUS Travel Dashboard</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav mt-3">
                                <a class="nav-link" href="{{ route('dashboard') }}"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard</a>
                                <a class="nav-link" href="{{ route('armadas.index') }}"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Armada</a>
                                <a class="nav-link" href="{{ route('products.index') }}"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Produk</a>
                                <a class="nav-link" href="{{ route('orders.index') }}"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>List Order</a>
                                <a class="nav-link" href="{{ route('rekapbukutamu') }}"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Buku Tamu</a>
                                <a class="nav-link" href="{{ route('kontak') }}"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Kontak</a>
                                <a class="nav-link" href="{{ route('tim') }}"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Tim</a>
                                <a class="nav-link" href="{{ route('beranda') }}"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Keluar</a>
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as:</div>
                            Admin
                        </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </main>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Tim 1 Web Programming</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>