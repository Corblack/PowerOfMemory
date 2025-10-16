DROP DATABASE IF EXISTS PowerOfMemory;
CREATE DATABASE PowerOfMemory CHARACTER SET utf8mb4;
USE PowerOfMemory;

/* Story 1*/
-- créer une base de données MySQL ainsi que des tables --
DROP TABLE IF EXISTS Utilisateur;
CREATE TABLE Utilisateur(
    Id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(255) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    Username VARCHAR(20) NOT NULL UNIQUE,
    CreatedAt DATETIME NOT NULL,
    UpdatedAt DATETIME NOT NULL
);

DROP TABLE IF EXISTS Score;
CREATE TABLE Score(
    Id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    UserId INT UNSIGNED NOT NULL,
    GameId INT UNSIGNED NOT NULL,
    Difficulty ENUM("1", "2", "3") NOT NULL,
    Score INT UNSIGNED NOT NULL,
    CreatedAt DATETIME NOT NULL
);

DROP TABLE IF EXISTS Game;
CREATE TABLE Game(
    Id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL
);  

DROP TABLE IF EXISTS Message;
CREATE TABLE Message(
    Id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    GameId INT UNSIGNED NOT NULL,
    UserId INT UNSIGNED NOT NULL,
    Message TEXT NOT NULL,
    CreatedAt DATETIME NOT NULL
);  



/* Story 2*/
--  créer un jeu de données pour l’ensemble de mes tables --
INSERT INTO Utilisateur (Email, Password, Username, CreatedAt, UpdatedAt)
VALUES
('alice.dupont@example.com', 'hash1', 'Alice', NOW(), NOW()),
('bob.martin@example.com', 'hash2', 'Bob', NOW(), NOW()),
('caroline.lefevre@example.com', 'hash3', 'Caroline', NOW(), NOW()),
('david.moreau@example.com', 'hash4', 'David', NOW(), NOW()),
('emma.girard@example.com', 'hash5', 'Emma', NOW(), NOW());


INSERT INTO Message (GameId, UserId, Message, CreatedAt)
VALUES
(1, 1, 'Message test 1', NOW()),
(1, 2, 'Message test 2', NOW()),
(1, 3, 'Message test 3', NOW()),
(1, 4, 'Message test 4', NOW()),
(1, 5, 'Message test 5', NOW()),
(2, 1, 'Message test 6', NOW()),
(2, 2, 'Message test 7', NOW()),
(2, 3, 'Message test 8', NOW()),
(2, 4, 'Message test 9', NOW()),
(2, 5, 'Message test 10', NOW()),
(3, 1, 'Message test 11', NOW()),
(3, 2, 'Message test 12', NOW()),
(3, 3, 'Message test 13', NOW()),
(3, 4, 'Message test 14', NOW()),
(3, 5, 'Message test 15', NOW()),
(4, 1, 'Message test 16', NOW()),
(4, 2, 'Message test 17', NOW()),
(4, 3, 'Message test 18', NOW()),
(4, 4, 'Message test 19', NOW()),
(4, 5, 'Message test 20', NOW());





INSERT INTO Score (UserId, GameId, Difficulty, Score, CreatedAt)
VALUES 
(1, 1, "1", 100, NOW()),
(2, 1, "2", 200, NOW()),
(3, 1, "3", 300, NOW());


INSERT INTO Game (Name)
VALUES
("Power of Memory");


/* Story 3*/
--  écrire la requête SQL qui permettra d’enregistrer un utilisateur dans la table utilisateurs --
INSERT INTO Utilisateur (Email, Password, Username, CreatedAt)
VALUES
('test@gmail.com', 'hashTest', 'testUser', NOW());

/* Story 4*/
--  écrire les requêtes SQL permettant de modifier le mot de passe et l’adresse email d’un utilisateur --

--modifier le mdp si l'id correspond--
UPDATE utilisateur
SET Password = 'nouveauMotDePasseHache'
WHERE id = 1;

--modifier si mail le l'id correspond --
UPDATE utilisateur
SET email = 'nouvelEmail@example.com'
WHERE id = 1;

/* Story 5*/
--  écrire la requête SQL permettant de s’identifier sur le site -- 
SELECT id, email, Username
FROM utilisateur 
WHERE email = 'sacha@example.com'
AND Password = 'motDeeeePasseHache';


/* Story 6*/
--  écrire la requête SQL permettant d’afficher le score des utilisateurs --
SELECT Game.Name,Utilisateur.Username,Score.Difficulty,Score.Score,Score.CreatedAt
FROM Score INNER JOIN Utilisateur ON score.UserId= Utilisateur.Id
INNER JOIN Game ON Score.GameId=Game.Id
ORDER BY name ASC,
difficulty DESC,
Score ASC;

/* Story 7*/
--écrire la requête SQL permettant de rechercher des scores à partir du pseudo d’un utilisateur --

SELECT game.Name, Username, Difficulty, Score, Score.CreatedAt
FROM Score JOIN utilisateur ON score.UserId = utilisateur.Id
JOIN Game ON Game.Id = score.GameId
WHERE Username LIKE '%%'
ORDER BY Difficulty, Score;

/* Story 8*/
-- écrire les 2 requêtes SQL permettant d’enregistrer le score d’un joueur qui a terminé sa partie --

INSERT INTO Score (UserId, GameId, Difficulty, Score, CreatedAt)
VALUES (1, 1, "2", 400, NOW());


UPDATE Score 
SET Score = 500,difficulty=3,CreatedAt=NOW()
WHERE id=3;

/* Story 9*/
--  écrire la requête SQL permettant d’enregistrer un message sur le chat d’une partie --
INSERT  INTO Message ( GameId, UserId, Message, CreatedAt)
VALUES (1, 1, 'Message test 1', NOW());
/* Story 10*/
--  écrire la requête SQL permettant d’afficher la discussion du chat général --
SELECT m.Message, m.UserId, m.CreatedAt,
       IF(m.UserId = u.Id, 1, 0) AS isSender
FROM `Message` AS m
LEFT JOIN `Utilisateur` AS u ON m.UserId = u.Id
WHERE m.CreatedAt >= NOW() - INTERVAL 24 HOUR
ORDER BY m.CreatedAt ASC;

INSERT INTO `Message` (GameId, UserId, Message, CreatedAt)
VALUES (1, 1, 'Message test 1', NOW());


/* story 11 */
--  créer une messagerie privée sur mon site internet --
DROP TABLE IF EXISTS MessageriePrivee;
CREATE TABLE MessageriePrivee (
    Id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    MsgId INT UNSIGNED NOT NULL,
    UserSenderId INT UNSIGNED NOT NULL,
    UserReceiverId INT UNSIGNED NOT NULL,
    Msg TEXT NOT NULL,
    CreatedAt DATETIME DEFAULT CURRENT_TIMESTAMP,
    IsRead TINYINT(1) DEFAULT 0,
    ReadAt DATETIME NULL,
    PRIMARY KEY (Id)
);



/* story 12*/
--  ajouter des données de test et gérer la création, la modification et la suppression d’un message --
INSERT INTO MessageriePrivee (UserSenderId, UserReceiverId, Msg, IsRead, ReadAt, CreatedAt) 
VALUES
  (1, 2, 'Yo, t’es dispo ce soir ?', 1, NOW(), NOW()),
  (2, 1, 'Oui tranquille, tu veux faire quoi ?', 1, NOW(), NOW()),
  (1, 3, 'T’as vu la nouvelle map ?', 0, NULL, NOW()),
  (3, 1, 'Non pas encore, elle est bien ?', 0, NULL, NOW()),
  (2, 3, 'J’ai enfin fini la mission !', 1, NOW(), NOW()),
  (3, 2, 'Sérieux ? GG à toi !', 0, NULL, NOW()),
  (1, 2, 'On s’entraîne demain ?', 0, NULL, NOW()),
  (2, 1, 'Ouais, vers 21h ça te va ?', 1, NOW(), NOW()),
  (3, 1, 'Je galère avec le boss final.', 1, NOW(), NOW()),
  (1, 3, 'Je peux t’aider si tu veux.', 0, NULL, NOW()),
  (2, 3, 'Le serveur est down encore ?', 0, NULL, NOW()),
  (3, 2, 'Ouais, maintenance jusqu’à minuit.', 1, NOW(), NOW()),
  (1, 2, 'T’as essayé le nouveau perso ?', 0, NULL, NOW()),
  (2, 1, 'Oui, il est trop fort en PvP.', 1, NOW(), NOW()),
  (3, 1, 'On lance une partie classée ?', 0, NULL, NOW()),
  (1, 3, 'Je suis chaud, go maintenant !', 0, NULL, NOW()),
  (2, 3, 'Je rejoins le vocal dans 5 min.', 1, NOW(), NOW()),
  (3, 2, 'Ok, j’y serai aussi.', 0, NULL, NOW()),
  (1, 2, 'Bonne game à toi !', 1, NOW(), NOW()),
  (2, 1, 'Merci bro, amuse-toi bien !', 0, NULL, NOW());


  -- Insertion des Message supplémentaires
INSERT INTO MessageriePrivee (UserSenderId, UserReceiverId, Msg, IsRead, ReadAt, CreatedAt)
VALUES
  (4, 5, 'ca joue ?', 1, NOW(), NOW()),
  (5, 4, 'vsy', 1, NOW(), NOW());

-- Mise à jour d’un message
UPDATE MessageriePrivee 
SET Msg = 'XD ON LANCE'
WHERE id = 21;
-- supression d'un message --
DELETE FROM MessageriePrivee
WHERE id=21;

/* story 13 */
-- écrire la requête SQL permettant d’afficher les différentes conversations entre utilisateurs --
SELECT 
    UtilisateurExpediteur.Username AS sender,
    UtilisateurRecepteur.Username AS receiver,
    MessageriePrivee.Msg,
    MessageriePrivee.CreatedAt
FROM MessageriePrivee
JOIN Utilisateur AS UtilisateurExpediteur 
    ON MessageriePrivee.UserSenderId = UtilisateurExpediteur.Id
JOIN Utilisateur AS UtilisateurRecepteur 
    ON MessageriePrivee.UserReceiverId = UtilisateurRecepteur.Id
JOIN (
    SELECT 
        LEAST(UserSenderId, UserReceiverId) AS userA,
        GREATEST(UserSenderId, UserReceiverId) AS userB,
        MAX(CreatedAt) AS lastMessageDate
    FROM MessageriePrivee
    GROUP BY userA, userB
) AS DernierMessage
ON LEAST(MessageriePrivee.UserSenderId, MessageriePrivee.UserReceiverId) = DernierMessage.userA
AND GREATEST(MessageriePrivee.UserSenderId, MessageriePrivee.UserReceiverId) = DernierMessage.userB
AND MessageriePrivee.CreatedAt = DernierMessage.lastMessageDate
ORDER BY MessageriePrivee.CreatedAt DESC;



/* story 14 */
--  écrire la requête SQL permettant d’afficher un échange entre deux utilisateurs --
SELECT 
    Expediteur.Username AS Expediteur,
    Recepteur.Username AS Recepteur,
    MessagePrive.Msg AS ContenuMessage,
    MessagePrive.CreatedAt AS DateCreation,
    MessagePrive.ReadAt AS DateLecture,
    MessagePrive.IsRead AS EstLu,
    (SELECT COUNT(*) 
     FROM Score 
     WHERE Score.UserId = MessagePrive.UserSenderId) AS NombrePartiesExpediteur,
    (SELECT COUNT(*) 
     FROM Score 
     WHERE Score.UserId = MessagePrive.UserReceiverId) AS NombrePartiesRecepteur,
    (SELECT Game.Name 
     FROM Score 
     JOIN Game ON Game.Id = Score.GameId 
     WHERE Score.UserId = MessagePrive.UserSenderId 
     GROUP BY Game.Id 
     ORDER BY COUNT(*) DESC 
     LIMIT 1) AS JeuLePlusJoueExpediteur,
    (SELECT Game.Name 
     FROM Score 
     JOIN Game ON Game.Id = Score.GameId 
     WHERE Score.UserId = MessagePrive.UserReceiverId 
     GROUP BY Game.Id 
     ORDER BY COUNT(*) DESC 
     LIMIT 1) AS JeuLePlusJoueRecepteur
FROM MessageriePrivee AS MessagePrive
JOIN Utilisateur AS Expediteur ON Expediteur.Id = MessagePrive.UserSenderId
JOIN Utilisateur AS Recepteur ON Recepteur.Id = MessagePrive.UserReceiverId
WHERE (MessagePrive.UserSenderId = 1 AND MessagePrive.UserReceiverId = 2)
   OR (MessagePrive.UserSenderId = 2 AND MessagePrive.UserReceiverId = 1)
ORDER BY MessagePrive.CreatedAt ASC;


/* story 15 */
--  écrire la requête SQL qui permettra d’afficher toutes les stats de tous les joueur en fonction d’une année --




/* Story 16 */
-- écrire la requête SQL qui permettra d’afficher les stats d’un seul joueur --