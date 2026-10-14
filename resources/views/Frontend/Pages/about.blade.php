@extends($layout)
@section('content')
   @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'About Novus Education',
        'page' => 'about'    
    ])

    <!-- about university -->
    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">Novus Education Spain</h3>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <p class="rts-section-description">
                        Novus Education is an education provider based in Valencia, Spain, created to provide learning opportunities for national and international students.
                     <br><br>
                     We aim to develop an educational environment where students can strengthen their academic knowledge, build practical capabilities and develop the confidence required for their next step.
                     <br><br>
                     Our approach recognises that every student arrives with different experiences, ambitions and objectives. We therefore aim to create a supportive learning environment that encourages participation, independent thinking and continuous development.

                    </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-md-center justify-content-start">
                <div class="col-lg-7 col-xl-8 col-md-11">
                    <div class="rts-about-section">
                        <img src="{{asset('assets/images/about/about-01.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 col-md-11">
                    <div class="rts-about-details">
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">2026</h3>
                                <img src="{{asset('assets/images/icon/11.svg')}}" alt="">
                            </div>
                            <div class="desc">
                                <p>Established in Valencia</p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">2</h3>
                                <img src="{{asset('assets/images/icon/12.svg')}}" alt="">
                            </div>
                            <div class="desc">
                                <p>Learning Formats: In-Person & Online</p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">1</h3>
                                <img src="{{asset('assets/images/icon/13.svg')}}" alt="">
                            </div>
                            <div class="desc">
                                <p>International Learning Community</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about university end -->

    <!-- history -->
    <div class="rts-history">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="{{asset('assets/images/about/history.jpg')}}" alt="history">
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">Our Educational Approach</h4>
                        <p>We believe meaningful education combines academic knowledge with opportunities to develop communication, problem-solving, critical thinking and independent learning skills.

                        <span class="d-block mb--30"></span>
                          Our programmes are designed to encourage students to take an active role in their education while receiving appropriate academic and administrative support throughout their journey.
  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end-->

    <!-- funfact -->
   <!-- <div class="rts-funfact rts-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 ">
                    <div class="rts-funfact-wrapper">
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">90%</h2>
                            <p>post-graduation success rate</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">Top 10</h2>
                            <p>Colleges that Create Futures</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">No. 1</h2>
                            <p>in the nation for materials R&amp;D</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- funfact end -->


    <!-- mission -->
    <section class="rts-mission pt--100">
        <div class="container">
            <div class="row justify-content-center rt-center">
                <div class="rts-section mb--50">
                    <h2 class="rts-section-title">Mission and Values</h2>
                </div>
            </div>
            <!-- mission -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-timeline-section">
                        <div class="rts-timeline-content">
                                <div class="left-side">
                                    <div class="single-timeline-item">
                                        <h5 class="timeline-title">Diversity</h5>
                                        <p> Celebrating a rich tapestry of backgrounds,
                                            perspectives, and talents
                                        </p>
                                        <img src="{{asset('assets/images/about/mission-1.jpg')}}" alt="">
                                    </div>
                                    <div class="single-timeline-item">
                                        <h5 class="timeline-title">Innovation</h5>
                                        <p> Encouraging creativity, critical thinking, and a
                                            spirit of innovation.
                                        </p>
                                        <img src="{{asset('assets/images/about/mission-2.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="separator">
                                </div>
                                <div class="right-side">
                                    <div class="single-timeline-item">
                                        <h5 class="timeline-title">Excellence</h5>
                                        <p> Striving for academic and research excellence
                                            in all endeavors.
                                        </p>
                                        <img src="{{asset('assets/images/about/mission-3.jpg')}}" alt="">
                                    </div>
                                    <div class="single-timeline-item">
                                        <h5 class="timeline-title">Academic Excellence</h5>
                                        <p> Our commitment to academic excellence is reflected in
                                            the diverse range
                                        </p>
                                        <img src="{{asset('assets/images/about/mission-4.jpg')}}" alt="">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mission end-->

    @include($components . 'campus-tour', ['class' => 'rts-section-padding'])
    
    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection