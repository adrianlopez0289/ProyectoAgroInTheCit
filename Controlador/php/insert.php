<?php
 include_once ("conex.php");

 $documentou = $_POST["idu"];
 $nombreu = $_POST["nombreu"];
 $apellidou = $_POST["apellidou"];
 $correou = $_POST["correou"];
 $contrau = $_POST["contrau"];

 $tablaBD = "usuario";

 $sql = "INSERT INTO $tablaBD (id, nombre, apellido, correo, contra) VALUES ('$documentou','$nombreu','$apellidou','$correou','$contrau')";
if (mysqli_query($conn, $sql)){
    echo "<script languaje='JavaScript'>alert('LOS DATOS SE INCERTARON CORRECTAMENTE'); location.assign('../../Vista/html/plantillalogin.html')</script>";
    echo"<br>";
}else{
    echo "<script languaje='JavaScript'>alert('LOS DATOS SE INCERTARON CORRECTAMENTE'); location.assign('plantillalogin.html').mysqli_connect_error()</script>";
}

?>