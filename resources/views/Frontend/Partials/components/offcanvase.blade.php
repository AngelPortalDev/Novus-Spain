<!-- header style two -->
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{asset('assets/images/logo/logo__two.svg')}}" alt="NOVUS Education">
        </div>
        <div class="inner-content">
            <!-- <p class="disc">
                A modern HTML template for education, offering intuitive design & essential features for seamless learning experiences.
            </p> -->
            <!-- offcanvase banner -->
            <div class="offcanvase__banner mt--50">
                <div class="offcanvase__banner--content">
                    <img src="{{asset('assets/images/offcanvase.jpg')}}" alt="offcanvase">
                    <a href="https://one.novuseducation.es/crm/admission-form/" class="rts-theme-btn">Apply Now</a>
                </div>
            </div>
            <div class="offcanvase__info">
                <div class="offcanvase__info--content">
                    <!-- <a href="callto:+34123456789"><span><i class="fa-sharp fa-light fa-phone"></i></span>+(34) 123-456-789</a> -->
                    <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Carrer Enric Valor, 1, 46980 Paterna, Valencia, Spain</a>
                    <div class="offcanvase__info--content--social">
                        <p class="title">Follow Us:</p>
                        <div class="social__links">
                            <a href="https://www.facebook.com/novuseducations"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.instagram.com/novus_education_spain"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/novus-education-spain"><i class="fa-brands fa-linkedin"></i></a>
                            <!-- <a href="#"><i class="fa-brands fa-youtube"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li>
                    <a href="{{ route('about') }}" class="main">About Us</a>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Language Courses</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('business-english-course') }}">Business English Course</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('general-english-course') }}">General English Course</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('diploma-spanish-language') }}">Diploma in Spanish Language</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('campus-life') }}" class="main">Student Life</a>
                </li>
                <li>
                    <a href="{{ route('visa-requirement') }}" class="main">Visa Requirements</a>
                </li>
                 <li>
                    <a href="{{ route('faculty') }}" class="main">Our Team</a>
                </li>
                
                <li>
                    <a href="{{ route('contact') }}" class="main">Contact Us</a>
                </li>
            </ul>
        </nav>

        <div class="offcanvase__info--content mt--30">
            <!-- <a href="callto:+34123456789"><span><i class="fa-sharp fa-light fa-phone"></i></span>+(34) 123-456-789</a> -->
            <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Carrer Enric Valor, 1, 46980 Paterna, Valencia, Spain</a>
            <div class="offcanvase__info--content--social">
                <p class="title">Follow Us:</p>
                <div class="social__links">
                    <a href="https://www.facebook.com/novuseducations"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/novus_education_spain"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/novus-education-spain"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->
