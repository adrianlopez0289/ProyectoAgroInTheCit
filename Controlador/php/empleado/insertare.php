<?php
 include_once ("conexe.php");

 $ide = $_POST["idemp"];
 $nombree = $_POST["nombrep"];
 $segunnE = $_POST["preciounip"];
 $cantprop = $_POST["cantidadp"];

 $tablaBD = "empleado";

 $existe = 0;

 if($numerop =="" or $nombrep == "" or $preciounip =="" or $cantprop == ""){
    echo "<script languaje='JavaScript'>alert('todos los datos son Obligatorios');</script>";

}else{
    $existe = 0;
    $resultados = mysqli_query($conn,"SELECT * FROM $tablaBD WHERE  ID_Emp = '$ide'");
    while($consulta = mysqli_fetch_array($resultados)){
      $existe++;
     }
     if ($existe == 1) {
      echo "<script languaje='JavaScript'>alert('el numero de producto ya existe');</script>";
     }else{
        $sql = "INSERT INTO $tablaBD (N_Produ , Nombre_Produ, PrecioUni_produ, cantpro) VALUES ('$numerop','$nombrep','$preciounip','$cantprop')";
        if (mysqli_query($conn, $sql)){
            echo "<script languaje='JavaScript'>alert('LOS DATOS SE INCERTARON CORRECTAMENTE'); location.assign('../../Vista/php/productos.php')</script>";
            echo"<br>";
        }else{
            echo "<script languaje='JavaScript'>alert('LOS DATOS SE INCERTARON CORRECTAMENTE'); location.assign('../../Vista/php/productos.php').mysqli_connect_error()</script>";
        }

     }
    
}

 

?>