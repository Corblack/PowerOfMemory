<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Contact</title>
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

    <div class="titre">
        <h3>Contactez notre équipe pour toute question ou suggestion</h3>
        <p>Nous sommes disponibles pour répondre à vos demandes et vous offrir l’aide nécessaire</p>
    </div>

    <p>
        <img src="assets/images/Map.png" alt="map" id="map">
    </p>

    <div class="infos">
        <section>
            <p>Suivez-nous</p>
            <p><img src="assets/images/Group 12.png" alt="reseaux"></p>
        </section>
        <hr>
        <section class="infos-idk">
            <p> <img src="assets/images/phone 1.png" alt="tel"></p>
            <p> +33 6 01 02 03 04</p>
        </section>
        <hr>
        <section class="infos-idk">
            <p> <img src="assets/images/gps 1.png" alt="gps"></p>
            <p>23 rue de Paris<br>75002 Paris</p>
        </section>

    </div>

    <div class="formulaire">
        <h2>
            Contactez-nous !
        </h2>
        <p>Remplissez le formulaire ci-dessous pour nous envoyer un message.<br> Nous reviendrons vers vous rapidement</p>
        <form action="contact.html">
            <div class="groupe">
                <div class="field firstname">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname">
                </div>
                <div class="field lastname">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname">
                </div>
            </div>

            <div class="field email">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="field message">
                <label for="message">Message</label>
                <textarea id="message" name="message" cols="30" rows="10"></textarea>
            </div>

            <div class="field send">
                <input type="submit" value="Envoyer">
            </div>
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

</body>

</html>