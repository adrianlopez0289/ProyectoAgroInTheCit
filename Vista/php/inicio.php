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
          <img src="http://localhost/interfasweb/assets/img/loogoagro.png" alt="logo de la compañia " 
          class="logo_img">   
        </div>
        <h1>HOME</h1>
        <?php
        session_start();
         $cargo = $_SESSION["cargo"];

         function Rol($usuario){
            echo "<h3>Bienvenido $usuario</h3";
         }
         Rol($cargo);
        ?>
        <nav >
            <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="productos.php">Inventario</a></li>
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
            <p class="par">"Agro in The City" es una empresa líder en el sector de alimentos saludables y se enorgullece de
                ofrecer a sus clientes una amplia variedad de verduras y frutas de la más alta calidad, nos hemos
                 posicionado como un mercado confiable y de confianza para satisfacer las necesidades de una 
                 clientela exigente y consciente de su salud. <br>
                <br>
              Nuestra misión es promover un estilo de vida saludable y equilibrado al proporcionar productos
               naturales y frescos, directamente del campo a la mesa de nuestros clientes además de atender la
                fuerte demanda del consumo de alimentos saludables en la ciudad. Trabajamos en estrecha 
                colaboración con agricultores, quienes cultivan nuestras verduras y frutas con dedicación y 
                cuidado, siguiendo prácticas agrícolas sostenibles y respetuosas con el medio ambiente. <br>
                <br>
                En " Agro in The City ", trabajamos siempre por mejorar y por ofrecer mejores servicios, por eso
                 hemos creado un sistema de información en donde se administran apartados como facturación de 
                 ventas, inventarios y gestión de nuestros empleados, con el fin de ofrecer un mejor servicio tanto 
                 como para los clientes como para empleados de nuestra compañía.</p>

             <div class="btnextra">
             <a href="https://prezi.com/view/Hpg4w9KGQtBxbpypPmpz/">Abrir Exposicion</a>
             <a href="../../controlador/vista/css/html/php/er404.php">Error 404</a>
             <a href="er500.php">Error 500</a> 
             </div>
            
        </div>

        <div class="form-box">
            <div class="form-value">
                <form method="post" action="logica/insertar.php">
                    <h1> Novedades y reportes </h1>
                    <div class="inputbox">
                        <input type="text" name="id" id="id" required>
                        <label for="">IDENTIFICACION</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="primernombre" id="primernombre" required>
                        <label for=""> NOMBRE</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="primerapellido" id="primerapellido" required>
                        <label type="mail" for="">CORREO</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="primerapellido" id="primerapellido" required>
                        <label for="">DESCRIPCION </label>
                    </div>
                    <div>
                        <button type="reset">BORRAR</button>
                    </div>
                    <br>
                    <div class="CRUD">
                       <button type="submit" name="btn_insertar" id="btn_insertar">ENVIAR</button>
                        
                    </div>
                    <br>  

                </form>
            </div>
        </div>
    </section>
    
</body>
</html>