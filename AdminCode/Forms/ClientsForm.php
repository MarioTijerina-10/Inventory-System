<?php 
    require_once "../../includes/clientsFormHandler.inc.php";
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

<?php include '../header.php'?> 

<div class="BackgroundDiv">
    <div class="FormContainer"> 

    <!-- form clientes -->
    <form id="clientsRegister" action="" method="POST" class="AdminForm">

    <h1 class="formTitle">Registro de clientes</h1>

        <div class="FormRow">
            <div class="FormEntry">
                <label for="Name">Nombre</label>
                <input type="text" name="Name" placeholder="Nombre" required>
            </div>

            <div class="FormEntry">
                <label for="Name">Apellidos</label>
                <input type="text" name="lastName" placeholder="Apellido">
            </div>

            <div class="FormEntry">
                <label for="Phone">Telefono</label>
                <input type="tel" name="Phone" placeholder="Telefono">
            </div>

        
        </div>    

        <div class="FormRow">

            <div class="FormEntry">
                    <label for="Email">Correo</label>
                    <input type="email" name="Email" placeholder="Correo">
            </div> 

            <div class="FormEntry">
                <label for="Address">Dirección</label>
                <input type="text" name="Address" placeholder="Direccion" >
            </div>

        </div>
        
        <!-- Mensaje de Aceptación o error de form -->

        <div class="FormRow">
            <p id="message">
                <?php 
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        echo "<p>$message</p>";
                    }
                ?>
            </p>
        </div>
        
        <!-- botton de guardar -->
        <?php include 'ExitAndSaveBtns.php' ?>
        
    </form>

</div>
</div>

</body>
</html>

<?php
    die();
?>