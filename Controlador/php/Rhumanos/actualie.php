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
    
    if ($existe == 0) {
      echo "<script languaje='JavaScript'>alert('el numero de empleado no existe');</script>";
     }else{ 
        $existeusu = 0;
        $resultados = mysqli_query($conn,"SELECT * FROM usuario WHERE  usuario_id = '$cargoide'");
        while($consulta = mysqli_fetch_array($resultados)){
           $existeusu++;
        }
        if($existeusu == 0) {
          echo "<script languaje='JavaScript'>alert('el id de usuario no existe');</script>";
        }else{
          $sql ="UPDATE $tablaBD SET ID_Emp = '$ide', Nombre_Emp = '$nombree', Apellido_Emp = '$apellidoe',
          Correo_Emp = '$correoe', Contra_Emp = '$contraseña',Cargo_Emp = '$cargoe',Id_Usuario = '$cargoide' WHERE  ID_Emp = '$ide'";
          mysqli_query($conn,$sql);
          echo "<script languaje='JavaScript'>alert('los datos se han actualizado');</script>";
        }
      } 
} 


