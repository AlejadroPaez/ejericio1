<!-- Modelo -->
<?php
  class modelo{

      private $conexion;

      public function __construct(){
        $this->conexion = new mysqli('localhost', 'root', '', 'ejercicio1');
      }

      public function getProductos(){
        $query = $this->conexion->query('SELECT T0.id, T0.nombre, T0.precio, T1.tasa, (T0.precio * (T1.tasa/100)) AS "impuesto" 
            FROM productos T0 LEFT JOIN impuestos T1 ON T1.id = T0.impuestosId');

        $retorno =[];
        $i = 0;

        while($fila = $query->fetch_assoc()){
          $retorno[$i] = $fila;
          $i++;
        }

        return $retorno;
      }

      public function insertProducto($producto, $precio){
        $consulta = "INSERT INTO productos (nombre, precio, impuestosId) VALUE ('$producto', $precio,1)";
          $resultado = $this->conexion->query($consulta);
          if ($resultado) {
              return true;
          }else {
              return false;
          }
      }

      public function modificar($id, $descripcion, $precio)
      {
        $consulta = "UPDATE productos set  nombre='" . $descripcion . "', precio=" . $precio . " where id=" .$id;
        echo $consulta;
        $resultado = $this->conexion->query($consulta);
        if ($resultado) {
          return true;
        }else {
            return false;
        }
      }

      public function eliminarProducto($id){
        $consulta = "DELETE from productos where id = ".$id;
        echo $consulta;
        $resultado = $this->conexion->query($consulta);
        if ($resultado) {
          return true;
        }else {
          return false;
      }
      }
    }
  ?>
