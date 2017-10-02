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
                <p>Karma-Kratom.com is the leading provider for top shelf Maeng Da Kratom on the internet. Every bag, jar or bottle of Karma Kratom contains the best Maeng Da money can buy, but without the high prices you typically find. Available in various sizes and in three different forms: powder, capsules and liquid extract. Not sure which to get? Try our Starter Bundle, it includes a sampling of all three.</p>
            </div>
            <div class="row apple-watch-note-feature text-center">
                <img src="/images/kratom-pile.jpg" alt="Pile of Karma Kratom Powder">
                {{-- ==========Feature Noted top right========== --}}
                <div class="feature-note right top wow fadeInRight">
                    <div class="indicator">
                        <div class="plus-icon">
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="feature-name">
                        From High Potency
                        <br>
                        Mature Trees
                    </div>
                </div>
                {{-- ==========Feature Noted top left========== --}}
                <div class="feature-note left top wow fadeInLeft">
                    <div class="indicator">
                        <div class="plus-icon">
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="feature-name">
                        The Purest Maeng Da
                        <br>
                        on the Market
                    </div>
                </div>
                {{-- ==========Feature Noted bottom right========== --}}
                <div class="feature-note right bottom wow fadeInUp">
                    <div class="indicator">
                        <div class="plus-icon">
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="feature-name">
                        100% Natural
                        <br>
                        and Organic
                    </div>
                </div>
                {{-- ==========Feature Noted bottom left========== --}}
                <div class="feature-note left bottom wow fadeInLeft">
                    <div class="indicator">
                        <div class="plus-icon">
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="feature-name">
                        Available in a Large
                        <br>
                        Variety of Sizes
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--==========Our Collection==========--}}
    <section class="row our-collection" id="nav-products">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>Top Sellers</h2>
                <p>You are unique. You have unique style and you need a unique watch for you. Choose from our collection of watches.</p>
            </div>
            <div class="row collections">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-3 item wow fadeIn">
                        <div class="row m0 featured-img">
                            <img src="{{$product->img_url}}" alt="{{$product->name}}" style="max-width:60%;padding:10px;">
                        </div>
                        <h4 class="title">{{$product->name}}</h4>
                        <h5 class="category text-uppercase">
                            @foreach($product->categories as $key => $category)
                                @if($key) ,&nbsp; @endif
                                {{$category->name}}
                            @endforeach
                        </h5>
                        <h4 class="price">${{$product->price}}</h4>
                        <a href="/products/{{$product->slug}}" class="btn">VIEW DETAILS</a>
                    </div>
                @endforeach
                <div class="col-sm-12">
                  <a href="/products" class="btn btn-block btn-lg btn-warning block-products-button">View All Products</a>
                </div>
            </div>
        </div>
    </section>

    {{--==========Split Columns==========--}}
    <section class="row split-columns">
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 image text-right">
                <img src="/images/promo-maeng-da.jpg" alt="">
            </div>
            <div class="col-sm-6 texts">
                <div class="texts-inner row m0">
                    <h2>Maeng Da</h2>
                    <p>As one of our best sellers, Trainwreck is our personal blend of 11 different kratom strains all colliding together to create a truly striking experience. This is something you won't want to miss.</p>
                </div>
            </div>
        </div>
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 col-sm-push-6 image">
                <img src="/images/promo-red-maeng-da.jpg" alt="">
            </div>
            <div class="col-sm-6 col-sm-pull-6 texts">
                <div class="texts-inner row m0">
                    <h2>Red Maeng Da</h2>
                    <p>One of our newest strains in our lineup. This strain really hones in on stress and works to create a clear mind and mellow mood.</p>
                </div>
            </div>
        </div>
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 image text-right">
                <img src="/images/promo-white-maeng-da.jpg" alt="">
            </div>
            <div class="col-sm-6 texts">
                <div class="texts-inner row m0">
                    <h2>White Maeng Da</h2>
                    <p>As one of our best sellers, Trainwreck is our personal blend of 11 different kratom strains all colliding together to create a truly striking experience. This is something you won't want to miss.</p>
                </div>
            </div>
        </div>
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 col-sm-push-6 image">
                <img src="/images/promo-bali.jpg" alt="">
            </div>
            <div class="col-sm-6 col-sm-pull-6 texts">
                <div class="texts-inner row m0">
                    <h2>Bali</h2>
                    <p>One of our newest strains in our lineup. This strain really hones in on stress and works to create a clear mind and mellow mood.</p>
                </div>
            </div>
        </div>
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 image text-right">
                <img src="/images/promo-green-borneo.jpg" alt="">
            </div>
            <div class="col-sm-6 texts">
                <div class="texts-inner row m0">
                    <h2>Green Borneo</h2>
                    <p>As one of our best sellers, Trainwreck is our personal blend of 11 different kratom strains all colliding together to create a truly striking experience. This is something you won't want to miss.</p>
                </div>
            </div>
        </div>
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 col-sm-push-6 image">
                <img src="/images/promo-white-borneo.jpg" alt="">
            </div>
            <div class="col-sm-6 col-sm-pull-6 texts">
                <div class="texts-inner row m0">
                    <h2>White Borneo</h2>
                    <p>One of our newest strains in our lineup. This strain really hones in on stress and works to create a clear mind and mellow mood.</p>
                </div>
            </div>
        </div>
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 image text-right">
                <img src="/images/promo-green-hulu.jpg" alt="">
            </div>
            <div class="col-sm-6 texts">
                <div class="texts-inner row m0">
                    <h2>Green Hulu Kapuas</h2>
                    <p>As one of our best sellers, Trainwreck is our personal blend of 11 different kratom strains all colliding together to create a truly striking experience. This is something you won't want to miss.</p>
                </div>
            </div>
        </div>
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 col-sm-push-6 image">
                <img src="/images/promo-red-hulu.jpg" alt="">
            </div>
            <div class="col-sm-6 col-sm-pull-6 texts">
                <div class="texts-inner row m0">
                    <h2>Red Hulu Kapuas</h2>
                    <p>One of our newest strains in our lineup. This strain really hones in on stress and works to create a clear mind and mellow mood.</p>
                </div>
            </div>
        </div>
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 image text-right">
                <img src="/images/promo-green-malay.jpg" alt="">
            </div>
            <div class="col-sm-6 texts">
                <div class="texts-inner row m0">
                    <h2>Green Malay</h2>
                    <p>One of our newest strains in our lineup. This strain really hones in on stress and works to create a clear mind and mellow mood.</p>
                </div>
            </div>
        </div>
        <div class="row m0 split-column wow fadeIn">
            <div class="col-sm-6 col-sm-push-6 image">
                <img src="/images/promo-green-vietnam.jpg" alt="">
            </div>
            <div class="col-sm-6 col-sm-pull-6 texts">
                <div class="texts-inner row m0">
                    <h2>Green Vietnam</h2>
                    <p>One of our newest strains in our lineup. This strain really hones in on stress and works to create a clear mind and mellow mood.</p>
                </div>
            </div>
        </div>
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

    {{--==========FAQS==========--}}
    <section class="row faqs" id="nav-faq">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>faq</h2>
                <p>
                  Got questions? We’ve got answers. If you don't see your question below, visit our full
                    <a href="/faq">FAQ Page.</a>
                   If at that point you still don't see your question, please feel free to send us an
                    <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=help@karma-kratom.com" target="_blank">email</a>
                </p>
            </div>
            <div class="row">
                {{--==========Faq==========--}}
                <div class="col-sm-6 faq wow fadeInUp">
                    <h4>What is Kratom?</h4>
                    <p>Kratom is a natural botanical native to tropical Southeast Asia that is part of the coffee family. It's also known by its scientific name, Mitragyna speciosa. The people of Southeast Asia have used Kratom leaves as an herbal supplement and traditional remedy for hundreds of years.</p>
                </div>
                {{--==========Faq==========--}}
                <div class="col-sm-6 faq wow fadeInUp">
                    <h4>What are the effects of kratom?</h4>
                    <p>Kratom can have varing effects on the body, depending on the dosage taken. It has been found that in lower dosages (1-3grams) the effects are more stimulating and result in increase energy. With higher dosages, the effects shift more towards sedative. This result increases as the dosage increases.</p>
                </div>
                {{--==========Faq==========--}}
                <div class="col-sm-6 faq wow fadeInUp" data-wow-delay="0.3s">
                    <h4>What is the doseage for kratom?</h4>
                    <p>The dosage of kratom varies depending on several factors. Your body size, stomach contents and tolerance could play a big role in determining your dosage. It would be advised to start with a low dosage (1 gram or so) and see what the effects are on you. If you liked it, stick with it. Not what you were looking for, make an adjustment. Eventually, you will find your groove.</p>
                </div>
                {{--==========Faq==========--}}
                <div class="col-sm-6 faq wow fadeInUp" data-wow-delay="0.3s">
                    <h4>I just placed my order, when should I receive it?</h4>
                    <p>All Karma-Kratom.com products are processed and shipped within 24-48 hours, with most of them shipping the same day. Depending on your location, local/regional weather conditions and other circumstances, actual shipping times will vary. Typically, most orders arrive from 3-5 days after the order has been taken to the USPS. All packaging is labeled discreetly and you will receive a tracking number shortly after your order has been received.</p>
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
    <section class="row newsletter" id="nav-free-kratom">
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
