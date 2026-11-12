@extends($layout)
@section('content')
    @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Terms and Conditions',
        'page' => 'Terms and Conditions'
    ])

    <div class="rts-scholarship rts-section-padding">
        <div class="container">
            <div class="rts-scholarship-description">
                <div class="row sticky-coloum-wrap justify-content-md-center justify-content-start">
                    <div class="col-lg-10 col-md-11">
                        <div class="programme-description-area">
                            <p><b>In these terms, "the School" means Novus Education (NOVUS EDUCATION, S.L., CIF B93837920) and "you" means the student applying for or enrolled on a course. The Refund Policy and these terms form part of your admission agreement.</b></p>

                            <section class="programme-about mb--30"><h5 class="title">1. Visas and permission to study</h5><p>Where you require a visa or study authorisation, starting your studies depends on obtaining the appropriate permission and meeting the applicable Spanish immigration requirements. The competent Spanish diplomatic, consular or immigration authorities assess applications. The School cannot issue, approve or guarantee a visa or residence authorisation.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">2. Refunds and statutory rights</h5><p>Tuition fees and other payments are refundable in accordance with our <a href="{{ route('refund-policy') }}" class="text-decoration-underline text-primary">Refund Policy</a>. These terms do not exclude or limit any right or remedy that cannot lawfully be excluded under applicable law. Any mandatory refund or withdrawal right takes precedence.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">3. Fees following a deferral</h5><p>If you request and receive a deferral, the tuition fees and other charges for the new intake may differ. The School will confirm the revised dates and fees in writing. Any agreed fee difference and the deferral fee must be paid before studies recommence, subject to the <a href="{{ route('refund-policy') }}" class="text-decoration-underline text-primary">Refund Policy</a> and mandatory law.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">4. Academic rules and conduct</h5><p>By accepting admission, you agree to follow the School's academic regulations, procedures and code of conduct made available to you. Any later changes must comply with applicable law and will be communicated to affected students. Changes do not remove mandatory consumer rights.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">5. Current contact details</h5><p>You must promptly tell the School about changes to your address, telephone number, email address or other relevant contact details, so that admission, academic and administrative information can reach you.</p></section>

                            <section class="programme-about mb--30"><h5 class="title">6. Authenticity and verification of documents</h5><p>All academic, identification and other application documents must be authentic, valid and complete. The School may verify originals and withdraw an offer or cancel admission if documents are false, altered, misleading, materially incomplete or otherwise invalid, subject to applicable law. A conditional offer remains conditional until its stated requirements are met; a Final Acceptance Letter records that they have been met at the time of issue.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">7. Outstanding fees</h5><p>Amounts due under your payment plan must be paid by the applicable deadlines. For one-year programmes, the remaining 75% of the tuition fee is paid in three instalments after you arrive in Spain, as set out in your payment plan. Any instalment arrangement must be confirmed by the School in writing.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">8. Late visa decisions and late enrolment</h5><p>If your visa is issued too late to meet the registration deadline, or the visa process prevents you from joining within the permitted enrolment period, the School may defer your admission to the next available intake. Revised course dates and, where appropriate, updated admission documents will be issued. Any charge remains subject to the <a href="{{ route('refund-policy') }}" class="text-decoration-underline text-primary">Refund Policy</a> and mandatory law.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">9. Enrolment and administrative documents</h5><p>The School will provide enrolment documents in accordance with its obligations and procedures. Where a payment plan applies, amounts already due may need to be paid before additional administrative documents are issued, but only to the extent permitted by law. This does not restrict access to documents the School is legally required to provide.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">10. Attendance and assessment dates</h5>
                            <p>Your course is delivered in person on campus. Attendance is compulsory: you must attend at least 70% of scheduled classes. Completion and certification require at least 70% attendance. You must also meet any attendance requirements that apply to your immigration status. Absence does not in itself entitle you to an extension or change of assessment, results, completion or certification dates.</p>
                            </section>
                            <section class="programme-about mb--30"><h5 class="title">11. Changes to the academic calendar</h5><p>The School may reasonably change the academic calendar because of regulatory requirements, operational necessity, force majeure or circumstances beyond its reasonable control. Material changes will be notified in writing. The School will take reasonable steps to preserve course and assessment requirements, without limiting any statutory remedy for a material change or failure to provide the contracted service.</p></section>


                            <section id="clause-12" class="programme-about mb--30" style="scroll-margin-top: 220px;"><h5 class="title">12. Non-enrolment or withdrawal after visa entry</h5><p>If you obtain a visa on the basis of admission to Novus Education and enter Spain or another Schengen country using that visa, no contractual refund is due if you then voluntarily decide not to enrol, start or attend the course. This includes not completing registration, not reporting to the School, non-attendance or voluntary withdrawal from the course for which the letter was issued. This clause is subject to the <a href="{{ route('refund-policy') }}" class="text-decoration-underline text-primary">Refund Policy</a> and every mandatory right that cannot lawfully be excluded.</p></section>
                            

                            <section class="programme-about mb--30"><h5 class="title">13. Official visa refusal</h5><p>If the competent Spanish authority formally refuses your study visa, the School will apply with its <a href="{{ route('refund-policy') }}" class="text-decoration-underline text-primary">Refund Policy</a>. Provide the official refusal notice and any additional documents reasonably needed to verify the claim. The registration fee €290 is retained or deducted once only, where lawful; mandatory refund rights take priority.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">14. Immigration formalities during your stay</h5><p>You are responsible for completing any required Spanish immigration registration, study authorisation, foreigner identity card (TIE) or other residence formalities within the applicable deadlines, and for maintaining valid status. The School may provide supporting enrolment documents in accordance with its legal obligations. The competent Spanish authorities decide whether to grant, renew or refuse immigration permission.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">15. Responsibility for immigration compliance</h5><p>You remain responsible for the visa, entry, stay and immigration requirements that apply to you. Admission to or enrolment with Novus Education does not establish that your course qualifies for an immigration route and does not guarantee a visa, study authorisation or residence permission.</p></section>
                            <section class="programme-about mb--30"><h5 class="title">16. Questions and requests</h5><p>For questions about admission, fees, refunds, deferral charges, course requirements or these terms, contact <a href="mailto:info@novuseducation.es" class="text-decoration-underline text-primary">info@novuseducation.es</a> or write to <b>Novus Education, Carrer Enric Valor, 1, 46980 Paterna, Valencia, Spain.</b></p></section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection
