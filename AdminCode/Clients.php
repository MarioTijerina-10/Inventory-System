<?php
    require_once "../includes/getTables/getClients.php"
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

            <script src="/PI/scripts/AdminScript.js" async></script>

            <!-- Sidebar for the administrator page -->
                 
            <?php include 'sidebar.php'?>     

                    <!-- header for the administration page -->
     
                    <?php include 'header.php'?> 

                        <!-- This is where the main content gets inserted -->
                    <div class="MainContent" id="MainContent">

<h1>Clientes</h1>

<!-- table search bar and buttons -->

<!-- search bar -->

<div class="TableHeading">
    <div class="searchbarHeading">
            <div class="searchBox">

        <input class="searchInput" type="text" name="" placeholder="Buscar Cliente">
        <button class="searchButton" href="#">
            
            

                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 29 29" fill="none">
        <g clip-path="url(#clip0_2_17)">
        <g filter="url(#filter0_d_2_17)">
        <path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
        </g>
        </g>
        <defs>
        <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
        <feOffset dy="4"></feOffset>
        <feGaussianBlur stdDeviation="2"></feGaussianBlur>
        <feComposite in2="hardAlpha" operator="out"></feComposite>
        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
        </filter>
        <clipPath id="clip0_2_17">
        <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
        </clipPath>
        </defs>
        </svg>
        </button>
        </div>
    </div>
    
    <div class="ButtonsHeading">

<!-- add registry button -->
        <a href="/PI/AdminCode/Forms/ClientsForm.php">
        <button type="button" class="AddButton" id="ClientsForm">
        <span class="AddButton__text">Añadir</span>
        <span class="AddButton__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24" fill="none" class="svg"><line y2="19" y1="5" x2="12" x1="12"></line><line y2="12" y1="12" x2="19" x1="5"></line></svg></span>
        </button>
    </a>

    </div>

</div>

<br>

<!-- table content -->

<div class="TableGrid GridC5">
    <div class="ColumnHeader"></div>
    <div class="ColumnHeader">Cliente</div>
    <div class="ColumnHeader">Telefono</div>
    <div class="ColumnHeader">Correo</div>
    <div class="ColumnHeader">Ubicacion</div>
    <div class="ColumnHeader">Fecha</div>
    <div class="ColumnHeader"></div>

    <?php 
        foreach ($results as 
        $row) {

            echo '<div class="TableDiv">' . htmlspecialchars($row["cliente_id"]) . '</div>';
            echo '<div class="TableDiv">' . htmlspecialchars($row["nombre_completo"]) . '</div>';
            echo '<div class="TableDiv">' . htmlspecialchars($row["telefono"]) . '</div>';
            echo '<div class="TableDiv">' . htmlspecialchars($row["email"]) . '</div>';
            echo '<div class="TableDiv">' . htmlspecialchars($row["direccion"]) . '</div>';
            echo '<div class="TableDiv">' . htmlspecialchars($row["fecha_registro"]) . '</div>';

            echo '<div class="TableDiv" style="display: flex;">  
            <form action="updateForm.php" method="POST">

            <input type="hidden" name="action" value="upload">

            <button class="EditButton" name="editId" value="'.htmlspecialchars($row["cliente_id"]).'">
                <svg class="svg-icon" fill="none" height="19" viewBox="0 0 24 24" width="19" xmlns="http://www.w3.org/2000/svg"><g stroke="#a649da" stroke-linecap="round" stroke-width="2"><path d="m20 20h-16"></path><path clip-rule="evenodd" d="m14.5858 4.41422c.781-.78105 2.0474-.78105 2.8284 0 .7811.78105.7811 2.04738 0 2.82843l-8.28322 8.28325-3.03046.202.20203-3.0304z" fill-rule="evenodd"></path></g></svg>
            </button>
            </form>
            
            <button class="tooltip DeleteButton" value="'.htmlspecialchars($row["cliente_id"]).'">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="15px" width="15px">
                    <path fill="#6361D9" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
                <span class="tooltiptext">remove</span>
            </button>
            
        </div>';

        }
    ?>

</div>

</div>

         </body>
<html>

<?php
    die();
?>