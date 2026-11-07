
@extends($layout)
@section('content')
    @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Student Life',
        'page' => 'Student Life'    
    ])

    <div class="rts-campus-life rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="campus-life">
                    <div class="campus-life__content">
                        <h1 class="section-title">Student Life at NOVUS</h1>
                        <p class="description">Life at NOVUS goes beyond the classroom. Moving to a new country is a big step, and we
want you to feel at home from your very first week. That's why we care about our
students' social wellbeing as much as their learning.
                        </p>


                        <div class="campus-video">
                            <img src="assets/images/campus/video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rts-history">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="assets/images/about/Parque.jpg" alt="Parque">
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">Our campus in Paterna</h4>
                        <p>Our campus is in Paterna, a welcoming town just outside Valencia, right across from
                        Parque Central, a large park designed as the green heart of the town, with gardens,
                        walking paths and open spaces where students relax, study outdoors and meet friends
                        between classes. We're just a short walk from the metro, so Valencia's city centre and
                        beaches are easy to reach. Paterna combines a calm, residential feel with a rich local
                        history: its 11th-century Moorish tower, its unique cave houses, and La Cordà, one of the
                        region's most spectacular fireworks festivals. Here you get the best of both: a peaceful
                        place to study and a vibrant city on your doorstep.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-event-details pt--120">
        <div class="container">
            <div class="row justify-content-md-center justify-content-start">
                <div class="col-lg-12 col-md-12">
                    <div class="event-details">
                        <div class="event-details__content">
                      
                            <div class="event-details__content--text">
                                <div class="rts-section">
                                    <h4 class="rts-section-title">Welcome and orientation</h4>
                                    <p class="description">Starting somewhere new is easier when you're not on your own. Every new student begins with a welcome and orientation programme to help you settle in quickly and feel at home.</p>
                                </div>
                            </div>
                            <div class="event-details__content--feature">
                                <!-- single feature -->
                                <div class="single-feature">
                                    <p class="feature-heading" style="color: #c80a1e;">Meet your classmates:</p>
                                    <p class="feature-description">a welcome gathering to get to know other new students, our team and your teachers.</p>
                                </div>

                                  <div class="single-feature">
                                    <p class="feature-heading" style="color: #c80a1e;">Find your level:</p>
                                    <p class="feature-description">a short placement test and a quick chat with a teacher on your first day, so you join the right class from the start.</p>
                                </div>

                                  <div class="single-feature">
                                    <p class="feature-heading" style="color: #c80a1e;">Getting around:</p>
                                    <p class="feature-description">how to reach campus by metro, how to get a transport card, and how to explore Valencia by metro, tram, bus and Valenbisi, the city's public bikes.</p>
                                </div>

                                  <div class="single-feature">
                                    <p class="feature-heading" style="color: #c80a1e;">First practical steps:</p>
                                    <p class="feature-description">guidance on registering at the town hall (empadronamiento),applying for your residence card (TIE) if you need one, getting a Spanish phone number, opening a bank account and arranging health insurance.</p>
                                </div>

                                <div class="single-feature">
                                    <p class="feature-heading" style="color: #c80a1e;">Discover Paterna and Valencia:</p>
                                    <p class="feature-description">a walk around Paterna and the park, and a first visit to the city centre.From your first enquiry to your last day, our team is here for you. After your first week, we remain your first point of contact for any questions as you settle into life in Spain.</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <article class="blog-details pt--50">
                  
                        <h3 class="sub-title">Social events and activities</h3>
                        <p>Throughout the year, we organise activities that help you make friends, practise your
languages and discover Valencia and its culture:</p>
                        <div class="row mb-5 align-items-center">
                           
                            <div class="col-md-7">
                                <div class="check-area-details">
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Movie nights</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Hikes and nature trips, from the Turia Gardens to the Albufera</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Museum visits and cultural outings</span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>City explorations: markets, neighbourhoods and the historic centre
                                        </span>
                                    </div>
                                    <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Sports and beach activities</span>
                                    </div>
                                      <div class="single-check">
                                        <i class="far fa-check-circle"></i>
                                        <span>Local festivals and traditions, including Fallas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Many of our activities are free. Others, such as excursions and day trips, have a small fee
to cover costs like transport and entry tickets. We'll always tell you the cost in advance,
and taking part is always optional.</p>
                    </article>
                </div>
          
            </div>
         
        </div>
    </div>
<section class="rts__section pt--50 pb--50">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper v__3">
                    <h2 class="rts__section--title">Why Valencia</h2>
                    <div class="rts__section--details">
                        <p class="rts__description" style="max-width: 624px;">
                       The world's best city to live in, according to expats. Valencia has been voted number one in InterNations' Expat Insider survey year after year. In 2024, it came first out of 53 cities worldwide and topped the quality of life index, with expats praising its safety, leisure options and easy, affordable public transport (<a href="https://www.forbes.com.au/life/travel/ranked-the-25-best-cities-to-live-in-the-world-according-to-expats/" style="color: #c80a1e;" target="_blank">Forbes</a>). In the latest edition, Valencia took first place again, ahead of Málaga and Alicante (<a href="https://www.lucasfox.com/news-and-press/articles/spain-tops-global-rankings-for-expat-living" style="color: #c80a1e;" target="_blank">Lucas Fox, September 2025</a>) </p>
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



    
    @include($footer . 'footer__default', ['class' => 'v__1'])

    @endsection