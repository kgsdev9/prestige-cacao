{{-- <div class="col-lg-3 col-md-4 col-12">
    <!-- User profile -->
    <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
        <!-- Menu -->
        <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
        <!-- Button -->
        <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
            type="button" data-bs-toggle="collapse" data-bs-target="#sidenav"
            aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fe fe-menu"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav">
            <div class="navbar-nav flex-column">
                <span class="navbar-header">Menu </span>
                <ul class="list-unstyled ms-n2 mb-4">
                    <!-- Nav item -->
                    <li class="nav-item active">
                        <a class="nav-link" href="{{URL('/profiles')}}"><i
                                class="fe fe-home nav-icon"></i>Accueil </a>
                    </li>

                    @can(['is_prestataire'])
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('prestation.index')}}"><i
                                class="fe fe-book nav-icon"></i>Mes Prestations </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('skills.index')}}"><i
                                class="fe fe-book nav-icon"></i>Mes Skills</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('projet.index')}}"><i
                                class="fe fe-book nav-icon"></i>Mes Projets</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i
                                class="fe fe-book nav-icon"></i>Mes modifier mon profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i
                                class="fe fe-book nav-icon"></i>Mes Factures</a>
                    </li>
                    @endcan

                    @can(['is_entreprise'])

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('formation.index')}}"><i
                                class="fe fe-book nav-icon"></i>Gestion Formations </a>
                    </li>
                    @endcan
                    @can('is_user')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('orders.users.liste')}}"><i class="fe fe-star nav-icon"></i>Mes Commandes</a>
                    </li>
                    @endcan
                </ul>

                <ul class="list-unstyled ms-n2 mb-0">
                    <!-- Nav item -->
                    @can(['is_entreprise'])
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profile.formateurs')}}"><i
                                class="fe fe-settings nav-icon"></i>Modifier Mon Profile</a>
                    </li>
                    @endcan

                    <!-- Nav item -->
                    <li class="nav-item">
                      <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-white" type="submit">Se Deconnecter </button>
                    </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div> --}}
<div class="col-lg-3 col-md-4 col-12">
    <!-- Side navbar -->
    <nav class="navbar navbar-expand-md shadow-sm mb-4 mb-lg-0 sidenav">
      <!-- Menu -->
      <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
      <!-- Button -->
      <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fe fe-menu"></span>
      </button>
      <!-- Collapse navbar -->
      <div class="collapse navbar-collapse" id="sidenav">
        <div class="navbar-nav flex-column">
          <span class="navbar-header">Menu</span>
          <ul class="list-unstyled ms-n2 mb-4">
            <!-- Nav item -->
            <li class="nav-item active">
              <a class="nav-link" href="student-subscriptions.html">
                <i class="fe fe-calendar nav-icon"></i>
                Accueil
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="{{route('experience.index')}}">
                <i class="fe fe-credit-card nav-icon"></i>
                Mes experiences
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="payment-method.html">
                <i class="fe fe-credit-card nav-icon"></i>
                Mon Formations
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="invoice.html">
                <i class="fe fe-clipboard nav-icon"></i>
               Mes Factures
              </a>
            </li>

          </ul>
          <!-- Navbar header -->
          <span class="navbar-header">Parametre de compte</span>
          <ul class="list-unstyled ms-n2 mb-0">
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="profile-edit.html">
                <i class="fe fe-settings nav-icon"></i>
                Edition Profile
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="security.html">
                <i class="fe fe-user nav-icon"></i>
               Securite De Compte
              </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
              <a class="nav-link" href="social-profile.html">
                <i class="fe fe-refresh-cw nav-icon"></i>
               Profile Social
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="delete-profile.html">
                <i class="fe fe-trash nav-icon"></i>
                Supprimer mon compte
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../index.html">
                <i class="fe fe-power nav-icon"></i>
                Déconnexion
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
