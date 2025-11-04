@extends('layout.layout')

@section('content')
<br><br><br><br>

<div class="container" x-data="produitForm()">
    <div class="row justify-content-center mt-5 mb-5">

        <!-- Image du produit -->
        <div class="col-lg-6">
            <div class="bg-white shadow rounded p-4 text-center">
                <figure>
                    <img :src="assetPath(produit.image)" alt="" class="img-fluid rounded mb-3">
                </figure>
            </div>
        </div>

        <!-- Détails du produit -->
        <div class="col-lg-6">
            <div class="bg-light rounded p-4">
                <h1 class="mb-3" x-text="produit.name"></h1>
                <p class="text-muted mb-4" x-text="produit.description"></p>

                <div class="d-flex align-items-center mb-3">
                    <label class="me-2 fw-semibold">Quantité :</label>
                    <input type="number" min="1" x-model.number="quantite" class="form-control w-25 text-center">
                </div>

                <div class="mb-3">
                    <p class="fs-5">
                        Prix unitaire :
                        <strong x-text="formatPrix(produit.price)"></strong>
                    </p>
                    <p class="fs-4 text-success fw-bold">
                        Total :
                        <span x-text="formatPrix(total())"></span>
                    </p>
                </div>

                <!-- ✅ Formulaire complet -->
                <form method="POST" action="{{ route('checkout') }}">
                    @csrf
                    <input type="hidden" name="id" :value="produit.id">
                    <input type="hidden" name="name" :value="produit.name">
                    <input type="hidden" name="description" :value="produit.description">
                    <input type="hidden" name="price" :value="produit.price">
                    <input type="hidden" name="image" :value="produit.image">
                    <input type="hidden" name="quantity" :value="quantite">

                    <button type="submit" class="btn btn-primary w-100">
                        Payer avec Stripe
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function produitForm() {
    return {
        produit: @json($product),
        quantite: 1,

        total() {
            return this.produit.price * this.quantite;
        },

        formatPrix(val) {
            return new Intl.NumberFormat('fr-FR', {
                style: 'currency',
                currency: 'EUR'
            }).format(val);
        },

        assetPath(path) {
            return "{{ asset('') }}" + path;
        }
    }
}
</script>
@endsection
