<!DOCTYPE html>

<html lang="fr">
<head>
  <title>Inscription</title>
  <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
  <!-- Conteneur global -->
  <div class="all">


<!-- Bloc login -->
<div class="container">
  <header>
    <h1 id="titre_main">Bienvenue chez nous🖐️</h1>
    <p id="titre_second">
      Inscrivez-vous pour de nouveaux records!
    </p>
  </header>

  <form id="auth-form" action="login.php" method="get">
    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" name="email" type="email" placeholder="exemple@gmail.com" required autocomplete="email">
    </div>

   <div class="form-group">
  <label for="mdp">Mot de passe</label>
  <input id="mdp" name="motdepasse" type="password" placeholder="8 caractères minimum" required autocomplete="current-password">
</div>

<div class="form-group">
  <label for="confirmer">Confirmer le mot de passe</label>
  <input id="confirmer" name="confirmation" type="password" placeholder="8 caractères minimum" required autocomplete="current-password">
</div>


    <button type="submit" class="btn-connexion">inscription</button>

    <p id="ou">ou</p>

    <button id="co-google">
      <img id="google" src="/ProjetFlash/assets/images/google.png" alt="Google">
      M'inscrire avec Google
    </button>

    <p id="create2">
     Déjà un compte ? <a href="login.php" id="create">Je me connecte</a>
    </p>
  </form>
</div>

<!-- Bloc image -->
<div class="chatgpt">
  <img id="chat" src="/ProjetFlash/assets/images/chatgpt.png" alt="Logo ChatGPT">
</div>


  </div>
</body>
</html>