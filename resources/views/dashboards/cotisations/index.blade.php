@extends('layout.layout')


@section('content')

    <body class="bg-secondary" x-data="transactionSearch()" x-init="init()">
        <div class=" container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">

                <!-- Sidebar (offcanvas on sreens < 992px) -->
                @include('dashboards._sidebar')

                <!-- Page content -->
                <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h1 class="h2 mb-4 mb-sm-0 me-4">Cotisations </h1>
                        <div class="d-flex ms-auto">
                            <button class="btn btn-secondary me-3 me-sm-4" type="button">
                                <i class="ai-download me-2 ms-n1"></i>
                                Mes cotisations
                            </button>

                            <button class="btn btn-light me-3 me-sm-4" type="button">
                                <i class="ai-plus me-2 ms-n1"></i>

                                Ajouter
                            </button>


                        </div>
                    </div>

                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                                <i class="ai-exchange text-primary lead pe-1 me-2"></i>
                                <h2 class="h4 mb-0">Transactions</h2>
                              
                            </div>

                            <table class="table align-middle w-100" style="min-width: 450px;">
                                <tbody>
                                    <template x-for="transaction in filteredTransactions">
                                        <tr>
                                            <td class="border-0 py-1 px-0">
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-md-2 p-lg-3">
                                                        <img src="assets/img/transactions/transaction-icon.png"
                                                            width="80" alt="Transaction">
                                                    </div>
                                                    <div class="ps-3 ps-sm-4">
                                                        <h4 class="h6 mb-2" x-text="transaction.type"></h4>
                                                        <div class="text-body-secondary fs-sm me-3">Référence :
                                                            <span class="text-dark fw-medium"
                                                                x-text="transaction.codetransaction"></span>
                                                        </div>
                                                        <div class="text-body-secondary fs-sm me-3">Date :
                                                            <span class="text-dark fw-medium"
                                                                x-text="formatDate(transaction.created_at)"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-body-secondary mb-2">Statut</div>
                                                <div class="fs-sm fw-medium text-success" x-text="transaction.statut"></div>
                                            </td>
                                            <td class="border-0 py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-body-secondary mb-2">Montant</div>
                                                <div class="fs-sm fw-medium text-dark"
                                                    x-text="formatMontant(transaction.montant)"></div>
                                            </td>
                                            <td class="border-0 text-end py-1 pe-0 ps-3 ps-sm-4">
                                                <div class="fs-sm text-body-secondary mb-2">Moyen de paiement</div>
                                                <div class="fs-sm fw-medium text-dark"
                                                    x-text="transaction.modereglement.name"></div>
                                            </td>
                                        </tr>
                                    </template>

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


@push('script')
    <script>
        function transactionSearch() {
            return {
                searchTerm: '',
                transactions: @json($listetransactions),
                filteredTransactions: [],
                showCategorySelect: true,
                currentPage: 1,
                transactionsPerPage: 5,
                totalPages: 0,
                isLoading: true,
                showModal: false,
                isEdit: false,


                formatMontant(montant) {
                    return new Intl.NumberFormat('fr-FR', {
                        style: 'decimal',
                        minimumFractionDigits: 0
                    }).format(montant) + ' FCFA';
                },

                formatDate(dateString) {
                    let date = new Date(dateString);
                    return date.toLocaleDateString('fr-FR', {
                        day: '2-digit',
                        month: 'long',
                        year: 'numeric'
                    });
                },


                filterTransactions() {
                    let start = (this.currentPage - 1) * this.transactionsPerPage;
                    let end = start + this.transactionsPerPage;

                    this.filteredTransactions = this.transactions.slice(start, end);
                    this.totalPages = Math.ceil(this.transactions.length / this.transactionsPerPage);
                },

                init() {
                    this.filterTransactions();
                    this.isLoading = false;
                }
            };
        }
    </script>
@endpush
