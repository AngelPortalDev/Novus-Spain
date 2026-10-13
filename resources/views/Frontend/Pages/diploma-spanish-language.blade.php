@extends($layout)
@section('content')
    @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Diploma in Spanish Language',
        'page' => 'Course Details'    
    ])
<style>
    .general-english-course {
        --course-accent: #c9002b;
        padding: 80px 0;
    }

    /* Image and course information */
    .general-english-course .course-top {
        display: grid;
        grid-template-columns: minmax(0, 2fr) minmax(300px, 1fr);
        gap: 32px;
        align-items: stretch;
    }

    .general-english-course .course-image {
        position: relative;
        min-width: 0;
        min-height: 360px;
        margin: 0;
        overflow: hidden;
        border-radius: 10px;
        background: #f5f5f5;
    }

    .general-english-course .course-image img {
        position: absolute;
        inset: 0;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    /* Course information card */
    .general-english-course .course-info-card {
        min-width: 0;
        padding: 32px;
        border: 1px solid #e8e8e8;
        border-top: 4px solid var(--course-accent);
        border-radius: 10px;
        background: #f7f7f7;
    }

    .general-english-course .course-info-title {
        margin: 0 0 16px;
        font-size: 26px;
        line-height: 1.3;
    }

    .general-english-course .course-info-list {
        margin: 0;
        padding: 0;
    }

    .general-english-course .course-info-row {
        display: grid;
        grid-template-columns: minmax(0, 1fr) auto;
        align-items: center;
        gap: 12px;
        padding: 18px 0;
        border-bottom: 1px solid #e4e4e4;
        font-size: 15px;
        line-height: 1.5;
    }

    .general-english-course .course-info-row:last-child {
        border-bottom: 0;
    }

    .general-english-course .course-info-row dt {
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: 0;
        margin: 0;
        color: #596373;
        font-weight: 400;
    }

    .general-english-course .course-info-row dd {
        max-width: 150px;
        margin: 0;
        color: #343a40;
        text-align: right;
        overflow-wrap: anywhere;
    }

    .general-english-course .course-info-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 42px;
        width: 42px;
        height: 42px;
        border: 1px solid var(--course-accent);
        border-radius: 50%;
        color: var(--course-accent);
        font-size: 19px;
    }

    .general-english-course .course-info-row .course-intake {
        color: var(--course-accent);
        font-size: 20px;
        font-weight: 700;
    }

    .general-english-course .course-enrol-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin-top: 22px;
        text-align: center;
    }

    /* Full-width overview */
    .general-english-course .course-overview {
        margin-top: 40px;
    }

    .general-english-course .course-overview-title {
        margin: 0 0 18px;
        font-size: 32px;
        line-height: 1.3;
    }

    .general-english-course .course-overview p {
        margin: 0 0 16px;
        color: #596373;
        font-size: 16px;
        line-height: 1.8;
        overflow-wrap: anywhere;
    }

    /* Two-column feature cards */
    .general-english-course .course-feature-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 24px;
        margin-top: 28px;
    }

    .general-english-course .course-feature {
        padding: 24px;
        border: 1px solid #e8e8e8;
        border-left: 3px solid var(--course-accent);
        border-radius: 8px;
        background: #f8f8f8;
    }

    .general-english-course .course-feature h3 {
        margin: 0 0 10px;
        color: var(--course-accent);
        font-size: 20px;
        line-height: 1.4;
    }

    .general-english-course .course-feature p {
        margin: 0;
    }

    /* Tablet */
    @media (max-width: 991.98px) {
        .general-english-course {
            padding: 60px 0;
        }

        .general-english-course .course-top {
            grid-template-columns: minmax(0, 1fr);
            gap: 24px;
        }

        .general-english-course .course-image {
            min-height: 0;
            aspect-ratio: 16 / 9;
        }
    }

    /* Mobile */
    @media (max-width: 767.98px) {
        .general-english-course {
            padding: 40px 0;
        }

        .general-english-course .course-info-card,
        .general-english-course .course-feature {
            padding: 22px;
        }

        .general-english-course .course-feature-grid {
            grid-template-columns: minmax(0, 1fr);
            gap: 16px;
        }

        .general-english-course .course-overview {
            margin-top: 30px;
        }

        .general-english-course .course-overview-title {
            font-size: 28px;
        }
    }
</style>
   <div class="rts-event-details general-english-course">
    <div class="container">

        <!-- Top row: image and course information -->
        <div class="course-top">

            <div class="course-image">
                <img
                    src="{{ asset('assets/images/campus/event/event-details.jpg') }}"
                    alt="Students attending a classroom session"
                >
            </div>

            <aside
                class="course-info-card"
                aria-labelledby="course-info-heading"
            >
                <h2
                    id="course-info-heading"
                    class="rts-section-title course-info-title"
                >
                    Course Includes:
                </h2>

                <dl class="course-info-list">

                    <div class="course-info-row">
                        <dt>
                            <span class="course-info-icon">
                                <i
                                    class="fa-regular fa-calendar-days"
                                    aria-hidden="true"
                                ></i>
                            </span>
                            Intakes:
                        </dt>
                        <dd class="course-intake">Monthly</dd>
                    </div>

                    <div class="course-info-row">
                        <dt>
                            <span class="course-info-icon">
                                <i
                                    class="fa-solid fa-chalkboard-user"
                                    aria-hidden="true"
                                ></i>
                            </span>
                            Mode:
                        </dt>
                        <dd>Face to Face</dd>
                    </div>

                    <div class="course-info-row">
                        <dt>
                            <span class="course-info-icon">
                                <i
                                    class="fa-regular fa-clock"
                                    aria-hidden="true"
                                ></i>
                            </span>
                            Duration:
                        </dt>
                        <dd>Flexible</dd>
                    </div>

                    <div class="course-info-row">
                        <dt>
                            <span class="course-info-icon">
                                <i
                                    class="fa-solid fa-language"
                                    aria-hidden="true"
                                ></i>
                            </span>
                            Language:
                        </dt>
                        <dd>Spanish</dd>
                    </div>

                </dl>

                <!-- Replace # with your enrolment URL. -->
                <a
                    href="#"
                    class="rts-theme-btn primary course-enrol-btn"
                >
                    Click to Enrol
                </a>
            </aside>

        </div>

        <!-- Full-width content beneath both top columns -->
        <section
            class="course-overview"
            aria-labelledby="course-overview-heading"
        >
            <h2
                id="course-overview-heading"
                class="rts-section-title course-overview-title"
            >
                Course Overview
            </h2>

            <p>The Official Spanish Program in Spain is designed for international students who want to learn and improve their Spanish while enjoying a unique experience in Valencia, one of the best cities in Spain to study, live, and experience Mediterranean culture.</p>

            <p>Study Spanish in Spain, immerse yourself in an authentic Spanish-speaking environment, and develop the language skills needed to achieve your academic, professional, and personal goals.</p>

            
                    <h2
                id="course-overview-heading"
                class="rts-section-title course-overview-title"
            > SPANISH LANGUAGE PROGRAM</h2>
                    
                        <div class="program-credit-area">
                                <div class="program-accordion">
                                    <div class="accordion" id="rts-accordion">
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            SPANISH COURSE A1 / A2
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#rts-accordion" style="">
                                                <div class="accordion-body-content">
                                                    <br>
                                                  <p>Students begin their Spanish learning journey by developing fundamental communication skills, vocabulary, grammar, and everyday language use.</p>
                                                  <strong>ELE A1 & A2 LEVELS (440H)</strong>
                                                  <p>The first stage focuses on building a solid foundation in Spanish through:</p>
                                                  <ul>
                                                        <li>Social uses of the Spanish language</li>
                                                        <li>Alphabet and pronunciation</li>
                                                        <li>Essential vocabulary development</li>
                                                        <li>Nouns, articles, pronouns, and adjectives</li>
                                                        <li>Basic sentence construction</li>
                                                        <li>Present tense and simple grammatical structures</li>
                                                        <li>Everyday communication skills</li>
                                                    </ul>

                                                    <p>Students learn how to communicate confidently in common social, academic, and daily-life situations.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                             SPANISH COURSE B1-B2
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                        <br>
                                                  <p>Continue developing your Spanish proficiency through more advanced grammar structures and real-world communication scenarios.</p>
                                                  <strong>ELE B1 & B2 LEVELS (220H)</strong>
                                                  <p>The second stage focuses on:</p>
                                                  <ul>
                                                        <li>Social uses of the Spanish language</li>
                                                        <li>Alphabet and pronunciation</li>
                                                        <li>Essential vocabulary development</li>
                                                        <li>Nouns, articles, pronouns, and adjectives</li>
                                                        <li>Basic sentence construction</li>
                                                        <li>Present tense and simple grammatical structures</li>
                                                        <li>Everyday communication skills</li>
                                                    </ul>

                                                    <p>Students strengthen their ability to communicate effectively in a wide range of personal, academic, and professional situations.</p>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                             PROGRAM HIGHLIGHTS
                                            </button>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <br>
                                                 <strong>Official Spanish Language Training</strong>
                                                  <p>Students strengthen their ability to communicate effectively in a wide range of personal, academic, and professional situations.</p>
                                                   <strong>University of Valencia Language Centre</strong>
                                                  <p>Receive training from one of Spain’s leading public universities in a professional and international learning environment.</p>
                                                <strong>660 Hours of Spanish Language Instruction</strong>
                                                  <p>Progress from beginner to intermediate-upper levels through comprehensive language training designed for international students.</p>
                      
                                                    <strong>Practical Communication Skills</strong>
                                                  <p>Develop speaking, listening, reading, and writing abilities for academic, professional, and everyday situations.</p>
                      
                                                  <strong>Cultural Immersion Experience</strong>
                                                  <p>Learn Spanish while living in Valencia and interacting daily in an authentic Spanish-speaking environment.</p>
                      
                                                <strong>International Student Support</strong>
                                                  <p>Benefit from visa guidance, accommodation options, and personalized support throughout your studies in Spain.</p>
                      
                                                  <strong>Study in Valencia, Spain</strong>
                                                  <p>Experience Mediterranean culture, excellent quality of life, and one of Europe’s most popular destinations for international students.</p>
                      


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
         
                
                <h2
                id="course-overview-heading"
                class="rts-section-title course-overview-title"
            >Frequently Asked Questions
            </h2>
            <div class="course-feature-grid">
                   
                <div class="course-feature">
                    <h3>Why study Spanish in Spain?</h3>
                    <p>Studying Spanish in Spain allows students to learn the language faster through complete immersion while experiencing Spanish culture, daily life, and authentic communication in a native-speaking environment.
                    </p>
                </div>

                <div class="course-feature">
                    <h3>What levels are included in the Spanish course?</h3>
                    <p>The program covers Spanish levels from A1 to B2, helping students progress from beginner to intermediate-upper proficiency through 660 hours of language training.</p>
                </div>

                <div class="course-feature">
                    <h3>Will I receive a Spanish language certificate?</h3>
                    <p>Yes. Students receive certification issued through the University of Valencia Language Centre, recognizing the completion of their Spanish language studies.</p>
                </div>

                <div class="course-feature">
                    <h3>Can I work in Spain while studying Spanish?</h3>
                    <p>International students may benefit from the work opportunities permitted under current Spanish student visa regulations while completing their studies.</p>
                </div>

            </div>

            
        </section>

    </div>
</div>
<!-- Course details end -->

@include($footer . 'footer__default', ['class' => 'v__1'])
@endsection