@extends('layout.layout')

@section('content')
    <div class="position-relative">
        <nav class="navbar navbar-expand-lg sidenav sidenav-navbar">
            <!-- Menu -->
            <a class="d-xl-none d-lg-none d-block text-inherit fw-bold" href="#">Menu</a>
            <!-- Button -->

            <button class="navbar-toggler d-lg-none icon-shape icon-sm rounded bg-primary text-light" type="button"
                data-bs-toggle="collapse" data-bs-target="#sidenavNavbar" aria-controls="sidenavNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fe fe-menu"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenavNavbar">
                @include('profiledashboard.nav-bar')
            </div>
        </nav>
    </div>


    <div class="db-content">
        <div class="container mb-4">

            <div class="row mb-5 g-4 gy-lg-0">

                <div class="col-xxl-12 col-lg-7 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-5">
                                <div class="card-body p-lg-6">
                                    <div class="row align-items-center gy-5 gy-lg-0">
                                        <div class="col-xl-9 col-lg-6">
                                            <div class="d-flex flex-column gap-5 py-xl-3">
                                                <div class="pe-xl-8">
                                                    <h2 class="mb-0">Gestion des filieres
                                                       </h2>
                                                    <p class="mb-0">
                                                        Building projects is the best way to learn. Engage with real-world
                                                        challenges using applications. Apply your knowledge to real
                                                        scenarios in a practical environment.
                                                    </p>
                                                </div>
                                                <div>
                                                    <a href="#!" class="btn btn-dark">Création</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6">
                                            <div class="text-center">
                                                <img src="{{ asset('projects.svg') }}" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container mb-4">

                <div class="row">
                    <div class="col-12">
                        <!-- Card -->
                        <div class="card mb-4 overflow-hidden">
                            <!-- Card header -->
                            <div class="card-header border-bottom-0">
                                <h3 class="mb-0">Liste des users</h3>

                            </div>
                            <!-- Table -->
                            <div class="table-invoice table-responsive">
                                <table class="table mb-0 text-nowrap table-centered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="invoice-details.html">#1008</a></td>
                                            <td>17 April 2020, 10:45pm</td>
                                            <td>$39.00</td>
                                            <td><span class="badge bg-danger">Due</span></td>
                                            <td>
                                                <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download"
                                                    download=""></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html">#1007</a></td>
                                            <td>17 April 2020, 10:45pm</td>
                                            <td>$39.00</td>
                                            <td>
                                                <span class="badge bg-success">Complete</span>
                                            </td>
                                            <td>
                                                <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download"
                                                    download=""></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html">#1006</a></td>
                                            <td>17 Feb 2020, 10:45pm</td>
                                            <td>$39.00</td>
                                            <td>
                                                <span class="badge bg-success">Complete</span>
                                            </td>
                                            <td>
                                                <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download"
                                                    download=""></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html">#1005</a></td>
                                            <td>17 January 2020, 10:45pm</td>
                                            <td>$39.00</td>
                                            <td>
                                                <span class="badge bg-success">Complete</span>
                                            </td>
                                            <td>
                                                <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download"
                                                    download=""></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html">#1004</a></td>
                                            <td>17 Dec 2019, 10:45pm</td>
                                            <td>$39.00</td>
                                            <td>
                                                <span class="badge bg-success">Complete</span>
                                            </td>
                                            <td>
                                                <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download"
                                                    download=""></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html">#1003</a></td>
                                            <td>17 Nov 2019, 10:45pm</td>
                                            <td>$39.00</td>
                                            <td>
                                                <span class="badge bg-success">Complete</span>
                                            </td>
                                            <td>
                                                <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download"
                                                    download=""></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html">#1002</a></td>
                                            <td>17 Oct 2019, 10:45pm</td>
                                            <td>$39.00</td>
                                            <td>
                                                <span class="badge bg-success">Complete</span>
                                            </td>
                                            <td>
                                                <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download"
                                                    download=""></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-details.html">#1001</a></td>
                                            <td>17 Sept 2019, 10:45pm</td>
                                            <td>$39.00</td>
                                            <td>
                                                <span class="badge bg-success">Complete</span>
                                            </td>
                                            <td>
                                                <a href="../assets/images/pdf/invoiceFile.pdf" class="fe fe-download"
                                                    download=""></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>
@endsection
