
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
                            First-Year Applicants
                        </h3>

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
                                    <li class="single-requirement">MOI (Medium of Instruction/IELTS)</li>
                                    <li class="single-requirement">Marksheets, Transcripts, Provisional,Consolidated & Degree Certificates for all levels (School, High School, Bachelors) </li>
                            
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