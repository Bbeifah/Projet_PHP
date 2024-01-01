<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 : Boucles</title>
</head>
<body>

    <header>
        <h1>Exercice 2 : Boucles</h1>
        <p>Énonce de l'exercice et instructions ici...</p>
    </header>

    <section>
        <h2>Code PHP :</h2>
        <pre>
            <code>
                <?php
                
                // Supposons que $nombre est le nombre que vous souhaitez tester
                $nombre = 15; 

                if ($nombre % 3 == 0 && $nombre % 5 == 0) {
                    echo "Le nombre $nombre est un multiple de 3 et de 5.";
                    // Code à exécuter si la condition est vraie
                } else {
                    echo "Le nombre $nombre n'est pas un multiple de 3 et de 5.";
                    // Code à exécuter si la condition est fausse
                }
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
