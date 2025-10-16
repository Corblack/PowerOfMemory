DROP DATABASE IF EXISTS PowerOfMemory;
CREATE DATABASE PowerOfMemory CHARACTER SET utf8mb4;
USE PowerOfMemory;

/* Story 1 */
-- create a MySQL database and its tables --
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

/* Story 2 */
-- create a dataset for all tables --
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

/* Story 3 */
-- SQL query to register a user in the users table --
INSERT INTO Utilisateur (Email, Password, Username, CreatedAt)
VALUES
('test@gmail.com', 'hashTest', 'testUser', NOW());

/* Story 4 */
-- SQL queries to update a user's password and email --

-- update password if the id matches --
UPDATE utilisateur
SET Password = 'newHashedPassword'
WHERE id = 1;

-- update email if the id matches --
UPDATE utilisateur
SET email = 'newEmail@example.com'
WHERE id = 1;

/* Story 5 */
-- SQL query to log in a user --
SELECT id, email, Username
FROM utilisateur 
WHERE email = 'sacha@example.com'
AND Password = 'hashedPassword';

/* Story 6 */
-- SQL query to display users' scores --
SELECT Game.Name, Utilisateur.Username, Score.Difficulty, Score.Score, Score.CreatedAt
FROM Score 
INNER JOIN Utilisateur ON Score.UserId = Utilisateur.Id
INNER JOIN Game ON Score.GameId = Game.Id
ORDER BY Name ASC,
         Difficulty DESC,
         Score ASC;

/* Story 7 */
-- SQL query to search for scores by a user's username --
SELECT Game.Name, Username, Difficulty, Score, Score.CreatedAt
FROM Score 
JOIN Utilisateur ON Score.UserId = Utilisateur.Id
JOIN Game ON Game.Id = Score.GameId
WHERE Username LIKE '%%'
ORDER BY Difficulty, Score;

/* Story 8 */
-- SQL queries to record a player's score after finishing a game --
INSERT INTO Score (UserId, GameId, Difficulty, Score, CreatedAt)
VALUES (1, 1, "2", 400, NOW());

UPDATE Score 
SET Score = 500, Difficulty = 3, CreatedAt = NOW()
WHERE id = 3;

/* Story 9 */
-- SQL query to save a message in a game's chat --
INSERT INTO Message (GameId, UserId, Message, CreatedAt)
VALUES (1, 1, 'Message test 1', NOW());

/* Story 10 */
-- SQL query to display the general chat conversation --
SELECT m.Message, m.UserId, m.CreatedAt,
       IF(m.UserId = u.Id, 1, 0) AS isSender
FROM `Message` AS m
LEFT JOIN `Utilisateur` AS u ON m.UserId = u.Id
WHERE m.CreatedAt >= NOW() - INTERVAL 24 HOUR
ORDER BY m.CreatedAt ASC;

INSERT INTO `Message` (GameId, UserId, Message, CreatedAt)
VALUES (1, 1, 'Message test 1', NOW());

/* Story 11 */
-- create a private messaging system on my website --
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

/* Story 12 */
-- add test data and handle creation, modification, and deletion of a message --
INSERT INTO MessageriePrivee (UserSenderId, UserReceiverId, Msg, IsRead, ReadAt, CreatedAt) 
VALUES
  (1, 2, 'Yo, are you available tonight?', 1, NOW(), NOW()),
  (2, 1, 'Yes, all good, what do you want to do?', 1, NOW(), NOW()),
  (1, 3, 'Did you see the new map?', 0, NULL, NOW()),
  (3, 1, 'Not yet, is it good?', 0, NULL, NOW()),
  (2, 3, 'I finally finished the mission!', 1, NOW(), NOW()),
  (3, 2, 'Seriously? GG!', 0, NULL, NOW()),
  (1, 2, 'Training tomorrow?', 0, NULL, NOW()),
  (2, 1, 'Yeah, around 9pm works?', 1, NOW(), NOW()),
  (3, 1, 'Struggling with the final boss.', 1, NOW(), NOW()),
  (1, 3, 'I can help if you want.', 0, NULL, NOW()),
  (2, 3, 'Is the server down again?', 0, NULL, NOW()),
  (3, 2, 'Yeah, maintenance until midnight.', 1, NOW(), NOW()),
  (1, 2, 'Have you tried the new character?', 0, NULL, NOW()),
  (2, 1, 'Yes, he is really strong in PvP.', 1, NOW(), NOW()),
  (3, 1, 'Shall we start a ranked game?', 0, NULL, NOW()),
  (1, 3, 'I’m ready, let’s go now!', 0, NULL, NOW()),
  (2, 3, 'Joining voice in 5 min.', 1, NOW(), NOW()),
  (3, 2, 'Ok, I’ll be there too.', 0, NULL, NOW()),
  (1, 2, 'Good game to you!', 1, NOW(), NOW()),
  (2, 1, 'Thanks bro, have fun!', 0, NULL, NOW());

-- Insert additional messages
INSERT INTO MessageriePrivee (UserSenderId, UserReceiverId, Msg, IsRead, ReadAt, CreatedAt)
VALUES
  (4, 5, 'Hey, what’s up?', 1, NOW(), NOW()),
  (5, 4, 'Going good', 1, NOW(), NOW());

-- Update a message
UPDATE MessageriePrivee 
SET Msg = 'XD LET’S GO'
WHERE id = 21;

-- Delete a message --
DELETE FROM MessageriePrivee
WHERE id = 21;

/* Story 13 */
-- SQL query to display different conversations between users --
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
) AS LastMessage
ON LEAST(MessageriePrivee.UserSenderId, MessageriePrivee.UserReceiverId) = LastMessage.userA
AND GREATEST(MessageriePrivee.UserSenderId, MessageriePrivee.UserReceiverId) = LastMessage.userB
AND MessageriePrivee.CreatedAt = LastMessage.lastMessageDate
ORDER BY MessageriePrivee.CreatedAt DESC;

/* Story 14 */
-- SQL query to display an exchange between two users --
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

/* Story 15 */
-- SQL query to display all stats for all players for a specific year --

/* Story 16 */
-- SQL query to display stats for a single player --
