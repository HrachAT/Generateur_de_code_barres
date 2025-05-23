<?php
$code = $_POST['code'] ?? '';

if (!$code) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Code-barres généré</title>
    </head>
    <body>
        <h1>Code-barres pour : <?= htmlspecialchars($code) ?></h1>

        <!-- Affiche le SVG directement dans la page -->
        <img src="barcode.php?code=<?= urlencode($code) ?>" alt="Code-barres en SVG" />



        <!-- Bouton de téléchargement -->
        <a href="barcode-download.php?code=<?= urlencode($code) ?>">
            <button>Télécharger en SVG</button>
        </a><br><br>

        <a href="index.php">⟵ Retour</a>
    </body>
</html>
