<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Cercle</title>
</head>
<body>

    <header>
        <h1>Exercice 5 : Calcul du Cercle</h1>
        <p>Entrez le rayon d'un cercle pour calculer son diamètre, son périmètre et sa surface.</p>
    </header>

    <section>
        <h2>Code PHP :</h2>
        <pre>
            <code>
                <?php
                // Vérifiez si les valeurs sont soumises via le formulaire
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Récupérez le rayon saisi au clavier
                    $rayon = (float)$_POST['rayon'];

                    // Vérifiez si le rayon est valide
                    if ($rayon > 0) {
                        // Calculs
                        $diametre = 2 * $rayon;
                        $perimetre = 2 * M_PI * $rayon;
                        $surface = M_PI * pow($rayon, 2);

                        // Affichage des résultats
                        echo "Diamètre du cercle : $diametre<br>";
                        echo "Périmètre du cercle : $perimetre<br>";
                        echo "Surface du cercle : $surface";
                    } else {
                        echo "Veuillez entrer un rayon positif.";
                    }
                }
                ?>
            </code>
        </pre>
    </section>

    <section>
        <h2>Formulaire :</h2>
        <form method="post" action="">
            <label for="rayon">Rayon du cercle :</label>
            <input type="text" name="rayon" required>
            <br>
            <button type="submit">Calculer</button>
        </form>
    </section>

    <section>
        <h2>Retour à la liste des exercices :</h2>
        <p><a href="index.php">Retour à la liste des exercices</a></p>
    </section>

</body>
</html>
