@extends($layout)
@section('content')
    @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Refund Policy',
        'page' => 'Refund Policy'
    ])

    <div class="rts-scholarship rts-section-padding">
        <div class="container">
            <div class="rts-scholarship-description">
                <div class="row sticky-coloum-wrap justify-content-md-center justify-content-start">
                    <div class="col-lg-10 col-md-11">
                        <div class="programme-description-area">
                            <section class="programme-about mb--30">
                                <h2 class="title">Visa refusal and registration fee</h2>
                                <p>If the competent Spanish authority formally refuses your study visa, tuition fees paid are refundable once we receive and verify the official refusal notice. The EUR 290 registration fee is non-refundable under this policy, subject to mandatory law. It is retained or deducted only once and is not charged again if already retained separately.</p>
                            </section>
                            <section class="programme-about mb--30">
                                <h2 class="title">Submitting a refund request</h2>
                                <p>Email <a href="mailto:info@novuseducation.es" class="text-decoration-underline text-primary">info@novuseducation.es</a> with your full name, application reference, official visa refusal notice, payment receipts and refund payment details. Provide any additional documents reasonably needed to verify the claim. The School will confirm the refund calculation and any lawful deduction in writing.</p>
                            </section>
                            <section class="programme-about mb--30">
                                <h2 class="title">Refund processing time</h2>
                                <p>Eligible visa-refusal refunds are processed within 35 to 40 working days after the scheduled intake begins. Submit the complete request and supporting documents promptly. This timetable does not delay a refund that must be made earlier under mandatory law, including a statutory withdrawal refund.</p>
                            </section>
                            <section class="programme-about mb--30">
                                <h2 class="title">Deferral of an intake</h2>
                                <p>An approved student-requested deferral carries a EUR 290 deferral fee, which is non-refundable and non-transferable except where mandatory law requires otherwise. This is separate from the registration fee. Any difference in tuition or other agreed charges for the new intake must be paid before studies recommence.</p>
                            </section>
                            <section class="programme-about mb--30">
                                <h2 class="title">Visa documents within two weeks</h2>
                                <p>Where a visa is required, provide the complete set of visa documents requested by the School within two weeks of paying your fees. If failure to do so makes a deferral necessary, the School will notify you and apply the EUR 290 deferral fee, subject to mandatory law.</p>
                            </section>
                            <section class="programme-about mb--30">
                                <h2 class="title">Voluntary withdrawal after payment</h2>
                                <p>Except for an eligible visa refusal or a refund required by law, no contractual refund is available if you voluntarily withdraw after paying fees. This does not remove statutory cancellation rights or remedies where the School fails to provide the contracted service.</p>
                            </section>
                            <section class="programme-about mb--30">
                                <h2 class="title">Forged or fraudulent documents</h2>
                                <p>The visa-refusal refund does not apply where the refusal results from forged or fraudulent documents submitted in support of the application. The School may retain only amounts it is legally entitled to retain.</p>
                            </section>
                            <section class="programme-about mb--30">
                                <h2 class="title">Withdrawal after entering Spain or the Schengen Area</h2>
                                <p><a href="{{ route('terms-and-conditions') }}#clause-12" target="_blank" class="text-decoration-underline text-primary">Clause 12 of the Terms and Conditions (non-enrolment or withdrawal after visa entry)</a> applies if you use a visa obtained through admission to Novus Education and then choose not to study. Mandatory consumer rights are not affected.</p>
                            </section>
                            
                            <section class="programme-about mb--30">
                                <h2 class="title">Tax treatment</h2>
                                <p>Any Spanish VAT (IVA) lawfully charged will be adjusted or refunded as required by Spanish tax law. Where necessary, the School will issue a correcting invoice. Tax is not automatically excluded from a refund just because it was originally charged.</p>
                            </section>
                            <section class="programme-about mb--30">
                                <h2 class="title">Mandatory consumer rights</h2>
                                <p>For a qualifying distance or off-premises service contract, you normally have 14 calendar days from conclusion to withdraw without giving a reason. Any longer statutory period or extension remains available. Send a clear withdrawal notice to <a href="mailto:info@novuseducation.es" class="text-decoration-underline text-primary">info@novuseducation.es</a> or to the School address on this letter. Statutory withdrawal refunds are made without undue delay and within 14 calendar days of notice, using the original payment method unless otherwise expressly agreed at no cost to you. No automatic EUR 290 deduction applies. Only a lawful proportionate charge for services started at your express request may apply. Loss of withdrawal rights after full performance requires the consent and acknowledgement prescribed by law. These rights take priority over every exclusion, charge and timetable above.</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection
