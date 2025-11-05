<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <!-- Conteneur global -->
    <div class="all">


        <!-- Bloc login -->
        <div class="container">
            <header>
                <h1 id="titre_main">Heureux de vous revoir🖐️</h1>
                <p id="titre_second">
                    Connectez-vous afin de pouvoir battre de nouveaux records !
                </p>
            </header>

            <form id="auth-form" action="login.php" method="get">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="exemple@gmail.com" required
                        autocomplete="email">
                </div>

                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input id="mdp" name="motdepasse" type="password" placeholder="8 caractères minimum" required
                        autocomplete="current-password">
                </div>

                <a href="login.php" id="mdpzap">Mot de passe oublié ?</a>

                <button type="submit" class="btn-connexion">Connexion</button>

                <p id="ou">ou</p>

                <button id="co-google">
                    <img id="google" src="/ProjetFlash/assets/images/google.png" alt="Google">
                    Se connecter à Google
                </button>

                <p id="create2">
                    Pas de compte ? <a href="register.php" id="create">Je m'inscris</a>
                </p>
            </form>
        </div>

        <!-- Bloc image -->
        <div class="chatgpt">
            <img id="chat" src="/ProjetFlash/assets/images/e77e3023-2610-44e4-8a36-dc4f92b357b4.png" alt="Logo ChatGPT">
        </div>


    </div>
</body>

</html>