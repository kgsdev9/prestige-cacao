<div class="col-lg-3 col-md-4 col-12">
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
</div>
