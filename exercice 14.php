<!-- index.php (Formulaire principal) -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14 : Agence Immobilière</title>
</head>
<body>

    <header>
        <h1>Exercice 14 : Agence Immobilière</h1>
        <p>Choisissez une action :</p>
    </header>

    <form action="traitement.php" method="post">
        <input type="submit" name="action" value="Vendre">
        <input type="submit" name="action" value="Acheter">
        <input type="submit" name="action" value="Louer">
    </form>


<?php
// Fin de index.php
?>

<!-- traitement.php (Fichier de Traitement) -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier quelle action a été choisie
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    // Redirection en fonction de l'action choisie
    switch ($action) {
        case 'Vendre':
            header('Location: vendre.php');
            break;
        case 'Acheter':
            header('Location: acheter.php');
            break;
        case 'Louer':
            header('Location: louer.php');
            break;
        default:
            // Redirection par défaut
            header('Location: index.php');
            break;
    }
} else {
    // Redirection par défaut si le formulaire n'a pas été soumis
    header('Location: index.php');
}
?>

<?php
// Fin de traitement.php
?>

<!-- vendre.php (Page spécialisée Vendre) -->
<?php
// Header commun
include('header.php');
?>

    <h1>Vendre</h1>
    <p>Contenu de la page Vendre...</p>

<?php
// Footer commun
include('footer.php');
?>

<?php
// Fin de vendre.php
?>

<!-- acheter.php (Page spécialisée Acheter) -->
<?php
// Header commun
include('header.php');
?>

    <h1>Acheter</h1>
    <p>Contenu de la page Acheter...</p>

<?php
// Footer commun
include('footer.php');
?>

<?php
// Fin de acheter.php
?>

<!-- louer.php (Page spécialisée Louer) -->
<?php
// Header commun
include('header.php');
?>

    <h1>Louer</h1>
    <p>Contenu de la page Louer...</p>

<?php
// Footer commun
include('footer.php');
?>

<?php
// Fin de louer.php
?>

<!-- header.php (Header commun) -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
</head>
<body>

<?php
// Fin de header.php
?>

<!-- footer.php (Footer commun) -->
</body>
</html>

<?php
// Fin de footer.php
?>

</body>
</html>