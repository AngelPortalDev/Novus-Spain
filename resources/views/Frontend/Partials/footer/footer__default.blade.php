
<!-- footer -->
<footer class="footer {{ $class ?? ''}}">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <div class="footer__widget--logo">
                         <h6 class="footer__widget--title">Novus Spain</h6>
                         <p><b>Campus</b> : 19 Menorca Street, 7, Valencia 46023-Valencia,Spain</p>
                        <!-- <a href="index"><img src="{{asset('assets/images/logo/logo__white.svg')}}" alt="logo"></a> -->
                    </div>
               
                    <div class="footer__widget--social">
                        <ul class="social">
                            <li class="social__link"><a href="https://www.facebook.com/novuseducations"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="social__link"><a href="https://www.instagram.com/novus_education_spain"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="social__link"><a href="https://www.linkedin.com/company/novus-education-spain"><i class="fa-brands fa-linkedin"></i></a></li>
                            <!-- <li class="social__link"><a href="#"><i class="fa-brands fa-youtube"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Programmes</h6>
                    <div class="footer__widget--menu">
                        <ul>
                    <li><a href="{{ route('business-english-course') }}">Business English Course</a></li>
                    <li><a href="{{ route('general-english-course') }}">General English Course</a></li>
                    <li><a href="{{ route('diploma-spanish-language') }}">Diploma in Spanish Language</a></li>
       
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Quick Links</h6>
                    <div class="footer__widget--menu">
                        <ul>
                            <!-- <li><a href="{{ route('about') }}">About </a></li>
                            <li> <a href="{{ route('contact') }}">Contact</a></li> -->
                            <li><a href="{{ route('visa-requirements') }}">Visa Requirements</a></li>
                            <li><a href="{{ route('faculty') }}">Our Team</a></li>
                            <li><a href="{{ route('campus-life') }}" >Student Life</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Quick Button</h6>
                    <div class="footer__widget--button">
                        <a href="{{ route('contact') }}" class="cta__button active">Applying</a>
                        <a href="{{ route('contact') }}" class="cta__button">scholarship</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- footer copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright__wrapper">
                    <p>Copyright &copy; {{ date('Y') }} All Rights Reserved by <a href="#">Novus Education</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer copyright end -->
