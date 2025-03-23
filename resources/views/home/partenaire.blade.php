@extends('layout.layout')

@section('content')
    <section class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5 my-5">
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Devenez Partenaire</li>
            </ol>
        </nav>

        <div class="row pb-1 pb-sm-3 pb-lg-4">
            <div class="col-lg-4 pe-xxl-4">
                <!-- Titre de la page -->
                <h1 class="display-2">Devenez Partenaire de Moyo Assurance</h1>
                <p class="fs-lg pb-4 mb-0 mb-sm-2">Rejoignez notre réseau et profitez des opportunités de collaboration pour
                    offrir à vos clients les meilleurs services d’assurance scolaire en Côte d'Ivoire.</p>
            </div>
            <div class="col-lg-8 col-xl-7 offset-xl-1">
                <!-- Informations sur le partenariat -->
                <div class="fs-lg pb-4 mb-4">
                    <h3 class="h4">Pourquoi devenir partenaire ?</h3>
                    <ul>
                        <li>Accédez à un réseau de clients potentiels dans le secteur de l’assurance scolaire.</li>
                        <li>Proposez des solutions d'assurance innovantes et adaptées aux besoins des étudiants et de leurs
                            familles.</li>
                        <li>Profitez de formations et d'un accompagnement pour maximiser vos ventes.</li>
                        <li>Des commissions attractives sur les contrats signés.</li>
                    </ul>
                </div>
                <div class="fs-lg pb-4 mb-4">
                    <h3 class="h4">Comment devenir partenaire ?</h3>
                    <p>Pour devenir partenaire, remplissez le formulaire ci-dessous avec vos informations et nous
                        reviendrons vers vous dans les plus brefs délais pour discuter des modalités de collaboration.</p>
                </div>
                <!-- Formulaire pour devenir partenaire -->
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
                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="company">Nom de l'entreprise</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Nom de votre entreprise"
                            required id="company">
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="message">Message</label>
                        <textarea class="form-control form-control-lg" rows="5" placeholder="Pourquoi souhaitez-vous devenir partenaire ?"
                            required id="message"></textarea>
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
