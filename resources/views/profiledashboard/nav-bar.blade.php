<div class="navbar-nav flex-column mt-4 mt-lg-0 d-flex flex-column gap-3">
    <ul class="list-unstyled mb-0">
        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.users') }}">
                <i class="fe fe-home nav-icon"></i>
                Tableau de bord
            </a>
        </li>
        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.management') }}">
                <i class="fe fe-award nav-icon"></i>
                Utilisateurs
            </a>
        </li>
        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="project-blank.html">
                <i class="fe fe-edit nav-icon"></i>
                Mes Projets
            </a>
        </li>
        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="course-blank.html">
                <i class="fe fe-book nav-icon"></i>
                Mes Cours
            </a>
        </li>
        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="exams-blank.html">
                <i class="fe fe-edit nav-icon"></i>
                Mes Examens
            </a>
        </li>
        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="homework-blank.html">
                <i class="fe fe-file-text nav-icon"></i>
                Mes Devoirs
            </a>
        </li>
        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="formations-blank.html">
                <i class="fe fe-video nav-icon"></i>
                Nos Formations
            </a>
        </li>
        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="academic-year-blank.html">
                <i class="fe fe-calendar nav-icon"></i>
                Année Académique
            </a>
        </li>
        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="teachers-blank.html">
                <i class="fe fe-users nav-icon"></i>
                Enseignants
            </a>
        </li>
        <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link" href="articles-blank.html">
                <i class="fe fe-file-text nav-icon"></i>
                Mes Articles
            </a>
        </li>
    </ul>
    <!-- Navbar header -->
    <div class="d-flex flex-column gap-1">
        <span class="navbar-header">Apprentissage</span>
        <ul class="list-unstyled mb-0">
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="all-courses.html">
                    <i class="fe fe-youtube nav-icon"></i>
                    Toutes les Cours
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="learning-path.html">
                    <i class="fe fe-trending-up nav-icon"></i>
                    Parcours d'Apprentissage
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard-project.html">
                    <i class="fe fe-edit nav-icon"></i>
                    Projets
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard-quiz.html">
                    <i class="fe fe-credit-card nav-icon"></i>
                    Quiz
                </a>
            </li>
        </ul>
    </div>
    <!-- Navbar header -->
    <div class="d-flex flex-column gap-1">
        <span class="navbar-header">Paramètres du Compte</span>
        <ul class="list-unstyled mb-0">
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="profile-edit.html">
                    <i class="fe fe-settings nav-icon"></i>
                    Modifier le Profil
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="security.html">
                    <i class="fe fe-user nav-icon"></i>
                    Sécurité
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="social-profile.html">
                    <i class="fe fe-refresh-cw nav-icon"></i>
                    Profils Sociaux
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="notifications.html">
                    <i class="fe fe-bell nav-icon"></i>
                    Notifications
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="profile-privacy.html">
                    <i class="fe fe-lock nav-icon"></i>
                    Confidentialité du Profil
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="delete-profile.html">
                    <i class="fe fe-trash nav-icon"></i>
                    Supprimer le Profil
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="linked-accounts.html">
                    <i class="fe fe-user nav-icon"></i>
                    Comptes Liés
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="https://geeksui.codescandy.com/geeks/index.html">
                    <i class="fe fe-power nav-icon"></i>
                    Se Déconnecter
                </a>
            </li>
        </ul>
    </div>
</div>






{{-- <div class="col-lg-3 col-md-4 col-12">
    <!-- Side navbar -->
    <nav class="navbar navbar-expand-md shadow-sm mb-4 mb-lg-0 sidenav">
        <!-- Menu -->
        <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
        <!-- Button -->
        <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
            data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="fe fe-menu"></span>
        </button>
        <!-- Collapse navbar -->
        <div class="collapse navbar-collapse" id="sidenav">
            <div class="navbar-nav flex-column">
                @can('is_etudiant')
                    <span class="navbar-header">Menu</span>
                    <ul class="list-unstyled ms-n2 mb-4">
                        <!-- Nav item -->
                        <li class="nav-item {{ request()->routeIs('dashboard.users') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('dashboard.users') }}">
                                <i class="fe fe-calendar nav-icon"></i>
                                Accueil
                            </a>
                        </li>
                    </ul>
                    <span class="navbar-header">Parametre de compte</span>
                    <ul class="list-unstyled ms-n2 mb-0">

                        <li class="nav-link disabled {{ request()->routeIs('comptesocial.index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('comptesocial.index') }}">
                                <i class="fe fe-refresh-cw nav-icon"></i>
                                Cours
                            </a>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link btn disabled" type="button" disabled>
                                <i class="fe fe-trash nav-icon"></i>
                                Formations
                            </button>
                        </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="nav-link" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fe fe-power nav-icon"></i>
                                Déconnexion
                            </a>
                        </li>

                    </ul>
                @endcan
                @can('is_admin')
                    <span class="navbar-header">Espace Administration</span>
                    <ul class="list-unstyled ms-n2 mb-0">

                        <li class="nav-item {{ request()->routeIs('users.management') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('users.management') }}">
                                <i class="fe fe-user-plus nav-icon"></i>
                               Users
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('gestion.job') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('gestion.job') }}">
                                <i class="fe fe-briefcase nav-icon"></i>
                               Formations
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('gestion.job') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('gestion.job') }}">
                                <i class="fe fe-share-2 nav-icon"></i>
                               Articles
                            </a>
                        </li>

                        <li class="nav-item {{ request()->routeIs('gestion.job') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('gestion.job') }}">
                                <i class="fe fe-share-2 nav-icon"></i>
                               Support cours
                            </a>
                        </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="nav-link" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fe fe-power nav-icon"></i>
                                Déconnexion
                            </a>
                        </li>

                    </ul>

                @endcan
            </div>
        </div>
    </nav>
</div> --}}
