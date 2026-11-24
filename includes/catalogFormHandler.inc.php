<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $serial = $_POST["Serial"];
    $categoria = $_POST["Categoria"];
    $marca = $_POST["Marca"];
    $status = $_POST["status"];
    $cliente = $_POST["clienteCatalogo"];
}

try {
    require_once "db.inc.php";
    $query = "EXEC PostCatalogo :Serial, :Categoria, :Marca, :status, :clienteCatalogo";
    
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":Serial",$serial);
    $stmt->bindParam(":Categoria",$categoria);
    $stmt->bindParam(":Marca",$marca);
    $stmt->bindParam(":status",$status);
    $stmt->bindParam(":clienteCatalogo",$cliente);

    $stmt->execute();

    $message = "Objeto guardado";
} catch (PDOException $e) {
    $message = "Registro fallido: $e";
}