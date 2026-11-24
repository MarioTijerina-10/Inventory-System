<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Adiel Autoaire</title>
    <link rel="stylesheet" href="styles/registro/registro.css">
</head>
<body>

            <?php include 'header.html';?>

    <main class="registro-container">
        <h1>Registro de Usuario</h1>
        <form class="registro-form">
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Correo@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" placeholder="899-000-0000" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" placeholder="Calle, Numero, Codigo Postal, Colonia" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmar contraseña:</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirma Contraseña" required>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="terminos" required>
                    Acepto los términos y condiciones
                </label>
            </div>
            <button type="submit" class="submit-button">Registrarse</button>
        </form>
    </main>


    <?php include 'footer.html' ?>

</body>
</html>