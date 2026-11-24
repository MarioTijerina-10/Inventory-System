<?php

    $name = $_POST["Name"];
    $lastName = $_POST["lastName"];
    $phone = $_POST["Phone"];
    $email = $_POST["Email"];
    $address = $_POST["Address"];
    $message;

    try {
        require_once "db.inc.php";
        $query = "EXEC PostClients :Name, :Phone, :Email, :Address";
        
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":Name",$name);
        $stmt->bindParam(":Phone",$phone);
        $stmt->bindParam(":Email",$email);
        $stmt->bindParam(":Address",$address);

        $stmt->execute();

        $message = "Registro guardado";
    } catch (PDOException $e) {
        $message = "Registro fallido: $e";
    }
