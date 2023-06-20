<?php
include_once ("conexv.php");

$numerov = $_POST["numerov"];
$nombrepv = $_POST["nomproductv"];
$cantidadpv = $_POST["cantidadpv"];
$valorv = $_POST["valorv"];

$tablaBD = "venta";

if($numerov =="" or $nombrepv == "" or $cantidadpv =="" or $valorv == ""){
    echo "<script languaje='JavaScript'>alert('todos los datos son Obligatorios');</script>";

}else{

  $existe = 0;
  $resultados = mysqli_query($conn,"SELECT * FROM $tablaBD WHERE  NVenta = '$numerov'");
  while($consulta = mysqli_fetch_array($resultados)){
    $existe++;
   }
   if ($existe == 0) {
    echo "<script languaje='JavaScript'>alert('el numero de venta no existe');</script>";
   }else{
    
        $sql ="UPDATE $tablaBD SET NVenta = '$numerov', NomProducto = '$nombrepv', CanProduct = '$cantidadpv',
        ValorVenta = '$valorv' WHERE  NVenta = '$numerov'";

     mysqli_query($conn,$sql);
     echo "<script languaje='JavaScript'>alert('los datos se han actualizado');</script>";

   }


}