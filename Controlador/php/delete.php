<?php
include_once("conex.php");


$tablaBD = "producto";

if(!empty($_GET["id"])){
    $id = $_GET["id"];
    $sql =$conn ->query("DELETE FROM $tablaBD WHERE N_Produ = $id ");
    if($sql == 1){
        echo "<script languaje='JavaScript'>alert('persona eliminada Correctamente');</script>";
    }else{
        echo "<script languaje='JavaScript'>alert('LOS DATOS SE INCERTARON CORRECTAMENTE'); location.assign('../../Vista/php/productos.php')</script>";
    }

} 
?>