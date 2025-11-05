
<?php
// Inclut le fichier contenant la fonction pour récupérer le GIF
require_once 'utils/api.php';

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace de Discussion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Espace de Discussion</h1>

    <!-- Affiche le GIF de chat aléatoire -->
    <div class="cat-gif-container">
        <img src="<?php echo htmlspecialchars($catGifUrl); ?>" alt="GIF de chat aléatoire">
    </div>

    <!-- Contenu de la page de discussion -->
    <div class="chat-container">
        <!-- Messages de discussion ici -->
    </div>
</body>
</html>

?>
