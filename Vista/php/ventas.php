<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/interfasweb3/assets/css/styls2.css">
    <title>Document</title>
</head>
<body>

    <header class="header">
        <div class="logo">
          <img src="http://localhost/interfasweb/assets/img/loogoagro.png"alt="logo de la compañia " 
          class="logo_img">   
        </div>
        <h1>Rgistro de Ventas</h1>
        <?php
        session_start();
         $cargo = $_SESSION["cargo"];

        echo "<h3>Bienvenido $cargo</h3";
        ?>
        <nav >
            <ul class="nav-links">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="productos.php">Inventarios</a></li>
                <li><a href="#">Ventas</a></li>
                <?php
                 if($cargo == "administrador"){
                ?>    
                    <li><a id="btninav" href="rhumanos.php">Rhumanos</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <a href="../html/plantillalogin.html" class="btn"><button>LOGIN</button></a>
        
    </header>
    <section>
    <div class="content">
    <h1>AGRO IN THE CITY</h1>
    
            <p class="par">En este apartado encontrara todo el sistema de ventas, aqui encontrara una interfaz muy 
                amigable donde podrá hacer el registro de cada venta, ingresando con el número de identificación
                 de cada venta, el nombre de el producto, la cantidad de productos comprados, y el valor total de la
                  venta además de esto el empleado consultar todas las ventas registradas y dando opción de 
                  actualizar cualquier venta o si es necesario eliminarla, por ultimo permite generar un reporte de la
                   venta registrada mediante un botón que aparece al final de la consulta.<br>
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
                        <input type="text" name="numerov" id="id" required>
                        <label for="">NUMERO DE VENTA</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="nomproductv" id="primernombre" required >
                        <label for="">NOMBRE DEL PRODUCTO </label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="cantidadpv" required>
                        <label for="">CANTIDAD DE PRODUCTO COMPRADO </label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="valorv" id="primerapellido" required >
                        <label for="">VALOR DE LA VENTA  </label>
                    </div>
                    <div>
                    <button type="reset">BORRAR</button>
                    </div>
                    <br>
                    <div class="CRUD">
                    <button type="submit" name="btn_insertarv" id="btn_insertar">INSERTAR</button>
                        <button name="btn_actualiv">ACTULIZAR</button>
                    </div>
                    <br>  
                </form>
                <form action="ventas.php" method="POST">
                <button name="btn_consulv" id="btn_consultar">CONSULTAR</button>
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