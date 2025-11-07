<?php

session_start(); 

require_once 'config.php'; // Doit contenir DB_HOST, DB_NAME, DB_USER, DB_PASS

// Fonction de connexion (elle est très bien faite)
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
            error_log("PDO Error: ". $e->getMessage());
            die("Erreur de connexion à la base de données.");
        }
    }
    return $pdo;
}

$pdo = getPDO();
$login_error = null; // Variable pour stocker le message d'erreur

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $motdepasse = $_POST['password'] ?? ''; 

    // 1. Récupérer l'utilisateur par email
    $sql = "SELECT Id, Username, Email, Password FROM Utilisateur WHERE Email = ?";
    $stmt = $pdo->prepare($sql); 
    $stmt->execute([$email]); 
    $user = $stmt->fetch(); // Pas besoin de PDO::FETCH_ASSOC, c'est le défaut

    // 2. CORRECTION : Vérifier le mot de passe avec password_verify()
    if ($user && password_verify($motdepasse, $user['Password'])) {
        
        // Le mot de passe est correct !
        
        // 3. Créer la session
        $_SESSION['userId'] = $user['Id']; 
        $_SESSION['username'] = $user['Username']; 
        
        // 4. CORRECTION : Rediriger l'utilisateur vers son compte
        header('Location: /ProjetFlash/account.php'); // Ou index.php
        exit; // Très important d'arrêter le script après une redirection

    } else {
        // L'email ou le mot de passe est incorrect
        $login_error = "Email ou mot de passe incorrect.";
        // On ne redirige pas, la page du formulaire (login.php)
        // pourra afficher ce message $login_error
    }
}

?>