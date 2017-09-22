<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        {{--========== Brand and toggle get grouped for better mobile display ==========--}}
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

                {{-- @if()
                @endif
                {{ Request::is('/') ? '<img src="/images/theme/logo-white.png" class="white-logo" alt=""> <img src="/images/theme/logo.png" class="dark-logo" alt="">' : '@yield ("nav-logo")' }} --}}
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        {{--========== Collect the nav links, forms, and other content for toggling ==========--}}
        <div class="collapse navbar-collapse" id="main-navbar">
            <a href="http://indegogo.com/" class=" btn btn-warning pull-right hidden-sm hidden-xs">Back this project</a>
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::is('products') ? 'active' : '' }}"><a href="/products">Product</a></li>
                <li class="{{ Request::is('info') ? 'active' : '' }}"><a href="/info">Information</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.html">Pre-order (Email)</a></li>
                        <li><a href="index_email.html">Email Signup (Mailchimp)</a></li>
                        <li><a href="index_buy_paypal.html">Buy Now (PayPal)</a></li>
                        <li><a href="index_kickstarter.html">Kickstarter Campaign</a></li>
                        <li><a href="index_indegogo.html">Indegogo Campaign</a></li>
                        <li><a href="index_boxed.html">Boxed Version</a></li>
                        <li><a href="index_rtl.html">RTL Version</a></li>
                        <li><a href="index_video.html">Video Background</a></li>
                        <li class="divider"></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                    </ul>
                </li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </div>
        {{--========== /.navbar-collapse ==========--}}
    </div>
    {{--========== /.container-fluid ==========--}}
</nav>