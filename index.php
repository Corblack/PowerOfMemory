<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Accueil</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <header>
        <div class="header-container">
            <p><img src="assets/images/logo.png" alt="logo"></p>
            <nav class="menu">
                <a href="index.html">Accueil</a>
                <a href="scores.html">Scores</a>
                <a href="account.html" id="moncompte">Profil</a>
                <a href="contact.html" id="contact">Nous contacter</a>
            </nav>
        </div>
    </header>
    <div id="main">
      <!-- Page de bienvenu sur le site -->

      <div class="bloc-bienvenu">
        <div class="texte">
          <h1>Accueil</h1>
          <h2>Bienvenue sur notre site de jeux en ligne !</h2>
          <p>
            Ici, vous pouvez découvrir des mini-jeux amusants, défier vos amis
            et suivre vos performances grâce à notre système de scores. Notre
            objectif est de proposer une expérience divertissante et accessible
            à tous, que vous soyez joueur occasionnel ou passionné de défis.
          </p>
          <button id="Commencer">Commencer</button>
        </div>
      </div>
      <br /><br />

      <!--Liste de jeux disponible sur le site-->
      <div class="liste-jeux">
        <h2>Nos jeux</h2>
        <div class="tableau">
          <div>
            <figure>
              <a href="game.html" target="_blank">
                <img
                  src="assets/images/5e3cba2fbfa61b5f20863c65578cd03e1ab0a523.jpg"
                  alt="Jeux 1"
                />
              </a>
            </figure>
            <p>Power of Memory</p>
          </div>

          <div>
            <figure>
              <img src="assets/images/xbox.jpg" alt="Jeux 2" />
            </figure>
            <p>Jeux 2</p>
          </div>

          <div>
            <figure>
              <img src="assets/images/xbox.jpg" alt="Jeux 3" />
            </figure>
            <p>Jeux 3</p>
          </div>
        </div>
      </div>

      <!-- texte + banniere-->
      <div class="bloc-banniere">
        <div class="texte">
          <h1>Un univers ludique et varié</h1>
        </div>
        <div id="paragraphe">
          <p1>
            Découvrez une sélection de jeux conçus pour tester vos réflexes,
            stimuler votre mémoire et partager des moments de détente. Chaque
            partie est une nouvelle opportunité de progresser et de vous
            amuser.
          </p1>
        </div>
      </div>
      <div class="banniere">
        <img src="assets/images/be61ec5cdee17a4986b5e984701816a4cc2b0ee0.jpg" />
      </div>
      <br /><br />

      <!-- Stats du jeu -->
      <div class="bloc-stat">
        <div class="texte">
          <h1>Quelques chiffres clés</h1>
          <p>Notre communauté ne cesse de grandir chaque jour.</p>
          <p>Rejoignez-nous et essayez de battre les meilleurs records !</p>
        </div>

        <div class="stats-container">
          <div class="card bleu">
            <h2>310</h2>
            <p>Parties Jouées</p>
          </div>

          <div class="card blanc">
            <h2>1020</h2>
            <p>Joueurs Connectés</p>
          </div>

          <div class="card jaune">
            <h2>10s</h2>
            <p>Temps Records</p>
          </div>

          <div class="card rouge">
            <h2>9300</h2>
            <p>Joueurs Inscrits</p>
          </div>

          <div class="card orange">
            <h2>2</h2>
            <p>Records battus aujourd'hui</p>
          </div>
        </div>
      </div>

      <!--Presentation equipe-->
      <div class="block">
        <h2>Présentation de l'équipe</h2>

        <p>
          Nous sommes une petite équipe de passionnés de jeux vidéo et de
          développement web. Notre mission est de proposer des expériences
          simples mais addictives, accessibles à tous et mises à jour
          régulièrement grâce à vos retours.
        </p>
      </div>

      <div class="equipe123">
        <div>
          <figure>
            <img src="assets/images/Didier.png" alt="Didier1" />
          </figure>
          <p>Member #1</p>
        </div>

        <div>
          <figure>
            <img src="assets/images/Didier.png" alt="Didier2" />
          </figure>
          <p>Member #2</p>
        </div>

        <div>
          <figure>
            <img src="assets/images/Didier.png" alt="Didier3" />
          </figure>
          <p>Member #3</p>
        </div>
      </div>
    </div>

    <div class="equipe45">
      <div>
        <figure>
          <img src="assets/images/Didier.png" id="Didier4" />
        </figure>
        <p>Member #4</p>
      </div>

      <div>
        <figure>
          <img src="assets/images/Didier.png" id="Didier5" />
        </figure>
        <p>Member #5</p>
      </div>
    </div>

    <!-- Informer -->
    <div class="white">
      <div class="texte">
        <h1>Restez informé</h1>
        <p>
          Abonnez-vous à notre newsletter pour ne rien manquer des nouveautés,
          des mises à jour et des prochains jeux disponibles sur notre site.
        </p>
      </div>

      <form class="email-form" action="#">
        <input type="email" name="" id="email" placeholder="Adresse email" />
        <button id="valider">Valider</button>
      </form>
    </div>
    <button class="open-button" onclick="openForm()">Chat</button>

    <div class="chat-popup" id="myForm">
      <form action="#" class="form-container">
        <h1>Chat</h1>

        <label for="msg"><b>Message</b></label>
        <textarea placeholder="Type message.." name="msg" required></textarea>

        <button type="submit" class="btn">Send</button>
        <button type="button" class="btn cancel" onclick="closeForm()">
          Close
        </button>
      </form>
    </div>

    <footer>
        <div class="footer-top">
            <div class="footer1">
                <p> <img src="assets/images/logo.png" alt="logo" id="logo"></p>
                <p>Notre équipe est à votre écoute pour toute question<br> ou suggestion. Nous mettons tout en œuvre pour<br> vous aider rapidement.</p>
            </div>
            <div class="footer2">
                <h4>menu</h4>
                <a href="index.html">Accueil</a>
                <a href="scores.html">Scores</a>
                <a href="contact.html">contact</a>
            </div>
            <div class="footer3">
                <h4>Contactez-nous</h4>
                <p>+33 6 01 02 03 04</p>
                <p>23 rue de Paris<br>75002 Paris</p>
                <p>contact@web.com</p>
            </div>
            <p><img src="assets/images/Group 12.png" alt="reseaux" id="reseaux"></p>
        </div>
        <hr>
        <div class="footer-bottom">
            <p>© 2025 The Power of Memory. All rights reserved.</p>
        </div>
    </footer>

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
