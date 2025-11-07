<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $title = "Scores";
    ?>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/ProjetFlash/partials/head.php'; ?>
    <link rel="stylesheet" href="/ProjetFlash/assets/css/scores.css">
</head>
<body>


    <main>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/ProjetFlash/partials/header.php' ?>

        <div class="texte"> <h1>Scores</h1>
            <p>Voici la listes des meilleurs joueurs, vient donc battre tous ces records!</p>
        </div>
        <div class="filter">
            <form method="post" action="scores.php">
                <div class="filtre nom">
                    <label for="pseudo">pseudo:</label>
                    <input type="text" id="pseudo" name="pseudo">
                </div>
                <div class="filtre jeu">
                    <label for="jeu">jeu:</label>
                    <input type="text" id="jeu" name="jeu">
                </div>
                <div class="valid">
                    <button type="submit">Filtrer</button>
                </div>
            </form>
        </div>

        <div class="tableau">
        <table class="leaderboard-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>JEU</th>
                    <th>JOUEUR</th>
                    <th>DIFFICULTE</th>
                    <th>SCORE</th>
                    <th>DATE</th>
                </tr>
            </thead>
            
                <tbody>
                    
                <?php
                $rang = 1;
                include $_SERVER['DOCUMENT_ROOT'].'/ProjetFlash/utils/database.php';
                include $_SERVER['DOCUMENT_ROOT'].'/ProjetFlash/utils/common.php';
                // 1. On OUVRE la boucle en PHP
                while ($score = $requete_scores->fetch(PDO::FETCH_ASSOC)) : 
                ?>

                    <tr>
                        <td><?php echo $rang ?></td> 

                        <td class="game-cell"> 
                            
                            <img src="/ProjetFlash/assets/images/IMG_8409.jpg" alt="Icône du jeu" class="game-icon">
                            
                            <span>
                                <?php echo $score['Name']; ?>
                            </span>
                        </td>
                        
                        <td><?php echo $score['Username']; ?></td>
                        <td><?php echo $score['Difficulty']; ?></td>
                        <td><?php echo $score['Score']; ?></td>
                        
                        <td><?php echo $score['CreatedAt']; ?></td>
                    </tr>
                    

                <?php
                if ($rang == 5) break;
                $rang++;
                endwhile; 
                ?>

            </tbody>
                
            

        </table>
    </div>
    <div class="textebot">
    <div class="textebot-content"> 
        <h3>Tu n'est toujours pas inscrit ?</h3>
        <P>Un jeu de mémoire est un excellent moyen de stimuler l’esprit tout en s’amusant.
        Le principe est simple : retourner des cartes, observer attentivement et retrouver les bonnes paires.
        Chaque partie développe la concentration, l’attention aux détails et la rapidité d’esprit.
        C’est un jeu accessible à tous, des plus petits aux plus grands, qui favorise l’apprentissage par le jeu.
        En solo ou en groupe, il offre toujours un moment ludique et enrichissant.</P>
        <button id="btnjouer">Jouer</button>
    </div>
    
    <img src="/ProjetFlash/assets/images/e77e3023-2610-44e4-8a36-dc4f92b357b4.png" alt="Manette de jeu" id="manette-img">
</div>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/ProjetFlash/partials/footer.php'; ?>

    </main>


</body>
</html>