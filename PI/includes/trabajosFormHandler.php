<!-- Guarda registros de trabajos -->

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $clienteTrabajo = $_POST["clienteTrabajo"];
    $statusTrabajo = $_POST["statusTrabajo"];
    $trabajo = $_POST["trabajo"];
    $message;

    try {
        require_once "db.inc.php";
        $query = "EXEC postTrabajos :clienteTrabajo, :trabajo, :statusTrabajo";
        
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":clienteTrabajo",$clienteTrabajo);
        $stmt->bindParam(":trabajo",$trabajo);
        $stmt->bindParam(":statusTrabajo",$statusTrabajo);

        $stmt->execute();

        $message = "Registro guardado";
    } catch (PDOException $e) {
        $message = "Registro fallido: $e";
    }

}