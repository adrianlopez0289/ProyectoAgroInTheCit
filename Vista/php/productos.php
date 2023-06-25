
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/interfasweb3/assets/css/styls2.css">
</head>
<body>

    <header class="header">
        <div class="logo">
          <img src="http://localhost/interfasweb/assets/img/loogoagro.png" alt="logo de la compañia " 
          class="logo_img">   
        </div>
        <h1>Rgistro de Productos</h1>
        <?php
        session_start();
         $cargo = $_SESSION["cargo"];

        echo "<h3>Bienvenido $cargo</h3";
        ?>
        <nav >
            <ul class="nav-links">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="#">Inventario</a></li>
                <li><a href="ventas.php">Ventas</a></li>
                <?php
                 if($cargo == "administrador"){
                ?>    
                    <li><a id="btninav" href="rhumanos.php">Rhumanos</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <a href="../html/plantillalogin.html" class="btn"><button> LOGIN </button></a>
        
    </header>
    <section>
    <div class="content">
    <h1>AGRO IN THE CITY</h1>
    
            <p class="par">"En este apartado encontrara todo el sistema de Inventariado, en este podrá registrar cualquier tipo 
                de productos que llegue a la tienda, estos será ingresados principalmente con un número de 
                identificación para cada producto, el nombre del producto seguido del valor unitario y por ultimo
                 la cantidad de producto que llega y así poder tener todos los productos de una forma ordenada 
                 además de esto podrá consultar cada producto y si hay algún error lo podrá consultar o modificar,
                  por ultimo al final de la consulta encontrara un botón con el cual podrá generar un reporte de la consulta realizada.    <br>
<br>
              <?php
              include_once("../../Controlador/php/conex.php");
             include_once("../../Controlador/php/delete.php");
             ?>    
        <?php
        if (isset($_POST["btn_consul"])){
            include_once ("../../Controlador/php/consulp.php");
            }
        ?>
    </div>
        <div class="form-box">
            <div class="form-value">
                <form action="productos.php" method="POST">
                    <h1>Inventariado</h1>
                    <div class="inputbox">
                        <input type="text" name="numerop" id="id" required >
                        <label for="">IDENTIFICACION DEL PRODUCTO </label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="nombrep" id="primernombre" required >
                        <label for="">NOMBRE DEL PRODUCTO</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="preciounip" id="primerapellido" required>
                        <label for="">VALOR UNITARIO </label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="cantidadp" id="primerapellido" required >
                        <label for="">CANTIDAD DE INGRESO</label>
                    </div>

                    <div >
                        <button type="reset">BORRAR</button>
                    </div>
                    <br>
                    <div class="CRUD">
                       <button type="submit" name="btn_insertar" value="insertar"><span>INSERTAR</span></button>
                       
                       <button  name="btn_actuali" value="Actualizar">ACTUALIZAR</span></button>

                    </div>
                    <br>
                </form>
                <form action="productos.php" method="POST">
                    <button  name="btn_consul" value="insertar"><span>CONSULTAR</span></button>
                </form>
                   <?php
                    if (isset($_POST["btn_insertar"])){
                        include_once ("../../Controlador/php/insertp.php");
                    }
                    if (isset($_POST["btn_actuali"])){
                        include_once ("../../Controlador/php/actualip.php");
                      
                    }
                     ?>
            </div>
        </div>
    </section>    
</body>
</html>
<?php

