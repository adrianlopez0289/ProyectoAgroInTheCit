<?php
include_once("conexe.php");


$tablaBD = "empleado";

if(!empty($_GET["id"])){
    $id = $_GET["id"];
    $sql =$conn ->query("DELETE FROM $tablaBD WHERE ID_Emp  = $id ");
    if($sql == 1){
        echo "<script languaje='JavaScript'>alert('venta eliminada Correctamente');</script>";
    }else{
        echo "<script languaje='JavaScript'>alert('NO SE PUDO ELIMINAR LA VENTA'); location.assign('../../../vista/php/ventas.php')</script>";
    }

} 
?>