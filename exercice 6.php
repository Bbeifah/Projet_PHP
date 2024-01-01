<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 : Diviseurs d'un Nombre</title>
</head>
<body>

    <header>
        <h1>Exercice 6 : Diviseurs d'un Nombre</h1>
        <p>Entrez un nombre pour afficher l'ensemble de ses diviseurs.</p>
    </header>

    <section>
        <h2>Code PHP :</h2>
        <pre>
            <code>
                <?php
                // Vérifiez si les valeurs sont soumises via le formulaire
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Récupérez le nombre saisi au clavier
                    $nombre = (int)$_POST['nombre'];

                    // Vérifiez si le nombre est valide
                    if ($nombre > 0) {
                        // Afficher les diviseurs du nombre
                        echo "Les diviseurs de $nombre sont : ";
                        for ($i = 1; $i <= $nombre; $i++) {
                            if ($nombre % $i == 0) {
                                echo "$i ";
                            }
                        }
                    } else {
                        echo "Veuillez entrer un nombre positif.";
                    }
                }
                ?>
            </code>
        </pre>
    </section>

    <section>
        <h2>Formulaire :</h2>
        <form method="post" action="">
            <label for="nombre">Nombre :</label>
            <input type="text" name="nombre" required>
            <br>
            <button type="submit">Afficher les Diviseurs</button>
        </form>
    </section>

    <section>
        <h2>Retour à la liste des exercices :</h2>
        <p><a href="index.php">Retour à la liste des exercices</a></p>
    </section>

</body>
</html>
