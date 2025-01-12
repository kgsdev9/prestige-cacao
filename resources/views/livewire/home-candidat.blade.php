@section('title', 'Liste des formations')

<div>
    <div class="container py-5">
        <div class="row">



            <div class="col-lg-9 col-sm-12">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <h3 class="pb-0 fw-bold text-dark m-0">Toutes les formations </h3>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">
                    @foreach ($listeFormations as $formation)
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card mb-4 card-hover border">
                                <a href="{{ route('detail.job', $formation->id) }}">
                                    <img src="{{ asset('sauvegarde/cv/candidat/' . $formation->image) }}" alt="writing"
                                        class="img-fluid w-100 rounded-top-3">
                                </a>
                                <div class="card-body">
                                    <h4 class="mb-3">
                                        <a href="#!" class="text-inherit">{{ $formation->name }}</a>
                                    </h4>
                                    <div class="d-flex align-items-center mb-5 lh-1">



                                        <div>
                                            <span class="text-inherit fw-semibold me-1">8</span>
                                            Heure de cours par jour
                                        </div>
                                    </div>
                                    <a href="{{ route('detail.job', $formation->id) }}">
                                        Consulter
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</div>
