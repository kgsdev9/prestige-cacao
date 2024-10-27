<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Profils Sociaux</h3>
                                <p class="mb-0">Ajoutez ou modifiez vos liens de profils sociaux ci-dessous.</p>
                            </div>
                            <div class="card-body">
                                <div class="row mb-5" wire:key="social-profiles">
                                    @foreach (['twitter', 'facebook', 'instagram', 'linkedin', 'github', 'portfolio'] as $platform)
                                        <div class="col-lg-3 col-md-4 col-12">
                                            <h5>{{ ucfirst($platform) }}</h5>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floating{{ ucfirst($platform) }}"
                                                       placeholder="Lien {{ ucfirst($platform) }}"
                                                       wire:model="{{ $platform }}">
                                                <label for="floating{{ ucfirst($platform) }}">Lien {{ ucfirst($platform) }}</label>
                                            </div>
                                            <small class="text-muted">Ajoutez votre nom d'utilisateur ou lien de profil {{ ucfirst($platform) }}.</small>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="row">
                                    <div class="offset-lg-3 col-lg-6 col-12">
                                        <button wire:click="saveSocialProfiles" class="btn btn-primary w-100">Enregistrer les profils sociaux</button>
                                    </div>
                                </div>

                                @if (session()->has('message'))
                                    <div class="alert alert-success mt-3">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
    </main>
</div>
