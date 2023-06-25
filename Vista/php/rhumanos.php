<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/interfasweb3/assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/styls2.css">
    <title>Document</title>
</head>
<body>

    <header class="header">
        <div class="logo">
          <img src="http://localhost/interfasweb/assets/img/loogoagro.png" alt="logo de la compañia " 
          class="logo_img">   
        </div>
        <h1>Registro de Usario</h1>
        <?php
        session_start();
         $cargo = $_SESSION["cargo"];

        echo "<h3>Bienvenido $cargo</h3";
        ?>
        <nav >
            <ul class="nav-links">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="productos.php">Inventario</a></li>
                <li><a href="ventas.php">Ventas</a></li>
                <?php
                 if($cargo == "administrador"){
                ?>    
                    <li><a id="btninav" href="#">Rhumanos</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <a href="../html/plantillalogin.html" class="btn"><button> LOGIN </button></a>
        
    </header>
    <section>
    <div class="contente">
    <h1>AGRO IN THE CITY</h1>
            <p class="par">En este apartado el administrador podrá ingresar nuevos empleados con diferentes campos como
                 el número de documento el nombre y apellido el correo, la contraseña, el cargo y el id de cargo  los 
                cuales se usarán para poder iniciar sesión en el sistema dependiendo el rol que se le sea asignado,
                 estos mismos se podrán consultar para por si hay que hacer alguna actualización o eliminar algún
                  empleado, así mismo también se puede exportar un reporte el cual mostrara todos los datos de los
                  empleados en el sistema<br>
                  <br>  
            <?php
              include_once("../../Controlador/php/conex.php");
             include_once("../../Controlador/php/Rhumanos/deletee.php");
             ?> 
        <?php
        if (isset($_POST["btn_consule"])){
            include_once ("../../Controlador/php/Rhumanos/consule.php");
            }
        ?>
    </div>
        <div class="form-boxemp">
            <div class="form-value">
                <form action="rhumanos.php" method="POST">
                <h1>Recursos humanos</h1>
                    <div class="inputbox">
                        <input type="text" name="idemp" id="id" required>
                        <label for="">IDENTIFICACION</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="nombreemp" id="primernombre" required>
                        <label for="">PRIMER NOMBRE</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="apellemp" id="primerapellido" required>
                        <label for="">PRIMER APELLIDO</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="correoemp" id="primerapellido" required>
                        <label for="">CORREO</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="contraemp" id="primerapellido" required>
                        <label for="">CONTRASEÑA</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="cargoemp" id="primerapellido" required>
                        <label for="">CARGO</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="idcargoemp" id="primerapellido" required>
                        <label for="">CARGO ID</label>
                    </div>
                    <div>
                    <button type="reset">BORRAR</button>
                    </div>
                    <br>
                    <div class="CRUD">
                       <button type="submit" name="btn_insertar" id="btn_insertar">INSERTAR</button>
                        <button name="bt_nactuali">ACTULIZAR</button>
                    </div>
                    <br>  
                </form>
                <form action="rhumanos.php" method="POST">
                    <button name="btn_consule">CONSULTAR</button>
                </form>
                <?php
                    if (isset($_POST["btn_insertar"])){
                        include_once ("../../Controlador/php/Rhumanos/insertare.php");
                    }
                    if (isset($_POST["bt_nactuali"])){
                        include_once ("../../Controlador/php/Rhumanos/");
                    }
                     ?>
            </div>
        </div>
    </section>
    
</body>
</html>
</html>