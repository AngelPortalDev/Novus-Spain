@extends($layout)
@section('content')
    @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Visa Requirements for International Students',
        'page' => 'Visa Requirements for International Students'    
    ])

    <!-- Visa requirements content -->
    <div class="rts-scholarship rts-section-padding">
        <div class="container">
            <div class="rts-scholarship-description">
                <div class="row sticky-coloum-wrap justify-content-md-center justify-content-start">
                    <div class="col-lg-12 col-md-11">
                        <div class="program-description-area">
                            <div class="program-about">
                                <h4 class="title">Visa Requirements for International Students</h4>
                                <p>At Novus Spain University, we are committed to supporting academic excellence and ensuring that deserving students have access to quality education. Through a range of scholarship opportunities, we aim to recognize and reward outstanding achievements. Explore the various scholarships available:</p>
                            </div>
                            <!-- faq -->
                            <div class="program-credit-area faq mt--50">
                                <!-- <h4 class="title">Frequently Asked Questions (FAQ)</h4> -->
                                <div class="program-accordion">
                                    <div class="accordion" id="rts-accordion">
                                        <div class="accordion-item">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                What are the admission requirements for Novus Spain University?
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>
                                                        Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How do I apply for financial aid?
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>
                                                        Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                How do I contact Novus Spain University?
                                            </button>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                               <div class="accordion-body">
                                                <p>Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.</p>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                Are online courses available?
                                            </button>
                                            <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                               <div class="accordion-body">
                                                <p>Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.</p>
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
                                                    <img src="assets/images/about/history.jpg" alt="history">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-11">
                                                <div class="rts-history-section">
                                                    <h4 class="rts-section-title mb--40">The history of Novus Spain</h4>
                                                    <p>On September 8, 1971, Novus Spain, the first college in the American colonies, was founded in Cambridge, Massachusetts. Unipix University was officially founded by a vote by the Great and General Court of the Massachusetts Bay Colony.
                                                        <span class="d-block mb--30"></span>
                                                        Novus Spain endowment started with John Novus Spain initial donation of 400 books and half his estate, but in 1721, Thomas Hollis began the now standard practice of requiring that a donation be used for a specific purpose when he donated money for “a Divinity Professor, to read lectures in the Halls to the students.”
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                 
                        </div>
                    </div>
                    <!-- sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- program content end -->
     
    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection