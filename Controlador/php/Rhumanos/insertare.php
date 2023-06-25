<?php
 include_once ("conexe.php");

 $ide = $_POST["idemp"];
 $nombree = $_POST["nombreemp"];
 $apellidoe= $_POST["apellemp"];
 $correoe = $_POST["correoemp"];
 $contraseña = $_POST["contraemp"];
 $cargoe = $_POST["cargoemp"];
 $cargoide = $_POST["idcargoemp"];

 $tablaBD = "empleado";

 $existe = 0;

 if($ide =="" or $nombree == "" or $apellidoe =="" or $correoe == "" or $contraseña =="" or $cargoe =="" or $cargoide == ""){
    echo "<script languaje='JavaScript'>alert('todos los datos son Obligatorios');</script>";

}else{
    $existe = 0;
    $resultados = mysqli_query($conn,"SELECT * FROM $tablaBD WHERE  ID_Emp = '$ide'");
    while($consulta = mysqli_fetch_array($resultados)){
      $existe++;
    }
    
    if ($existe == 1) {
      echo "<script languaje='JavaScript'>alert('el numero de empleado ya existe');</script>";
     }else{ 
        $existeusu = 0;
        $resultados = mysqli_query($conn,"SELECT * FROM usuario WHERE  usuario_id = '$cargoide'");
        while($consulta = mysqli_fetch_array($resultados)){
           $existeusu++;
        }
        if($existeusu == 1){
            $sql = "INSERT INTO $tablaBD (ID_Emp , Nombre_Emp, Apellido_Emp, Correo_Emp, Contra_Emp, Cargo_Emp, Id_Usuario) VALUES ('$ide','$nombree','$apellidoe','$correoe','$contraseña','$cargoe','$cargoide')";
             if (mysqli_query($conn, $sql)){
                  echo "<script languaje='JavaScript'>alert('LOS DATOS SE INCERTARON CORRECTAMENTE'); location.assign('../../Vista/php/rhumanos.php')</script>";
                  echo"<br>";
            }else{
                   echo "<script languaje='JavaScript'>alert('LOS DATOS SE INCERTARON CORRECTAMENTE'); location.assign('../../Vista/php/rhumanos.php').mysqli_connect_error()</script>";
            }
        }else{
            echo "<script languaje='JavaScript'>alert('el id el usuario no existe');</script>";
        }
           

     }
    
}

 

?>