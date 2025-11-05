<!DOCTYPE html>
<html lang="fr">

<head>
    <?php 
    $title = "Profil";
    ?>
    <link rel="stylesheet" href="assets/css/account.css">
    <?php include 'partials/head.php'; ?>
</head>

<body>
    <?php include 'partials/header.php'; ?>



    <section class="account">
        <div class="title">
            <div class="group">
                <h3>Mon compte</h3>
                <p>Gérez vos informations personnelles<br>et vos préférences de compte</p>
            </div>
            <p><img src="assets/images/pp.jpg" alt="photo de profil"></p>

        </div>

        <div class="infos-compte">
            <section class="info">
                <h4>Informations personnelles</h4>
                <p>Nom : Dupont</p>
                <p>Prénom : Jean</p>
                <p>Email : blabla@contact.com</p>
            </section>
            <div class="changement">
                <form action="account.php">
                    <div class="password">
                        <label for="current-password">Mot de passe actuel :</label>
                        <input type="password" id="current-password" name="current-password" required>
                        <label for="new password">Nouveau mot de passe :</label>
                        <input type="password" id="new-password" name="new-password" required>
                        <label for="confirm-password">Confirmer le nouveau mot de passe :</label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                        <button type="submit">Changer le mot de passe</button>
                    </div>
                </form>
                <form action="account.php">
                    <div class="changeMail">
                        <label for="new-email">Nouvelle adresse email :</label>
                        <input type="email" id="new-email" name="new-email" required>
                        <button type="submit">Changer l'email</button>
                    </div>
                    <div class="delete">
                        <button type="submit" id="delete-account">Supprimer mon compte</button>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <?php include 'partials/footer.php'; ?>
</body>
</html>