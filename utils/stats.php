<?php

session_start(); /

require_once 'config.php';

function getPDO(): PDO {
    static $pdo = null; 
    if ($pdo === null) {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            error_log("PDO Error: " . $e->getMessage());
            die("Erreur de connexion à la base de données.");
        }
    }
    return $pdo;
}


$pdo = getPDO();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $motdepasse = $_POST['password'] ?? ''; 


    $sql = "SELECT Id, Username, Email, Password FROM Utilisateur WHERE Email = ?";
    $stmt = $pdo->prepare($sql); 
    $stmt->execute([$email]); 
    $user = $stmt->fetch(PDO::FETCH_ASSOC); 


    if ($user && $motdepasse === $user['Password']) {

        $_SESSION['userId'] = $user['Id']; 
        $_SESSION['username'] = $user['Username']; 
      echo "<p style='color:green;'>✅ Connexion réussie ! Bienvenue, " . htmlspecialchars($user['Username']) . ".</p>";
    } else {
        echo "<p style='color:red;'>❌ Email ou mot de passe incorrect.</p>";
    }
}
?> 
