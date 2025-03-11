
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>{{ $jobVacancy->title }} | {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{!! \Str::limit(strip_tags($jobVacancy->description), 250) !!}" name="description" />
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
    <style>
        .nft-hero {
            background-image: url({{ env('PORTAL_URL').'/'. $jobVacancy->image }});
            background-size: cover;
            background-position: bottom;
            padding: 222px 0 150px 0
        }

        .nft-hero .bg-overlay {
            background-color: #05175f;
            opacity: .85
        }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

        <!-- Begin page -->
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
                            <a class="nav-link text-light fs-14 active" href="{{ url('/') }}#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-14" href="{{ url('/') }}#process">Process</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-14" href="{{ url('/') }}#findJob">Find Jobs</a>
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

        <!-- start hero section -->
        <section class="section nft-hero" id="hero">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center">
                            <h1 class="display-6 fw-medium mb-4 lh-base text-white"> {{ $jobVacancy->title }}</h1>
                            <p class="lead text-white-50 lh-base mb-4 pb-2">{!! \Str::limit(strip_tags($jobVacancy->description), 250) !!}</p>

                            <div class="hstack gap-2 justify-content-center">
                                <a href="{{ $jobVacancy->type == 'Work Study' ? env('PORTAL_URL').'/student' : env('PORTAL_URL').'/career' }}" class="btn btn-primary">Apply Now <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hero section -->

        <!-- start wallet -->
        <section class="section" id="wallet">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Job Details</h2>
                            <p class="text-muted">Key Responsibilities, Requirements & How to Apply </p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row g-1">
                    <p><strong>Job Description:</strong></p>
                    <p>{!! $jobVacancy->description !!}</p>

                    <p><strong>Requirements:</strong></p>
                    <p>{!! $jobVacancy->requirements !!}</p>

                    <p><strong>Application Deadline:</strong> {{ date('F j, Y', strtotime($jobVacancy->application_deadline)) }}</p>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end wallet -->

        <!-- start marketplace -->
        <section class="section bg-light" id="marketplace">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">Explore Job Vacancies</h2>
                            <p class="text-muted mb-4">Browse through available job opportunities and find the perfect role that matches your skills and interests.</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    @foreach($jobVacancies as $singleJobVacancy)
                    <div class="col-lg-4 mb-3">
                        <div class="card same-height shadow-lg">
                            <img class="card-img-top img-fluid" src="{{ env('PORTAL_URL').'/'. $singleJobVacancy->image }}" alt="{{ $singleJobVacancy->title }}">
                            <div class="card-body same-height-body">
                                <a href="{{ env('APP_URL').'/jobVacancy/'.$singleJobVacancy->slug}}"><h4 class="card-title mb-2">{{ $singleJobVacancy->title }}</h4></a>
                                <ul class="list-inline text-muted mb-3">
                                    <li class="list-inline-item">
                                        <i class="ri-building-line align-bottom me-1"></i> {{ $singleJobVacancy->type }}
                                    </li>
                                </ul>
                                <p class="card-text">{!! \Str::limit(strip_tags($singleJobVacancy->description), 250) !!}</p>
                                
                                <hr>
                                <div class="text-end">
                                    <a href="{{ env('APP_URL').'/jobVacancy/'.$singleJobVacancy->slug}}" class="btn btn-primary">Job Details</a>
                                    <button type="button" class="btn bg-primary btn-ghost-light btn-icon custom-toggle" data-bs-toggle="modal" data-bs-target="#jobVacancyModal{{ $singleJobVacancy->id }}">
                                        <span class="icon-on"><i class="ri-eye-line"></i></span>
                                        <span class="icon-off"><i class="ri-eye-off-line"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach
                </div>
            </div><!-- end container -->
        </section>
        <!-- end marketplace -->

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
            @foreach($jobVacancies as $singleJobVacancy)
                <div class="modal fade" id="jobVacancyModal{{ $singleJobVacancy->id }}" tabindex="-1" aria-labelledby="jobVacancyModalLabel{{ $singleJobVacancy->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="jobVacancyModalLabel{{ $singleJobVacancy->id }}">{{ $singleJobVacancy->title }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Job Description:</strong></p>
                                <p>{!! $singleJobVacancy->description !!}</p>
                                
                                <p><strong>Requirements:</strong></p>
                                <p>{!! $singleJobVacancy->requirements !!}</p>

                                <p><strong>Application Deadline:</strong> {{ date('F j, Y', strtotime($singleJobVacancy->application_deadline)) }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{ $singleJobVacancy->type == 'Work Study' ? env('PORTAL_URL').'/student' : env('PORTAL_URL').'/career' }}" class="btn btn-primary">
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