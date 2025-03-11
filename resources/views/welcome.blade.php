<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title>Career | {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ env('APP_DESCRIPTION') }}" name="description" />
    <meta content="Oladipo Damilare(KoderiaNG)" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--Swiper slider css-->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

   

    <div class="layout-wrapper landing">
        <!-- Begin page -->
        <nav class="navbar navbar-expand-lg bg-primary navbar-landing fixed-top job-navbar" id="navbar">
            <div class="container-fluid custom-container">
                <a class="navbar-brand" href="{{ env('APP_URL') }}"">
                    <a class="navbar-brand" href="{{ env('APP_URL') }}">
                        <img src="{{ asset(env('APP_LOGO')) }}" class="card-logo card-logo-dark" alt="logo dark" height="50">
                        <img src="{{ asset(env('APP_LOGO')) }}" class="card-logo card-logo-light" alt="logo light" height="50">
                    </a>
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link text-light fs-14 active" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-14" href="#process">Process</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-14" href="#findJob">Find Jobs</a>
                        </li>
                        </li>
                    </ul>

                    <div class="">
                        <a href="{{ env('PORTAL_URL').'/career' }}" class="btn btn-info">Register as Job seekers</a>
                        <a href="{{ env('PORTAL_URL').'/student' }}" class="btn btn-success">Register for Work study</a>
                    </div>
                </div>

            </div>
        </nav>
        <!-- end navbar -->
        <div class="bg-overlay bg-overlay-pattern"></div>
        <!-- end navbar -->

        

        <!-- start hero section -->
        <section class="section job-hero-section bg-light pb-5" id="hero">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div>
                            <h4 class="display-6 fw-semibold text-capitalize mb-3 lh-base">Find your next job or kickstart your career with work-study opportunities here</h4>
                            <p class="lead text-muted lh-base mb-4">Explore exciting job openings for professionals and discover work-study programs designed to help students gain valuable experience while pursuing their education. Build your dream career at {{ env('SCHOOL_NAME') }} today!</p>
                            <form action="#" class="job-panel-filter">
                                <div class="row g-md-0 g-2">
                                    <div class="col-md-6">
                                        <div>
                                            <input type="search" id="job-title" class="form-control filter-input-box" placeholder="Job">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div>
                                            <select class="form-control" data-choices>
                                                <option value="">Select job type</option>
                                                <option value="Job Vacancy">Full Time</option>
                                                <option value="Work Study">Work Study</option>
                                                <option value="SIWES">SIWES</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="h-100">
                                            <button class="btn btn-primary submit-btn w-100 h-100" type="submit"><i class="ri-search-2-line align-bottom me-1"></i> Find Job</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="position-relative home-img text-center mt-5 mt-lg-0">
                            <div class="card p-3 rounded shadow-lg inquiry-box">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <div class="avatar-title bg-warning-subtle text-warning rounded fs-18">
                                            <i class="ri-mail-send-line"></i>
                                        </div>
                                    </div>
                                    <h5 class="fs-15 lh-base mb-0">Work Inquiry from {{ env('APP_NAME') }}</h5>
                                </div>
                            </div>

                            <div class="card p-3 rounded shadow-lg application-box">
                                <h5 class="fs-15 lh-base mb-3">Job Vacancy</h5>
                                <div class="avatar-group">
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                        <div class="avatar-xs">
                                            <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle img-fluid">
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-danger">
                                                S
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                        <div class="avatar-xs">
                                            <img src="{{ asset('assets/images/users/avatar-10.jpg') }}" alt="" class="rounded-circle img-fluid">
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-success">
                                                Z
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                        <div class="avatar-xs">
                                            <img src="{{ asset('assets/images/users/avatar-9.jpg') }}" alt="" class="rounded-circle img-fluid">
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="More Appliances">
                                        <div class="avatar-xs">
                                            <div class="avatar-title fs-13 rounded-circle bg-light border-dashed border text-primary">
                                                2k+
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <img src="assets/images/job-profile2.png" alt="" class="user-img">

                            <div class="circle-effect">
                                <div class="circle"></div>
                                <div class="circle2"></div>
                                <div class="circle3"></div>
                                <div class="circle4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end hero section -->

        <section class="section" id="process">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold lh-base">How to Apply for <span class="text-primary">Work-Study </span> or Job Opportunities Quickly and Easily</h1>
                            <p class="text-muted">Applying for a work-study position or a professional job at {{ env('SCHOOL_NAME') }} is simple and straightforward. Just follow a few easy steps to submit your application, whether you're looking to build experience as a student or advance your career as a professional. Get started today and take the next step toward your future!</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body p-4">
                                <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                                    <div class="job-icon-effect"></div>
                                    <span>1</span>
                                </h1>
                                <h6 class="fs-17 mb-2">Register Account</h6>
                                <p class="text-muted mb-0 fs-15">If you're applying for a work-study position, you must be a current student at {{ env('SCHOOL_NAME') }}. For job applicants, you will need to register through our career portal to begin the application process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body p-4">
                                <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                                    <div class="job-icon-effect"></div>
                                    <span>2</span>
                                </h1>
                                <h6 class="fs-17 mb-2">Create Resume</h6>
                                <p class="text-muted mb-0 fs-15">For work-study applicants, you must maintain a good CGPA to be eligible. Job applicants will need to fill in their details, including education and professional background, and upload a comprehensive CV through the career portal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body p-4">
                                <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                                    <div class="job-icon-effect"></div>
                                    <span>3</span>
                                </h1>

                                <h6 class="fs-17 mb-2">Find Job</h6>
                                <p class="text-muted mb-0 fs-15">Both work-study applicants and job seekers can explore all available positions on the job vacancy page. Simply visit the respective portal to view and apply for open roles that match your qualifications and interests.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body p-4">
                                <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                                    <div class="job-icon-effect"></div>
                                    <span>4</span>
                                </h1>
                                <h6 class="fs-17 mb-2">Apply Job</h6>
                                <p class="text-muted mb-0 fs-15">Both work-study applicants and job seekers can easily apply for available positions by viewing the vacancy listings and submitting an application through the portal. Once applied, simply wait for an interview invitation from the university.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end container-->
        </section>

        <!-- start features -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-center gy-4">
                    <div class="col-lg-5 col-sm-7">
                        <div class="about-img-section mb-5 mb-lg-0 text-center">
                            <div class="card rounded shadow-lg inquiry-box d-none d-lg-block">
                                <div class="card-body d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0 me-3">
                                        <div class="avatar-title bg-secondary-subtle text-secondary rounded-circle fs-18">
                                            <i class="ri-briefcase-2-line"></i>
                                        </div>
                                    </div>
                                    <h5 class="fs-15 lh-base mb-0">Explore Over <span class="text-secondary fw-semibold">1,000+</span> Career Opportunities</h5>
                                </div>
                            </div>
        
                            
                            <img src="{{ asset('assets/images/about.png') }}" alt="" class="img-fluid mx-auto rounded-3" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted">
                            <h1 class="mb-3 lh-base fw-semibold">Find Your <span class="text-primary">Ideal Job</span> or <span class="text-primary">Work Study</span> Opportunity</h1>
                            <p class="ff-secondary fs-16 mb-2">Discover the perfect job or work study program that aligns with your career goals. <b>Our platform offers a range of opportunities</b> across various industries to help you advance your career or gain valuable experience while studying.</p>
                            <p class="ff-secondary fs-16">Browse through detailed job listings and work study options. Connect with top employers and educational institutions to find the best fit for your skills and aspirations.</p>
        
                            <div class="vstack gap-2 mb-4 pb-1">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Comprehensive Listings</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Up-to-Date Opportunities</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar-xs icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                <i class="ri-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Tailored for Your Goals</p>
                                    </div>
                                </div>
                            </div>
        
                            <div>
                                <a href="#findJob" class="btn btn-primary">Start Your Search <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        
        <!-- end features -->

        <!-- start cta -->
        <section class="py-5 bg-info position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-2">Ready to Started?</h4>
                            <p class="text-white-50 mb-0">Create new account and refer your friend</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="{{ env('PORTAL_URL').'/jobVacancy/register' }}" class="btn bg-gradient btn-danger">Create Free Account</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <section class="section" id="findJob">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Find Your <span class="text-primary">Opportunity</span> and Start Building Your Future.</h1>
                            <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <style>
                    .same-height {
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                        height: 100%;
                    }
                
                    .same-height-body {
                        flex: 1;
                    }
                </style>

                <div class="row">
                    @foreach($jobVacancies as $jobVacancy)
                        <div class="col-lg-4 mb-3">
                            <div class="card same-height shadow-lg">
                                <img class="card-img-top img-fluid" src="{{ env('PORTAL_URL').'/'. $jobVacancy->image }}" alt="{{ $jobVacancy->title }}">
                                <div class="card-body same-height-body">
                                    <a href="{{ env('APP_URL').'/jobVacancy/'.$jobVacancy->slug}}"><h4 class="card-title mb-2">{{ $jobVacancy->title }}</h4></a>
                                    <ul class="list-inline text-muted mb-3">
                                        <li class="list-inline-item">
                                            <i class="ri-building-line align-bottom me-1"></i> {{ $jobVacancy->type }}
                                        </li>
                                    </ul>
                                    <p class="card-text">{!! \Str::limit(strip_tags($jobVacancy->description), 250) !!}</p>
                                    
                                    <hr>
                                    <div class="text-end">
                                        <a href="{{ env('APP_URL').'/jobVacancy/'.$jobVacancy->slug}}" class="btn btn-primary">Job Details</a>
                                        <button type="button" class="btn bg-primary btn-ghost-light btn-icon custom-toggle" data-bs-toggle="modal" data-bs-target="#jobVacancyModal{{ $jobVacancy->id }}">
                                            <span class="icon-on"><i class="ri-eye-line"></i></span>
                                            <span class="icon-off"><i class="ri-eye-off-line"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    @endforeach

                    

                    {{-- <div class="col-lg-12">
                        <div class="text-center mt-4">
                            <a href="#!" class="btn btn-ghost-primary shadow-none">View More Jobs <i class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- start find jobs -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="text-muted mt-5 mt-lg-0">
                            <h5 class="fs-12 text-uppercase text-success">Exciting Opportunities Await</h5>
                            <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">Find Your Ideal <span class="text-primary">Job</span> or <span class="text-primary">Work Study</span> Position</h1>
                            <p class="ff-secondary mb-2">Discover a diverse range of career opportunities and work study programs tailored to your goals. <b>Our platform connects you with top employers and valuable experience opportunities.</b> Whether you're looking for a full-time job or a work study position, we have the listings you need to advance your career.</p>
                            <p class="mb-4 ff-secondary">Explore job vacancies and work study options that align with your skills and aspirations. Start your journey towards a fulfilling career or gain practical experience while studying.</p>
        
                            <div class="mt-4">
                                <a href="#findJob" class="btn btn-primary">Browse All Opportunities <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-sm-7 col-10 ms-lg-auto mx-auto order-1 order-lg-2">
                        <div>
                            
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <a href="{{ env('APP_URL').'/jobVacancy/'.$jobVacancies[0]->slug}}"><img class="card-img-top img-fluid" src="{{ env('PORTAL_URL').'/'. $jobVacancies[0]->image }}" alt="{{ $jobVacancies[0]->title }}"></a>
                                    <a href="{{ env('APP_URL').'/jobVacancy/'.$jobVacancies[0]->slug}}">
                                        <h5>{{ $jobVacancies[0]->title }}</h5>
                                    </a>
                                    <p class="text-muted">{{ $jobVacancies[0]->type }}</p>
        
        
                                    <p class="text-muted">{!! \Str::limit(strip_tags($jobVacancies[0]->description), 250) !!}</p>
        

        
                                    <div class="mt-4 hstack gap-2">
                                        <a href="{{ $jobVacancies[0]->type == 'Work Study' ? env('PORTAL_URL').'/student' : env('PORTAL_URL').'/career' }}" class="btn btn-primary">
                                            Apply
                                        </a>
                                        <a href="{{ env('APP_URL').'/jobVacancy/'.$jobVacancies[0]->slug}}" class="btn btn-soft-success w-100">More Details</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
               
        <!-- end find jobs -->

        <!-- start cta -->
        <section class="py-5 bg-info position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white fw-semibold">Get New Jobs Notification!</h4>
                            <p class="text-white text-opacity-75 mb-0">Subscribe & get all related jobs notification.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <a href="{{ env('PORTAL_URL').'/jobVacancy/register' }}" class="btn btn-danger" type="button">Subscribe Now <i class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <img src="{{ asset(env('APP_LOGO')) }}" alt="logo light" height="100">
                            </div>
                            <div class="mt-4">
                                <p>{{ env('APP_NAME') }}</p>
                                <p>{{ env('APP_DESCRIPTION') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Other Links</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="#hero">Home</a></li>
                                        <li><a href="#process">Process</a></li>
                                        <li><a href="#findJob">Find Job</a></li>
                                        <li><a href="#">Timeline</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Other Links</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="{{ env('SCHOOL_URL') }}">University Website</a></li>
                                        <li><a href="{{ env('PORTAL_URL') }}">University Portal</a></li>
                                        <li><a href="{{ env('PORTAL_URL') }}">Chat</a></li>
                                        <li><a href="#">Deals</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Support</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script> document.write(new Date().getFullYear()) </script> © {{ env('APP_NAME') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        @if(!empty($jobVacancies))
            @foreach($jobVacancies as $jobVacancy)
                <div class="modal fade" id="jobVacancyModal{{ $jobVacancy->id }}" tabindex="-1" aria-labelledby="jobVacancyModalLabel{{ $jobVacancy->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="jobVacancyModalLabel{{ $jobVacancy->id }}">{{ $jobVacancy->title }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Job Description:</strong></p>
                                <p>{!! $jobVacancy->description !!}</p>
                                
                                <p><strong>Requirements:</strong></p>
                                <p>{!! $jobVacancy->requirements !!}</p>

                                <p><strong>Application Deadline:</strong> {{ date('F j, Y', strtotime($jobVacancy->application_deadline)) }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{ $jobVacancy->type == 'Work Study' ? env('PORTAL_URL').'/student' : env('PORTAL_URL').'/career' }}" class="btn btn-primary">
                                    Apply for this Job
                                </a>
                            </div>
                        </div>
                    </div>
                </div>  
            @endforeach   
        @endif
    </div>
    <!-- end layout wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <!--job landing init -->
    <script src="{{ asset('assets/js/pages/job-lading.init.js') }}"></script>
</body>


</html>