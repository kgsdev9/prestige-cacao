@extends('layout.layout')
@section('content')
    <section class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5 my-5">
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>

        <div class="row pb-1 pb-sm-3 pb-lg-4">
            <div class="col-lg-4 pe-xxl-4">
                <!-- Titre de la page -->
                <h1 class="display-2">Contactez-nous</h1>
                <p class="fs-lg pb-4 mb-0 mb-sm-2">Remplissez le formulaire ci-dessous ou appelez-nous directement.</p>
            </div>
            <div class="col-lg-8 col-xl-7 offset-xl-1">
                <!-- Formulaire de contact -->
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
                        <label class="form-label fs-base" for="service">Service souhaité</label>
                        <select class="form-select form-select-lg" id="service">
                            <option value="">Sélectionnez un service</option>
                            <option value="Moyo Scolaire">Moyo Scolaire</option>
                            <option value="Encadrement scolaire">Encadrement scolaire</option>
                            <option value="Frais scolaires">Scolarite</option>
                            <option value="Carte d'assurance scolaire">Carte digitale Moyo</option>
                            <option value="Recherche de répétiteur">Recherche de répétiteur</option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="message">Comment pouvons-nous vous aider ?</label>
                        <textarea class="form-control form-control-lg" rows="5" placeholder="Entrez votre message ici..." required
                            id="message"></textarea>
                        <div class="invalid-feedback">Veuillez entrer votre message !</div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="agree">
                            <label class="form-check-label" for="agree">J'accepte les <a
                                    class="nav-link d-inline fs-normal text-decoration-underline p-0" href="#">termes
                                    &amp; conditions</a></label>
                        </div>
                    </div>
                    <div class="col-sm-12 pt-2">
                        <button class="btn btn-lg btn-primary" type="submit">Envoyer la demande</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
