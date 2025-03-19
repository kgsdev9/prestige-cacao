@extends('layout.layout')

@section('content')
<main class="page-wrapper">



    <!-- Hero -->
    <section class="bg-dark d-flex min-vh-100 position-relative overflow-hidden py-5" data-bs-theme="dark">
      <div class="container d-flex flex-column justify-content-center position-relative z-2 pt-sm-3 pt-md-4 pt-xl-5 pb-1 pb-sm-3 pb-lg-4 pb-xl-5">
        <div class="row flex-lg-nowrap align-items-center pb-5 pt-2 pt-lg-4 pt-xl-0 mt-lg-4 mt-xl-0">
          <div class="col-lg-7 order-lg-2 ms-lg-4 mb-2 mb-lg-0">
            <div class="parallax order-lg-2 mx-auto" style="max-width: 740px; transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
              <div class="parallax-layer" data-depth="0.05" style="transform: translate3d(-0.3px, -0.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                <img src="assets/img/landing/saas-2/hero/01.png" alt="Layer">
              </div>
              <div class="parallax-layer" data-depth="-0.05" style="transform: translate3d(0.3px, 0.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                <img src="assets/img/landing/saas-2/hero/02.png" style="animation: rotate-cw 100s linear infinite;" alt="Layer">
              </div>
              <div class="parallax-layer z-2" data-depth="0.3" style="transform: translate3d(-2.1px, -3.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                <img src="assets/img/landing/saas-2/hero/03.png" alt="Layer"></div>
              <div class="parallax-layer z-2" data-depth="0.15" style="transform: translate3d(-1px, -1.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                <img src="assets/img/landing/saas-2/hero/04.png" alt="Layer">
              </div>
              <div class="parallax-layer z-2" data-depth="0.4" style="transform: translate3d(-2.7px, -4.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                <img src="assets/img/landing/saas-2/hero/05.png" alt="Layer">
              </div>
            </div>
          </div>
          <div class="col-lg-5 order-lg-1 text-center text-lg-start me-xl-5">
            <span class="badge bg-warning bg-opacity-10 text-warning fs-sm">Take your data to the next level&nbsp; 🚀</span>
            <h1 class="display-4 py-3 my-2 mb-xl-3">The platform to manage business</h1>
            <ul class="list-unstyled d-table text-start mx-auto mx-lg-0 mb-0">
              <li class="d-flex text-body pb-2 mb-1">
                <i class="ai-check-alt text-primary lead me-2"></i>
                Segmenting the audience is easy and simple
              </li>
              <li class="d-flex text-body pb-2 mb-1">
                <i class="ai-check-alt text-primary lead me-2"></i>
                Functional dashboard for managing your data
              </li>
              <li class="d-flex text-body pb-2 mb-1">
                <i class="ai-check-alt text-primary lead me-2"></i>
                Key performance indicators of team interaction
              </li>
            </ul>
            <div class="d-flex justify-content-center justify-content-lg-start pt-4 pt-xl-5">
              <div class="text-center">
                <a class="btn btn-lg btn-primary rounded-pill w-100 w-sm-auto" href="#">Start free 14-day trial</a>
                <p class="text-body fs-sm pt-2 mt-sm-1 mb-0">100% free to get started!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-cols-3 row-cols-sm-4 row-cols-lg-5 row-cols-xl-6 justify-content-center align-items-center g-4 pt-lg-3 pt-xl-4">
          <div class="col">
            <img class="d-block my-1 mx-auto" src="assets/img/landing/saas-1/brands/foster-light.svg" width="145" alt="Foster">
          </div>
          <div class="col">
            <img class="d-block my-1 mx-auto" src="assets/img/landing/saas-1/brands/klinos-light.svg" width="140" alt="Klinos">
          </div>
          <div class="col">
            <img class="d-block my-1 mx-auto" src="assets/img/landing/saas-1/brands/champion-light.svg" width="160" alt="Champion">
          </div>
          <div class="col">
            <img class="d-block my-1 mx-auto" src="assets/img/landing/saas-1/brands/airbnb-light.svg" width="130" alt="Airbnb">
          </div>
          <div class="col">
            <img class="d-block my-1 mx-auto" src="assets/img/landing/saas-1/brands/starcraft-light.svg" width="160" alt="Starcraft">
          </div>
          <div class="col">
            <img class="d-block my-1 mx-auto" src="assets/img/landing/saas-1/brands/alpine-light.svg" width="150" alt="Alpine">
          </div>
        </div>
      </div>
    </section>


    <!-- Features -->
    <section class="bg-secondary py-5">
      <div class="container mt-1 py-md-2 py-lg-4 py-xxl-5">
        <h2 class="h1 text-center pt-1 pt-sm-4">Take your data to the next level</h2>
        <p class="text-center mx-auto pb-3 mb-3 mb-lg-4" style="max-width: 480px;">Using basic data skills you can analysis and improve your business indicators with Around</p>
        <div class="row g-4 pb-2 pb-sm-4 mb-sm-2">

          <!-- Item -->
          <div class="col-md-5">
            <div class="card border-0 h-100">
              <div class="card-body">
                <a href="#">
                  <img class="d-dark-mode-none" src="assets/img/landing/saas-2/features/01-light.png" alt="Image">
                  <img class="d-none d-dark-mode-block" src="assets/img/landing/saas-2/features/01-dark.png" alt="Image">
                </a>
                <div class="pt-3 mt-2 mt-lg-3">
                  <h3>Simple control panel</h3>
                  <p class="mb-0">Dashboard is to present analytical data in a compact form on one page for easy to interpret.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-md-7">
            <div class="card border-0 h-100">
              <div class="card-body overflow-hidden">
                <div class="d-sm-flex align-items-center">
                  <a class="d-block order-sm-2 flex-shrink-0 mt-n4 mb-n2" href="#">
                    <img src="assets/img/landing/saas-2/features/02.png" width="308" alt="Image">
                  </a>
                  <div class="order-sm-1 pe-sm-3 me-xl-4">
                    <h3>Segmentation by various methods</h3>
                    <p class="pb-3 mb-1 mb-xl-3">Segmentation allows you to divide users according to a given criterion, and then for each of the groups to develop an advertisement and product.</p>
                    <a class="btn btn-link p-0" href="#">
                      Learn more
                      <i class="ai-arrow-right ms-2"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-md-7">
            <div class="card border-0 h-100">
              <div class="card-body overflow-hidden">
                <div class="d-sm-flex align-items-center">
                  <a class="d-block order-sm-2 flex-shrink-0 mt-n4 mb-n2" href="#">
                    <img class="d-dark-mode-none" src="assets/img/landing/saas-2/features/03-light.png" width="308" alt="Image">
                    <img class="d-none d-dark-mode-block" src="assets/img/landing/saas-2/features/03-dark.png" width="308" alt="Image">
                  </a>
                  <div class="order-sm-1 pe-sm-3 me-xl-4">
                    <h3>Key performance indicators</h3>
                    <p class="pb-3 mb-1 mb-xl-3">You can easily identify interdependencies between different indicators, identify tendencies and prevent potential difficulties and problems.</p>
                    <a class="btn btn-link p-0" href="#">
                      Learn more
                      <i class="ai-arrow-right ms-2"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col-md-5">
            <div class="card border-0 h-100">
              <div class="card-body">
                <a href="#">
                  <img class="d-dark-mode-none" src="assets/img/landing/saas-2/features/04-light.png" alt="Image">
                  <img class="d-none d-dark-mode-block" src="assets/img/landing/saas-2/features/04-dark.png" alt="Image">
                </a>
                <div class="pt-3 mt-2 mt-lg-3">
                  <h3>Forecasting efficiency</h3>
                  <p class="mb-0">Before launching any marketing activity, you need to assess how successful and effective it can be.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- How it works (Steps) -->
    <section class="overflow-hidden pt-5 mt-md-3 mt-lg-2 mt-xl-4 mt-xxl-5">
      <div class="container pt-2 pt-sm-4 pt-lg-5">
        <h2 class="h1 text-center pb-3 mb-3 mb-lg-4">How does it work?</h2>

        <!-- Step -->
        <div class="row align-items-center position-relative pb-5 pb-lg-0 mb-1 mb-sm-2 mb-md-4 mb-lg-0">
          <div class="col-md-6 col-xl-5 offset-lg-1 order-md-2 pb-2 pb-md-0 mb-4 mb-md-0 aos-init" data-aos="fade-left" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
            <img class="d-dark-mode-none" src="assets/img/landing/saas-2/steps/01-light.png" width="525" alt="Image">
            <img class="d-none d-dark-mode-block" src="assets/img/landing/saas-2/steps/01-dark.png" width="525" alt="Image">
          </div>
          <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-1 order-md-1 aos-init" data-aos="fade-right" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
            <div class="pe-md-4 pe-lg-0">
              <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3 mb-lg-4">Step 01</span>
              <h3 class="h2 mb-3 mb-lg-4">Connect your site to the platform using a code</h3>
              <p class="pb-1 pb-lg-0 mb-4 mb-lg-5">Nec id eget malesuada urna at sed est adipiscing auctor at massa id duis fames ut condimentum velit est, donec mauris tortor massa et viverra.</p>
              <a class="btn btn-outline-primary rounded-pill" href="#">Get connected</a>
            </div>
          </div>
        </div>

        <!-- Arrow -->
        <div class="d-none d-lg-flex justify-content-center aos-init aos-animate" data-aos="fade-in" data-aos-duration="500" data-aos-offset="250">
          <svg class="d-block text-primary" width="339" height="365" viewBox="0 0 339 365" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: -150px; margin-top: -140px; margin-bottom: -108px;">
            <path d="M324 291.371C120.111 291.37 240.756 58.7225 1.00032 73.2606" stroke="url(#arrow1)" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"></path>
            <path d="M337.375 290.62C338.074 290.998 338.074 292.001 337.375 292.379L328.476 297.196C327.81 297.557 327 297.074 327 296.317L327 286.683C327 285.925 327.81 285.443 328.476 285.803L337.375 290.62Z" fill="currentColor"></path>
            <defs>
              <linearGradient id="arrow1" x1="324" y1="291.5" x2="-2.99974" y2="72.4997" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="currentColor"></stop>
                <stop offset="1" stop-color="currentColor" stop-opacity="0"></stop>
              </linearGradient>
            </defs>
          </svg>
        </div>

        <!-- Step -->
        <div class="row align-items-center position-relative pb-5 pb-lg-0 mb-1 mb-sm-2 mb-md-4 mb-lg-0">
          <div class="col-md-6 col-xl-5 offset-xl-1 pb-2 pb-md-0 mb-4 mb-md-0 aos-init" data-aos="fade-right" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
            <img class="d-dark-mode-none" src="assets/img/landing/saas-2/steps/02-light.png" width="473" alt="Image">
            <img class="d-none d-dark-mode-block" src="assets/img/landing/saas-2/steps/02-dark.png" width="473" alt="Image">
          </div>
          <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 aos-init" data-aos="fade-left" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
            <div class="ps-md-4 ps-lg-0">
              <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3 mb-lg-4">Step 02</span>
              <h3 class="h2 mb-3 mb-lg-4">Set up important dashboard metrics</h3>
              <ul class="list-unstyled mb-0">
                <li class="d-flex pt-1 mt-2">
                  <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                  Forecasting and recommendations
                </li>
                <li class="d-flex pt-1 mt-2">
                  <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                  Identification of patterns, analysis
                </li>
                <li class="d-flex pt-1 mt-2">
                  <i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>
                  Segmentation by various methods
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Arrow -->
        <div class="d-none d-lg-flex justify-content-center aos-init aos-animate" data-aos="fade-in" data-aos-duration="500" data-aos-offset="250">
          <svg class="d-block text-primary" width="263" height="275" viewBox="0 0 263 275" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -60px; margin-left: -120px; margin-bottom: -80px;">
            <path d="M8.13678 249.647C7.47108 250.081 6.59001 249.602 6.59106 248.808L6.60444 238.689C6.60544 237.931 7.4158 237.45 8.08162 237.811L16.5478 242.408C17.2136 242.77 17.2512 243.712 16.6163 244.125L8.13678 249.647Z" fill="currentColor"></path>
            <path d="M261.961 37.8891C216.908 65.6243 128.226 135.486 133.916 193.05C141.029 265.005 265.134 173.468 173.666 148.634C89.2542 125.715 30.9125 210.547 13.9796 236.702" stroke="url(#arrow2)" stroke-width="2" stroke-linecap="round" stroke-dasharray="6 6"></path>
            <defs>
              <linearGradient id="arrow2" x1="13.9797" y1="234.5" x2="276.704" y2="60.1939" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="currentColor"></stop>
                <stop offset="1" stop-color="currentColor" stop-opacity="0"></stop>
              </linearGradient>
            </defs>
          </svg>
        </div>

        <!-- Step -->
        <div class="row align-items-center position-relative">
          <div class="col-md-6 col-xl-5 offset-lg-1 order-md-2 d-md-flex justify-content-end pb-2 pb-md-0 mb-4 mb-md-0 aos-init" data-aos="fade-left" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
            <img class="d-dark-mode-none" src="assets/img/landing/saas-2/steps/03-light.png" width="473" alt="Image">
            <img class="d-none d-dark-mode-block" src="assets/img/landing/saas-2/steps/03-dark.png" width="473" alt="Image">
          </div>
          <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-1 order-md-1 aos-init" data-aos="fade-right" data-aos-duration="500" data-aos-offset="250" data-disable-parallax-down="md">
            <div class="pe-md-4 pe-lg-0">
              <span class="badge fs-sm bg-primary bg-opacity-10 text-primary mb-3 mb-lg-4">Step 03</span>
              <h3 class="h2 mb-3 mb-lg-4">Download the data in a convenient format</h3>
              <p class="pb-1 pb-lg-0 mb-4 mb-lg-5">Bibendum velit mi, ac sed ac malesuada ultrices non lectus mi pellentesque vel at tempus cras sed a eleifend augue amet mauris, leo ac amet erat.</p>
              <a class="btn btn-outline-primary rounded-pill" href="#">Get connected</a>
            </div>
          </div>
        </div>
      </div>
    </section>










  </main>

@endsection
