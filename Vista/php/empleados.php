<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/interfasweb/assets/css/styls2.css">
    <title>Document</title>
</head>
<body>

    <header class="header">
        <div class="logo">
          <img src="http://localhost/interfasweb/assets/img/loogoagro.png" alt="logo de la compañia " 
          class="logo_img">   
        </div>
        <h1>Registro de Usario</h1>
        <nav >
            <ul class="nav-links">
                <li><a href="../html/inicio.html">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="ventas.php">Ventas</a></li>
                <li><a href="#">Empleados</a></li>
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
             include_once("");
             ?>    
        <?php
        if (isset($_POST["btn_consule"])){
            include_once ("../../Controlador/empleado/consule.php");
            }
        ?>
    </div>
        <div class="form-boxemp">
            <div class="form-value">
                <form action="empleados.php" method="POST">
                    <div class="inputbox">
                        <input type="text" name="idemp" id="id" required>
                        <label for="">IDENTIFICACION</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="pnombreemp" id="primernombre" required>
                        <label for="">PRIMER NOMBRE</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="snombreemp" id="primerapellido" required>
                        <label for="">PRIMER APELLIDO</label>
                    </div>
                    <div>
                    <button type="reset">BORRAR</button>
                    </div>
                    <br>
                    <div class="CRUD">
                       <button type="submit" name="btn_insertar" id="btn_insertar">INSERTAR</button>
                        <button name="btn_consule">CONSULTAR</button>
                        <button name="ACTUAL">ACTULIZAR</button>
                        <button>ELIMINAR</button>
                    </div>
                    <br>  
                </form>
                <?php
                    if (isset($_POST["btn_insertar"])){
                        include_once ("../../Controlador/php/insertp.php");
                    }
                    if (isset($_POST["ACTUAL"])){
                        include_once ("../../Controlador/empleado/actualie.php");
                    }
                     ?>
            </div>
        </div>
    </section>
    
</body>
</html>