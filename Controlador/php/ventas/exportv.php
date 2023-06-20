<?php
header("Content-Type: application/xml");
header("Content-Disposition: attachment; filename= reporte_ventas.xls");
?>

<div class="contenedorp">
    <table class="tablap">
           <thead>
              <tr>
                <th >NºVenta</th>
                <th >Nombre Producto</th>
                <th >cantidad</th>
                <th >valor total</th>
                <th >ACTUALIZAR</th>
                <th >ELIMINAR</th>
              </tr>
            </thead>
    </table>
</div>
<?php
include_once ("conexv.php");



$tablaBD = "venta";



$resultados = mysqli_query($conn,"SELECT NVenta, NomProducto, CanProduct, ValorVenta FROM $tablaBD");
while($consulta = mysqli_fetch_array($resultados)){
?>
    <div class="contenedorp">
           <table class="tablap"></style>
            <tbody>
             <tr>
               <td ><?php echo $consulta['NVenta']?></td>
               <td ><?php echo $consulta['NomProducto']?></td>
               <td ><?php echo $consulta['CanProduct']?></td>
               <td ><?php echo $consulta['ValorVenta']?></td>
               <td><button name="btn_actualizar" value="">Actualizar</button></td>
               <td><a href="../../vista/php/ventas.php?id=<?= $consulta['NVenta']?>">Eliminar</a></td> 
             </tr>
            </tbody>
         </table>
    </div>
      
<?php
}
mysqli_close($conn);
?>