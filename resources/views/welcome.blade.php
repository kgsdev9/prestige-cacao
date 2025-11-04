@extends('layout.layout')

@section('content')
    <!-- Header End -->
    <br><br><br><br>
    <!-- Hero Section Start -->
    <div class="mt-5 mt-lg-0 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">

                            <h1 class="text-anime-style-2" data-cursor="-opaque">
                                Prestige Cacao
                                <span>l’élégance qui se savoure.</span>
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Notre prestige Chocolat est un vin effervescent, symbole d'audace et d'originalité. Nous
                                avons réussi à associer deux univers et deux savoirs faire, C'est un véritable voyage
                                gustatif
                                qui viendra vous surprendre. <br>
                                le vin français blanc de blanc et le cacao Ivoire.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Hero Button Start -->
                            <div class="hero-btn">
                                <a href="tel:+33761773364" class="btn-default btn-highlighted">Commander</a>
                            </div>
                            <!-- Hero Button End -->

                            <!-- Contact Now Box Start -->
                            <div class="contact-now-box">
                                <div class="icon-box">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="contact-now-box-content">
                                    <h3 class="text-dark">Contact</h3>
                                    <p><a href="tel:+33761773364" class="text-dark">+33761773364</a></p>
                                </div>
                            </div>
                            <!-- Contact Now Box End -->
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Hero Image Start -->
                    <div class="hero-image">
                        <figure>
                            <img src="{{ asset('champagne-1.png') }}" alt="">
                        </figure>
                    </div>
                    <!-- Hero Image End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section End -->



    <!-- Nos Produits Section Start -->
    <div class="our-products">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Nos produits</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            L'excellence de Prestige Cacao dans chaque <span>gorgée raffinée</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <!-- Product Item Start -->
                    <div class="product-item wow fadeInUp">
                        <a href="{{ route('produit.show', ['id' => 1]) }}">
                            <div class="product-image">
                                <figure>
                                    <img src="{{ asset('champagne-1.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="product-content">
                                <h3>Prix pratiqué pour les clients qui sont physiquement a nos différents événements. </h3>
                                <p>26 €</p>
                            </div>
                        </a>
                    </div>

                    <!-- Product Item End -->
                </div>


                <div class="col-lg-3 col-md-6">
                    <!-- Product Item Start -->
                    <a href="{{ route('produit.show', ['id' => 2]) }}" class="text-decoration-none text-dark">
                        <div class="product-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="product-image">
                                <figure>
                                    <img src="{{ asset('champgne-3.png') }}" alt="Prix de vente appliqué avec livraison inclus a votre domicile"
                                        class="img-fluid rounded">
                                </figure>
                            </div>
                            <div class="product-content text-center mt-2">
                                <h3 class="fw-semibold">Prix de vente appliqué avec livraison inclus a votre domicile</h3>
                                <p class="fs-5 text-success">34 €</p>
                            </div>
                        </div>
                    </a>
                    <!-- Product Item End -->
                </div>


                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                        <p>
                            <span>Offert :</span> Pour toute commande en ligne, la livraison est gratuite.
                            <a href="https://wa.me/33761773364" target="_blank">Contactez-nous</a>

                        </p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Nos Produits Section End -->



    <!-- Événements & Ambassadeurs Section Start -->
    <div class="premium-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Contenu Section Start -->
                    <div class="premium-products-content">
                        <!-- Titre Section Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Prestige Cacao</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Une marque validée par les <span>personnalités les plus influentes</span>
                            </h2>
                        </div>
                        <!-- Titre Section End -->

                        <!-- Corps Section Start -->
                        <div class="premium-products-body">
                            <div class="premium-products-body-content wow fadeInUp" data-wow-delay="0.2s">
                                <p>
                                    Prestige Cacao a brillé lors de nombreux événements d’exception en Côte d’Ivoire et
                                    à l’international.
                                    Des artistes, célébrités, chefs d’entreprise et influenceurs ont tous validé
                                    l’élégance de notre boisson.
                                </p>
                            </div>

                            <div class="premium-products-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>Présent dans les soirées de gala et cérémonies de prestige</li>
                                    <li>Approuvé par des ambassadeurs de renom</li>
                                    <li>Plébiscité par des figures publiques du showbiz et de la mode</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Corps Section End -->

                        <!-- Liste Visuels Start -->
                        <div class="premium-products-item-box">

                            <!-- Item 2 -->
                            <div class="premium-products-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="premium-products-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('ambassadeur-prestige-1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="premium-products-item-content">
                                    <h3><a href="#">Salon international de la gastronomie</a></h3>
                                </div>
                            </div>


                        </div>
                        <!-- Liste Visuels End -->
                    </div>
                    <!-- Contenu Section End -->
                </div>

                <div class="col-lg-5">
                    <!-- Vidéo Événement Start -->
                    <div class="products-intro-video">
                        <div>
                            <figure>
                                <iframe src="{{ asset('videoannonce.mp4') }}" width="100%" height="360" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen>
                                </iframe>
                            </figure>
                        </div>
                    </div>
                    <!-- Vidéo Événement End -->
                </div>


            </div>
        </div>
    </div>
    <!-- Événements & Ambassadeurs Section End -->

    <!-- Actualités Prestige Cacao Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Actualités</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Découvrez les dernières <span>nouvelles de Prestige Cacao</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <!-- Article 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <a href="#" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="{{ asset('prestige-chocoloat-champagne-boisson.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2>
                                    <a href="#">
                                        Salon de l’agriculture France
                                        Salon de l’agriculture Côte d’ivoire
                                    </a>
                                </h2>
                            </div>
                            <div class="post-item-footer">
                                <div class="post-meta">
                                    <ul>
                                        <li><i class="fa-solid fa-calendar-days"></i> 12 Juin 2025</li>
                                    </ul>
                                </div>
                                <div class="post-item-btn">
                                    <a href="#" class="readmore-btn">Lire la suite</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="post-featured-image">
                            <a href="#" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="{{ asset('blogimage2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2>
                                    <a href="#">
                                        Foire de paris
                                    </a>
                                </h2>
                            </div>
                            <div class="post-item-footer">
                                <div class="post-meta">
                                    <ul>
                                        <li><i class="fa-solid fa-calendar-days"></i> 27 Mai 2025</li>
                                    </ul>
                                </div>
                                <div class="post-item-btn">
                                    <a href="#" class="readmore-btn">Lire la suite</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="post-featured-image">
                            <a href="#" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="{{ asset('blog-image-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2>
                                    <a href="#">
                                        Fashion week-end Afrique
                                        Salon international de la gastronomie
                                        Foire d’Afrique
                                        Marchés de Noël
                                    </a>
                                </h2>
                            </div>
                            <div class="post-item-footer">
                                <div class="post-meta">
                                    <ul>
                                        <li><i class="fa-solid fa-calendar-days"></i> 8 Mai 2025</li>
                                    </ul>
                                </div>
                                <div class="post-item-btn">
                                    <a href="#" class="readmore-btn">Lire la suite</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Actualités Prestige Cacao End -->
@endsection
