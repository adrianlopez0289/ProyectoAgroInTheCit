<?php
include_once ("conex.php");

$ide = $_POST["idemp"];
$nombree = $_POST["nombrep"];
$segunnE = $_POST["preciounip"];
$cantprop = $_POST["cantidadp"];

$tablaBD = "producto";

if($numerop =="" or $nombrep == "" or $preciounip =="" or $cantprop == ""){
    echo "<script languaje='JavaScript'>alert('todos los datos son Obligatorios');</script>";

}else{

  $existe = 0;
  $resultados = mysqli_query($conn,"SELECT * FROM $tablaBD WHERE  N_Produ = '$numerop'");
  while($consulta = mysqli_fetch_array($resultados)){
    $existe++;
   }
   if ($existe == 0) {
    echo "<script languaje='JavaScript'>alert('el numero de producto no existe');</script>";
   }else{
        $sql ="UPDATE $tablaBD SET N_Produ = '$numerop', Nombre_Produ = '$nombrep', PrecioUni_produ = '$preciounip',
        cantpro = '$cantprop' WHERE  N_Produ = '$numerop'";

     mysqli_query($conn,$sql);
     echo "<script languaje='JavaScript'>alert('los datos se han actualizado');</script>";

   }


}
