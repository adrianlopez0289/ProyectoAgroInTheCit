<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/interfasweb2/assets/css/styls2.css">
    <title>Document</title>
</head>
<body>

    <header class="header">
        <div class="logo">
          <img src="http://localhost/interfasweb/assets/img/loogoagro.png"alt="logo de la compañia " 
          class="logo_img">   
        </div>
        <h1>Rgistro de Ventas</h1>
        <nav >
            <ul class="nav-links">
                <li><a href="../html/inicio.html">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="#">Ventas</a></li>
                <li><a href="empleados.php">Empleados</a></li>
            </ul>
        </nav>
        <a href="../html/plantillalogin.html" class="btn"><button>LOGIN</button></a>
        
    </header>
    <section>
    <div class="content">
    <h1>AGRO IN THE CITY</h1>
    
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, <br>
                 repellendus eligendi. Perspiciatis veniam dolorem illo totam, tempora,<br>
                  minima minus praesentium ratione molestias repudiandae debitis temporibus omnis vero eveniet suscipit quod. <br>
                  <?php
              include_once("../../Controlador/php/conex.php");
             include_once("../../Controlador/php/ventas/deletev.php");
             ?>    
        <?php
             if (isset($_POST["btn_consulv"])){
            include_once ("../../Controlador/php/ventas/consulv.php");
            }
        ?>
    </div>
        <div class="form-box">
            <div class="form-value">
                <h1>Facturacion </h1>
                <form action="ventas.php" method="POST">
                    <div class="inputbox">
                        <input type="text" name="numerov" id="id">
                        <label for="">NUMERO DE VENTA</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="nomproductv" id="primernombre" >
                        <label for="">NOMBRE DEL PRODUCTO </label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="cantidadpv" >
                        <label for="">CANTIDAD DE PRODUCTO COMPRADO </label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="valorv" id="primerapellido" >
                        <label for="">VALOR DE LA VENTA  </label>
                    </div>
                    <div>
                    <button type="reset">BORRAR</button>
                    </div>
                    <br>
                    <div class="CRUD">
                    <button type="submit" name="btn_insertarv" id="btn_insertar">INSERTAR</button>
                        <button name="btn_consulv" id="btn_consultar">CONSULTAR</button>
                        <button name="btn_actualiv">ACTULIZAR</button>
                    </div>
                    <br>  
                </form>
                <?php
                if(isset($_POST["btn_insertarv"])){
                    include_once("../../Controlador/php/ventas/insertarv.php");
                }
                if (isset($_POST["btn_actualiv"])){
                    include_once ("../../Controlador/php/ventas/actualiv.php");
                  
                }
                ?>
            </div>
        </div>
    </section>
    
</body>
</html>