<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace etudiant</title>
    <?php include "navbar.php" ?>
</head>

<body>
    <h1>Créer votre compte étudiant</h1>
    <form class="form" action="../backend/traitement.php" method="post">
        <label for="cne">Votre CNE:</label>
        <input type="number" id="cne" name="id" placeholder="votre CNE/Numéro de passeport " required>
        <input type="text" id="name" name="nom" placeholder="votre nom" required>
        <label for="prenom">Votre prénom:</label>
        <input type="text" id="prenom" name="prenom">
        <label for="date_nais">Date de naissance:</label>
        <input type="date" id="date_nais" name="date_nais">
        <label for="anne_insc" anme="anne_insc">Année d'inscription:</label>
        <input type="number" id="" name="anne_insc">
        <label for="sexe">Sexe :</label>
        <select id="sexe" name="sexe">
            <option value=""></option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>
        <button type="submit">Envoyer</button>

    </form>

    <?php include "footer.php" ?>
</body>

</html>