<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/libs/tiny-slider/dist/tiny-slider.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon"
        href="https://geeksui.codescandy.com/geeks/assets/images/favicon/favicon.ico" />
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/libs/simplebar/simplebar.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <title>sss</title>
    @livewireStyles
</head>

<body class="bg-white">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href=""><img src="{{ asset('ispr_logo.png') }}" style="height:40px;"
                    alt="Geeks" /></a>
            <!-- Mobile view nav wrap -->
            <div class="ms-auto d-flex align-items-center order-lg-3">

                <ul class="navbar-nav navbar-right-wrap ms-2 flex-row d-none d-md-block">


                    <li class="dropdown ms-2 d-inline-block position-static">
                        <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static"
                            aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg"
                                    class="rounded-circle" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
                            <div class="dropdown-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="../assets/images/avatar/avatar-1.jpg"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="mb-1">Annette Black</h5>
                                        <p class="mb-0">annette@geeksui.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li class="dropdown-submenu dropstart-lg">
                                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                        <i class="fe fe-circle me-2"></i>
                                        Status
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-success me-2"></span>
                                                Online
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-secondary me-2"></span>
                                                Offline
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-warning me-2"></span>
                                                Away
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="badge-dot bg-danger me-2"></span>
                                                Busy
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="profile-edit.html">
                                        <i class="fe fe-user me-2"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="student-subscriptions.html">
                                        <i class="fe fe-star me-2"></i>
                                        Subscription
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-settings me-2"></i>
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/index.html">
                                        <i class="fe fe-power me-2"></i>
                                        Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <!-- Button -->
                <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            data-bs-display="static">Categories</a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Web
                                    Development</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Bootstrap</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">React</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">GraphQl</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Gatsby</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Grunt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Svelte</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Meteor</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">HTML5</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Angular</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Design</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Graphic Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Illustrator</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">UX / UI Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Figma Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Adobe XD</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Sketch</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Icon Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Photoshop</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Mobile App</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">IT Software</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Marketing</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Music</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Life Style</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Business</a>
                            </li>
                            <li>
                                <a href="course-category.html" class="dropdown-item">Photography</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLanding"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarLanding">
                            <li>
                                <h4 class="dropdown-header">Landings</h4>
                            </li>
                            <li>
                                <a href="https://geeksui.codescandy.com/geeks/index.html" class="dropdown-item">
                                    <span>Home Default</span>
                                </a>
                            </li>
                            <li>
                                <a href="landings/landing-abroad.html" class="dropdown-item">
                                    <span>Home Abroad</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://geeksui.codescandy.com/geeks/mentor/mentor.html"
                                    class="dropdown-item">
                                    <span>Home Mentor</span>
                                </a>
                            </li>
                            <li>
                                <a href="landings/landing-education.html" class="dropdown-item">Home Education</a>
                            </li>
                            <li>
                                <a href="landings/home-academy.html" class="dropdown-item">Home Academy</a>
                            </li>
                            <li>
                                <a href="landings/landing-courses.html" class="dropdown-item">Home Courses</a>
                            </li>
                            <li>
                                <a href="landings/landing-sass.html" class="dropdown-item">Home Sass</a>
                            </li>
                            <li class="border-bottom my-2"></li>
                            <li>
                                <a href="landings/course-lead.html" class="dropdown-item">Lead Course</a>
                            </li>
                            <li>
                                <a href="landings/request-access.html" class="dropdown-item">Request Access</a>
                            </li>

                            <li>
                                <a href="landings/landing-job.html" class="dropdown-item">Job Listing</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPages"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Courses</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="course-filter-grid.html">Course Grid</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-filter-list.html">Course List</a>
                                    </li>
                                    <li class="border-bottom my-2"></li>

                                    <li>
                                        <a class="dropdown-item" href="course-category.html">Course Category v1</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-category-v2.html">Course Category v2</a>
                                    </li>
                                    <li class="border-bottom my-2"></li>

                                    <li>
                                        <a class="dropdown-item" href="course-single.html">Course Single v1</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-single-v2.html">Course Single v2</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-single-v3.html">Course Single v3</a>
                                    </li>
                                    <li class="border-bottom my-2"></li>
                                    <li>
                                        <a class="dropdown-item" href="course-resume.html">Course Resume</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="course-checkout.html">Course Checkout</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="add-course.html">Add New Course</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="dashboard-project.html">
                                    Projects
                                    <span class="badge bg-primary ms-2">New</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="dashboard-quiz.html">
                                    Quizzes
                                    <span class="badge bg-primary ms-2">New</span>
                                </a>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Paths</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="course-path.html" class="dropdown-item">Browse Path</a>
                                    </li>
                                    <li>
                                        <a href="course-path-single.html" class="dropdown-item">Path Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="blog.html">Listing</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-single.html">Article</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-category.html">Category</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-sidebar.html">Sidebar</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Career</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="career.html">Overview</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="career-list.html">Listing</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="career-single.html">Opening</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Portfolio</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="portfolio.html">List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="portfolio-single.html">Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    <span>Mentor</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://geeksui.codescandy.com/geeks/mentor/mentor.html">Home</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://geeksui.codescandy.com/geeks/mentor/mentor-list.html">List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="https://geeksui.codescandy.com/geeks/mentor/mentor-single.html">Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Job</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="landings/landing-job.html">Home</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="jobs/job-listing.html">List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="jobs/job-grid.html">Grid</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="jobs/job-single.html">Single</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="jobs/company-list.html">Company List</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="jobs/company-about.html">Company Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Specialty</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="404-error.html">Error 404</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="maintenance-mode.html">Maintenance Mode</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="terms-condition-page.html">Terms &
                                            Conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="mx-3" />
                            </li>

                            <li>
                                <a class="dropdown-item" href="about.html">About</a>
                            </li>

                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Help
                                    Center</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="help-center.html">Help Center</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="help-center-faq.html">FAQ's</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="help-center-guide.html">Guide</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="help-center-guide-single.html">Guide Single</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="help-center-support.html">Support</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="compare-plan.html">Compare Plan</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="contact.html">Contact</a>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                    <!-- dropdown submenu open right -->
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                        </ul>
                                    </li>

                                    <!-- dropdown submenu open left -->
                                    <li class="dropdown-submenu dropstart">
                                        <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarAccount"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
                            <li>
                                <h4 class="dropdown-header">Accounts</h4>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    Instructor
                                    <span class="badge bg-primary ms-2">New</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Instructor</h5>
                                        <p class="dropdown-text mb-0">Instructor dashboard for manage courses and
                                            earning.</p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard-instructor.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-courses.html">My Courses</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-order.html">Orders</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-reviews.html">Reviews</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-students.html">Students</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-payouts.html">Payouts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="instructor-earning.html">Earning</a>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">Quiz</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="instructor-quiz.html">Quiz</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="instructor-quiz-details.html">Single</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="instructor-quiz-result.html">Result</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                    Students
                                    <span class="badge bg-primary ms-2">New</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Students</h5>
                                        <p class="dropdown-text mb-0">Students dashboard to manage your courses and
                                            subscriptions.</p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard-student.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="student-subscriptions.html">Subscriptions</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="payment-method.html">Payments</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="billing-info.html">Billing Info</a>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">Invoice</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="invoice.html">Invoice</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="invoice-details.html">Invoice
                                                    Details</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="dashboard-student.html">Bookmarked</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="dashboard-student.html">My Path</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="all-courses.html">All Courses</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="learning-path.html">Learning Path</a>
                                    </li>

                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">Quiz</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="student-quiz.html">Quiz</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="quiz-blank.html">Quiz Blank</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="my-quiz.html">My Quiz</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="student-quiz-attempt.html">Quiz
                                                    Attempt</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="student-quiz-start.html">Quiz
                                                    Single</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="quiz-result.html">Quiz Result</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">Certificate</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="certificate-blank.html">Certificate</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="my-certificate.html">My Certificate</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">Learning</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="my-learning.html">My Learning</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="learning-single.html">Learning
                                                    Single</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="learning-path-single.html">Learning
                                                    Path Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                            href="#">My Projects</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="project-blank.html">Project Blank</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="dashboard-project.html">Dashboard
                                                    Project</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="project-single.html">Project Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                    href="#">Admin</a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Master Admin</h5>
                                        <p class="dropdown-text mb-0">Master admin dashboard to manage courses, user,
                                            site setting , and work with amazing apps.</p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li class="px-3 d-grid">
                                        <a href="dashboard/admin-dashboard.html" class="btn btn-sm btn-primary">Go to
                                            Dashboard</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="mx-3" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="forget-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="profile-edit.html">Edit Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="security.html">Security</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="social-profile.html">Social Profiles</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="profile-privacy.html">Privacy Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="delete-profile.html">Delete Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="linked-accounts.html">Linked Accounts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                            <div class="list-group">
                                <a class="list-group-item list-group-item-action border-0"
                                    href="https://geeksui.codescandy.com/geeks/docs/index.html">
                                    <div class="d-flex align-items-center">
                                        <i class="fe fe-file-text fs-3 text-primary"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-0">Documentations</h5>
                                            <p class="mb-0 fs-6">Browse the all documentation</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action border-0"
                                    href="https://geeksui.codescandy.com/geeks/docs/bootstrap-5-snippets.html">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-files fs-3 text-primary"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-0">Snippet</h5>
                                            <p class="mb-0 fs-6">Bunch of Snippet</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action border-0"
                                    href="https://geeksui.codescandy.com/geeks/docs/changelog.html">
                                    <div class="d-flex align-items-center">
                                        <i class="fe fe-layers fs-3 text-primary"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-0">
                                                Changelog
                                                <span class="text-primary ms-1" id="changelog"></span>
                                            </h5>
                                            <p class="mb-0 fs-6">See what's new</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action border-0"
                                    href="https://geeksui.codescandy.com/geeks-rtl/" target="_blank">
                                    <div class="d-flex align-items-center">
                                        <i class="fe fe-toggle-right fs-3 text-primary"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-0">RTL demo</h5>
                                            <p class="mb-0 fs-6">RTL Pages</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <form class="mt-3 mt-lg-0 me-lg-5 d-flex align-items-center">
                    <span class="position-absolute ps-3 search-icon">
                        <i class="fe fe-search"></i>
                    </span>
                    <label for="search" class="visually-hidden"></label>
                    <input type="search" id="search" class="form-control ps-6" placeholder="Search Courses" />
                </form>
            </div>
        </div>
    </nav>

    {{-- <nav class="navbar navbar-expand-lg">
        <div class="container px-0">
            <a class="navbar-brand" href="{{ route('home') }}"><img class="" src="{{ asset('ispr_logo.png') }}"
                    alt="Geeks" style="height:30px;"></a>
            <div class="ms-auto d-flex align-items-center order-lg-3">
                <div class="d-flex gap-2 align-items-center">
                    @guest
                        <a href="{{ route('auth.login') }}" class="btn btn-outline-dark btn-sm ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z">
                                </path>
                            </svg>

                            Connexion</a>
                        <a href="{{ route('auth.register') }}" class="btn btn-dark d-none d-md-block btn-sm"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
                                </path>
                            </svg>Inscription</a>
                    @else
                        <a href="{{ route('dashboard.users') }}" class="btn btn-outline-dark btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                            </svg> Dashboard {{ Auth::user()->name }}
                        </a>
                        <a href="#" class="btn btn-dark d-none d-md-block btn-sm"
                            onclick="event.preventDefault(); document.getElementById('logout-form-btn').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z">
                                </path>
                            </svg>
                            Déconnexion
                        </a>
                        <form id="logout-form-btn" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
            <div>
                <!-- Button -->
                <button class="navbar-toggler collapsed ms-2"type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                    <li class="nav-item dropdown"><a class="nav-link" href="{{ route('candidat.index') }}">NOS
                            FORMATIONS </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled" href="#">COURS EN LIGNE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                            FORMATIONS PROFESSIONELLES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('about') }}">A PROPOS </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav> --}}
    @yield('content')

    <footer class="footer bg-light-stable py-8 mt-2">
        <div class="container">
            <div class="row gy-6 gy-xl-0 pb-8">
                <div class="col-xl-3 col-lg-12 col-md-6 col-12">
                    <div class="d-flex flex-column gap-4">
                        <div>
                            INSTITUT ROOSEVELT
                        </div>
                        <p class="mb-0">
                            L’Institut Roosevelt est un établissement éducatif de renom offrant des formations de
                            qualité dans divers domaines. Nous nous engageons à fournir des solutions d’éducation
                            adaptées aux besoins du marché du travail.
                        </p>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-dark-stable">RESSOURCES</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link">À propos</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Devenir partenaire</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link">Nos partenaires</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-dark-stable">NOS PAGES</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="https://www.linkedin.com/company/institut-roosevelt/"
                                    class="nav-link">LINKEDIN</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/institutroosevelt" class="nav-link">FACEBOOK</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-12">
                    <div class="d-flex flex-column gap-3">
                        <span class="text-dark-stable">ACCOMPAGNEMENT</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li>
                                <a href="#!" class="nav-link" target="_blank">Démarrer ma candidature BTS</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link" target="_blank">Nos filières et formations</a>
                            </li>
                            <li>
                                <a href="#!" class="nav-link" target="_blank">Informations sur le processus de
                                    candidature</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="d-flex flex-column gap-5">
                        <div class="d-flex flex-column gap-3">
                            <span class="text-dark-stable">CONTACT</span>
                            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                                <li>
                                    Adresse : Abidjan, Cocody, Rue Roosevelt
                                </li>
                                <li>
                                    Horaires : <span class="fw-semibold">8H à 17H</span>
                                </li>
                                <li>
                                    Email : <span class="fw-semibold">contact@institutroosevelt.ci</span>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex flex-row gap-2">
                            <a href="#"><img src="assets/images/svg/appstore.svg" alt=""
                                    class="img-fluid" /></a>
                            <a href="#"><img src="assets/images/svg/playstore.svg" alt=""
                                    class="img-fluid" /></a>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="row align-items-center g-0 border-top border-gray-800 pt-3 flex-column gap-1 flex-lg-row gap-lg-0">
                <!-- Desc -->
                <div class="col-lg-6 col-12 text-center text-md-start">
                    <span>
                        ©
                        <span id="copyright">
                            <script>
                                document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                            </script>
                        </span>
                        INSTITUT ROOSEVELT - Conception par KGS INFORMATIQUE
                    </span>
                </div>

                <!-- Links -->
                <div class="col-12 col-lg-6">
                    <nav class="nav nav-footer justify-content-center justify-content-md-start justify-content-lg-end">
                        <a class="nav-link active" href="{{ route('CGU') }}">Conditions Générales d'Utilisation</a>
                        <a class="nav-link" href="{{ route('politique.confidentialise') }}">Politique de
                            confidentialité</a>
                        <a class="nav-link" href="{{ route('fac') }}">FAQ</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>
    @livewireScripts
    @include('sweetalert::alert')
    <script src="{{ asset('assets/libs/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="../assets/js/vendors/tnsSlider.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>

    <script src="{{ asset('assets/js/vendors/navbar-nav.js') }}"></script>

</body>

</html>
