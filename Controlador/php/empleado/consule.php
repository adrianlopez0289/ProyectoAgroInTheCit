<head>
<link rel="stylesheet" type="styles.css" href="http://localhost/interfasweb/assets/css/styls2.css">
</head>

<div class="contenedorp">
    <table class="tablap">
           <thead>
              <tr>
                <th >NºProducto</th>
                <th >Nombre</th>
                <th >Precio unitario</th>
                <th >cantidad</th>
                <th >ACTUALIZAR</th>
                <th >ELIMINAR</th>
              </tr>
            </thead>
    </table>
</div>
<?php
include_once ("conexe.php");



$tablaBD = "producto";



$resultados = mysqli_query($conn,"SELECT N_Produ, Nombre_Produ, PrecioUni_produ, cantpro FROM producto");
while($consulta = mysqli_fetch_array($resultados)){
?>
    <div class="contenedorp">
           <table class="tablap"></style>
            <tbody>
             <tr>
               <td ><?php echo $consulta['N_Produ']?></td>
               <td ><?php echo $consulta['Nombre_Produ']?></td>
               <td ><?php echo $consulta['PrecioUni_produ']?></td>
               <td ><?php echo $consulta['cantpro']?></td>
               <td><button name="btn_actualizar" value="">Actualizar</button></td>
               <td><a href="../../Vista/php/productos.php?id=<?= $consulta['N_Produ']?>">Eliminar</a></td> 
             </tr>
            </tbody>
         </table>
    </div>
      
<?php
}
mysqli_close($conn);
?>