<?php 
    require_once("../../includes/trabajosFormHandler.php")
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


<!-- Registro form para nuevas entradas de trabajo -->
<div class="BackgroundDiv">
    <div class="FormContainer">  

    <form action="" class="AdminForm">

        <div class="FormRow">
            <div class="FormEntry">
                <label for="clienteTrabajo">Cliente</label>
                <select id="clienteTrabajo">
                </select> 
            </div>

            <div class="FormEntry">
                    <label for="statusTrabajo">Status</label>
                        <select name="statusTrabajo" placeholder="Status">
                        <option value="Pendiente" selected>pendiente</option>
                        <option value="acabado">Acabado</option>
                    </select>   
                </div>

                <div class="FormEntry">
                    <label for="trabajo">Servicio</label>
                    <input type="text" name="trabajo" placeholder="Servicios Dados">
                        
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

    </form>

    <?php include 'ExitAndSaveBtns.php' ?>

</div>
</div>

</body>
</html>