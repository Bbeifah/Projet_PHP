<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du PPCM</title>
</head>
<body>

    <header>
        <h1>Exercice 4 : Calcul du PPCM</h1>
        <p>Entrez deux entiers pour calculer leur PPCM.</p>
    </header>

    <section>
        <h2>Code PHP :</h2>
        <pre>
            <code>
                <?php
                // Fonction pour calculer le PGCD (Plus Grand Commun Diviseur)
                function pgcd($a, $b) {
                    while ($b != 0) {
                        $temp = $b;
                        $b = $a % $b;
                        $a = $temp;
                    }
                    return $a;
                }

                // Fonction pour calculer le PPCM (Plus Petit Commun Multiple)
                function ppcm($a, $b) {
                    return ($a * $b) / pgcd($a, $b);
                }

                // Vérifiez si les valeurs sont soumises via le formulaire
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Récupérez les entiers saisis au clavier
                    $entier1 = (int)$_POST['entier1'];
                    $entier2 = (int)$_POST['entier2'];

                    // Vérifiez si les entiers sont valides
                    if ($entier1 > 0 && $entier2 > 0) {
                        // Calcul du PPCM
                        $ppcm_resultat = ppcm($entier1, $entier2);

                        // Affichage du résultat
                        echo "Le PPCM de $entier1 et $entier2 est : $ppcm_resultat";
                    } else {
                        echo "Veuillez entrer des entiers positifs.";
                    }
                }
                ?>
            </code>
        </pre>
    </section>

    <section>
        <h2>Formulaire :</h2>
        <form method="post" action="">
            <label for="entier1">Entier 1 :</label>
            <input type="text" name="entier1" required>
            <br>
            <label for="entier2">Entier 2 :</label>
            <input type="text" name="entier2" required>
            <br>
            <button type="submit">Calculer PPCM</button>
        </form>
    </section>

    <section>
        <h2>Retour à la liste des exercices :</h2>
        <p><a href="index.php">Retour à la liste des exercices</a></p>
    </section>

</body>
</html>
