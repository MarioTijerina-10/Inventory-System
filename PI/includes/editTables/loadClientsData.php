<?php

if(isset ($_POST['editId'])){

    $editId = $_POST["editId"];

    try {

        require_once "../includes/db.inc.php";
        $query = "select * from Clientes where cliente_id = :editId";
        
        $stmt = $pdo->prepare($query);
    
        $stmt->bindParam(":editId",$editId);
    
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $message = "Objeto editado";

    } catch (PDOException $e) {
        $message = "Edición fallida: $e";
    }

}