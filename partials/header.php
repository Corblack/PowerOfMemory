<header>
    <div class="header-container">
        <p><img src="/ProjetFlash/assets/images/logo.png" alt="logo"></p>
        <nav class="menu">
            <a href="/ProjetFlash/index.php">Accueil</a>
            <a href="/ProjetFlash/games/scores.php">Scores</a>

            <?php
            //On vérifie SI la session 'username' EXISTE
            if (isset($_SESSION['username'])):
            ?>

                <a href="/ProjetFlash/account.php" id="moncompte"><?php echo $_SESSION['username']; ?></a>

            <?php
            // SINON (l'utilisateur n'est pas connecté)
            else:
            ?>

                <a href="/ProjetFlash/account.php" id="moncompte">Profil</a>

            <?php
            // On ferme la condition
            endif;
            ?>
            
            <a href="/ProjetFlash/contact.php" id="contact">Nous contacter</a>
        </nav>
    </div>
</header>