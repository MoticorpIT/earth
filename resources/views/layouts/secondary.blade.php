<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body data-scroll-animation="false">

    <header class="row" id="header">
        @include('layouts.nav')
    </header>

    @yield('content')

    @include('layouts.footer')
    @include('layouts.scripts')
    
</body>

</html>