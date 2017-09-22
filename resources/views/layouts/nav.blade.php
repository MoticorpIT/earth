<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img src="/images/theme/logo-white.png" class="white-logo" alt="">
                <img src="/images/theme/logo.png" class="dark-logo" alt="">
                {{-- @if ($request->is('/products/*'))
                    <img src="/images/theme/logo-white.png" class="white-logo" alt="">
                @else
                    <img src="/images/theme/logo-white.png" class="white-logo" alt="">
                    <img src="/images/theme/logo.png" class="dark-logo" alt="">
                @endif --}}

                {{-- 
                {{ Request::is('/') ? '<img src="/images/theme/logo-white.png" class="white-logo" alt=""> <img src="/images/theme/logo.png" class="dark-logo" alt="">' : '@yield ("nav-logo")' }} --}}
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="main-navbar">
            <a href="http://indegogo.com/" class=" btn btn-warning pull-right hidden-sm hidden-xs">Back this project</a>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown {{ Request::is('products') ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/products/categories/powders">Powders</a></li>
                        <li><a href="/products/categories/capsules">Capsules</a></li>
                        <li><a href="/products/categories/extracts">Extracts</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">About Us</a></li>
                <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="/faq">FAQ</a></li>
                <li><a href="/#contact">contact</a></li>
            </ul>
        </div>
    </div>
</nav>