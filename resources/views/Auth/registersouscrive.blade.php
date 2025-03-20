<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">

@include('layout.head')

<main class="page-wrapper">
    <div class="d-flex flex-column align-items-center position-relative h-100 px-3 pt-5">

        <!-- Home button -->
        <a class="text-nav btn btn-icon bg-light border rounded-circle position-absolute top-0 end-0 p-0 mt-3 me-3 mt-sm-4 me-sm-4"
            href="/" data-bs-toggle="tooltip" data-bs-placement="left" title="Retourner à la page d'accueil"
            aria-label="Retourner à la page d'accueil">
            <i class="ai-home"></i>
        </a>

        <!-- Content -->
        <div class="mt-auto" style="max-width: 700px;">
            <h1 class="pt-3 pb-2 pb-lg-3">Assurance Scolaire - Moyo</h1>
            <p class="pb-2">Complétez ces étapes pour finaliser votre inscription à l'assurance scolaire.</p>

            <!-- Multi-step form -->
            <form id="multiStepForm" method="POST" enctype="multipart/form-data">

                <!-- Step 1 -->
                <div id="step1">
                    <h3 class="pb-3">Étape 1 : Informations personnelles</h3>
                    <div class="mb-4">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="mb-4">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-4">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" required>
                    </div>
                    <button type="button" class="btn btn-primary" id="nextStep1">Suivant</button>
                </div>

                <!-- Step 2 -->
                <div id="step2" style="display: none;">
                    <h3 class="pb-3">Étape 2 : Téléchargement des photos</h3>
                    <div class="mb-4">
                        <label for="piece_identite" class="form-label">Photo de la pièce d'identité</label>
                        <input type="file" class="form-control" id="piece_identite" name="piece_identite"
                            accept="image/*" required>
                    </div>
                    <div class="mb-4">
                        <label for="photo" class="form-label">Photo personnelle</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*"
                            required>
                    </div>
                    <button type="submit" class="btn btn-success">Soumettre</button>
                </div>

            </form>
        </div>

        <!-- Copyright -->
        <p class="nav w-100 fs-sm pt-5 mt-auto mb-5" style="max-width: 700px;">
            <span class="text-body-secondary">&copy; Tous droits réservés. Fait par</span>
            <a class="nav-link d-inline-block p-0 ms-1" href="https://myoo.com" target="_blank" rel="noopener">Myoo
                Assurance</a>
        </p>
    </div>
</main>

@include('layout.script')

<script>
    // Script pour passer à l'étape suivante
    document.getElementById('nextStep1').addEventListener('click', function() {
        // Vérification des champs
        if (document.getElementById('nom').value && document.getElementById('prenom').value && document
            .getElementById('email').value && document.getElementById('telephone').value) {
            // Cacher l'étape 1 et afficher l'étape 2
            document.getElementById('step1').style.display = 'none';
            document.getElementById('step2').style.display = 'block';
        } else {
            alert("Veuillez remplir tous les champs.");
        }
    });
</script>

</html>
