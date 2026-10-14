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
                                <h4 class="title">Student Visa & Study Authorisation</h4>
                                <p>This guide provides general information for international students planning to study in Spain.
Visa and immigration requirements depend on your nationality, the type and duration of your programme and your individual circumstances.
You should always check the latest requirements issued by the competent Spanish authorities and the Spanish Consulate responsible for your place of residence.
</p>
                            </div>
                            <!-- faq -->
                            <div class="program-credit-area faq mt--50">
                                <!-- <h4 class="title">Frequently Asked Questions (FAQ)</h4> -->
                                <div class="program-accordion">
                                    <div class="accordion" id="rts-accordion">
                                        <div class="accordion-item">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                              1. When should I start my visa process?
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>If you require a long-term study visa or study authorisation, you should begin preparing your application as soon as you receive the appropriate admission documentation.
                                                    </p>
                                                    <p>Under current Spanish rules, applications for long-term study authorisation should generally be submitted at least two months before the start of the studies, unless justified circumstances prevent this.</p>
                                                    <p>Applying early also gives you more time to prepare translations, legalisations, insurance and other supporting documents.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                               Who may need a student visa?
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>Students who are not citizens of the European Union, European Economic Area or Switzerland may require immigration permission depending on the duration and type of their studies. </p>
                                                    <p>For studies lasting more than 90 days, a long-term study visa or study authorisation may be required.</p>
                                                    <p>For shorter stays, visa requirements depend on nationality and individual circumstances</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What documents may be required?
                                            </button>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                               <div class="accordion-body">
                                                <p>Requirements vary according to the applicant and the relevant Spanish Consulate.</p>
                                                <p>Documents commonly required for qualifying long-term study applications can include:</p>
                                                <ul>
                                                    <li>A valid passport.</li>
                                                    <li>Completed visa/application forms.</li>
                                                    <li>Admission documentation from the educational institution.</li>
                                                    <li>Evidence that applicable enrolment or registration fees have been paid.</li>
                                                    <li>Proof of sufficient financial means.</li>
                                                    <li>Appropriate health insurance valid in Spain.</li>
                                                    <li>Medical documentation where required.</li>
                                                    <li>Criminal record documentation for qualifying longer stays and applicants of the applicable age.</li>
                                                    <li>Supporting documentation relating to the applicant's circumstances.</li>
                                                    <li>Foreign documents may need to be legalised or apostilled and officially translated into Spanish where required.</li>
                                                </ul>
                                            <p>Always follow the specific checklist issued by the Spanish Consulate or immigration authority handling your application.</p>    
                                               </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                How long does the visa process take?
                                            </button>
                                            <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                               <div class="accordion-body">
                                                <p>Processing times can vary according to the Consulate, application volume, your circumstances and whether additional documents or an interview are required.</p>
                                                <p>Students should therefore apply within the required timeframe and as early as reasonably possible.</p>
                                                <p>Avoid making non-refundable travel arrangements until the appropriate immigration permission has been issued.</p>
                                                
                                               </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                               Will I need to attend an appointment?
                                            </button>
                                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>Depending on where you apply, you may need to attend an appointment at a Spanish Consulate or authorised visa application centre.</p>
                                                    <p>The authorities may also request original documents, additional information or a personal interview.</p>
                                                    <p>Follow the instructions provided by the Spanish authority responsible for your application.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseSix">
                                               What should I do when my visa is approved?
                                            </button>
                                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                  <p>Once you receive your visa or study authorisation:</p>
                                                  <ul>
                                                    <li>Check that your personal information is correct.</li>
                                                    <li>Confirm your programme start date.</li>
                                                    <li>Arrange suitable accommodation.</li>
                                                    <li>Prepare your original documents for travel.</li>
                                                    <li>Confirm your travel arrangements.</li>
                                                    <li>Inform Novus Education of your expected arrival where requested.</li>
                                                    <li>Check whether you need to complete any post-arrival immigration procedures.</li>
                                                  </ul>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                aria-expanded="false" aria-controls="collapseSeven">
                                               Do I need a TIE after arriving in Spain?
                                            </button>
                                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>If your authorised study stay exceeds six months, you will generally need to apply personally for a Tarjeta de Identidad de Extranjero (TIE) within one month of entering Spain.</p>
                                                    <p>The TIE is the physical foreigner identity card documenting your authorised status in Spain.</p>
                                                    <p>You should check the current appointment and documentation requirements with the competent Spanish authorities after arrival.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                aria-expanded="false" aria-controls="collapseEight">
                                               Can I work while studying in Spain?
                                            </button>
                                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>Work rights depend on the type of study authorisation you hold.</p>
                                                    <p>Under current Spanish rules, a qualifying long-term authorisation for higher education can automatically permit employment or self-employment where the work is compatible with the studies.</p>
                                                    <p>The general maximum is 30 hours per week.</p>
                                                    <p>Students must confirm that their individual authorisation permits the proposed work before starting employment.</p>
                                                    <p>Novus Education does not guarantee employment or individual work rights.</p>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                aria-expanded="false" aria-controls="collapseNine">
                                               What if my visa is delayed?
                                            </button>
                                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>Contact Novus Education as soon as possible.</p>
                                                    <p>Depending on your programme, available intake and applicable academic policies, it may be possible to discuss alternative arrangements or a later intake.</p>
                                                    <p>A deferral should not be considered automatic unless it has been confirmed in writing by Novus Education.</p>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                aria-expanded="false" aria-controls="collapseTen">
                                               What if my visa is refused?
                                            </button>
                                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>Visa refusals are issued by the competent Spanish authority.</p>
                                                    <p>If your application is refused, carefully review the written decision and the reasons provided.</p>
                                                    <p>Depending on the circumstances and applicable rules, you may have options to appeal the decision or submit a new application.</p>
                                                    <p>Any tuition refund, cancellation or deferral will be handled according to the applicable Novus Education policy and your enrolment terms.</p>
                                                    <p>Novus Education cannot guarantee the success of a visa application, appeal or reapplication.</p>
                                                    
                                                </div>
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