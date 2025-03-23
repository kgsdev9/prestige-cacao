@extends('layout.layout')
@section('content')
    <body class="bg-secondary">
        <div class=" container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">

                <!-- Sidebar (offcanvas on sreens < 992px) -->
                @include('dashboards._sidebar')

                <!-- Page content -->
                <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h1 class="h2 mb-4 mb-sm-0 me-4">Tableau de bord </h1>
                        <div class="d-flex ms-auto">
                            <button class="btn btn-secondary me-3 me-sm-4" type="button">
                                <i class="ai-download me-2 ms-n1"></i>
                                Mes factures
                            </button>

                            <button class="btn btn-light me-3 me-sm-4" type="button">
                                <i class="ai-plus me-2 ms-n1"></i>

                                Ajouter une cotisation
                            </button>



                        </div>
                    </div>
                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
                        <div class="card-body">
                            <div class="row g-3 g-xl-4">
                                <div class="col-md-4 col-sm-6">
                                    <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                        <h2 class="h6 pb-2 mb-1">Mon solde</h2>
                                        <div class="h2 text-primary mb-2">0</div>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                        <h2 class="h6 pb-2 mb-1">Versement du cours </h2>
                                        <div class="h2 text-primary mb-2">0 FCFA </div>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="h-100 bg-secondary rounded-3 text-center p-4">
                                        <h2 class="h6 pb-2 mb-1">Total des prets </h2>
                                        <div class="h2 text-primary mb-2">0 FCFA</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                                <i class="ai-exchange text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">Transactions</h2>
                                <a class="btn btn-sm btn-secondary ms-auto" href="#">Consulter plus </a>
                            </div>
                            <table class="table align-middle w-100" style="min-width: 450px;">
                                <tbody>
                                    <tr>
                                        <td class="border-0 py-1 px-0">
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3">
                                                    <img src="assets/img/transactions/transaction-icon.png" width="80"
                                                        alt="Transaction">
                                                </div>
                                                <div class="ps-3 ps-sm-4">
                                                    <h4 class="h6 mb-2">Paiement reçu</h4>
                                                    <div class="text-body-secondary fs-sm me-3">ID de transaction :
                                                        <span class="text-dark fw-medium">#TXN123456</span>
                                                    </div>
                                                    <div class="text-body-secondary fs-sm me-3">Date :
                                                        <span class="text-dark fw-medium">22 mars 2025</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                            <div class="fs-sm text-body-secondary mb-2">Statut</div>
                                            <div class="fs-sm fw-medium text-success">Terminé</div>
                                        </td>
                                        <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                            <div class="fs-sm text-body-secondary mb-2">Montant</div>
                                            <div class="fs-sm fw-medium text-dark">250 €</div>
                                        </td>
                                        <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                            <div class="fs-sm text-body-secondary mb-2">Moyen de paiement</div>
                                            <div class="fs-sm fw-medium text-dark">Carte bancaire</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </section>
                </div>
            </div>
        </div>
        @include('dashboards.sidebarbuttonresponsive')
    </body>

@endsection
