<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
    $title = "Accueil";
    ?>
      <link rel="stylesheet" href="assets/css/style.css">
    <?php include 'partials/head.php'; ?>
  </head>

  <body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/ProjetFlash/partials/header.php' ?>
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
              <a href="game.php" target="_blank">
                <img
                  src="/ProjetFlash/assets/images/5e3cba2fbfa61b5f20863c65578cd03e1ab0a523.jpg"
                  alt="Jeux 1"
                />
              </a>
            </figure>
            <p>Power of Memory</p>
          </div>

          <div>
            <figure>
              <img src="/ProjetFlash/assets/images/xbox.jpg" alt="Jeux 2" />
            </figure>
            <p>Jeux 2</p>
          </div>

          <div>
            <figure>
              <img src="/ProjetFlash/assets/images/xbox.jpg" alt="Jeux 3" />
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
        <img src="/ProjetFlash/assets/images/be61ec5cdee17a4986b5e984701816a4cc2b0ee0.jpg" />
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
            <img src="/ProjetFlash/assets/images/Didier.png" alt="Didier1" />
          </figure>
          <p>Member #1</p>
        </div>

        <div>
          <figure>
            <img src="/ProjetFlash/assets/images/Didier.png" alt="Didier2" />
          </figure>
          <p>Member #2</p>
        </div>

        <div>
          <figure>
            <img src="/ProjetFlash/assets/images/Didier.png" alt="Didier3" />
          </figure>
          <p>Member #3</p>
        </div>
      </div>
    </div>

    <div class="equipe45">
      <div>
        <figure>
          <img src="/ProjetFlash/assets/images/Didier.png" id="Didier4" />
        </figure>
        <p>Member #4</p>
      </div>

      <div>
        <figure>
          <img src="/ProjetFlash/assets/images/Didier.png" id="Didier5" />
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
