<!-- Controlador -->
<?php
class FrontController
{
   
    static function index()
    { 
        require('../models/modelo.php');
        $conexion = new modelo();
        $producto = $conexion->getProductos();
        require('../views/vista.php');   
    }

}



/*if(isset($_GET['accion'])){
    $accion = $_GET['accion'];
}

if ($accion = "eliminar"){
    if (isset($_GET['id'])){ 
        $id = $_GET['id'];
        $producto =  new modelo();
        $resultado = $producto->eliminarProducto($id);
    }
}elseif ($accion = "guardar") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    echo $nombre;
    echo $precio;
    //$producto =  new modelo();
    //$resultado = $producto->insertProducto($nombre,$precio);
}

function guardar() : Returntype {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    echo $nombre;
    echo $precio;
}
*/
?>
