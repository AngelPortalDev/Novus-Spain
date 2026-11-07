@extends($layout)
@section('content')
   @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Study in valencia - Spain',
        'page' => 'about'    
    ])

  <div class="about rts-section-padding v__5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-5">
                    <div class="rts__section--wrapper v__7">
                     
                        <h3 class="rts__section--title mb-0">
                            Learn with purpose. <br>Build your future in Valencia
                        </h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="about__description__text">
NOVUS Education is a new business school in the heart of Valencia, offering English-taught programmemes for students who want to build careers where people and experiences matter most.
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
                        that understand people. Our programmemes bring together core business knowledge and the specialist
                        skills behind great service, from hospitality and events to tourism, human resources and customer
                        experience.<br><br>We welcome students from Spain and around the world. Every programmeme is taught in English, so
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
                            <p>NOVUS Education helps international students learn with purpose, building the language, professional skills and confidence to study, work and live in a global world. Our practical, people-focused courses connect learning with real life in Valencia, one of Europe's most vibrant cities.</p>
                            <h4 class="font-32 mb-4 mt-5">Our vision</h4>
                            <p>A world where every learner has the language, skills and confidence to build their future wherever they choose.</p>

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
             <a href="{{ route('campus-life') }}"  target="_blank" class="rts-theme-btn btn-arrow justify-content-center">Discover Student Life
                            <span><i class="fa-regular fa-arrow-right"></i></span> </a>
            </div>
        </div>
    </section>
   
    <div class="rts-faculty-details" style="padding-top: 50px;">
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
                        <img class="img-fluid mw-100 " src="assets/images/faculty/01.jpeg" alt="faculty image">
  
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="faculty-content-text ms-lg-5 mt-5 mt-lg-0">
                        <p class="h6 mb-
                        4">A Welcome from Our Co-Founder & Director</p>
                        <p>Dr Tess Giordmaina | Co-Founder & Director, NOVUS Education</p>
                        <p>Welcome to NOVUS Education! </p>
                        <p>With over two decades of international experience in education, having worked across different countries and educational environments, I have witnessed first-hand the transformative power of learning. I firmly believe that education is not simply about gaining qualifications, but about opening doors, creating opportunities and empowering individuals to reach their full potential.</p>
                        <p>As Co-Founder and Director of NOVUS Education, I am proud to bring our vision to Valencia, marking an exciting new chapter in our group's international journey. Our ambition is to create an educational environment where academic excellence meets practical experience, personal development and global perspectives.</p>
                        <p>At NOVUS, we believe that people are at the heart of education. Our programmemes are designed to connect knowledge with real-world experience, guided by professionals who bring valuable industry insights into the classroom. We want our students not only to gain knowledge and skills, but also to develop the confidence, independence and international mindset needed to succeed in an ever-changing world.</p>
                        <p>Valencia, with its vibrant culture, international atmosphere and growing business community, provides the ideal setting for this journey.</p>
                        <p>I look forward to welcoming you to NOVUS Education and being part of your personal and professional growth.</p>
             
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
schools abroad, coordinated academic programmemes and mentoring for over a hundred students,
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
France and experience of delivering accredited business programmemes to students from around the
world. We are building NOVUS on the same foundations: rigorous academic standards, teaching
grounded in industry experience, and programmemes shaped by what employers need.<br><br>We are currently working towards accreditation for our programmemes and developing partnerships
with recognised academic institutions. Each programmeme page will state its award and awarding
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