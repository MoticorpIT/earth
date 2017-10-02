<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img src="/images/ek-logo-white.png" class="white-logo" alt="">
                <img src="/images/ek-logo.png" class="dark-logo" alt="">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="main-navbar">
            <a href="#nav-products" class=" btn btn-warning pull-right">Products</a>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown {{ Request::is('products') ? 'active' : '' }}">
                    <a href="/products" class="dropdown-toggle" data-toggle="dropdown">Strains <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/products/categories/powders">Maeng Da</a></li>
                        <li><a href="/products/categories/capsules">Red Maeng Da</a></li>
                        <li><a href="/products/categories/extracts">White Maeng Da</a></li>
                        <li><a href="/products/categories/powders">Bali</a></li>
                        <li><a href="/products/categories/powders">Green Hulu Kapuas</a></li>
                        <li><a href="/products/categories/powders">Red Hulu Kapuas</a></li>
                        <li><a href="/products/categories/powders">Green Borneo</a></li>
                        <li><a href="/products/categories/powders">White Borneo</a></li>
                        <li><a href="/products/categories/powders">Green Malay</a></li>
                        <li><a href="/products/categories/powders">Green Vietnam</a></li>
                        <li><a href="/products/categories/powders">Trainwreck</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="#nav-faq">FAQ</a></li>
                <li class="{{ Request::is('free kratom') ? 'active' : '' }}"><a href="#nav-free-kratom">Free Kratom</a></li>
            </ul>
        </div>
    </div>
</nav>
