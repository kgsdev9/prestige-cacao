<aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
    <div class="position-lg-sticky top-0">
        <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
        <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
            <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button"
                data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount" aria-label="Close"></button>
            <div class="offcanvas-body">
                <div class="pb-2 pb-lg-0 mb-4 mb-lg-5">
                    <img class="d-block rounded-circle mb-2" src="assets/img/avatar/02.jpg" width="80"
                        alt="Isabella Bocouse">
                    <h3 class="h5 mb-1">{{ Auth::user()->name }}</h3>
                    <p class="fs-sm text-body-secondary mb-0">{{ Auth::user()->email }}</p>
                </div>
                <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                    <h4 class="fs-xs fw-medium text-body-secondary text-uppercase pb-1 mb-2">Menu principal</h4>

                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <i class="ai-user-check fs-5 opacity-60 me-2"></i>
                        Accueil
                    </a>

                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('cotisations.index') ? 'active' : '' }}"
                        href="{{ route('cotisation.index') }}">
                        <i class="ai-wallet fs-5 opacity-60 me-2"></i>
                        Mes cotisations
                    </a>

                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('prets.index') ? 'active' : '' }}"
                        href="{{ route('prets.index') }}">
                        <i class="ai-wallet fs-5 opacity-60 me-2"></i>
                        Mes prêts
                    </a>

                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('rapports.index') ? 'active' : '' }}"
                        href="{{ route('rapports.index') }}">
                        <i class="ai-activity fs-5 opacity-60 me-2"></i>
                        Mes rapports
                    </a>


                </nav>

                <nav class="nav flex-column pb-2 pb-lg-4 mb-1">
                    <h4 class="fs-xs fw-medium text-body-secondary text-uppercase pb-1 mb-2">Parametre
                    </h4>



                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('profile.update') ? 'active' : '' }}"
                        href="{{ route('profile.update') }}">
                        <i class="ai-settings fs-5 opacity-60 me-2"></i>
                        Mon profile
                    </a>

                    @can('is_admins')
                        <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('profile.update') ? 'active' : '' }}"
                            href="{{ route('profile.update') }}">
                            <i class="ai-settings fs-5 opacity-60 me-2"></i>
                            Mode reglement
                        </a>


                        <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('profile.update') ? 'active' : '' }}"
                            href="{{ route('profile.update') }}">
                            <i class="ai-settings fs-5 opacity-60 me-2"></i>
                            Mes clients
                        </a>


                        <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('profile.update') ? 'active' : '' }}"
                            href="{{ route('profile.update') }}">
                            <i class="ai-settings fs-5 opacity-60 me-2"></i>
                            Mes promoteurs
                        </a>

                        <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('profile.update') ? 'active' : '' }}"
                            href="{{ route('profile.update') }}">
                            <i class="ai-settings fs-5 opacity-60 me-2"></i>
                            Mes invistisseurs
                        </a>


                        <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('profile.update') ? 'active' : '' }}"
                            href="{{ route('profile.update') }}">
                            <i class="ai-settings fs-5 opacity-60 me-2"></i>
                            Mes etablissments
                        </a>


                        <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('profile.update') ? 'active' : '' }}"
                            href="{{ route('profile.update') }}">
                            <i class="ai-settings fs-5 opacity-60 me-2"></i>
                            Mes Clases
                        </a>

                        <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('profile.update') ? 'active' : '' }}"
                            href="{{ route('profile.update') }}">
                            <i class="ai-settings fs-5 opacity-60 me-2"></i>
                            Mes
                            communes
                        </a>


                        <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('profile.update') ? 'active' : '' }}"
                            href="{{ route('profile.update') }}">
                            <i class="ai-settings fs-5 opacity-60 me-2"></i>
                            Mes
                            avis
                        </a>

                        <a class="nav-link fw-semibold py-2 px-0 {{ Route::is('profile.update') ? 'active' : '' }}"
                            href="{{ route('profile.update') }}">
                            <i class="ai-settings fs-5 opacity-60 me-2"></i>
                            Mon entreprise
                        </a>
                    @endcan




                </nav>
                <nav class="nav flex-column">
                    <a class="nav-link fw-semibold py-2 px-0" href="#"
                        onclick="document.getElementById('logoutForm').submit();">
                        <i class="ai-logout fs-5 opacity-60 me-2"></i>
                        Quitter
                    </a>

                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </nav>
            </div>
        </div>
    </div>
</aside>
