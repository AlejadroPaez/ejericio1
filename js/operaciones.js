function divActualizar() {
    document.getElementById("contenido").style.display = "none";
    $("#tablaContenido").delegate("tr", "click", function(e) {
        var posicionTabla = $(e.currentTarget).index() + 1;                
        var id = $('#tablaContenido').find('tr').eq(posicionTabla).find('td').eq(0).text();
        var descripcion = $('#tablaContenido').find('tr').eq(posicionTabla).find('td').eq(1).text();
        var precio = $('#tablaContenido').find('tr').eq(posicionTabla).find('td').eq(2).text();

        document.getElementById("modal").style.display = "flex";
        document.getElementById("divid").value = id;
        document.getElementById("divdescripcion").value = descripcion;
        document.getElementById("divprecio").value = precio;

        
    });
}

function Guardar() {
    descripcion = document.getElementById("descripcion").value ;
    precio = document.getElementById("precio").value ;
    $.ajax({
        type: "GET", 
        url: "../controllers/operaciones.php",                       
        data: {
            descripcion: descripcion,
            precio: precio,
            accion: "Guardar"
        },
    success: function( respuesta ) {
        alert("Registro guardado");
        window.location.reload()
    },
    error: function(request, status, error){
            alert("Error: Could not delete");
        }
    });
}

function eliminar() {
        if(confirm("Confirma la eliminación")){
            $("#tablaContenido").delegate("tr", "click", function(e) {
            var posicionTabla = $(e.currentTarget).index() + 1;                
            var id = $('#tablaContenido').find('tr').eq(posicionTabla).find('td').eq(0).text();
            $.ajax({
                type: "GET", 
                url: "../controllers/operaciones.php",                       
                data: {
                    id: id,
                    accion: "Eliminar"
                },
            success: function( respuesta ) {
                alert("Registro Elimnado");
                window.location.reload()
            },
            error: function(request, status, error){
                    alert("Error: Could not delete");
                }
             });
            });
        }
            
}

function actualizar() {    
    id = document.getElementById("divid").value ;
    descripcion = document.getElementById("divdescripcion").value ;
        precio = document.getElementById("divprecio").value ;
        $.ajax({
            type: "GET", 
            url: "../controllers/operaciones.php",                       
            data: {
                id: id,
                descripcion: descripcion,
                precio: precio,
                accion: "Actualizar"
            },
        success: function( respuesta ) {
            alert("Registro Actualziado");
            window.location.reload()
        },
        error: function(request, status, error){
                alert("Error: Could not delete");
            }
        });
}