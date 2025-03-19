@extends('layout.layout')

@section('content')
<main class="page-wrapper">

    <!-- Assurance Scolaire Moyo -->
    <section class="bg-secondary py-5">
      <div class="container mt-1 py-md-2 py-lg-4 py-xxl-5">
        <h2 class="h1 text-center pt-1 pt-sm-4">Assurance Scolaire Moyo</h2>
        <p class="text-center mx-auto pb-3 mb-3 mb-lg-4" style="max-width: 480px;">Moyo Assurance CI offre une solution complète pour accompagner les familles dans la gestion de l'éducation de leurs enfants. Avec des services variés allant de l'encadrement scolaire à l'accompagnement parental, en passant par le financement pour la rentrée scolaire, Moyo est là pour soutenir les parents et garantir la sécurité de leurs enfants tout au long de l'année scolaire.</p>

        <div class="row g-4 pb-2 pb-sm-4 mb-sm-2">

          <!-- Item 1 -->
          <div class="col-md-5">
            <div class="card border-0 h-100">
              <div class="card-body">
                <a href="#">
                  <img class="d-dark-mode-none" src="assets/img/landing/saas-2/features/01-light.png" alt="Image">
                  <img class="d-none d-dark-mode-block" src="assets/img/landing/saas-2/features/01-dark.png" alt="Image">
                </a>
                <div class="pt-3 mt-2 mt-lg-3">
                  <h3>Encadrement scolaire</h3>
                  <p class="mb-0">Offre d'accompagnement scolaire pour les enfants, afin de les aider à mieux réussir dans leur parcours académique.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="col-md-7">
            <div class="card border-0 h-100">
              <div class="card-body overflow-hidden">
                <div class="d-sm-flex align-items-center">
                  <a class="d-block order-sm-2 flex-shrink-0 mt-n4 mb-n2" href="#">
                    <img src="assets/img/landing/saas-2/features/02.png" width="308" alt="Image">
                  </a>
                  <div class="order-sm-1 pe-sm-3 me-xl-4">
                    <h3>Coaching parental</h3>
                    <p class="pb-3 mb-1 mb-xl-3">Moyo offre un coaching personnalisé pour les parents, afin de les accompagner dans l'éducation de leurs enfants et la gestion de leur bien-être.</p>
                    <a class="btn btn-link p-0" href="#">
                      En savoir plus
                      <i class="ai-arrow-right ms-2"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="col-md-5">
            <div class="card border-0 h-100">
              <div class="card-body">
                <a href="#">
                  <img class="d-dark-mode-none" src="assets/img/landing/saas-2/features/03-light.png" alt="Image">
                  <img class="d-none d-dark-mode-block" src="assets/img/landing/saas-2/features/03-dark.png" alt="Image">
                </a>
                <div class="pt-3 mt-2 mt-lg-3">
                  <h3>Financement scolaire</h3>
                  <p class="mb-0">Moyo propose une aide financière pour faciliter la rentrée académique des enfants, en allégeant les coûts liés aux frais scolaires et à la fourniture des outils nécessaires.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="col-md-7">
            <div class="card border-0 h-100">
              <div class="card-body overflow-hidden">
                <div class="d-sm-flex align-items-center">
                  <a class="d-block order-sm-2 flex-shrink-0 mt-n4 mb-n2" href="#">
                    <img src="assets/img/landing/saas-2/features/04.png" width="308" alt="Image">
                  </a>
                  <div class="order-sm-1 pe-sm-3 me-xl-4">
                    <h3>Soutien pour la réussite scolaire</h3>
                    <p class="pb-3 mb-1 mb-xl-3">Grâce à Moyo, les parents et les enfants bénéficient d'un soutien constant pour garantir la réussite académique et personnelle tout au long de l'année scolaire.</p>
                    <a class="btn btn-link p-0" href="#">
                      En savoir plus
                      <i class="ai-arrow-right ms-2"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
</main>
@endsection
