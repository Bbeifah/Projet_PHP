<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15 : Transformation de chaînes</title>
</head>
<body>

    <header>
        <h1>Exercice 15 : Transformation de chaînes</h1>
        <p>Écrivez une fonction qui transforme chaque élément d'un tableau de chaînes de caractères de manière que le premier caractère soit en majuscule et les autres en minuscules, quelle que soit la casse initiale des éléments, même si elle est mixte.</p>
    </header>

    <?php

    function transformerMajusculePremierCaractere(array &$tableauChaines)
    {
        foreach ($tableauChaines as &$chaine) {
            // Mettre le premier caractère en majuscule et le reste en minuscules
            $chaine = ucfirst(strtolower($chaine));
        }
    }

    // Exemple d'utilisation de la fonction
    $tableau = ["Exemple", "miXteD", "CaSeS"];
    transformerMajusculePremierCaractere($tableau);

    // Affichage du résultat
    echo "<p>Résultat : " . implode(", ", $tableau) . "</p>";

    ?>

    <section>
        <h2>Retour à la liste des exercices :</h2>
        <p><a href="index.php">Retour à la liste des exercices</a></p>
    </section>

</body>
</html>
