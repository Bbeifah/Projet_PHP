<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 : Boucles While</title>
</head>
<body>

    <header>
        <h1>Exercice 3 : Boucles While</h1>
        <p>Choisissez un nombre de trois chiffres et effectuez des tirages aléatoires.</p>
    </header>

    <section>
        <h2>Code PHP :</h2>
        <pre>
            <code>
                <?php
                // Choisissez un nombre de trois chiffres au hasard
                $nombreInitial = rand(100, 999);

                // Initialisez le compteur de coups
                $nombreDeCoups = 0;

                // Effectuez des tirages aléatoires jusqu'à ce que le nombre initial soit obtenu
                while (($tirage = rand(100, 999)) != $nombreInitial) {
                    $nombreDeCoups++;
                }

                // Affichez le nombre de coups réalisés
                echo "Nombre initial : $nombreInitial<br>";
                echo "Nombre de coups réalisés : $nombreDeCoups";
                ?>
            </code>
        </pre>
    </section>

</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 : Boucles For</title>
</head>
<body>

    <header>
        <h1>Exercice 3 : Boucles For</h1>
        <p>Choisissez un nombre de trois chiffres et effectuez des tirages aléatoires.</p>
    </header>

    <section>
        <h2>Code PHP :</h2>
        <pre>
            <code>
                <?php
                // Choisissez un nombre de trois chiffres au hasard
                $nombreInitial = rand(100, 999);

                // Initialisez le compteur de coups
                $nombreDeCoups = 0;

                // Effectuez des tirages aléatoires jusqu'à ce que le nombre initial soit obtenu
                for ($tirage = rand(100, 999); $tirage != $nombreInitial; $tirage = rand(100, 999)) {
                    $nombreDeCoups++;
                }

                // Affichez le nombre de coups réalisés
                echo "Nombre initial : $nombreInitial<br>";
                echo "Nombre de coups réalisés : $nombreDeCoups";
                ?>
            </code>
        </pre>
    </section>

    <section>
        <h2>Retour à la liste des exercices :</h2>
        <p><a href="index.php">Retour à la liste des exercices</a></p>
    </section>
    
</body>
</html>
