<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitudes - Adiel Autoaire</title>
    <link rel="stylesheet" href="styles/solicitudes/solicitudes.css">
</head>
<body>

    <?php include 'header.html';?>

    <main class="solicitudes-container">
        <h1>Solicíta tu servicio</h1>
        <form class="solicitud-form">
            <h2>Que Servicios solicíta?</h2>
            <div class="servicios-grid">
                <label><input type="checkbox" name="servicio" value="instalacion_central"> Instalación de Central</label>
                <label><input type="checkbox" name="servicio" value="reparacion_lavadora"> Reparación de Lavadora</label>
                <label><input type="checkbox" name="servicio" value="lavado_aire"> Lavado de aire</label>
                <label><input type="checkbox" name="servicio" value="instalacion_central"> Instalación de central</label>
                <label><input type="checkbox" name="servicio" value="reparacion_refrigerador"> Reparación de refrigerador</label>
                <label><input type="checkbox" name="servicio" value="reparacion_ac_automotriz"> Reparación de A/C automotriz</label>
            </div>
            <label>
                <input type="checkbox" name="servicio" value="otro"> Otro
                <input type="text" name="otro_servicio" class="otro-input">
            </label>
            <div class="form-group">
                <label for="comentarios">Comentarios del trabajo:</label>
                <textarea id="comentarios" name="comentarios" rows="4"></textarea>
            </div>
            <button type="submit" class="submit-button">Solicítanos</button>
        </form>
    </main>


    <?php include 'footer.html' ?>
    
</body>
</html>