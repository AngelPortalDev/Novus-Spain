@extends($layout)
@section('content')
    @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Our Team',
        'page' => 'Our Team'    
    ])

    <!-- faculty directory -->
    <section class="rts-faculty rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-12 col-md-11">
                    <div class="rts-section mb--50">
                        <h3 class="rts-section-title">Our Team</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center g-5">
                <!-- single staff item -->
                <div class="col-lg-6 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-image">
                                <img src="{{asset('assets/images/faculty/01.jpg')}}" alt="staff-image">
                            </div>
                            <div class="staf-info">
                                <h5 class="name">Tess GIORDMAINA</h5>
                                <span class="designation">Co-Founder & Director</span>
                                <!-- <div class="staf-info__social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div> -->
                                <a href="mailto:tess@novuseducation.es" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>tess@novuseducation.es</a>
                                <!-- <a href="callto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a> -->
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single staff item -->
              <div class="col-lg-6 col-md-11">
                    <div class="single-staff">
                        <div class="single-staff__content">
                            <div class="staf-image">
                                <img src="{{asset('assets/images/faculty/01.jpg')}}" alt="staff-image">
                            </div>
                            <div class="staf-info">
                                <h5 class="name">Mireille Morejon Marin</h5>
                                <span class="designation">Campus Manager</span>
                                <!-- <div class="staf-info__social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div> -->
                                <a href="mailto:mireille@novuseducation.es" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>mireille@novuseducation.es</a>
                                <!-- <a href="callto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a> -->
                               
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
          
        </div>
    </section>
    <!-- faculty directory end -->
     
    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection