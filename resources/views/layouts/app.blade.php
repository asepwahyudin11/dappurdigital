<html>
    <head>
        <title>BT | BINUS Travel</title>

        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>
        <div class="main-content">
            @include('layouts.navbar')
            @yield('content')
            @include('layouts.footer')
        </div>
    </body>
</html>