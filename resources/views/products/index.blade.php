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
