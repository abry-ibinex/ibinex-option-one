<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="Assets/CSS/global.css">
    <title>@yield('title') - Ibinex</title>

    <link href="{{ asset("css/style.css") }}" rel="stylesheet" />
    @stack('stylesheets')
</head>
<body>

    @include('layouts.header')

    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
</html>