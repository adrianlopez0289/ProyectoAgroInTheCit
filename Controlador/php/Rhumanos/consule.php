<head>
<link rel="stylesheet" type="styles.css" href="http://localhost/interfasweb3/assets/css/styls2.css">
</head>

<div class="contenedore">
    <table class="tablae">
           <thead>
              <tr>
                <th >ID</th>
                <th >NOMBRE</th>
                <th >APELLIDO</th>
                <th >CORREO</th>
                <th >CONTRASEÑA</th>
                <th >CARGO</th>
                <th >ID CARGO</th>
                <th >ELIMINAR</th>
              </tr>
            </thead>
    </table>
</div>
<?php
include_once ("conexe.php");



$tablaBD = "empleado";



$resultados = mysqli_query($conn,"SELECT ID_Emp , Nombre_Emp, Apellido_Emp, Correo_Emp, Contra_Emp, Cargo_Emp, Id_Usuario FROM $tablaBD ");
while($consulta = mysqli_fetch_array($resultados)){
?>
    <div class="contenedore">
           <table class="tablae"></style>
            <tbody>
             <tr>
               <td ><?php echo $consulta['ID_Emp']?></td>
               <td ><?php echo $consulta['Nombre_Emp']?></td>
               <td ><?php echo $consulta['Apellido_Emp']?></td>
               <td ><?php echo $consulta['Correo_Emp']?></td>
               <td ><?php echo $consulta['Contra_Emp']?></td>
               <td ><?php echo $consulta['Cargo_Emp']?></td>
               <td ><?php echo $consulta['Id_Usuario']?></td>
               <td><a href="../../Vista/php/rhumanos.php?id=<?= $consulta['ID_Emp']?>">Eliminar</a></td> 
             </tr>
            </tbody>
         
         </table>
         
    </div>
      
<?php
}
mysqli_close($conn);
?>
<button><a href="../../Controlador/php/Rhumanos/exporte.php">Exportar Reporte</a></button>
