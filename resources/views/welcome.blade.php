@extends('layouts.master')

@section('landing')
    <div class="top-banner row m0 text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-7 split-header m-t-100 text-left">
                    <h2>100% Organic!</h2>
                    <p>Earth Kratom is made with love from the very highest quality leaves imported directly from Indonesia and grown on holistic, chemical-free farms.</p>
                </div>

                {{-- Image Section --}}
                <div class="col-md-5">
                    <img src="/images/top-product-image.png" alt="Watch" class="img-responsive center-block m-b-50-sm" />
                </div>
            </div>

        </div>
    </div>
@endsection

@section('content')
    {{--==========The Product==========--}}
    <section class="row the-product" id="product">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>the product</h2>
                <p>Introduce the product here. A small description about what it is and how it helps the user. You can also add some photos below.</p>
            </div>

            <div class="row apple-watch-note-feature text-center">
                <img src="/images/theme/apple-watch-2.png" alt="">

                {{--==========Feature Noted top right==========--}}
                <div class="feature-note right top wow fadeInRight">
                    <div class="indicator">
                        <div class="plus-icon">
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="feature-name">
                        metalic strap
                    </div>
                </div>
                {{--==========Feature Noted top left==========--}}
                <div class="feature-note left top wow fadeInLeft">
                    <div class="indicator">
                        <div class="plus-icon">
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="feature-name">
                        Gps tracker
                    </div>
                </div>
                {{--==========Feature Noted bottom right==========--}}
                <div class="feature-note right bottom wow fadeInUp">
                    <div class="indicator">
                        <div class="plus-icon">
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="feature-name">
                        Bluetooth 4.2
                    </div>
                </div>
                {{--==========Feature Noted bottom left==========--}}
                <div class="feature-note left bottom wow fadeInLeft">
                    <div class="indicator">
                        <div class="plus-icon">
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="feature-name">
                        water resistant
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--==========How its Works==========--}}
    <section class="row how-it-works">
        <div class="container">
            <div class="row section-header v2 wow fadeInUp">
                <h2>how it works</h2>
                <p>Everybody loves tech gadgets, But our’s is different. Here is how it works. Its should be simple. Add how easy is to install your product</p>
            </div>
            <div class="row work-processes">
                {{--==========Work Process==========--}}
                <div class="col-sm-4 work-process wow fadeIn">
                    <div class="row m0 process-icon">
                        <img src="/images/theme/desktop.png" alt="">
                    </div>
                    <h3>Connect Device</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur de elit, sed do tempor incididunt ut labore eta rehenderit in voluptate velit.</p>
                </div>
                {{--==========Work Process==========--}}
                <div class="col-sm-4 work-process wow fadeIn" data-wow-delay="0.5s">
                    <div class="row m0 process-icon">
                        <img src="/images/theme/toggles.png" alt="">
                    </div>
                    <h3>Configure it</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur de elit, sed do tempor incididunt ut labore eta rehenderit in voluptate velit.</p>
                </div>
                {{--==========Work Process==========--}}
                <div class="col-sm-4 work-process wow fadeIn" data-wow-delay="1s">
                    <div class="row m0 process-icon">
                        <img src="/images/theme/trophy.png" alt="">
                    </div>
                    <h3>Yay! Done.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur de elit, sed do tempor incididunt ut labore eta rehenderit in voluptate velit.</p>
                </div>
            </div>
        </div>
    </section>

    {{--==========The Benefits==========--}}
    <section class="row the-benefits" id="features">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>The Benefits</h2>
                <p>List out your product’s benefit here. A small description about what it is and how it helps the user. You can also add some icons.</p>
            </div>
            <div class="row benefit-notes">
                {{--==========Single Benefit==========--}}
                <div class="col-sm-6 col-md-4 benefit wow fadeInUp">
                    <div class="media">
                        <div class="media-left">
                            <span><i class="li_location"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>GPS Tracking</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                </div>
                {{--==========Single Benefit==========--}}
                <div class="col-sm-6 col-md-4 benefit wow fadeInUp" data-wow-delay="0.3s">
                    <div class="media">
                        <div class="media-left">
                            <span><i class="li_heart"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Heartbeat Analysis</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                </div>
                {{--==========Single Benefit==========--}}
                <div class="col-sm-6 col-md-4 benefit wow fadeInUp" data-wow-delay="0.6s">
                    <div class="media">
                        <div class="media-left">
                            <span><i class="li_lock"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Security first</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                </div>
                {{--==========Single Benefit==========--}}
                <div class="col-sm-6 col-md-4 benefit wow fadeInUp" data-wow-delay="0.9s">
                    <div class="media">
                        <div class="media-left">
                            <span><i class="li_bulb"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Innovative idea</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                </div>
                {{--==========Single Benefit==========--}}
                <div class="col-sm-6 col-md-4 benefit wow fadeInUp" data-wow-delay="1.2s">
                    <div class="media">
                        <div class="media-left">
                            <span><i class="li_banknote"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Save your bills</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                </div>
                {{--==========Single Benefit==========--}}
                <div class="col-sm-6 col-md-4 benefit wow fadeInUp" data-wow-delay="1.5s">
                    <div class="media">
                        <div class="media-left">
                            <span><i class="li_lab"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Proven technology</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--==========Left Right Content==========--}}
    <section class="row left-right-contents">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-md-4 col-md-push-4 text-center wow fadeIn">
                    <img src="/images/theme/apple-watch-3.png" alt="">
                </div>
                <div class="col-md-4 col-sm-6 col-md-pull-4 left-content">
                    <div class="media wow fadeInUp">
                        <div class="media-left">
                            <span><i class="li_key"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Fast and secure</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                    <div class="media wow fadeInUp" data-wow-delay="0.3s">
                        <div class="media-left">
                            <span><i class="li_megaphone"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Voice Assistant</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                    <div class="media wow fadeInUp" data-wow-delay="0.6s">
                        <div class="media-left">
                            <span><i class="li_diamond"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Apps you love</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 right-content">
                    <div class="media wow fadeInUp">
                        <div class="media-left">
                            <span><i class="li_like"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Stay in touch</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                    <div class="media wow fadeInUp" data-wow-delay="0.3s">
                        <div class="media-left">
                            <span><i class="li_user"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Designed for you</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                    <div class="media wow fadeInUp" data-wow-delay="0.6s">
                        <div class="media-left">
                            <span><i class="li_clock"></i></span>
                        </div>
                        <div class="media-body">
                            <h4>Precise timepiece</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--==========Our Collection==========--}}
    <section class="row our-collection">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>Our Collection</h2>
                <p>You are unique. You have unique style and you need a unique watch for you. Choose from our collection of watches.</p>
            </div>
            <div class="row collections">
                {{--==========Collection Items==========--}}
                <div class="col-sm-6 col-md-3 item wow fadeIn">
                    <div class="row m0 featured-img">
                        <img src="/images/theme/collection-1.jpg" alt="">
                    </div>
                    <h4 class="title">Watch Limited Edition</h4>
                    <h5 class="category">Stainless steel case</h5>
                    <h4 class="price">$399</h4>
                    <a href="#product-choose" class="btn">CHOOSE</a>
                </div>
                {{--==========Collection Items==========--}}
                <div class="col-sm-6 col-md-3 item wow fadeIn" data-wow-delay="0.5s">
                    <div class="row m0 featured-img">
                        <img src="/images/theme/collection-2.jpg" alt="">
                    </div>
                    <h4 class="title">Watch Bracelet</h4>
                    <h5 class="category">White strap &amp; Stainless steel</h5>
                    <h4 class="price">$299</h4>
                    <a href="#product-choose" class="btn">CHOOSE</a>
                </div>
                {{--==========Collection Items==========--}}
                <div class="col-sm-6 col-md-3 item wow fadeIn" data-wow-delay="1s">
                    <div class="row m0 featured-img">
                        <img src="/images/theme/collection-3.jpg" alt="">
                    </div>
                    <h4 class="title">Watch Original</h4>
                    <h5 class="category">The FirstWatch ever released</h5>
                    <h4 class="price">$249</h4>
                    <a href="#product-choose" class="btn">CHOOSE</a>
                </div>
                {{--==========Collection Items==========--}}
                <div class="col-sm-6 col-md-3 item wow fadeIn" data-wow-delay="1.5s">
                    <div class="row m0 featured-img">
                        <img src="/images/theme/collection-4.jpg" alt="">
                    </div>
                    <h4 class="title">Watch Soprts Edition</h4>
                    <h5 class="category">Water proof and Fitness tracking</h5>
                    <h4 class="price">$399</h4>
                    <a href="#product-choose" class="btn">CHOOSE</a>
                </div>
            </div>
        </div>
    </section>

    {{--==========The Watch==========--}}
    <section class="row the-watch">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1 text-center the-watch-img wow zoomIn">
                    <img src="/images/theme/the-watch.png" alt="" class="img-responsive">
                </div>
                <div class="col-md-6 the-watch-features">
                    <div class="row section-header v3 wow fadeIn">
                        <h2>The Watch</h2>
                        <p>With an image in the side of this conetent, you can use this section to write about some cool thing about your product or its features.</p>
                    </div>
                    <ul class="nav">
                        <li class="wow fadeIn" data-wow-delay="0.2s">Compatible with all devices</li>
                        <li class="wow fadeIn" data-wow-delay="0.4s">Android and iOS Support</li>
                        <li class="wow fadeIn" data-wow-delay="0.6s">Activity &amp; Health Tracker</li>
                        <li class="wow fadeIn" data-wow-delay="0.8s">Read &amp; reply to messages</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{--==========Split Columns==========--}}
    <section class="row split-columns">
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 image text-right">
                <img src="/images/promo-trainwreck.jpg" alt="">
            </div>
            <div class="col-sm-6 texts">
                <div class="texts-inner row m0">
                    <h2>Trainwreck</h2>
                    <p>As one of our best sellers, Trainwreck is our personal blend of 11 different kratom strains all colliding together to create a truly striking experience. This is something you won't want to miss.</p>
                </div>
            </div>
        </div>
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 col-sm-push-6 image">
                <img src="/images/promo-malay.jpg" alt="">
            </div>
            <div class="col-sm-6 col-sm-pull-6 texts">
                <div class="texts-inner row m0">
                    <h2>Green Malay</h2>
                    <p>One of our newest strains in our lineup. This strain really hones in on stress and works to create a clear mind and mellow mood.</p>
                </div>
            </div>
        </div>
    </section>

    {{--==========Reviews==========--}}
    <section class="row reviews" id="reviews">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>Reviews</h2>
                <p>Don’t take our word,. See what our experts says about the watch. We have got over 1000s of positive reviews.</p>
            </div>
            <div class="row">
                {{--==========Review==========--}}
                <div class="review col-sm-4 wow fadeIn">
                    <img src="/images/theme/quote.png" alt="" class="review-sign">
                    <p>The Watch is the nicest smartwatch available, but it's more status symbol than wearable revolutionary. Most of the Watch's features are great.</p>
                    <img src="/images/theme/reviewer1.png" alt="" class="reviewer">
                </div>
                {{--==========Review==========--}}
                <div class="review col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                    <img src="/images/theme/quote.png" alt="" class="review-sign">
                    <p>Watch is the most ambitious, well constructed smartwatch ever seen, but first-gen shortfalls make it feel more like a fashionable toy than a necessary tool.</p>
                    <img src="/images/theme/reviewer2.png" alt="" class="reviewer">
                </div>
                {{--==========Review==========--}}
                <div class="review col-sm-4 wow fadeIn" data-wow-delay="0.6s">
                    <img src="/images/theme/quote.png" alt="" class="review-sign">
                    <p>Watch is the best smartwatch we’ve used, and the first that feels friendly and has character. Watch OS 2.0 adds needed app and Siri abilities.</p>
                    <img src="/images/theme/reviewer3.png" alt="" class="reviewer">
                </div>
            </div>
        </div>
    </section>

    {{--==========Featured On==========--}}
    <section class="row  featured-on">
        <div class="container">
            <div class="row">
                <h3>As featured on</h3>
                <ul class="nav nav-justified">
                    <li class="wow fadeInUp" data-wow-delay="0.2s"><img src="/images/theme/featured1.png" alt=""></li>
                    <li class="wow fadeInUp" data-wow-delay="0.4s"><img src="/images/theme/featured2.png" alt=""></li>
                    <li class="wow fadeInUp" data-wow-delay="0.6s"><img src="/images/theme/featured3.png" alt=""></li>
                    <li class="wow fadeInUp" data-wow-delay="0.8s"><img src="/images/theme/featured4.png" alt=""></li>
                    <li class="wow fadeInUp" data-wow-delay="1s"><img src="/images/theme/featured5.png" alt=""></li>
                    <li class="wow fadeInUp" data-wow-delay="1.2s"><img src="/images/theme/featured6.png" alt=""></li>
                </ul>
            </div>
        </div>
    </section>

    {{--==========FAQS==========--}}
    <section class="row faqs">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>faq</h2>
                <p>Got questions? We’ve got answers. If you have some other questions, feel free to send us an email to <a href="#">hello@product.com</a></p>
            </div>
            <div class="row">
                {{--==========Faq==========--}}
                <div class="col-sm-6 faq wow fadeInUp">
                    <h4>What is Watch? How it works?</h4>
                    <p>Watch took center stage at this year's Product Show with a preview of watch OS 2. The next generation of Watch software is packed with features that just might turn the device from a nice-to-have into a must-have. If you already own an Apple Watch, you'll have to live with the old software until fall. You’ll love it at the first use.</p>
                </div>
                {{--==========Faq==========--}}
                <div class="col-sm-6 faq wow fadeInUp">
                    <h4>How the watch is made?</h4>
                    <p>Watch has an anodized aluminum case (which is lighter than stainless steel) in silver or space gray, and the face is Ion-X glass, which also designed to be hard and rugged (as well as a little bit lighter) than the sapphire. It’s definitely the lightest of the three Apple Watch editions, making it an ideal exercise companion. </p>
                </div>
                {{--==========Faq==========--}}
                <div class="col-sm-6 faq wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Can I swap out the watch band?</h4>
                    <p>Absolutely. Watch comes with six bands that are easy to mix and match any band with any watch. You can swap them out as your heart desires without the aid of any tools—as long as the band and watch are the same size. (The Leather Loop band, for example, only fits 42mm watches, not the smaller 38mm size.) </p>
                </div>
                {{--==========Faq==========--}}
                <div class="col-sm-6 faq wow fadeInUp" data-wow-delay="0.3s">
                    <h4>So it’s a watch and a fitness tracker?</h4>
                    <p>The accelerometer lets the watch count your steps, and it extrapolate distance on its own, or rely on the GPS in the paired Phone to trace your exact route. That step data comes in handy for two of the apps included on the watch: Activity and Workout. Both of the watch’s fitness apps sync data back to the Health and Fitness apps on your Phone.</p>
                </div>
            </div>
        </div>
    </section>

    {{--==========Tech Specs==========--}}
    <section class="row tech-specs">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>tech specs</h2>
                <p>Need more info? Please have a look at the tech specs of the watch. We’ve used Latest technology &amp; quality materials</p>
            </div>
            {{--==========Tech Specs Row==========--}}
            <div class="row tech-specs-row">
                <div class="col-sm-6 col-md-4 tech-spec wow fadeIn" data-wow-delay="0s">
                    <h4>Compatibility</h4>
                    <ul class="nav">
                        <li>iPhone iOS 7 &amp; up</li>
                        <li>Android 4.3 &amp; uptexts</li>
                        <li>Bluetooth 4.0</li>
                        <li>Notification for calls / texts</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 tech-spec wow fadeIn" data-wow-delay="0.3s">
                    <h4>App</h4>
                    <ul class="nav">
                        <li>Set daily goals</li>
                        <li>Analyze history</li>
                        <li>Sync to phone &amp; cloud</li>
                        <li>Connect to Apple health kit</li>
                        <li>Connect to Google fit</li>
                        <li>Watch firmware upgrade</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 tech-spec wow fadeIn" data-wow-delay="0.6s">
                    <h4>Vibration silent alarms</h4>
                    <ul class="nav">
                        <li>Phone notifications</li>
                        <li>Daily goal reached</li>
                        <li>Daily wake-up alarm</li>
                        <li>Location assistance</li>
                        <li>Accessiblity features</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 tech-spec wow fadeIn" data-wow-delay="0.9s">
                    <h4>Watch</h4>
                    <ul class="nav">
                        <li>12.6mm thickness</li>
                        <li>3.16L stainless steel case</li>
                        <li>40mm diameter</li>
                        <li>5 ATM water resistant</li>
                        <li>Sapphire glass crystal</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 tech-spec wow fadeIn" data-wow-delay="1.2s">
                    <h4>Straps</h4>
                    <ul class="nav">
                        <li>Italian leather with natural lining</li>
                        <li>Comfort sport fabric</li>
                        <li>Quick-release pins</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 tech-spec wow fadeIn" data-wow-delay="1.5s">
                    <h4>Activity tracking</h4>
                    <ul class="nav">
                        <li>Step counting</li>
                        <li>Distance</li>
                        <li>Calories burned</li>
                        <li>Swimming (strokes)</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 tech-spec wow fadeIn" data-wow-delay="1.8s">
                    <h4>Timekeeping</h4>
                    <ul class="nav">
                        <li>Swiss ETA movement</li>
                        <li>Accurate, reliable</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 tech-spec wow fadeIn" data-wow-delay="2.1s">
                    <h4>Battery power</h4>
                    <ul class="nav">
                        <li>Standard CR2025 6+ months</li>
                        <li>Standard 364 for timekeeping 5+ years</li>
                        <li>Solar Power available as aupgrade</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 tech-spec wow fadeIn" data-wow-delay="2.4s">
                    <h4>Sensors</h4>
                    <ul class="nav">
                        <li>MEMS 3-axis accelerometer</li>
                        <li>Highly accurate</li>
                        <li>Low power consumption</li>
                    </ul>
                </div>
            </div>
            {{--==========Tech Specs Row==========--}}
            <div class="row tech-specs-row">
            </div>
            {{--==========Tech Specs Row==========--}}
            <div class="row tech-specs-row">
            </div>
        </div>
    </section>

    {{--==========Team==========--}}
    <section class="row team">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>meet the team</h2>
                <p>We are a small group of inverntors, hackers and designers from the differrent parts of the world on a mission.</p>
            </div>
            <div class="row team_members">
                {{--==========Member==========--}}
                <div class="col-md-3 col-sm-6 member wow fadeInUp">
                    <div class="row m0 inner">
                        <div class="row m0 image">
                            <img src="/images/theme/team-1.jpg" alt="">
                        </div>
                        <div class="texts row m0">
                            <h4>Gary Elliott</h4>
                            <h5>Co-Founder and CEO</h5>
                        </div>
                    </div>
                </div>
                {{--==========Member==========--}}
                <div class="col-md-3 col-sm-6 member wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row m0 inner">
                        <div class="row m0 image">
                            <img src="/images/theme/team-2.jpg" alt="">
                        </div>
                        <div class="texts row m0">
                            <h4>Jeffrey Allen</h4>
                            <h5>Co-Founder and CTO</h5>
                        </div>
                    </div>
                </div>
                {{--==========Member==========--}}
                <div class="col-md-3 col-sm-6 member wow fadeInUp" data-wow-delay="0.6s">
                    <div class="row m0 inner">
                        <div class="row m0 image">
                            <img src="/images/theme/team-3.jpg" alt="">
                        </div>
                        <div class="texts row m0">
                            <h4>Sara Mendez</h4>
                            <h5>Lead Developer, Hacker</h5>
                        </div>
                    </div>
                </div>
                {{--==========Member==========--}}
                <div class="col-md-3 col-sm-6 member wow fadeInUp" data-wow-delay="0.9s">
                    <div class="row m0 inner">
                        <div class="row m0 image">
                            <img src="/images/theme/team-4.jpg" alt="">
                        </div>
                        <div class="texts row m0">
                            <h4>Albert Castro</h4>
                            <h5>3D Designer &amp; Prototyper</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--==========Timeline==========--}}
    <section class="row timeline">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>timeline</h2>
                <p>Here’s a roadmap of our product to highlight the milestones from the initial phase to delivery and future updates.</p>
            </div>
            <div class="row timeline-row">
                <div class="row m0 timeline-post">
                    <div class="bar-content">
                        <div class="inner">now</div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                        23 jan 2014
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">Mass Production</h4>
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content odd wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                        23 jan 2014
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">Testing Pre-Production Samples</h4>
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                        23 jan 2014
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">Croudfunding Campaign</h4>
                            <p>And an optional description. You may add little description of your milestone if you want.</p>
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content odd wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                        23 jan 2014
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">Preview at CES</h4>
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post wow fadeInUp">
                    <div class="bar-content">
                        <div class="inner">2015</div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                        23 jan 2014
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">3D Prototype &amp; Testing</h4>
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content odd wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                        23 jan 2014
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">Research and Development</h4>
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post">
                    <div class="bar-content">
                        <div class="inner">idea</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--==========Mobile App==========--}}
    <section class="row mobile-app">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-push-6 wow fadeIn">
                    <h2>Mobile App for watch</h2>
                    <p>The smartwatch connects to your iPhone and other iOS devices using Bluetooth, alerting you to incoming calls, emails, messages and alerts. Customize your with over 1,000 watchapps found within the smartwatch app.</p>
                    <div class="row m0 downloads-btns">
                        <a href="#" class="dload-link"><img src="/images/theme/app-store.png" alt=""></a>
                        <a href="#" class="dload-link"><img src="/images/theme/google-play.png" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-pull-6 wow fadeInUp">
                    <img src="/images/theme/app-screen.png" alt="" class="mobile-img">
                </div>
            </div>
        </div>
    </section>

    {{--==========Newsletter==========--}}
    <section class="row newsletter">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>newsletter</h2>
                <p>Subscribe to our product newsletter to get notified when we launch the product or when we completed a milestone</p>
            </div>
            <form action="php/subscribe.php" id="subscribeform" class="row newsletter-form" method="post">
                <div class="input-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
                    <span class="input-group-addon">
                    <button type="submit" id="js-subscribe-btn"><img src="/images/theme/right-angle-white.png" alt=""></button>
                </span>
                </div>
                <div id="js-subscribe-result" class="text-center" data-success-msg="Almost finished. Please check your email and verify." data-error-msg="Oops. Something went wrong.">
                    <p>
                        <img src="/images/theme/protect.png" alt="">No Spam. We Promise. Unsubscribe anytime.
                    </p>
                </div>

            </form>

        </div>
    </section>

    {{--==========Contact==========--}}
    <section class="row contact" id="contact">

        {{-- ================== GOOGLE MAP (Change data-lat & data-lon values) ====================== --}}
        {{-- TIP : More Customization / Color option available in /js/plugins/google-map.js --}}

        <div id="mapBox" class="row m0" data-lat="37.3818288" data-lon="-122.0636325" data-zoom="15"></div>
        {{-- Flippable Contact Box --}}
        <div class="flip-box-container row m0">
            <div class="flip-box row m0 wow fadeIn">
                {{-- Contact Address (front Side) --}}
                <div class="row contact-box flip-box-part">
                    <h2>get in touch</h2>
                    <ul class="nav">
                        <li><i class="fa fa-map-marker"></i>523 Sylvan Ave, 5th Floor
                            <br>Mountain View, CA 94041USA</li>
                        <li><i class="fa fa-phone"></i>+1 (234) 56789
                            <br>+1 987 654 3210</li>
                        <li><i class="fa fa-envelope"></i>support@watchland.com</li>
                    </ul>
                    <button class="flip-contact-box btn btn-block">contact us</button>
                </div>
                {{-- Contact Form (back Side) --}}
                <div class="row contact-form flip-box-part">
                    <a href="javascript:void(0);" class="js-close-flip">&times;</a>
                    {{-- Contact Form Starts here --}}
                    <form action="php/contact.php" id="phpcontactform" method="POST">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" id="js-contact-btn" class="btn btn-block">Send Message</button>
                        <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>
                    </form>
                    {{-- // End Contact form --}}

                </div>
                {{-- // End back Side --}}
            </div>
        </div>
        {{-- // End Contact Box --}}
    </section>
@endsection
