
@extends($layout)
@section('content')
    @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Student Life',
        'page' => 'Student Life'    
    ])
<section class="rts__section rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper v__3">
                    <h2 class="rts__section--title">Why Valencia</h2>
                    <div class="rts__section--details">
                        <p class="rts__description" style="max-width: 624px;">
                       The world's best city to live in, according to expats. Valencia has been voted number one in InterNations' Expat Insider survey year after year. In 2024, it came first out of 53 cities worldwide and topped the quality of life index, with expats praising its safety, leisure options and easy, affordable public transport (Forbes). In the latest edition, Valencia took first place again, ahead of Málaga and Alicante (Lucas Fox, September 2025) </p>
                        <!-- <a class="rts-nbg-btn btn-arrow" href="/research">Learn More<span><i class="fa-sharp fa-regular fa-arrow-right"></i> -->
                        </span></a>
                    </div>
                </div>
            </div>
            <!-- research content -->
            <div class="row g-5">
                <!-- single item -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="">
                                <img src="assets/images/research/international-community.jpg" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="">A vibrant international community</a>
                            <p class="rts__research--single--meta--excerpt">
                                                            Valencia is home to people from all over the world, so
                            you'll feel part of the city from your very first week. Language exchanges, meet-ups and a busy
                            social scene make it easy to build friendships and a network that lasts well beyond your studies.
                                                        </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                   <!-- single item -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="">
                                <img src="assets/images/research/tradition-and-culture.jpg" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="">Tradition and culture</a>
                            <p class="rts__research--single--meta--excerpt">
                                                    Walk through centuries-old streets in the historic centre, browse one of
                            Europe's largest fresh food markets, then cross the city to the striking, futuristic City of Arts and
                            Sciences. Few places mix old and new so naturally, and there's always something new to
                            discover.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="">
                                <img src="assets/images/research/festivals-and-events.jpg" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="">Festivals and events all year round</a>
                            <p class="rts__research--single--meta--excerpt">
                                                        Valencia's calendar is packed, from the city's
                            world-famous Fallas festival in March to open-air concerts, food and music festivals, international
                            sporting events and conferences. Whatever your interests, there's something on every week,
                            and much of it is free.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="">
                                <img src="assets/images/research/beach-and-nature.jpg" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="">Beach and nature</a>
                            <p class="rts__research--single--meta--excerpt">
                                                            Wide sandy beaches are just a short tram ride from the centre, and the
                                Turia Gardens, a nine-kilometre park built in the old riverbed, cut right through the city. Go
                                running, cycle to class, or head out to the Albufera Natural Park to see the sun set over the
                                lagoon
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </section>


    <!-- section one -->
    <div class="rts-campus-section">
        <div class="container">
            <div class="row">
                <div class="rts-section rt-center mb--45">
                    <h3 class="rts-section-title">Student Life</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{asset('assets/images/campus/01.jpg')}}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">Student Affairs</a></h5>
                                <p class="item-description">Comprising more than 25 offices &amp; centers, Student Affairs provides a broad of this services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{asset('assets/images/campus/02.jpg')}}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">Housing &amp; Dining</a></h5>
                                <p class="item-description">Nearly all undergraduates and more than 65% graduate students reside in 81 merit undergraduate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{asset('assets/images/campus/03.jpg')}}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">Engagement &amp; Diversity</a></h5>
                                <p class="item-description">Growing up in the Chicago suburbs, Jess found video games to be a rich portal to alternative.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </div>
    <!-- section two -->
    <div class="rts-campus-section rts-section-padding v_2">
        <div class="container">
            <div class="row">
                <div class="rts-section rt-center mb--45">
                    <h3 class="rts-section-title">Arts &amp; Culture</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{asset('assets/images/campus/04.jpg')}}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">The Arts at Novus Education</a></h5>
                                <p class="item-description">Stanford has a rich tradition of fostering creativity and the arts, A vibrant campus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{asset('assets/images/campus/05.jpg')}}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">Museums</a></h5>
                                <p class="item-description">The Stanford campus is home to two world-class art museums.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{asset('assets/images/campus/06.jpg')}}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">Performing Arts</a></h5>
                                <p class="item-description">Presents range performances and distinctive performing arts experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </div>

    <!-- section three -->
    <div class="rts-campus-section rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section rt-center mb--45">
                    <h3 class="rts-section-title">Athletics, Recreation, &amp; Wellness</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{asset('assets/images/campus/07.jpg')}}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">Recreation and Wellness</a></h5>
                                <p class="item-description">Students, faculty, recreational facilities and wellness programs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{asset('assets/images/campus/08.jpg')}}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">Cardinal Athletics</a></h5>
                                <p class="item-description">Stanford students compete in 36 varsity sports and 43 club sports.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{asset('assets/images/campus/09.jpg')}}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">BeWell</a></h5>
                                <p class="item-description">Offers incentives, programs, and activities that promote health and wellness.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </div>
    
    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection