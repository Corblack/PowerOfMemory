<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    $title = "The Power Of Memory";
    ?>
    <link rel="stylesheet" href="assets/css/game.css">
    <?php include 'partials/head.php'; ?>
  </head>
  <body>
    <?php include 'partials/header.php'; ?>
    <!-- Titre du Jeu -->

    <div class="blocmemory">
      <div class="texte"></div>
      <h1>The Power Of Memory</h1>
      <p>
        The Power of Memory est un jeu de réflexion où vous devez retrouver des
        paires de cartes identiques le plus rapidement possible. Testez votre
        mémoire, améliorez votre concentration et défiez vos amis pour obtenir
        le meilleur score. Chaque partie est unique grâce aux différents thèmes
        et tailles de grilles disponibles.
      </p>
    </div>

    <!-- menus deroulant et bouton de generation -->

    <div class="rouleau">
      <select name="Taille du format" id="menu1">
        <option value="">Taille de la grille</option>
        <option value="option1">4x4</option>
        <option value="option2">6x6</option>
        <option value="option3">10x10</option>
      </select>

      <select name="Theme" id="menu2">
        <option value="">Theme</option>
        <option value="option1">Jeux Videos</option>
        <option value="option2">X</option>
        <option value="option3">Y</option>
      </select>

      <button id="generer">Générer une grille</button>
    </div>

    <!-- FORMAT 4X4 -->
    <div class="grille">
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 1" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 2" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 3" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 4" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 5" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 6" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 7" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 8" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 9" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 10" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 11" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 12" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 13" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 14" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 15" />
      <img src="/ProjetFlash/assets/images/memory card.jpg" alt="image 16" />
    </div>

    <!-- paragraphe -->
    <div class="bloc-banniere">
      <div id="paragraphe">
        <h1>Un défi accessible à tous</h1>
      </div>
      <div id="paragraphe">
        <p1>
          Que vous soyez joueur occasionnel ou passionné de jeux de mémoire,
          ce mode vous permet de progresser à votre rythme. Les grilles plus
          petites sont idéales pour débuter, tandis que les formats plus grands
          offrent un véritable challenge. Choisissez votre thème favori et
          lancez-vous dans l’aventure du Power of Memory !
        </p1>
      </div>
    </div>
    <div>
      <button id="Jouer">Jouer</button>
    </div>

    <div>
      <img src="/ProjetFlash/assets/images/xbox.jpg" id="xbox" />
    </div>
    <h2></h2>
    <p></p>
    <p>
      
    </p>

    <button class="open-button" onclick="openForm()">Chat</button>

    <div class="chat-popup" id="myForm">
      <form action="#" class="form-container">
        <h1>Chat</h1>

        <label for="msg"><b>Power of memory</b></label>
        <textarea placeholder="Est en train d'écrire..." name="msg" required></textarea>

        <button type="submit" class="btn">Envoyer</button>
        <button type="button" class="btn cancel" onclick="closeForm()">
          Close
        </button>
      </form>
    </div>

    <?php include 'partials/footer.php'; ?>

    <script>
      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>
  </body>
</html>
