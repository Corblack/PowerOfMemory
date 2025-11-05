<?php
function updateUserProfile(PDO $pdo, int $userId, string, $newEmail, string $newpassword): bool
$sql = "UPDATE users SET email = :email, password = :password WHERE id = id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $newEmail);
$stmt->bindValue(':password', $newpassword)
$stmt->bindValue('id', $userId, PDO:: PARAM_INT);
return $stmt->execute();
?>