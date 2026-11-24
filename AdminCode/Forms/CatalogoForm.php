<?php 
    require_once "../../includes/catalogFormHandler.inc.php";
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

        <form action="post" class="AdminForm">

            <h1 class="formTitle">Registro de catalogo</h1>

            <div class="FormRow">
                <div class="FormEntry">
                    <label for="Name">Serial</label>
                    <input type="text" name="Serial" placeholder="Serial" required>
                </div>

                <div class="FormEntry">
                    <label for="Categoria">Categoría</label>
                    <select id="Categoria"  name="Categoria" placeholder="Categoria" required>
                        <option value="1 ton">1 Ton</option>
                        <option value="1.5 ton">1.5 Ton</option>
                        <option value="2 ton">2 Ton</option>
                    </select>   
                </div>

                <div class="FormEntry">
                    <label for="Marca">Marca</label>
                        <select name="Marca" placeholder="Marca" required>
                        <option value="mirage" selected>Mirage</option>
                        <option value="gree">Gree</option>
                    </select>   
                </div> 
            
            </div>

            <div class="FormRow">
                <div class="FormEntry">
                        <label for="status">Status</label>
                            <select name="status" placeholder="Status">
                            <option value="inventario" selected>En inventario</option>
                            <option value="vendido">Vendido</option>
                        </select>   
                    </div>

                <div class="FormEntry">
                    <label for="clienteCatalogo">Cliente</label>
                    <select name="clienteCatalogo">
                    <option value="inventario" selected>En inventario</option>
                        <option> 
                    </select> 
                </div>

            </div>
        </form>


            <?php include 'ExitAndSaveBtns.php' ?>
            
    </div>
</div>

</body>
<html>