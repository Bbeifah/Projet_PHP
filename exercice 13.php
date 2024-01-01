<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13 : Calcul TVA</title>
</head>
<body>

    <header>
        <h1>Exercice 13 : Calcul TVA</h1>
        <p>Saisissez le prix HT et le taux de TVA :</p>
    </header>

    <form action="traitement.php" method="post">
        <label for="prix_ht">Prix HT :</label>
        <input type="text" id="prix_ht" name="prix_ht" value="<?php echo isset($_POST['prix_ht']) ? htmlspecialchars($_POST['prix_ht']) : ''; ?>" required><br>

        <label for="taux_tva">Taux de TVA :</label>
        <input type="text" id="taux_tva" name="taux_tva" value="<?php echo isset($_POST['taux_tva']) ? htmlspecialchars($_POST['taux_tva']) : ''; ?>" required><br>

        <input type="submit" value="Calculer">
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
        <p>Résultats du calcul :</p>
    </header>

    <?php
    // Vérifier si les données ont été soumises
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les données du formulaire
        $prixHT = isset($_POST['prix_ht']) ? floatval($_POST['prix_ht']) : 0;
        $tauxTVA = isset($_POST['taux_tva']) ? floatval($_POST['taux_tva']) : 0;

        // Calculer la TVA et le prix TTC
        $tva = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $tva;
    ?>
    <table border="1">
        <tr>
            <th>Prix HT</th>
            <td><?php echo $prixHT; ?> €</td>
        </tr>
        <tr>
            <th>Taux de TVA</th>
            <td><?php echo $tauxTVA; ?> %</td>
        </tr>
        <tr>
            <th>Montant TVA</th>
            <td><?php echo $tva; ?> €</td>
        </tr>
        <tr>
            <th>Prix TTC</th>
            <td><?php echo $prixTTC; ?> €</td>
        </tr>
    </table>
    <?php
    }
    ?>

</body>
</html>
