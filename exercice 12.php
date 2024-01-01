<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12 : Formulaire Adresse Client</title>
</head>
<body>

    <header>
        <h1>Exercice 12 : Formulaire Adresse Client</h1>
        <p>Saisissez les informations client :</p>
    </header>

    <form action="traitement.php" method="post">
        <fieldset>
            <legend>Adresse client</legend>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required><br>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required><br>

            <label for="code_postal">Code Postal :</label>
            <input type="text" id="code_postal" name="code_postal" required><br>

            <input type="submit" value="Envoyer">
        </fieldset>
    </form>

</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement du Formulaire</title>
</head>
<body>

    <header>
        <h1>Traitement du Formulaire</h1>
        <p>Informations client :</p>
    </header>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
        </tr>
        <tr>
            <td><?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?></td>
            <td><?php echo isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : ''; ?></td>
            <td><?php echo isset($_POST['adresse']) ? htmlspecialchars($_POST['adresse']) : ''; ?></td>
            <td><?php echo isset($_POST['ville']) ? htmlspecialchars($_POST['ville']) : ''; ?></td>
            <td><?php echo isset($_POST['code_postal']) ? htmlspecialchars($_POST['code_postal']) : ''; ?></td>
        </tr>
    </table>

</body>
</html>
