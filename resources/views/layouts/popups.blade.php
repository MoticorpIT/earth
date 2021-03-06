{{-- ============================================================
                            PRODUCT POPUP
         ============================================================ --}}

    <div class="row product-box mfp-hide" id="product-choose">
        <button class="mfp-close custom_close" title="Close (Esc)" type="button">&#215;</button>
        <div class="product-img-gallery">
            <div id="product-imgs" class="carousel slide" data-ride="carousel">
                {{-- Indicators --}}
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
                    <h4 class="name">Smart Watch</h4>
                    <h2 class="edition">Sports Edition</h2>
                    <h5 class="model">MODEL AS1500</h5>
                    <h2 class="price"><del>$349</del>$299 <span class="label label-default">early bird offer</span></h2>
                    <div class="row m0 description">
                        <p>8mm Silver Aluminum Case with Blue Sport Band. Its perfect fit for tracking fitness. 100% waterproof. Buy this limted edition sports edition.</p>
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
                        <a href="javscript:void(0);" class="btn btn-rounded btn-block" id="next-personal">pre-order now</a>
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
                {{-- // end #js-personal-info.personal-info --}}

            </form>

        </div>
    </div>