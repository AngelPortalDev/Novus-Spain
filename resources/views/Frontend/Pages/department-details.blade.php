@extends($layout)
@section('content')
    @include($header . 'transparent-header-v5')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Department of English',
        'page' => 'Department Details'    
    ])
    <!-- programme content -->
    <div class="rts-programme rts-section-padding">
        <div class="container">
            <div class="rts-programme-single-header">
                <div class="row align-items-center g-3">
                    <div class="col-lg-6">
                        <h3 class="rts-section-title">Introduction Department <br> Of English</h3>
                    </div>
                    <div class="col-lg-6">
                        <p class="rts-section-description">The programme continues to attract students from all ethnic, racial, and cultural backgrounds as they recognize ways that Africana Studies provides them with a forum to examine the intellectual life, the historical experience, and the cultural understanding of one of this country’s largest racial minority groups.</p>
                    </div>
                </div>
            </div>
            <div class="rts-programme-description">
                <div class="row sticky-coloum-wrap">
                    <div class="col-lg-12">
                        <div class="programme-description-area" id="curriculum">
                            <div class="programme-big-thumb">
                                <img src="{{asset('assets/images/faculty/10.jpg')}}" alt="programme">
                            </div>
                            <div class="programme-about">
                                <h4 class="title">About The programme</h4>
                                <p>The Department of English, under the Faculty of Arts & Social Sciences (FA), started its journey with two predominant visions: first, to enhance and nourish students’ mental, ethical, and creative facets of their personality; secondly, to prepare themselves for efficient professional and technical employment in future. There can be no denying that ethics, values, morality and creativity are the essential ingredients of nation-building.</p>
                                <p>As a pioneering private university of this country, Novus Education has always been committed to imparting these ingredients among its students as the larger concerns of society. The Department of English firmly believes that value-education can bring excellence in leadership, and consequently excellence in nation-building.</p>
                            </div>
                            <div class="row g-5 faculty-sub-details mt--40">
                                <div class="rts-section mb-4 text-start">
                                    <h3 class="rts-section-title">List of Departments</h3>
                                </div>
                
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="single-cat-item">
                                        <div class="cat-thumb">
                                            <img src="{{asset('assets/images/course/09.jpg')}}" alt="course-thumbnail">
                                        </div>
                                        <div class="cat-meta">
                                            <div class="cat-title">
                                                <a href="{{ route('programme-single') }}">Bachelor of arts in English</a>
                                            </div>
                                            <div class="cat-link">
                                                <a href="{{ route('programme-single') }}" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="single-cat-item">
                                        <div class="cat-thumb">
                                            <img src="{{asset('assets/images/course/10.jpg')}}" alt="course-thumbnail">
                                        </div>
                                        <div class="cat-meta">
                                            <div class="cat-title">
                                                <a href="{{ route('programme-single') }}">M.A. English</a>
                                            </div>
                                            <div class="cat-link">
                                                <a href="{{ route('programme-single') }}" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="single-cat-item">
                                        <div class="cat-thumb">
                                            <img src="{{asset('assets/images/course/11.jpg')}}" alt="course-thumbnail">
                                        </div>
                                        <div class="cat-meta">
                                            <div class="cat-title">
                                                <a href="{{ route('programme-single') }}">M.S. in Nursing</a>
                                            </div>
                                            <div class="cat-link">
                                                <a href="{{ route('programme-single') }}" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="single-cat-item">
                                        <div class="cat-thumb">
                                            <img src="{{asset('assets/images/course/12.jpg')}}" alt="course-thumbnail">
                                        </div>
                                        <div class="cat-meta">
                                            <div class="cat-title">
                                                <a href="{{ route('programme-single') }}">Master of Public Health</a>
                                            </div>
                                            <div class="cat-link">
                                                <a href="{{ route('programme-single') }}" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- programme content end -->
    <!-- blog -->
    <div class="rts-blog v_1 rts__light rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-11 col-lg-12">
                    <div class="rts-section rts-border-bottom-1 mb--50 pb--20">
                        <h2 class="rts-section-title text-uppercase">
                            Latest Blogs
                        </h2>
                        <p class="rts-section-description">Whether you’re considering a foundation course or an undergraduate academics is a place.</p>
                        <a href="{{ route('blog') }}" class="rts-nbg-btn btn-arrow">View All<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                    </span></a>
                    </div>
                </div>
            </div>
            <!-- blog content -->
            <div class="row g-5 justify-content-md-center">
                <div class="col-md-11 col-lg-6">
                    <div class="rts-blog-post blog-v-full">
                        <div class="single-blog-post">
                            <a href="{{ route('blog-details') }}" class="blog-thumb">
                                <img src="{{asset('assets/images/blog/big-thumb-1.jpg')}}" alt="blog-thumb">
                            </a>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Masum Sakib</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="{{ route('blog-details') }}" class="post-title">
                                    Classroom community-building It’s ok to try something new!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-6">
                    <div class="rts-blog-post">
                        <!-- single blog -->
                        <div class="single-blog-post">
                            <div class="blog-thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/small-thumb-1.jpg')}}" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Samira Khan</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="{{ route('blog-details') }}" class="post-title">
                                    Those inequalities are inequalities that occur within households
                                </a>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="single-blog-post">
                            <div class="blog-thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/small-thumb-2.jpg')}}" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Zent Ekizie</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="{{ route('blog-details') }}" class="post-title">
                                    Those inequalities are inequalities that occur within households
                                </a>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="single-blog-post">
                            <div class="blog-thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/small-thumb-3.jpg')}}" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Zayed Khan</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="{{ route('blog-details') }}" class="post-title">
                                    After decades of improvement, cardiovascular health rates
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->
     
    @include($footer . 'footer__default', ['class' => 'v__1'])
@endsection