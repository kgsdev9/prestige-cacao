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
            <div class="row mb-5">
                <div class="col-12">
                    <h1 class="h2 mb-0">Bienvenue Stephane</h1>
                </div>
            </div>
            <div class="row mb-5 g-4 gy-lg-0">
                <div class="col-xxl-3 col-lg-5 col-12">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column gap-4 p-4">
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar"
                                        class="avatar avatar-xl rounded-circle" />
                                    <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                        data-bs-toggle="tooltip" data-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path
                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h2 class="h3 mb-0">{{ Auth::user()->name }}, {{ Auth::user()->email }} </h2>
                                    <span class="fs-6 fw-medium">ID: 98765</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fs-6 fw-medium">Filiere : </span>
                                <span class="fw-bold">Informatique et developpeur d'application </span>
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <div class="progress" style="height: 4px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="small">Profile 30% complete</span>
                            </div>
                            <div class="d-flex flex-row gap-2">
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path
                                            d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z"
                                            fill="url(#paint0_linear_8175_5853)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_8175_5853" x1="12" y1="4"
                                                x2="12" y2="20" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="var(--gk-danger)" />
                                                <stop offset="1" stop-color="var(--gk-danger)" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </a>
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path
                                            d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z"
                                            fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>

                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path
                                            d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z"
                                            fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path
                                            d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z"
                                            fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path
                                            d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z"
                                            fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path
                                            d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z"
                                            fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>
                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path
                                            d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z"
                                            fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>

                                <a href="#!">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="12" fill="var(--gk-gray-100)" />
                                        <path
                                            d="M12 20C15.314 20 18 18 18 14.5C18 13 17.5 10.5 15.5 8.5C15.75 10 14.25 10.5 14.25 10.5C15 8 13 4.5 10 4C10.357 6 10.5 8 8 10C6.75 11 6 12.729 6 14.5C6 18 8.686 20 12 20ZM12 19C10.343 19 9 18 9 16.25C9 15.5 9.25 14.25 10.25 13.25C10.125 14 11 14.5 11 14.5C10.625 13.25 11.5 11.25 13 11C12.821 12 12.75 13 14 14C14.625 14.5 15 15.364 15 16.25C15 18 13.657 19 12 19Z"
                                            fill="var(--gk-gray-300)" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-lg-7 col-12">
                    <div class="card h-100">
                        <div class="card-body p-5">
                            <div class="row align-items-center gy-5">
                                <div class="col-xl-6 col-12">
                                    <div class="d-flex flex-column gap-4">
                                        <div class="d-flex flex-column gap-2">
                                            <h2 class="mb-0">Bienvenue sur l'espace d'apprentissage de l'Institut
                                                Roosevelt</h2>
                                            <p class="mb-0">
                                                Bénéficiez des cours et sujets de BTS organisés en ressources, ainsi que des
                                                QCMs pratiques pour mieux préparer votre BTS.
                                            </p>
                                        </div>
                                        <div>
                                            <a href="#!" class="btn btn-dark">Consulter les ressources</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="text-center d-xl-block d-none">
                                        <img src="https://geeksui.codescandy.com/geeks/assets/images/svg/education.svg"
                                            alt="ispr" />
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-12">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <div class="d-flex flex-row align-items-center gap-2">
                            <div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8175_5628)">
                                        <path
                                            d="M8.211 2.0467C8.14491 2.01594 8.07289 2 8 2C7.9271 2 7.85508 2.01594 7.789 2.0467L0.288996 5.5467C0.200678 5.58793 0.126334 5.65406 0.0751066 5.73698C0.0238794 5.81989 -0.00199738 5.91597 0.000658795 6.0134C0.00331497 6.11083 0.0343882 6.20536 0.0900571 6.28536C0.145726 6.36536 0.223563 6.42735 0.313996 6.4637L7.814 9.4637C7.93338 9.51155 8.06661 9.51155 8.186 9.4637L14 7.1397V12.9997C13.7348 12.9997 13.4804 13.1051 13.2929 13.2926C13.1054 13.4801 13 13.7345 13 13.9997V15.9997H16V13.9997C16 13.7345 15.8946 13.4801 15.7071 13.2926C15.5196 13.1051 15.2652 12.9997 15 12.9997V6.7387L15.686 6.4637C15.7764 6.42735 15.8543 6.36536 15.9099 6.28536C15.9656 6.20536 15.9967 6.11083 15.9993 6.0134C16.002 5.91597 15.9761 5.81989 15.9249 5.73698C15.8737 5.65406 15.7993 5.58793 15.711 5.5467L8.211 2.0467ZM8 8.4597L1.758 5.9647L8 3.0517L14.242 5.9647L8 8.4597Z"
                                            fill="#64748B" />
                                        <path
                                            d="M4.176 9.0321C4.11162 9.00784 4.04292 8.99714 3.97421 9.00065C3.9055 9.00416 3.83825 9.02182 3.77668 9.05251C3.7151 9.08321 3.66053 9.12628 3.61636 9.17903C3.57219 9.23179 3.53939 9.29309 3.52 9.3591L3.02 11.0591C2.98498 11.1784 2.9957 11.3066 3.05006 11.4184C3.10442 11.5303 3.19853 11.6179 3.314 11.6641L7.814 13.4641C7.93339 13.5119 8.06662 13.5119 8.186 13.4641L12.686 11.6641C12.8015 11.6179 12.8956 11.5303 12.9499 11.4184C13.0043 11.3066 13.015 11.1784 12.98 11.0591L12.48 9.3591C12.4606 9.29309 12.4278 9.23179 12.3836 9.17903C12.3395 9.12628 12.2849 9.08321 12.2233 9.05251C12.1618 9.02182 12.0945 9.00416 12.0258 9.00065C11.9571 8.99714 11.8884 9.00784 11.824 9.0321L8 10.4661L4.176 9.0321ZM4.108 10.9051L4.328 10.1571L7.824 11.4681C7.93746 11.5108 8.06255 11.5108 8.176 11.4681L11.672 10.1571L11.892 10.9051L8 12.4601L4.108 10.9051Z"
                                            fill="#64748B" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8175_5628">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="mb-0">Liste des matieres </h3>
                        </div>
                        <a href="#!" class="btn btn-primary">Consulter plus </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card">

                        <div class="card-body d-flex flex-column gap-3">
                            <h3 class="h4 mb-0"><a href="#" class="text-inherit">Architecture des ordinateurs</a>
                            </h3>

                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-truncate">12 lecons 12 </span>
                                    <span class="fw-bold">100%</span>
                                </div>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <span
                                    class="badge bg-success-subtle border border-success rounded-pill text-success">Consulter</span>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-row align-items gap-2 mb-3">
                        <div>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_8182_18024)">
                                    <path
                                        d="M14.5035 1.296L12 0L9.49648 1.296L6.70948 1.719L5.44648 4.239L3.44098 6.219L3.89998 9L3.44098 11.781L5.44648 13.761L6.70948 16.281L9.49648 16.704L12 18L14.5035 16.704L17.2905 16.281L18.5535 13.761L20.559 11.781L20.1 9L20.559 6.219L18.5535 4.239L17.2905 1.719L14.5035 1.296ZM16.2975 3.0855L17.3235 5.133L18.9525 6.741L18.5805 9L18.9525 11.259L17.3235 12.867L16.2975 14.9145L14.0325 15.258L12 16.311L9.96748 15.258L7.70248 14.9145L6.67648 12.867L5.04748 11.259L5.42098 9L5.04598 6.741L6.67648 5.133L7.70248 3.0855L9.96748 2.742L12 1.689L14.034 2.742L16.2975 3.0855Z"
                                        fill="#64748B" />
                                    <path
                                        d="M6 17.6914V24.0004L12 22.5004L18 24.0004V17.6914L14.973 18.1504L12 19.6894L9.027 18.1504L6 17.6914Z"
                                        fill="#64748B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_8182_18024">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h3 class="mb-0">Mes Examens</h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="border-dashed py-6 text-center rounded-3 px-4 px-md-7 px-lg-0">
                        <div class="bg-gray-300 rounded-circle icon-shape icon-xl mb-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="text-secondary">
                                <g clip-path="url(#clip0_8182_18024)">
                                    <path
                                        d="M14.5035 1.296L12 0L9.49648 1.296L6.70948 1.719L5.44648 4.239L3.44098 6.219L3.89998 9L3.44098 11.781L5.44648 13.761L6.70948 16.281L9.49648 16.704L12 18L14.5035 16.704L17.2905 16.281L18.5535 13.761L20.559 11.781L20.1 9L20.559 6.219L18.5535 4.239L17.2905 1.719L14.5035 1.296ZM16.2975 3.0855L17.3235 5.133L18.9525 6.741L18.5805 9L18.9525 11.259L17.3235 12.867L16.2975 14.9145L14.0325 15.258L12 16.311L9.96748 15.258L7.70248 14.9145L6.67648 12.867L5.04748 11.259L5.42098 9L5.04598 6.741L6.67648 5.133L7.70248 3.0855L9.96748 2.742L12 1.689L14.034 2.742L16.2975 3.0855Z"
                                        fill="#64748B" />
                                    <path
                                        d="M6 17.6914V24.0004L12 22.5004L18 24.0004V17.6914L14.973 18.1504L12 19.6894L9.027 18.1504L6 17.6914Z"
                                        fill="#64748B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_8182_18024">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="d-flex flex-column gap-2 mb-4">
                            <h3 class="mb-0 h2">Consulter les examens disponibles</h3>
                            <p class="mb-0">Les examens et devoirs disponibles.</p>
                        </div>
                        <div>
                            <a href="#!" class="btn btn-success">Consulter</a>
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

{{-- @extends('layout.layout')
@section('title', 'Mon profile')
@section('content')

<main>
    <section class="pt-5 pb-5">
      <div class="container">

     @include('profiledashboard.base.header')


        <div class="row mt-0 mt-md-4">
            @include('profiledashboard.nav-bar')
          <div class="col-lg-9 col-md-8 col-12">
            @can('is_candidat')
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">

                  <div class="card mb-4">
                    <div class="p-4">
                      <span class="fs-6 text-uppercase fw-semibold">Visite du profil </span>
                      <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">{{$visiteur}}</h2>
                      <span class="d-flex justify-content-between align-items-center">
                        <span>Visible de votre profile</span>
                        <span class="badge bg-success ms-2">{{$visiteur}}</span>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-12 col-12">

                  <div class="card mb-4">
                    <div class="p-4">
                      <span class="fs-6 text-uppercase fw-semibold">Offre Disponible</span>
                      <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">0</h2>
                      <span class="d-flex justify-content-between align-items-center">
                        <span>Offre d'emploi disponible</span>
                        <span class="badge bg-info ms-2">0</span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">

                  <div class="card mb-4">
                    <div class="p-4">
                      <span class="fs-6 text-uppercase fw-semibold">Suivi Acompagnement</span>
                      <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">0</h2>
                      <span class="d-flex justify-content-between align-items-center">
                        <span>Acompangnement suivi</span>
                        <span class="badge bg-warning ms-2">0+</span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            @endcan



            @can('is_admin')
                <h1>Bienvenue chers administrateur</h1>
            @endcan

          </div>
        </div>
      </div>
    </section>
  </main>

@endsection --}}
