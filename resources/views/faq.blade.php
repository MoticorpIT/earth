@extends('layouts.secondary')

@section ('meta-title')
    FAQs | EarthKratom.com
@endsection

@section('content')
    {{-- ==========Page Header========== --}}
    <section class="row page-header">
        <div class="container">
            <div class="row">
                <h2>FAQ</h2>
                <h4>Got questions? We’ve got answers. Don't see your question, feel free to send us an <a href="mailto:help@earthkratom.com">email</a>.</h4>
            </div>
        </div>
    </section>

    {{-- ========== FAQ Content ========== --}}
    <section class="row blog-section">
        <div class="container">
            <div class="row">
                {{-- ========== What is kratom ========== --}}
                <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp">
                    <h4>What is Kratom?</h4>
                    <p>Kratom is a natural botanical native to tropical Southeast Asia that is part of the coffee family. It's also known by its scientific name, Mitragyna speciosa. The people of Southeast Asia have used Kratom leaves as an herbal supplement and traditional remedy for hundreds of years.</p>
                </div>
                {{-- ========== What are the effects ========== --}}
                <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp">
                    <h4>What are the effects of kratom?</h4>
                    <p>Kratom can have varing effects on the body, depending on the dosage taken. It has been found that in lower dosages (1-3grams) the effects are more stimulating and result in increase energy. With higher dosages, the effects shift more towards sedative. This result increases as the dosage increases.</p>
                </div>
                {{-- ========== What is the dosage for kratom ========== --}}
                <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>What is the doseage for kratom?</h4>
                    <p>The dosage of kratom varies depending on several factors. Your body size, stomach contents and tolerance could play a big role in determining your dosage. It would be advised to start with a low dosage (1 gram or so) and see what the effects are on you. If you liked it, stick with it. Not what you were looking for, make an adjustment. Eventually, you will find your groove</p>
                </div>
                {{-- ========== How long will it take to receive my order ========== --}}
                {{-- <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>I just placed my order, when should I receive it?</h4>
                    <p>All earthkratom.com products are processed and shipped within 24-48 hours, with most of them shipping the same day. Depending on your location, local/regional weather conditions and other circumstances, actual shipping times will vary. Typically, most orders arrive from 3-5 days after the order has been taken to the USPS. All packaging is labeled discreetly and you will receive a tracking number shortly after your order has been received.</p>
                </div> --}}
                {{-- ========== Are orders shipped discreetly ========== --}}
                {{-- <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Are orders shipped discreetly?</h4>
                    <p>Yes. All orders from earthkratom are packaged and labeled discreetly. So no one will ever be able to guess what’s in the box. Screw the nosey neighbors.</p>
                </div> --}}
                {{-- ========== Will I receive a tracking number for my order ========== --}}
                {{-- <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Will I receive a tracking number for my order?</h4>
                    <p>Yes. All Earth Kratom orders will ship with a tracking number. The tracking number will be emailed to you once it has been generated during processing. Please allow 24 hours before any information begins to appear in the tracking information. </p>
                </div> --}}
                {{-- ========== Can I find the tracking number on the website ========== --}}
                {{-- <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Can I find the tracking number on the website?</h4>
                    <p>No. Currently, the only means of obtaining your tracking number is via email. The email will be sent to the email you provided during check… so make sure it is correct.</p>
                </div> --}}
                {{-- ========== Can I pay for my order via COD (cash on delievery) ========== --}}
                {{-- <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Can I pay for my order via COD (cash on delievery)?</h4>
                    <p>No. All orders from Earth Kratom must be paid, in full, at the time of purchase or the order will not be fulfilled and processed. We do apologize for any inconvenience, but doing it this way, helps us illuminate fraud and make sure minors are not purchasing our products.</p>
                </div> --}}
                {{-- ========== Is the product pictured the same as the item I will get ========== --}}
                <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Is the product pictured the same as the item I will get?</h4>
                    <p>Absolutely. Personally, I feel this question/answer should be a given, but we’ve all seen those shadier sites out there. Rest assured, each and every photo shown on our site, is an image of our product and the photo was taken by us. Please note, due to differences in monitor colors, the powder you receive may not match the color you see on screen.</p>
                </div>
                {{-- ========== Do you have any options for buying Earth Kratom wholesale ========== --}}
                <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Do you have any options for buying Earth Kratom wholesale?</h4>
                    <p>Yes we do. If you are interested in placing a wholesale order with us. Please visit the <a href="wholesale">Wholesale Contact Form</a> to reach out to us. The more information you can provide, like how much, how often, business information, etc., the easier you will make it on the both of us. Once we receive your request, we will review your information and will reach out to you. This can take 1-3 business days, so please be patient.</p>
                </div>
                {{-- ========== Can I place my order via phone ========== --}}
                {{-- <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Can I place my order via phone?</h4>
                    <p>No. We do not accept orders via phone. This is for your safety as well as ours. By going through our card services provider on the website, it insures that both parties are who they say they are and that all the information provided is correct. With phone orders, this just isn’t possible. Thank you for understanding.</p>
                </div> --}}
                {{-- ========== Which shipping provider do orders from Karam-Kratom get shipped with ========== --}}
                {{-- <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Which shipping provider do orders from Karam-Kratom get shipped with?</h4>
                    <p>Currently, all orders are shipped via the United States Postal Service (USPS). We have found that the provide the most cost effect way to ship our orders and still maintain fast shipping times. If you have a special case and need to send it via another shipper, please <a href="mailto:help@earthkratom.com">email us</a> and we will see if we can make it happen for you (additional fees may apply).</p>
                </div> --}}
                {{-- ========== Do you ship to all 50 states - international ========== --}}
                {{-- <div class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Do you ship to all 50 states? What about international?</h4>
                    <p><strong>All States:</strong> No. Currently, there are 6-8 locations we cannot legally ship to. See, <a href="#legalUS"><em>Is Kratom Legal in the United States?</em></a> below or the <a href="http://www.americankratom.org/legal_status">American Kratom Association’s</a> website for more information.</p>
                    <br />
                    <p><strong>International:</strong> No. We currently only ship to locations in the United States for several reasons. Cost, effort, etc, but most important is the legalities of kratom. Every country, nation, state, etc. has their own set laws regarding kratom and the import/export of it. Knowing all of them and being sure to abide by them all would be a daunting task for any company during the current state of kratom</p>
                </div> --}}
                {{-- ========== Is kratom legal in the united states ========== --}}
                <div id="legalUS" class="col-sm-8 col-md-offset-2 faq faq-one-col wow fadeInUp" data-wow-delay="0.3s">
                    <h4>Is kratom legal in the United States?</h4>
                    <p>The answer for this depends on where you live. As of this writing, there are currently six states (see list below) that have banned the possession, use and/or purchase of kratom (in any form). There are two other states with partial bans and two states with pending legislative.</p>
                    <br />
                    <h5 class="text-left">States with Statewide Bans on Kratom</h5>
                    <ul class="text-left">
                        <li>Alabama</li>
                        <li>Arkansas</li>
                        <li>Indiana</li>
                        <li>Tennessee</li>
                        <li>Vermont</li>
                        <li>Wisconsin</li>
                    </ul>
                    <br />
                    <h5 class="text-left">States with Partial Bans on Kratom</h5>
                    <ul class="text-left">
                        <li>California (San Diego)</li>
                        <li>Florida (Sarasota County</li>
                    </ul>
                    <br />
                    <h5 class="text-left">States with Pending Legislative</h5>
                    <ul class="text-left">
                        <li>New York</li>
                        <li>Oregon</li>
                    </ul>
                    <br />
                    <h5>National Level:</h5>
                    <p>In 2016, the DEA had announced that it would schedule kratom and its constituent alkaloids as a drug without medicinal properties. This move would have made it illegal in all 50 states. However, in October of 2016, the DEA shocked the nation by reversing their decision to schedule the plant as illegal in order to open it up to public comment.</p>
                    <br />
                    <p>Please note, these list are subject to change any day. Please check <a href="http://www.americankratom.org/legal_status">American Kratom Association</a> for up to date information. While you are on the site, we recommend reading up. They have a lot of information and are at the forefront in the war to save kratom. #savekratom</p>
                    <br />
                    <p><strong>Orders placed in states with current laws banning kratom, will be refunded and cancelled without notice.</strong></p>
                </div>
            </div>
        </div>
    </section>
@endsection

