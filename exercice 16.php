<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16 : Fonction Sinus</title>
</head>
<body>

    <header>
        <h1>Exercice 16 : Fonction Sinus</h1>
        <p>Écrivez une fonction qui donne le sinus d’un angle donné en radian, en degré ou en grade. Les paramètres sont la mesure de l’angle, et l’unité est symbolisée par une lettre.</p>
    </header>

    <?php

    function sinusAngle($angle, $unite)
    {
        switch ($unite) {
            case 'radian':
                return sin($angle);
            case 'degre':
                return sin(deg2rad($angle));
            case 'grade':
                return sin(deg2rad($angle * 9 / 10)); // 1 grade = 9/10 degré
            default:
                return null; // Unité non reconnue
        }
    }

    // Exemple d'utilisation de la fonction
    $angleRadian = 1.5; // Exemple d'angle en radian
    $angleDegre = 90;   // Exemple d'angle en degré
    $angleGrade = 100;  // Exemple d'angle en grade

    $sinusRadian = sinusAngle($angleRadian, 'radian');
    $sinusDegre = sinusAngle($angleDegre, 'degre');
    $sinusGrade = sinusAngle($angleGrade, 'grade');

    // Affichage des résultats
    echo "<p>Sinus de $angleRadian radian : $sinusRadian</p>";
    echo "<p>Sinus de $angleDegre degré : $sinusDegre</p>";
    echo "<p>Sinus de $angleGrade grade : $sinusGrade</p>";

    ?>

    <section>
        <h2>Retour à la liste des exercices :</h2>
        <p><a href="index.php">Retour à la liste des exercices</a></p>
    </section>

</body>
</html>
