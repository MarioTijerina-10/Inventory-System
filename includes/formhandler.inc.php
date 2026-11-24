<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $numero = $_POST["numero"];
    $correo = $_POST["correo"];
    $servicio = implode(", ", $_POST["servicio"]); 
    $otro_servicio = $_POST["otro_servicio"] ?? null;
    $comentario = $_POST["comentarios"] ?? null;

    try {
        require_once "db.inc.php";

        $query = "INSERT INTO solicitudes (nombre, direccion, telefono, email, servicio, otro_servicio, comentario) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$nombre, $direccion, $numero, $correo, $servicio, $otro_servicio, $comentario]);
        $pdo = null;

        header("Location: ../index.php");
        exit();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    exit();
}