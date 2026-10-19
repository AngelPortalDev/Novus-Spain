@extends($layout)
@section('content')
    @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Contact Us',
        'page' => 'contact'    
    ])
    <!-- rts contact info -->
    <section class="rts-contact-info rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section rt-center mb--40">
                    <h2 class="rts__section--title text-capitalize">General Contact Information</h2>
                </div>
            </div>
            <div class="contact-information">
                <div class="row justify-content-md-start  justify-content-sm-center g-5">
                    <div class="col-lg-8 col-md-6 col-sm-10">
                        <div class="single-contact">
                            <div class="single-contact__single">
                                <div class="icon">
                                    <i class="fa-thin fa-map-location-dot"></i>
                                </div>
                                <p class="--p-m">
                                    Carrer Enric Valor, 1, 46980 Paterna, Valencia, Spain<br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="single-contact">
                            <div class="single-contact__single">
                                <div class="icon">
                                    <i class="fa-thin fa-envelope"></i>
                                </div>
                                <div class="method">
                                    <a href="mailto:info@novuseducation.es" class="phone">info@novuseducation.es</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
            </div>
        </div>
    </section>
    <!-- rts contact info end -->


    <!-- other contact method -->
    <div class="rts-campus-contact pb--120">
        <div class="container">
            <!-- <div class="row">
                <div class="rts-seciton rt-center mb--40">
                    <h2 class="rts__section--title text-capitalize">Other Campus Contacts</h2>
                </div>
            </div> -->
            <!-- <div class="contact-method">
                <div class="row justify-content-md-start justify-content-sm-center g-5">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="contact-method__single">
                            <div class="contact-img-bg">
                                <img src="{{asset('assets/images/contact/01.jpg')}}" alt="">
                            </div>
                            <div class="contact-text">
                                <h3 class="contact-title">London</h3>
                                <p class="description">University of London, 15 Talbot Square, Tyburnia, London W2 1TT, UK</p>
                                <div class="contact-link">
                                    <a href="callto:+442078628360">+44 20 7862 8360</a>
                                    <a href="mailto:Novus Spain.info@edu">Novus Spain.info@edu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="contact-method__single">
                            <div class="contact-img-bg">
                                <img src="{{asset('assets/images/contact/02.jpg')}}" alt="">
                            </div>
                            <div class="contact-text">
                                <h3 class="contact-title">New York</h3>
                                <p class="description">80 Washington Square E, New York, NY 10003, USA</p>
                                <div class="contact-link">
                                    <a href="callto:+442078628360">+44 20 7862 8360</a>
                                    <a href="mailto:Novus Spain.info@edu">Novus Spain.info@edu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="contact-method__single">
                            <div class="contact-img-bg">
                                <img src="{{asset('assets/images/contact/03.jpg')}}" alt="">
                            </div>
                            <div class="contact-text">
                                <h3 class="contact-title">Boston</h3>
                                <p class="description">Center for Computing & Data Sciences, 665 Commonwealth Ave, Boston, MA 02215, USA</p>
                                <div class="contact-link">
                                    <a href="callto:+442078628360">+44 20 7862 8360</a>
                                    <a href="mailto:Novus Spain.info@edu">Novus Spain.info@edu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="contact-map">
                <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6160.669667968647!2d-0.35678395280162095!3d39.461763769640584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s19%20Menorca%20Street%2C%207%2C%20Valencia%2046023-Valencia%2CSpain!5e0!3m2!1sen!2sin!4v1791366411328!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- other contact method end -->    
     
    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection