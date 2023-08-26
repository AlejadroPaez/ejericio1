<?php        
        $accion = $_GET['accion'];
        if($accion == "Guardar"){            
            if(isset($_GET['descripcion']) && isset($_GET['precio'])){
                $descripcion = $_GET['descripcion'];
                $precio = $_GET['precio'];
                guardar($descripcion, $precio);
            } 
        }elseif ($accion == "Eliminar") {
            $id = $_GET['id'];
            eliminar($id);
        } elseif ($accion == "Actualizar") {
            $id = $_GET['id'];
            $descripcion = $_GET['descripcion'];
            $precio = $_GET['precio'];
            echo "Entra a Actualizar";
            actualizar($id, $descripcion, $precio);
        }    
    
    
    function guardar($descripcion, $precio) {
        require('../models/modelo.php');
        $producto =  new modelo();
        $resultado = $producto->insertProducto($descripcion, $precio);
        if ($resultado){
           return true;
        }else{
            return false;
        }
    }

    function eliminar($id) {
        require('../models/modelo.php');
        $producto =  new modelo();
        $resultado = $producto->eliminarProducto($id);
        if ($resultado){
           return true;
        }else{
            return false;
        }
    }

    function actualizar($id,$descripcion, $precio) {
        require('../models/modelo.php');
        $producto =  new modelo();
        $resultado = $producto->modificar($id,$descripcion, $precio);
        if ($resultado){
           return true;
        }else{
            return false;
        }
    }
?>