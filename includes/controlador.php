<?php
session_start();
include("db.inc.php");

if (isset($_POST['insert'])) {
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];

    echo "Usuario ingresado: $usuario<br>";
    echo "Contraseña ingresada: $contra<br>";

    $sql = "SELECT * FROM users_admin WHERE usuario = :usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($contra, $user['contra'])) {
            echo "Contraseña verificada correctamente<br>";
            $_SESSION['usuario'] = $user['usuario'];
            header("Location: ../Admin.php");
            exit;

    } else {
        echo "Usuario no encontrado<br>";
    }
}
