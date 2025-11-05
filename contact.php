
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php 
    $title = "contact";
    ?>
    <link rel="stylesheet" href="assets/css/contact.css">
    <?php include 'partials/head.php'; ?>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <div class="titre">
        <h3>Contactez notre équipe pour toute question ou suggestion</h3>
        <p>Nous sommes disponibles pour répondre à vos demandes et vous offrir l’aide nécessaire</p>
    </div>

    <p>
        <img src="/ProjetFlash/assets/images/Map.png" alt="map" id="map">
    </p>

    <div class="infos">
        <section>
            <p>Suivez-nous</p>
            <p><img src="/ProjetFlash/assets/images/Group 12.png" alt="reseaux"></p>
        </section>
        <hr>
        <section class="infos-idk">
            <p> <img src="/ProjetFlash/assets/images/phone 1.png" alt="tel"></p>
            <p> +33 6 01 02 03 04</p>
        </section>
        <hr>
        <section class="infos-idk">
            <p> <img src="/ProjetFlash/assets/images/gps 1.png" alt="gps"></p>
            <p>23 rue de Paris<br>75002 Paris</p>
        </section>

    </div>

    <div class="formulaire">
        <h2>
            Contactez-nous !
        </h2>
        <p>Remplissez le formulaire ci-dessous pour nous envoyer un message.<br> Nous reviendrons vers vous rapidement</p>
        <form action="contact.php">
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
    <?php include 'partials/footer.php'; ?>
</body>


</html> 