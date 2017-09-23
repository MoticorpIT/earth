<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="home" data-scroll-animation="false">

    <header class="row alt-bg" id="header">
        @include('layouts.nav')
        @yield('landing')
    </header>

    @yield('content')

    @include('layouts.footer')
    @include('layouts.popups')
    @include('layouts.scripts')

</body>

</html>
