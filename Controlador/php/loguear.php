<?php
 include_once ("conex.php");

 session_start();

 $documentou = $_POST["idu"];
 //$nombreu = $_POST["nombreu"];
 $correou = $_POST["correou"];
 $contrau = $_POST["contrau"];

 $tablaBD = "usuario";

 $sql = "SELECT COUNT(*) AS contar FROM $tablaBD WHERE id='$documentou' AND correo='$correou' AND contra='$contrau'";
 $consulta = mysqli_query($conn,$sql);
 $array = mysqli_fetch_array($consulta);

 if($array["contar"]>0){
 // $_SESSION["nomre"] = $nombreu;
    header("location: ../../Vista/php/productos.php");
 }else{
    echo "<script languaje='JavaScript'>alert('DATOS INCORRECTOS'); location.assign('../../Vista/html/plantillalogin.html')</script>";
    echo"<br>";
 }

?>