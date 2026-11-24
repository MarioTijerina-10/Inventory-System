<?php

try {
    require_once "../includes/db.inc.php";
    $query = "select concat(nombres,' ',apellidos) as nombre_completo, cliente_id, direccion, telefono, email, fecha_registro from Clientes";
    
    $stmt = $pdo->prepare($query);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    $message = "Registro fallido: $e";
}