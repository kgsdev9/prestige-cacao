@extends('layout.layout')

@section('content')
    <main>
        <section class="position-relative pt-2 pt-sm-0 pt-md-2 pt-lg-3 pt-xl-4 pb-lg-4 mt-5"> <!-- Ajout de mt-5 ici -->
            <div class="container pb-2">
                <h2 class="h1 text-center">Rejoignez Moyo Assurance CI</h2>
                <p class="fs-lg text-center pb-4 pb-lg-5 mb-2 mb-sm-3 mb-xl-4">Moyo Assurance, leader de l'assurance scolaire
                    en Côte d'Ivoire, recrute !</p>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">

                    <!-- Offre 1 -->
                    <div class="col">
                        <div class="card border-0 bg-secondary p-3">
                            <h3 class="h4 text-center">Commercial Terrain</h3>
                            <p class="text-center">Nous recherchons des commerciaux dynamiques pour promouvoir nos offres
                                auprès des particuliers et des entreprises.</p>
                            <ul>
                                <li>Prospection et démarchage terrain</li>
                                <li>Présentation des offres Moyo Assurance</li>
                                <li>Développement d'un portefeuille client</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Offre 2 -->
                    <div class="col">
                        <div class="card border-0 bg-secondary p-3">
                            <h3 class="h4 text-center">Commercial Entreprise</h3>
                            <p class="text-center">Votre mission sera de négocier avec les entreprises pour proposer nos
                                solutions d’assurance à leurs employés.</p>
                            <ul>
                                <li>Prise de rendez-vous avec les responsables RH</li>
                                <li>Présentation des avantages des assurances collectives</li>
                                <li>Suivi et fidélisation des clients professionnels</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Offre 3 -->
                    <div class="col">
                        <div class="card border-0 bg-secondary p-3">
                            <h3 class="h4 text-center">Chargé de Relation Client</h3>
                            <p class="text-center">Assurez le suivi des clients et garantissez leur satisfaction en
                                répondant à leurs besoins.</p>
                            <ul>
                                <li>Gestion des réclamations</li>
                                <li>Accompagnement des assurés</li>
                                <li>Propositions d’amélioration des services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
