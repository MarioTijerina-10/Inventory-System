<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST['action'] ?? '';

    if ($action === 'upload') {
        require_once "../includes/editTables/loadClientsData.php";
    }

    elseif($action === 'update') {
        require_once "../includes/editTables/editClients.php";
    }
}
?>

<!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="/PI/styles/MainStyle.css">
                <title>Panel Administrativo</title>
            </head>
            <body>

<!-- header for the administration page -->

<?php include 'header.php'?> 

<div class="BackgroundDiv">
    <div class="FormContainer"> 

    <!-- form clientes -->
    <form id="clientsRegister" action="" method="POST" class="AdminForm">

    <input type="hidden" name="action" value="update">

    <h1 class="formTitle">Edicion de registro</h1>

    <?php

    foreach($results as $row)  {
    
        echo '
        <div class="FormRow">
            <div class="FormEntry">
                <label for="Name">Nombre</label>
                <input type="text" name="Name" placeholder="Nombre" required value="'

                .htmlspecialchars($row["nombres"]).
                
                '">
            </div>

                <div class="FormEntry">
                    <label for="Name">Apellidos</label>
                    <input type="text" name="apellidos" placeholder="Apellidos" value="'

                    .htmlspecialchars($row["apellidos"]).
                    
                    '">
            </div>

            <div class="FormEntry">
                <label for="Phone">Telefono</label>
                <input type="tel" name="Phone" placeholder="Telefono" value="'
                 
                
                .htmlspecialchars($row["telefono"]).

                '">
            </div>
        
        </div>    

        <div class="FormRow">

        <div class="FormEntry">
            <label for="Email">Correo</label>
                <input type="email" name="Email" placeholder="Correo" value="'
                
                    .htmlspecialchars($row["email"]).

                    '">
            </div> 

            <div class="FormEntry">
                <label for="Address">Dirección</label>
                <input type="text" name="Address" placeholder="Direccion" value="'
                
                .htmlspecialchars($row["direccion"]).

                 '" >
            </div>
        </div>';
    }
?>

        <!-- botton de guardar -->
        <?php include 'Forms/ExitAndSaveBtns.php' ?>
        
    </form>


</div>
</div>

</body>
</html>

<?php 

die();