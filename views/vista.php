<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="../js/operaciones.js"></script>
    <link href="../css/estilos.css" rel="stylesheet" type="text/css" />    
    <script src="../js/code.jquery.com_jquery-3.7.0.min.js"></script>
</head>
<body>
    <div>
        <div id="contenido">
            <div id="divAgregar">
                    <label for="nombre">Producto</label><input id="descripcion" type="text">
                    <label for="precio">Precio</label><input id="precio" type="text">
                    <!--<input type="submit" id="btnGuardar" value="Guardar">-->
                    <button type="submit" onclick="Guardar()" id="guardar" >Guardar</button>                    
            </div>
            <div id="divTabla">
                <hr></hr>  
                <h3>Contenido</h3>
                <table id="tablaContenido">
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
                                echo "<td>" . $producto['precio'] . "</td>";
                                echo "<td>" . $producto['tasa'] . "</td>";
                                echo "<td>" . $producto['impuesto'] . "</td>";
                                echo "<td>" . $total . "</td>";
                                //echo "<td><a href='../controllers/controlador.php?accion=eliminar&id=".$producto['id']."'>ELIMINAR</a><td>";
                                //echo "<td> <input type='button' value='Eliminar' id='eliminar'> </td>";                                       
                                //echo "<td> <input type='button' value='Modificar' id='modificar'> </td>";  
                                echo "<td> <button type='submit' onclick='eliminar()' id=eliminar >Eliminar</button></td>";          
                                echo "<td> <button type='submit' onclick='divActualizar()' id='btndivActualizar' >Actualizar</button></td>";                            
                            echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>     
            </div>
        </div>
    </div>
    <div id="modal" style="display:none">
        <div id="divActualizar" >
            <input id="divid" type="text" style="display:none">
            <label for="nombre">Producto</label><input id="divdescripcion" type="text">
            <label for="precio">Precio</label><input id="divprecio" type="text">
            <button type="submit" onclick="actualizar()" id="guardar" >Actualizar</button>                    
        </div>
    </div>
    
</body>
</html>