
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/interfasweb/assets/css/styls2.css">
</head>
<body>

    <header class="header">
        <div class="logo">
          <img src="http://localhost/interfasweb/assets/img/loogoagro.png" alt="logo de la compañia " 
          class="logo_img">   
        </div>
        <h1>Rgistro de Productos</h1>
        <nav >
            <ul class="nav-links">
                <li><a href="../html/inicio.html">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="ventas.php">Ventas</a></li>
                <li><a href="empleados.php">Empleados</a></li>
            </ul>
        </nav>
        <a href="../html/plantillalogin.html" class="btn"><button> LOGIN </button></a>
        
    </header>
    <section>
    <div class="content">
    <h1>AGRO IN THE CITY</h1>
    
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, <br>
                 repellendus eligendi. Perspiciatis veniam dolorem illo totam, tempora,<br>
                  minima minus praesentium ratione molestias repudiandae debitis temporibus omnis vero eveniet suscipit quod. <br>
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
                        <input type="text" name="numerop" id="id" >
                        <label for="">IDENTIFICACION DEL PRODUCTO </label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="nombrep" id="primernombre" >
                        <label for="">NOMBRE DEL PRODUCTO</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="preciounip" id="primerapellido" >
                        <label for="">VALOR UNITARIO </label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="cantidadp" id="primerapellido" >
                        <label for="">CANTIDAD DE INGRESO</label>
                    </div>

                    <div >
                        <button type="reset">BORRAR</button>
                    </div>
                    <br>
                    <div class="CRUD">
                       <button type="submit" name="btn_insertar" value="insertar"><span>INSERTAR</span></button>
                       <button  name="btn_consul" value="insertar"><span>CONSULTAR</span></button>
                       <button  name="btn_actuali" value="Actualizar">ACTUALIZAR</span></button>

                    </div>
                    <br>
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

