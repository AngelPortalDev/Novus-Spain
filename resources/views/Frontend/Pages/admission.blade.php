
@extends($layout)
@section('content')
    @include($header . 'header-two')

    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Apply to Novus Education',
        'page' => 'Apply Admission'    
    ])
    <!-- admission page content -->
    <div class="rts-page-content rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="admission-content-top">
                        <h3 class="rts-section-title">
                            Admissions and Payment Rules
                        </h3>

                        <p class="rts-section-description">Applications and payments for each intake close one month before the intake starts. Pay the non-refundable registration fee first to book your place. Visa students receive the documents needed for their visa application after paying this fee.</p>

                        <div class="requirement-deadline">
                            <h3 class="rts-section-title">Tuition Payment</h3>
                            <p>Within 14 days after visa approval, visa students must either pay the full tuition fee with a 25% scholarship, or, for one-year courses only, the first of 12 equal monthly instalments with no scholarship. The remaining instalments are due monthly from the course start date, and the full tuition must be paid by the end of the course. Courses shorter than one year must be paid in full.</p>
                            <p>EU and visa-free students follow the same payment options without the visa step. The full tuition fee (with the 25% scholarship) or the first instalment for a one-year course is due by the intake deadline.</p>
                        </div>

                        <div class="requirement-deadline">
                            <h3 class="rts-section-title">Cancellations and Refunds</h3>
                            <ul>
                                <li class="single-requirement">A visa refusal means no tuition has been paid; the registration fee is non-refundable.</li>
                                <li class="single-requirement">If your visa is granted but you do not come, no refund is due and Novus informs the immigration authorities.</li>
                                <li class="single-requirement">If you leave early, cancel in writing. Amounts already paid are not refunded. Instalment students owe the current month's instalment only; no further instalments are due.</li>
                                <li class="single-requirement">Students who paid in full and leave early receive no refund; the scholarship was provided for advance payment.</li>
                                <li>Refunds are processed 45 working days after the intake start date (except visa refusals, see point 2).</li>
                                <li>No refund if a residence permit or its extension is refused after the student has arrived in Spain.</li>
                            </ul>
                            <p>These terms are subject to mandatory rights under applicable law.</p>
                            <br>
                        </div>

                        <div class="admission-big-thumb">
                            <img src="{{asset('assets/images/course/admission-bg.jpg')}}" alt="admission">
                        </div>

                        <div class="requirement-deadline">
                            <h3 class="rts-section-title">Document Checklist</h3>
                            <div class="requirement-deadline__content">
                                <ul>
                                    <li class="single-requirement">Resume</li>
                                    <li class="single-requirement">Passport Size Photo</li>
                                    <li class="single-requirement">Passport Copy (Front & Last Page)</li>
                                    <li class="single-requirement">SOP (Statement of Purpose)</li>
                                    
                                    <li class="single-requirement">Marksheets, Transcripts / Degree Certificates of the highest qualification (School, High School, Bachelors) </li>
                            
                                </ul>
                            </div>
                        </div>
                        <div class="application-deadline">
     
                 <a
                    href="https://one.novuseducation.es/crm/admission-form/"
                    class="rts-theme-btn primary course-enrol-btn" target="_blank" rel="noopener noreferrer"
                >
                    Submit Application
                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <!-- admission page content end -->
     
    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection