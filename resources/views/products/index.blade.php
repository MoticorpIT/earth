@extends('layouts.secondary')

@section ('meta-title')
    Products | EarthKratom.com
@endsection

@section('content')

    {{--==========Page Header==========--}}
    <section class="row page-header">
        <div class="container">
            <div class="row">
                <h2>ABOUT US</h2>
                <h4>Who we are, How we started and more..</h4>
            </div>
        </div>
    </section>

    <section class="row blog-section">
        <div class="container">
            <div class="row product-box no-drop-shadow" id="product-choose">
                <div class="product-img-gallery">
                    <div id="product-imgs" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#product-imgs" data-slide-to="0" class="active"></li>
                            <li data-target="#product-imgs" data-slide-to="1"></li>
                            <li data-target="#product-imgs" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="/images/theme/the-watch-1.png" alt="watch-1">
                            </div>
                            <div class="item">
                                <img src="/images/theme/the-watch-2.png" alt="watch-2">
                            </div>
                            <div class="item">
                                <img src="/images/theme/the-watch-3.png" alt="watch-3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-desc">

                    <form action="php/pre-order.php" id="preorderform" class="choose-form row m0" method="get" data-redirect="none">
                        <div id="js-product-info" class="product-info">
                            
                            <h4 class="name">Kratom Powder</h4>
                            <h2 class="edition">30g Maeng Da</h2>
                            <h5 class="model">UPC: 772849388294</h5>

                            <h2 class="price">$29 
                                <span class="label label-default">Suggested Retail Price</span>
                            </h2>

                            <div class="row m0 description">
                                <p>If you are a something that is looking for something in order to ease the something of somethings then this is the something for you.</p>
                            </div>

                            <div class="choose-options row m0" id="js-choose-color">
                                <div class="option">
                                    <h4 class="form-label">Choose a color</h4>
                                    <div class="row m0 colors">
                                        <input type="radio" name="color" value="Blue" id="color-1" checked>
                                        <label for="color-1"></label>
                                        <input type="radio" name="color" value="Violet" id="color-2">
                                        <label for="color-2"></label>
                                        <input type="radio" name="color" value="Magenta" id="color-3">
                                        <label for="color-3"></label>
                                        <input type="radio" name="color" value="Yellow" id="color-4">
                                        <label for="color-4"></label>
                                        <input type="radio" name="color" value="Green" id="color-5">
                                        <label for="color-5"></label>
                                    </div>
                                </div>
                                <div class="option">
                                    <h4 class="form-label">Qty</h4>
                                    <input type="text" value="1" name="Quantity" class="quanity">
                                </div>
                                <div class="option">
                                    <h4 class="form-label">Size</h4>
                                    <select class="selectpicker">
                                        <option value="m" selected>M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>
                                    </select>
                                </div>
                            </div>

                            <div class="submit-area row m0">
                                <a href="javscript:void(0);" class="btn btn-rounded btn-block" id="next-personal">Find Retailer</a>
                            </div>

                        </div>
                        {{-- // End Product Info --}}

                        <div class="personal-info" id="js-personal-info">

                            <div class="form-group text-center"><a href="javscript:void(0);" class="btn" id="prev-product-info">Go Back</a></div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" name="First_Name" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" name="Last_Name" class="form-control" placeholder="Last Name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="Email" class="form-control" placeholder="Email Address" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="Address_Line_1" class="form-control" placeholder="Address Line 1" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="Address_Line_2" class="form-control" placeholder="Address Line 2" required>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" name="State" class="form-control" placeholder="State" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" name="Zip_Code" class="form-control" placeholder="Zip Code" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="Country" required>
                                    <option selected value="">Choose a country</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Australia">Australia</option>
                                    <option value="India">India</option>
                                </select>
                            </div>

                            <div class="submit-area-2 row m0">
                                <button type="submit" class="btn btn-rounded js-preorder-btn btn-block"><span>Finish Purchase</span></button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{--========== About Content ==========--}}
    <section class="row blog-section">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>the idea</h2>
                <p>Introduce the product here. A small description about what it is and how it helps the user. You can also add some photos below.</p>
            </div>

            <div class="row blog">
                <div class="col-sm-6">
                    <p>Enthusiastically simplify best-of-breed strategic theme areas whereas customer directed action items. Rapidiously engineer superior systems without interdependent leadership. Uniquely transform client-centric mindshare and cutting-edge leadership embrace real-time.</p>
                </div>
                {{-- // end .col-sm-6 --}}
                <div class="col-sm-6">
                    <p>Proactively implement principle-centered best practices through process-centric results. Assertively architect top-line technologies for quality leadership. Distinctively supply enterprise outside the box thinking rather than front-end intellectual capital. Dynamically predominate interoperable applications.</p>
                </div>
                {{-- // end .col-sm-6 --}}
            </div>
            {{-- // end .row --}}

            <hr />
            <br>
            <br>
            <div class="row section-header wow fadeInUp">
                <h2>Brainstorming</h2>
                <p>Dramatically repurpose distinctive leadership skills after interactive mindshare. Progressively re-engineer enterprise channels through enabled e-business. Interactively iterate parallel quality vectors whereas holistic collaboration and idea-sharing. </p>
            </div>

            <div class="row">
                <div class="col-sm-6"><img src="/images/theme/blog-1.jpg" alt="Image" class="img-responsive" /></div>
                {{-- // end .col-sm-6 --}}
                <div class="col-sm-6"><img src="/images/theme/blog-2.jpg" alt="Image" class="img-responsive" /></div>
                {{-- // end .col-sm-6 --}}
            </div>
            {{-- // end .row --}}

            {{-- ======== THE TEAM ========= --}}

            <div class="row section-header m-t-100 wow fadeInUp">
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
@endsection
