<?php
 include_once ("conexv.php");

 $numerov = $_POST["numerov"];
 $nombrepv = $_POST["nomproductv"];
 $cantidadpv = $_POST["cantidadpv"];
 $valorv = $_POST["valorv"];

 $tablaBD = "venta";

 $existe = 0;

 if($numerov =="" or $nombrepv == "" or $cantidadpv =="" or $valorv == ""){
    echo "<script languaje='JavaScript'>alert('todos los datos son Obligatorios');</script>";

}else{
    $existe = 0;
    $resultados = mysqli_query($conn,"SELECT * FROM $tablaBD WHERE  NVenta = '$numerov'");
    while($consulta = mysqli_fetch_array($resultados)){
      $existe++;
     }
     if ($existe == 1) {
      echo "<script languaje='JavaScript'>alert('el numero de venta ya existe');</script>";
     }else{
        $sql = "INSERT INTO $tablaBD (NVenta, NomProducto, CanProduct, ValorVenta) VALUES ('$numerov','$nombrepv','$cantidadpv','$valorv')";
        if (mysqli_query($conn, $sql)){
            echo "<script languaje='JavaScript'>alert('LOS DATOS SE INCERTARON CORRECTAMENTE'); location.assign('../../Vista/php/ventas.php')</script>";
            echo"<br>";
        }else{
            echo "<script languaje='JavaScript'>alert('LOS DATOS NO INCERTARON CORRECTAMENTE'); location.assign('../../Vista/php/ventas.php').mysqli_connect_error()</script>";
        }
     }
    
}