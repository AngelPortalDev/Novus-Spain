@extends($layout)
@section('content')
   @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'About Novus Education',
        'page' => 'about'    
    ])

  <div class="about rts-section-padding v__5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <div class="rts__section--wrapper v__7">
                     
                        <h2 class="rts__section--title mb-0">
                            Business education, built around people
                        </h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <p class="about__description__text">
NOVUS Education is a new business school in the heart of Valencia, offering English-taught programmes for students who want to build careers where people and experiences matter most.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="about__image">
                        <img src="assets/images/about/about__5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about university -->
    <section class="rts-about-university">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">Who we are</h3>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <p class="rts-section-description">
                        NOVUS Education was founded on a simple idea: the most successful organisations are the ones
                        that understand people. Our programmes bring together core business knowledge and the specialist
                        skills behind great service, from hospitality and events to tourism, human resources and customer
                        experience.<br><br>We welcome students from Spain and around the world. Every programme is taught in English, so
our classrooms bring together different cultures, perspectives and ambitions, just as the workplaces
our graduates will join.
                    </p>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </section>
    <!-- about university end -->

    <!-- history -->
    <div class="rts-history" style="padding-bottom: 100px;">
        <div class="container">
    <div class="row align-items-center justify-content-md-center">
                    <div class="col-lg-6 col-md-11">
                        <div class="faculty-content-text me-5">
                            <h4 class="font-32 mb-4">Our mission:</h4>
                            <p>We educate the professionals who make experiences happen. NOVUS Education
combines business fundamentals with hands-on learning in hospitality, events, tourism, people
management and customer experience, connecting students with the real work of one of Europe's
most vibrant cities.</p>
                            <h4 class="font-32 mb-4 mt-5">Our vision</h4>
                            <p>A world where every organisation understands that its people and the experiences they
create are its greatest asset, and where NOVUS graduates lead that change</p>

 <h4 class="font-32 mb-4 mt-5">Our values:</h4>
                            <p>Human-centred · Career-ready · International</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-11">
                        <figure class="mt-5 mt-lg-0">
                            <img class="mw-100" src="assets/images/about/history.jpg" alt="">
                        </figure>
                    </div>
                </div>
             
        </div>
    </div>
  <section class="rts-about-university">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">Part of an international group</h3>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <p class="rts-section-description">NOVUS Education is part of a wider international education group, with campuses in Malta, Italy and
France. Being part of a group means our students benefit from shared academic experience,
international connections and a network that reaches well beyond Spain.
                    </p>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </section>
    
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
    <div class="rts-faculty-details">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper v__9">
                        <h2 class="rts__section--title">Meet our team</h2>
                        <p class="rts__section--description text-center">Get to know the people behind NOVUS. Our founding team brings together experience in education,
international student services and business, and we're building a faculty of professionals who teach
from real experience in their sectors.
</p>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-8">
                    <div class="faculty-image text-center">
                        <img class="img-fluid mw-100 " src="assets/images/faculty/01.jpg" alt="faculty image">
  
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="faculty-content-text ms-lg-5 mt-5 mt-lg-0">
                        <p class="h6 mb-
                        4">A welcome from our Director</p>
                        <p class="mb-5">Tess Giordmaina, Director</p>
                        
                        <p class="mb-5">Welcome to NOVUS Education. Bringing NOVUS to Valencia is an exciting new chapter for our
group. We have seen first-hand how the right education can open doors, and we want every student
who joins us to leave confident, connected and ready for their next step.</p>

 <p class="mb-5">Our programmes are built around what we believe matters most in business today: people, and the
experiences they create. You'll learn from professionals who share what really works in their
industries, in a city that gives you the perfect setting to grow, both personally and professionally.</p>
<p class="mb-5">We look forward to welcoming you to Valencia and to being part of your journey.</p>

                    </div>
                </div>
                 <div class="border-top my-60"></div>
                         <div class="col-lg-4 col-md-8">
                    <div class="faculty-image text-center">
                        <img class="img-fluid mw-100 " src="assets/images/faculty/02.jpg" alt="faculty image">
  
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="faculty-content-text ms-lg-5 mt-5 mt-lg-0">
                        <p class="h6 mb-
                        4">Mireille Morejon Marín</p>
                        <p class="mb-5">Head of Academics and Campus Manager</p>
                        
                        <p class="mb-5">Students thrive when they feel seen, supported and challenged. That's what we're building at
NOVUS.”</p>

 <p class="mb-5">Mireille leads the academic and campus life of NOVUS. She designs our curricula, builds the
academic and industry partnerships that bring the real world into the classroom, and oversees
everything that makes the school run day to day.</p>
<p class="mb-5">An educator with more than a decade of international experience, she has taught at international
schools abroad, coordinated academic programmes and mentoring for over a hundred students,
and designed courses for online and hybrid learning. Her focus has always been on practical,
engaging learning that prepares students for what comes next.</p>

<p class="mb-5">Based in Valencia, Mireille makes sure every NOVUS student feels at home, both in class and in the
city. From the first enquiry and first week on campus through to graduation, she's there to help
students make the most of their time with us.</p>
                    </div>
                </div>
                

                <div class="border-top my-60"></div>
               
            </div>
         
         
       
                <!-- single event item -->
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



    <!-- mission end-->

    @include($components . 'campus-tour', ['class' => 'rts-section-padding'])

        <section class="rts-about-university">
        <div class="container">

            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">Accreditation and recognition</h3>
                        
                    </div>
                    
                    <div class="col-lg-8 col-md-7">
                        
                        <p class="rts-section-description">
                <h6>Quality you can trust</h6>
                       NOVUS Education is backed by an international education group with campuses in Malta, Italy and
France and experience of delivering accredited business programmes to students from around the
world. We are building NOVUS on the same foundations: rigorous academic standards, teaching
grounded in industry experience, and programmes shaped by what employers need.<br><br>We are currently working towards accreditation for our programmes and developing partnerships
with recognised academic institutions. Each programme page will state its award and awarding
body as soon as they are confirmed, so you will always know exactly what you are studying for.
                    </p>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </section>



    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection