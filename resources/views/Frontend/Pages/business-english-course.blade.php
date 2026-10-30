@extends($layout)
@section('content')
    @include($header . 'header-two')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Business English Course',
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
                        <dd class="course-intake">Weekly</dd>
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
                        <dd>English</dd>
                    </div>

                </dl>

                <!-- Replace # with your enrolment URL. -->
                <a
                    href="https://one.novuseducation.es/crm/admission-form/"
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

            <p>
                Our Business English programme develops the practical language skills professionals need for meetings, presentations, negotiations, email communication and other workplace situations.
            </p>

            <p>The course combines language development with realistic workplace tasks. Students build accuracy, fluency and confidence while learning to communicate appropriately in formal and professional contexts.</p>

            <strong>What You Will Develop</strong>
            <ul>
                <li>Participate actively in professional meetings</li>
                <li>Present ideas clearly and confidently</li>
                <li>Explain data, trends and business information</li>
                <li>Communicate by telephone and in online meetings</li>
                <li>Use appropriate formal and semi-formal language</li>
                <li>Write professional emails and business correspondence</li>
                <li>Negotiate, persuade and reach agreement</li>
                <li>Express opinions and respond to questions</li>

                </ul>
             <h2
                id="course-overview-heading"
                class="rts-section-title course-overview-title"
            >
               Course Structure
            </h2>

                  <ul>
                <li>Weekly course: one week at a time.</li>
                <li>Three-month course: structured short-term progression.</li>
                <li>Six-month course: extended language development.</li>
                <li>One-year course: comprehensive long-term progression.</li>
  

                </ul> 
                <p>Short-term students can join every Monday, subject to availability and placement-test arrangements.</p>
                <strong>Each standard week includes:</strong>
                 <ul>
                <li>20 lessons</li>
                <li>45 minutes per lesson</li>
                <li>15 hours of classroom learning per week</li>
                <li>Integrated practice in speaking, listening, reading and writing</li>
  
                </ul>
                    <strong>A minimum of 3 students is required per class; otherwise, reduced teaching hours may be applied.</strong>
                 <br> <br>
                    
                        <div class="program-credit-area">
                                <div class="program-accordion">
                                    <div class="accordion" id="rts-accordion">
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                               CEFR-Based Progression
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#rts-accordion" style="">
                                                <div class="accordion-body-content">
                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th>Level</th>
                                                                <th style="min-width: 80%;">Main development</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>A1 — Beginner</td>
                                                                <td>Basic vocabulary, introductions, simple questions and everyday expressions.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>A2 — Elementary</td>
                                                                <td>Routine communication, practical situations and simple conversations.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>B1 — Intermediate</td>
                                                                <td>Independent communication, opinions, descriptions and everyday problem-solving.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>B2 — Upper-intermediate</td>
                                                                <td>More fluent interaction, discussion and more developed written communication.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>C1 — Advanced</td>
                                                                <td>Accurate, flexible communication in academic, professional and social contexts.</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                               A Practical Learning Experience
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                   <ul>
                                                        <li>Pair and group discussions</li>
                                                        <li>Role plays and everyday communication tasks</li>
                                                        <li>Grammar and vocabulary in context</li>
                                                        <li>Emails, messages and other practical writing tasks</li>
                                                        <li>Pronunciation and fluency practice</li>
                                                        <li>Presentations and short speaking activities</li>
                                                        <li>Listening activities with authentic or adapted materials</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                              Assessment and Feedback
                                            </button>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                   <p class="accordion-text">Students complete an initial placement assessment to identify the most suitable class and level. Progress is monitored through participation, classroom activities, assignments and periodic assessment. Students receive feedback on their strengths and areas for development. At the end of the course, students may receive a certificate of attendance or completion, subject to the school’s academic and attendance requirements.</p>
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
                    <h3>Can I join for only one week?</h3>
                    <p>Yes. Short-term students can enrol for one week, subject to availability. New students can join on Mondays.
                    </p>
                </div>

                <div class="course-feature">
                    <h3>Do I need to know my English level before enrolling?</h3>
                    <p>No. A placement assessment can be used to identify the most suitable level.</p>
                </div>

                <div class="course-feature">
                    <h3>Will I receive a certificate?</h3>
                    <p>Students may receive a certificate of attendance or completion, subject to the school’s attendance and assessment requirements.</p>
                </div>

                <div class="course-feature">
                    <h3>Start Your Learning Journey</h3>
                    <p>Choose the study duration that suits your goals and start developing stronger communication skills.</p>
                </div>

                <div class="course-feature">
                    <h3>Do I need to be an advanced English speaker?</h3>
                    <p>No. Classes are organised by language level, and course content is adapted to the learner’s current ability.</p>
                </div>

            </div>

            
        </section>

    </div>
</div>
<!-- Course details end -->

@include($footer . 'footer__default', ['class' => 'v__1'])
@endsection