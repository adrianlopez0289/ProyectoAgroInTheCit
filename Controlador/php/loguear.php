<?php
 include_once ("conex.php");

 session_start();

 $documentou = $_POST["idu"];
 $cargou = $_POST["cargo"];
 $numcargo = $_POST["idcargo"];
 $contrau = $_POST["contrau"];
 $tablaBD = "empleado";

 $sql = "SELECT COUNT(*) AS contar FROM $tablaBD WHERE ID_Emp='$documentou' AND Cargo_Emp='$cargou' AND Contra_Emp='$contrau' AND  Id_Usuario='$numcargo'";
 $consulta = mysqli_query($conn,$sql);
 $array = mysqli_fetch_array($consulta);

 if($array["contar"]>0){
    $_SESSION["cargo"] = $cargou;
    header("location: ../../Vista/php/inicio.php");
 }else{
    echo "<script languaje='JavaScript'>alert('DATOS INCORRECTOS'); location.assign('../../Vista/php/plantillalogin.html')</script>";
    echo"<br>";
 }

?>