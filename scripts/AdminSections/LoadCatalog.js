// Making switch interactive
    document.getElementById('CatalogSwitch').addEventListener('change', ChangeCatalog);

    function ChangeCatalog() {
        console.log('hola');
        const TableSpace = document.querySelector('.TableContent');
        var LoadCatalog = new XMLHttpRequest;
    
        if(this.checked){
            LoadCatalog.open('GET', '/PI/AdminCode/SeccionesCatalogo/CatalogoVentas.php', true);
        }
    
        else{
            LoadCatalog.open('GET', '/PI/AdminCode/SeccionesCatalogo/CatalogoInventario.php', true);
        }
    
        LoadCatalog.onload = function() {
            if(this.status = 200){
                TableSpace.innerHTML = LoadCatalog.responseText;
            }
        }
    
        LoadCatalog.send();
    }

// Making Add Item Button interactive

document.getElementById('CatalogoForm').addEventListener('click', OpenForum);
