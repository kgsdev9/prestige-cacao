@extends('layout.layout')
@section('content')
    <section class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5 my-5">
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Devenir Promoteur</li>
            </ol>
        </nav>

        <div class="row pb-1 pb-sm-3 pb-lg-4">
            <div class="col-lg-4 pe-xxl-4">
                <!-- Titre de la page -->
                <h1 class="display-2">Devenez Promoteur</h1>
                <p class="fs-lg pb-4 mb-0 mb-sm-2">Remplissez le formulaire pour rejoindre notre programme de promotion.</p>
            </div>
            <div class="col-lg-8 col-xl-7 offset-xl-1">
                <!-- Formulaire d'inscription -->
                <form class="row g-4 needs-validation" novalidate>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="name">Nom</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Votre nom" required
                            id="name">
                        <div class="invalid-feedback">Veuillez entrer votre nom !</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="email">Email</label>
                        <input class="form-control form-control-lg" type="email" placeholder="Adresse email" required
                            id="email">
                        <div class="invalid-feedback">Veuillez fournir une adresse email valide !</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="phone">Téléphone</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Numéro de téléphone"
                            id="phone">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="promotionType">Type de Promotion</label>
                        <select class="form-select form-select-lg" id="promotionType" required>
                            <option value="">Sélectionnez un type de promotion</option>
                            <option value="Terrain">Promotion Terrain</option>
                            <option value="Réseaux Sociaux">Promotion sur les Réseaux Sociaux</option>
                            <option value="Autres">Autres (à préciser)</option>
                        </select>
                        <div class="invalid-feedback">Veuillez choisir un type de promotion.</div>
                    </div>
                    <div class="col-sm-12" id="otherPromotionDiv" style="display: none;">
                        <label class="form-label fs-base" for="otherPromotion">Précisez votre type de promotion</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Autre type de promotion"
                            id="otherPromotion">
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="message">Pourquoi voulez-vous devenir promoteur ?</label>
                        <textarea class="form-control form-control-lg" rows="5" placeholder="Expliquez votre motivation..." required
                            id="message"></textarea>
                        <div class="invalid-feedback">Veuillez entrer votre message !</div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="agree" required>
                            <label class="form-check-label" for="agree">J'accepte les <a
                                    class="nav-link d-inline fs-normal text-decoration-underline p-0" href="#">termes
                                    &amp; conditions</a></label>
                            <div class="invalid-feedback">Vous devez accepter les termes et conditions.</div>
                        </div>
                    </div>
                    <div class="col-sm-12 pt-2">
                        <button class="btn btn-lg btn-primary" type="submit">Envoyer la demande</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('promotionType').addEventListener('change', function() {
            let otherPromotionDiv = document.getElementById('otherPromotionDiv');
            if (this.value === 'Autres') {
                otherPromotionDiv.style.display = 'block';
            } else {
                otherPromotionDiv.style.display = 'none';
            }
        });
    </script>
@endsection
