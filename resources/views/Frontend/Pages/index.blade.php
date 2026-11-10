@extends($layout)

@section('content')

    @include($header . 'header-two')

    <!-- header banner -->
    <div class="banner v__2">
        <div class="banner__wrapper">
            <div class="swiper  swiper-data"
                data-swiper='{
                        "slidesPerView":1,
                        "effect": "fade",
                        "loop": true,
                        "speed": 1000,
                        "autoplay":{
                            "delay":"7000"
                }}'>
                <div class="swiper-wrapper">
                    <!-- single slides -->
                    <div class="swiper-slide">
                        <div class="banner__wrapper--bg" style="background-image: url({{asset('assets/images/banner/01.jpg')}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner__slides--container banner__height">
                                            <div class="banner__slides--content">
                                                <div class="banner__slides--content--sub">
                                                    <img src="{{asset('assets/images/icon/e-cap.svg')}}" alt="cap"> NOVUS EDUCATION • VALENCIA • SPAIN
                                                </div>
                                                <h1 class="banner__slides--content--title">
                                                  Learn with purpose. Build your future in Valencia.
                                                </h1>
                                                <div class="hero-buttons">
                                                <a href="{{ route('business-english-course') }}" class="rts-theme-btn btn-arrow">View Our programmes
                                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                                </a>
                                                <a href="https://one.novuseducation.es/crm/admission-form" class="rts-theme-btn btn-arrow">Apply Now
                                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single slides end -->
                    <!-- single slides -->
                    <div class="swiper-slide">
                        <div class="banner__wrapper--bg" style="background-image: url({{asset('assets/images/banner/02.jpg')}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner__slides--container banner__height">
                                            <div class="banner__slides--content">
                                                <div class="banner__slides--content--sub">
                                                    <img src="{{asset('assets/images/icon/e-cap.svg')}}" alt="cap">STUDY IN VALENCIA
                                                </div>
                                                <h1 class="banner__slides--content--title">
                                                   An international learning experience in the heart of the Mediterranean.
                                                </h1>
                                                <a href="{{ route('general-english-course') }}" class="rts-theme-btn btn-arrow">View Our programmes
                                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single slides end -->
                </div>
            </div>
            <div class="banner__slides--navigation">
                <div class="banner__slides--navigation--single">
                    <h5 class="nav__title">English Language</h5>
                    <a href="{{ route('business-english-course') }}" class="nav__description">Browse our business English programmes</a>
                </div>
                <div class="banner__slides--navigation--single">
                    <h5 class="nav__title">Spanish Language</h5>
                    <a href="{{ route('diploma-spanish-language') }}" class="nav__description">Browse our Spanish language programmes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- header banner end -->
    <!-- about us -->
    <section class="about v__2 pt--120 pb--80">
        <div class="container">
            <div class="row justify-content-md-center g-5">
                <div class="col-lg-6 col-md-9">
                    <div class="about__left--content">
                        <div class="about__left--content--left">
                            <img src="{{asset('assets/images/about/about__h2-1.png')}}" alt="">
                        </div>
                        <div class="about__left--content--center">
                            <div class="rts__circle v__1">
                                <svg class="spinner" viewBox="0 0 100 100">
                                    <defs>
                                        <path id="circle" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#circle">NOVUS Education * Valencia * Est. 2026 *
                                        </textPath>
                                    </text>
                                </svg>
                                <div class="rts__circle--icon">
                                    <i class="fa-light fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="about__left--content--right">
                            <img src="{{asset('assets/images/about/about__h2-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="about__right--content">
                        <div class="about__right--content--sub">
                            <img src="{{asset('assets/images/icon/e-cap-pix.svg')}}" alt="cap"> 
                          ABOUT
                        </div>
                        <h2 class="about__right--content--title">NOVUS Education</h2>
                        <p class="about__right--content--description">NOVUS Education is a new school in Valencia welcoming students from Spain
and around the world. We help you build the language, professional skills and
confidence to study, work and live in an international world, with practical courses
and personal support at every step.</p>
        <div class="about__right--content--vision">
                          
                                <div class="faculty-content-text me-5">
                            <h6 class="font-32 mb-4">Our mission</h6>
                            <p>NOVUS Education helps international students learn with purpose, building the language, professional skills and confidence to study, work and live in a global world. Our practical, people-focused courses connect learning with real life in Valencia, one of Europe's most vibrant cities.</p>
                            <h6 class="font-32 mb-4 mt-5">Our vision</h6>
                            <p>A world where every learner has the language, skills and confidence to build their future wherever they choose.</p>
                      
                            </div>
                         
                        </div>
                        <a href="{{ route('about') }}" class="rts-theme-btn btn-arrow">About NOVUS Education
                            <span><i class="fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us end -->
    <!-- fun fact -->
   <!-- <div class="rts-funfact v__2">
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
    <!-- fun fact end -->
    <!-- academic programme -->
   <section class="rts__section rts__light pt--120 pb--120">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper rt__lowercase">
                    <h2 class="rts__section--title">DISCOVER OUR programmes</h2>
                    <!-- <div class="rts__section--link">
                        <a class="rts-nbg-btn btn-arrow" href="">View All<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div> -->
                </div>
            </div>
            <!-- event content -->
            <div class="row g-5">
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event v__2">
                        <div class="rts__single--event--thumb">
                            <a href="{{ route('business-english-course') }}">
                                <img src="assets/images/event/01.jpg" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                           
                            <h5 class="rts__single--event--meta--title">
                                <a href="{{ route('business-english-course') }}">
                                    Business English Course</a>
                            </h5>
                            <a class="rts__round--btn" href="{{ route('business-english-course') }}">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event v__2">
                        <div class="rts__single--event--thumb">
                            <a href="{{ route('general-english-course') }}">
                                <img src="assets/images/event/02.jpg" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            
                            <h5 class="rts__single--event--meta--title">
                                <a href="{{ route('general-english-course') }}">
                                   General English Course</a>
                            </h5>
                            <a class="rts__round--btn" href="{{ route('general-english-course') }}">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event v__2">
                        <div class="rts__single--event--thumb">
                            <a href="{{ route('diploma-spanish-language') }}">
                                <img src="assets/images/event/03.jpg" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                           
                            <h5 class="rts__single--event--meta--title">
                                <a href="{{ route('diploma-spanish-language') }}">Diploma in Spanish</a>
                            </h5>
                            <a class="rts__round--btn" href="{{ route('diploma-spanish-language') }}">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
            </div>
        </div>
    </section>
    <!-- academic programme end -->
     
    @include($components . 'scholarship', ['class' => 'rts-scholarship-bg rts-section-height'])


    <section class="rts-application-procedure rts-section-padding">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-lg-12 col-sm-11">
                    <div class="rts__section--wrapper v__5">
                        <h2 class="rts-section-title">APPLICATION PROCESS</h2>
                        <!-- <p class="w-520">If you have any questions or need assistance at any step of the application process, our admissions team is here to help. We look forward to welcoming you to Unipix University.</p> -->
                    </div>
                    <!-- <div class="rts__section--wrapper v__5">
                        <h2 class="rts__section--title">DISCOVER OUR PROGRAMMES</h2>
                       </div> -->
                </div>
            </div>
            <!-- apply content -->
            <div class="row justify-content-sm-center justify-content-md-start g-5">
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-procedure">
                        <div class="procedure-image">
                            <img src="assets/images/apply/01.jpg" alt="application-thumb">
                        </div>
                        <div class="rt-clip-serial rt-clip-text">01</div>
                        <div class="icon">
                            <img src="assets/images/icon/07.svg" alt="">
                        </div>
                        <a href="https://one.novuseducation.es/crm/admission-form/">Choose Your programme</a>
                        <p>Explore our programmes and review the entry requirements, study format, duration and available intake.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-procedure">
                        <div class="procedure-image">
                            <img src="assets/images/apply/01.jpg" alt="application-thumb">
                        </div>
                        <div class="rt-clip-serial rt-clip-text">02</div>
                        <div class="icon">
                            <img src="assets/images/icon/06.svg" alt="">
                        </div>
                        <a href="https://one.novuseducation.es/crm/admission-form/">Submit Your Application</a>
                        <p>Complete the online application form with your personal, contact and academic information.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-procedure">
                        <div class="procedure-image">
                            <img src="assets/images/apply/01.jpg" alt="application-thumb">
                        </div>
                        <div class="rt-clip-serial rt-clip-text">03</div>
                        <div class="icon">
                            <img src="assets/images/icon/06.svg" alt="">
                        </div>
                        <a href="https://one.novuseducation.es/crm/admission-form/">Application Review</a>
                        <p>Our admissions team will review your application and contact you regarding the next stage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- blog -->
    <!-- <section class="blog pt--120 pb--120 rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper v__8">
                    <div class="rts__section--wrapper--left">
                        <h2 class="rts__section--title mb--15">Read Our Latest News</h2>
                        <p class="rts__section--description">Our mission is to provide you with valuable insights</p>
                    </div>
                    <div class="rts__section--link">
                        <a href="{{ route('blog') }}" class="rts-nbg-btn btn-arrow">View All
                            <span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <div class="blog__single--item">
                        <a href="{{ route('blog-details') }}" class="blog__single--item--link">
                            <div class="blog__single--item--thumb">
                                <img src="{{asset('assets/images/blog/blog__1.jpg')}}" alt="">
                            </div>
                        </a>
                        <div class="blog__single--item--meta">
                            <a href="#" class="blog__cat">Campus</a>
                            <h5 class="blog__single--item--title">
                                <a href="{{ route('blog-details') }}">10 from Harvard named Rhodes Scholars</a>
                            </h5>
                            <p class="blog__single--item--excerpt">You'll find something to spark your
                                curiosity and enhance</p>
                            
                            <div class="blog__single--item--info">
                                <div class="author">
                                    <span><i class="fa-thin fa-user"></i></span>
                                    <a href="#">Jon Adam</a>
                                </div>
                                <div class="date">
                                    <span><i class="fa-sharp fa-thin fa-calendar"></i></span>
                                    <p>Oct 29, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="blog__single--item">
                        <a href="{{ route('blog-details') }}" class="blog__single--item--link">
                            <div class="blog__single--item--thumb">
                                <img src="{{asset('assets/images/blog/blog__2.jpg')}}" alt="">
                            </div>
                        </a>
                        <div class="blog__single--item--meta">
                            <a href="#" class="blog__cat">Marketing</a>
                            <h5 class="blog__single--item--title">
                                <a href="{{ route('blog-details') }}">Announcing the winners the 2023 Education </a>
                            </h5>
                            <p class="blog__single--item--excerpt">You'll find something to spark your
                                curiosity and enhance</p>
                            
                            <div class="blog__single--item--info">
                                <div class="author">
                                    <span><i class="fa-thin fa-user"></i></span>
                                    <a href="#">Jon Adam</a>
                                </div>
                                <div class="date">
                                    <span><i class="fa-sharp fa-thin fa-calendar"></i></span>
                                    <p>Oct 29, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- blog end -->
    @include($footer . 'footer__default', ['class' => 'rts-footer-padding v_2', 'cclass' => 'v_1'])
@endsection