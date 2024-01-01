<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 : Tableau Associatif</title>
</head>
<body>

    <header>
        <h1>Exercice 8 : Tableau Associatif</h1>
        <p>Tableau multidimensionnel associatif avec les informations sur différentes personnes.</p>
    </header>

    <section>
        <h2>Code PHP :</h2>
        <pre>
            <code>
                <?php
                // Tableau multidimensionnel associatif
                $personnes = array(
                    'Alice' => array(
                        'prenom' => 'Alice',
                        'ville' => 'Paris',
                        'age' => 25
                    ),
                    'Bob' => array(
                        'prenom' => 'Bob',
                        'ville' => 'Lyon',
                        'age' => 30
                    ),
                    'Charlie' => array(
                        'prenom' => 'Charlie',
                        'ville' => 'Marseille',
                        'age' => 22
                    ),
                    // Ajoutez d'autres personnes selon le même format
                );

                // Affichage du tableau
                echo '<pre>';
                print_r($personnes);
                echo '</pre>';
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
