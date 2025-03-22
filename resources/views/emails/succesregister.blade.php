<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur Moyo Assurances</title>
</head>

<body>
    <h1>Bonjour {{ $client->nom }} {{ $client->prenom }} !</h1>

    <p>Votre inscription a été réalisée avec succès.</p>

    <p>Voici vos informations de membre :</p>

    <ul>
        <li><strong>Nom complet</strong> : {{ $client->nom }} {{ $client->prenom }}</li>
        <li><strong>Code d'affiliation</strong> : {{ $client->code_affiliation }}</li>
        <li><strong>Adresse</strong> : {{ $client->adresse }}</li>
        <li><strong>Téléphone</strong> : {{ $client->telephone }}</li>
    </ul>

    <p>Nous sommes ravis de vous accueillir parmi nous.</p>

    <p>Chez Moyo Assurances, nous mettons à votre disposition des services adaptés à vos besoins.</p>

    <p>Merci de nous avoir choisis. Nous sommes impatients de vous accompagner dans toutes vos démarches d'assurance.
    </p>

    <p>Cordialement,</p>
    <p>L'équipe de Moyo Assurances</p>
</body>

</html>
