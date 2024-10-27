<div>
    <section class="py-8 bg-white">
        <div class="container my-lg-8">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-6 col-md-12">
                    <div class="mb-4 mb-xl-0 text-center">
                        <!-- Badge -->
                        <span class="badge bg-primary-soft rounded-pill fs-5">
                            <span class="fw-bold">Carriere Pro Plus</span>
                            - Votre Partenaire de recrutement
                        </span>
                        <h1 class="display-3 ls-sm mt-2 fw-bold">Découvrez des talents exceptionnels</h1>
                        <p class="mb-6 h4 px-md-8">Carriere Pro Plus est une plateforme puissante qui met en avant des candidats qualifiés.</p>

                        <form wire:submit.prevent="updatedSearch" class="row needs-validation text-start" novalidate="">
                            <div class="mb-3 col-md-8 col-12 ps-md-0 position-relative">
                                <label for="searchInput" class="visually-hidden">Rechercher par poste</label>
                                <input type="text" wire:model.debounce.500ms="search" id="searchInput" class="form-control" placeholder="Rechercher par poste">
                            </div>
                            <div class="d-grid mb-3 col-md-4 col-12 ps-md-0">
                                <button class="btn btn-success" type="submit" wire:loading.remove>
                                    Rechercher
                                </button>
                                <button class="btn btn-success" type="button" wire:loading>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Chargement...
                                </button>
                            </div>
                        </form>

                        <div class="gap-2 d-flex flex-wrap justify-content-center mt-4">
                            @if($results->isNotEmpty())
                                @foreach($results as $result)
                                    <a href="#" class="btn btn-tag btn-sm">
                                        {{ $result->specialite->libellespecialite ?? 'Inconnu' }} <!-- Vérifiez que specialite est chargé -->
                                    </a>
                                @endforeach
                            @else
                                <p class="text-center mt-4"></p>
                            @endif
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
