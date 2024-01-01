<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 : Boucle foreach</title>
</head>
<body>

    <header>
        <h1>Exercice 10 : Boucle foreach</h1>
        <p>Lecture des tableaux des exercices 8 et 9 avec une boucle foreach.</p>
    </header>

    <section>
        <h2>Code PHP :</h2>
        <pre>
            <code>
                <?php
                // Exercice 8 : Tableau associatif
                $personnesExercice8 = array(
                    'Alice' => array('prenom' => 'Alice', 'ville' => 'Paris', 'age' => 25),
                    'Bob' => array('prenom' => 'Bob', 'ville' => 'Lyon', 'age' => 30),
                    'Charlie' => array('prenom' => 'Charlie', 'ville' => 'Marseille', 'age' => 22),
                );

                // Exercice 9 : Tableau multidimensionnel associatif
                $personnesExercice9 = array(
                    'Alice' => array('prenom' => 'Alice', 'ville' => 'Paris', 'age' => 25),
                    'Bob' => array('prenom' => 'Bob', 'ville' => 'Lyon', 'age' => 30),
                    'Charlie' => array('prenom' => 'Charlie', 'ville' => 'Marseille', 'age' => 22),
                    'David' => array('prenom' => 'David', 'ville' => 'Toulouse', 'age' => 28),
                    'Eva' => array('prenom' => 'Eva', 'ville' => 'Bordeaux', 'age' => 35),
                );

                // Utilisation de foreach pour parcourir les tableaux
                echo "<h3>Exercice 8 : Tableau associatif</h3>";
                foreach ($personnesExercice8 as $nom => $infos) {
                    echo "Nom: $nom, Prénom: {$infos['prenom']}, Ville: {$infos['ville']}, Âge: {$infos['age']}<br>";
                }

                echo "<h3>Exercice 9 : Tableau multidimensionnel associatif</h3>";
                foreach ($personnesExercice9 as $nom => $infos) {
                    echo "Nom: $nom, Prénom: {$infos['prenom']}, Ville: {$infos['ville']}, Âge: {$infos['age']}<br>";
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
