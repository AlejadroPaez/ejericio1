<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ejercicio 1</title>
</head>
<body>
<div class="container">
  <section class="cuerpo">
    <div class="row">
      <div>
        <div>
        <h3>Agregar nuevo producto</h3>
        <div id="0">
          <form action="../controllers/controlador.php?accion=guardar" method="POST">
            <label for="">Producto</label><input type="text">
            <label for="">Precio</label><input type="text">
            <!--<input type="submit" id="btnGuardar" value="Guardar">-->
            <input type="button" id="guardar" value="Guardar">
          </form>
        </div>
        <h3>Contenido</h3>
        <table>
          <thead>
            <tr>
              <td>id</td>
              <td>Producto</td>
              <td>Precio</td>
              <td>tasa IVA</td>
              <td>IVA</td>
              <td>Precio + IVA</td>
            </tr>
          </thead>
          <tbody>
              <?php
                $total = 0;
                foreach($producto as $producto){
                  echo "<tr>";
                    $total = $producto['precio'] + $producto['impuesto'];
                    echo "<td>" . $producto['id'] . "</td>";
                    echo "<td>" . $producto['nombre'] . "</td>";
                    echo "<td>" .'$'. $producto['precio'] . "</td>";
                    echo "<td>" . $producto['tasa'] . "</td>";
                    echo "<td>" .'$'. $producto['impuesto'] . "</td>";
                    echo "<td>" .'$'. $total . "</td>";
                    //echo "<td><a href='../controllers/controlador.php?accion=eliminar&id=".$producto['id']."'>ELIMINAR</a><td>";
                    echo "<td> <input type='button' value='Eliminar' id='eliminar'> </td>";       
                    echo "<td> <input type='button' value='Modificar' id='modificar'> </td>";                    
                  echo "</tr>";
                }
              ?>
          </tbody>
        </table>           
        </div>
      </div>
    </div>
  </section>
  </div>
</div>
</div>
</section>
</div>
</body>
</html>
<style>
body{
    margin: auto;
    display: flex;
    justify-content: center;
    background: #CCCCCC;
}
section{
  width:100%;
}

input[type=button]{
    margin: 0 auto;
    width: 5.5em;
    height: 2em;
    border-radius: 10px;
    border: none;
    font-size: 12px;
    font-weight: bold;
}

label{
    margin: 2em;
    font-size: 1.2em;
    font-weight: bold;
}

input[type=text]{
    border-radius: 10px;
    height: 1.5em;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
    border: none;
    font-size: 1em;
}

#modificar{        
    background: #e6e064;
    color: black;
} 
#eliminar{        
    background: #cc333f;
    color: white;
} 
#guardar{   
    margin-left: 5px;     
    background: #04AA6D;
    color: white;
} 

.cuerpo{
  margin-top: 5em;
  background: blue;
}
</style>
