<?php
include("db.inc.php");

$usuario = 'mario@gmail.com';//$_POST["usuario"];
$contra = 'ola123';//$$_POST["contra"];
$contra_hashed = password_hash($contra, PASSWORD_DEFAULT);

$sqlDelete = "DELETE FROM users_admin WHERE usuario = :usuario";
$stmtDelete = $pdo->prepare($sqlDelete);
$stmtDelete->bindParam(':usuario', $usuario);
$stmtDelete->execute();

$sqlInsert = "INSERT INTO users_admin (usuario, contra) VALUES (:usuario, :contra)";
$stmtInsert = $pdo->prepare($sqlInsert);
$stmtInsert->bindParam(':usuario', $usuario);
$stmtInsert->bindParam(':contra', $contra_hashed);
$stmtInsert->execute();

echo "Usuario registrado con contraseña encriptada: $contra_hashed";

?>
