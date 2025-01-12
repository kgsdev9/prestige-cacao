<main>
    @section('title', $job->name)
    <section class="py-lg-8 py-7">
        <div class="container my-lg-8">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-md-12">
                    <div class="d-xl-flex">
                        <div class="mb-3 mb-md-0">
                            <img src="{{ asset('ispr_logo.png') }}" style="height:30px;" alt="logo"
                                class="icon-shape border rounded-circle">
                        </div>
                        <!-- text -->
                        <div class="ms-xl-3 w-100 mt-3 mt-xl-0">
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <h1 class="mb-1 h2">{{ $job->title }}</h1>
                                    <div>
                                        <span>Contrat {{ $job->name }}</span>


                                    </div>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                                        <path
                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <!-- year -->
                                <div class="d-md-flex justify-content-between">
                                    <div class="mb-2 mb-md-0">
                                        <span class="me-2">
                                            <i class="fe fe-briefcase"></i>
                                            <span class="ms-1">{{ $job->name }}</span>
                                        </span>




                                    </div>



                                    <div>
                                        <!-- time -->
                                        <i class="fe fe-clock"></i>
                                        <span>{{ $job->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">

                    <div class="mt-2">
                        <h2 class="mb-3 fs-3">Description</h2>
                        <p>{!! $job->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
