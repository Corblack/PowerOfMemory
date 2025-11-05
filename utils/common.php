<?php 
$sql = "SELECT Game.Name, Utilisateur.Username, Score.Difficulty, Score.Score, Score.CreatedAt
        FROM Score 
        INNER JOIN Utilisateur ON Score.UserId = Utilisateur.Id
        INNER JOIN Game ON Score.GameId = Game.Id
        ORDER BY Name ASC, Difficulty DESC, Score ASC";


$requete_scores = $pdo->prepare($sql);

$requete_scores->execute();


?>      