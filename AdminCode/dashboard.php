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

            <script src="/PI/scripts/AdminScript.js" async></script>

            <!-- Sidebar for the administrator page -->
                 
            <?php include 'sidebar.php'?>     

                    <!-- header for the administration page -->
     
                    <?php include 'header.php'?> 

                        <!-- This is where the main content gets inserted -->
                    <div class="MainContent" id="MainContent">

    <div style="display: flex;">
        <div class="dashboard">
                <div class="widget solicitudes">
                    <h3>Solicitudes</h3>
                    <p><span class="highlight">3</span> Nuevas solicitudes</p>
                    <div class="table-wrapper">
                        <h4>Pendientes</h4>
                        <ul>
                            <li>Instalacion de central</li>
                            <li>Lavado de aire</li>
                            <li>Reparacion de refrigerador</li>
                        </ul>
                    </div>
                </div>

                <div class="widget trabajos">
                    <h3>Trabajos Recientes (Última Semana)</h3>
                    <form class="filters-form">
                        <label for="trabajo-filtro">Filtrar Trabajos Recientes:</label>
                        <select id="trabajo-filtro" name="trabajo-filtro">
                            <option>Última Semana</option>
                            <option>Último Mes</option>
                            <option>Último Trimestre</option>
                        </select>
                    </form>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Trabajo</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Instalacion de central</td>
                                <td>20/10/2024</td>
                                <td>Completado</td>
                            </tr>
                            <tr>
                                <td>Instalacion de central</td>
                                <td>20/10/2024</td>
                                <td>En progreso</td>
                            </tr>
                            <tr>
                                <td>Instalacion de central</td>
                                <td>20/10/2024</td>
                                <td>Pendiente</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="widget ventas">
                    <h3>Aires Vendidos</h3>
                    <form class="filters-form">
                        <label for="ventas-filtro">Filtrar por:</label>
                        <select id="ventas-filtro" name="ventas-filtro">
                            <option>Este Mes</option>
                            <option>Última Semana</option>
                            <option>Último Año</option>
                        </select>
                    </form>
                    <p>5 Aires vendidos este mes</p>
                </div>
            </div>
       </div>
       </div>

       </body>
<html>