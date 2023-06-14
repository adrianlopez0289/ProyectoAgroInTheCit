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

        <div class="form-boxemp">
            <div class="form-value">
                <form method="post" action="logica/insertar.php">
                    <div class="inputbox">
                        <input type="text" name="id" id="id" required>
                        <label for="">IDENTIFICACION</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="primernombre" id="primernombre" required>
                        <label for="">PRIMER NOMBRE</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="primerapellido" id="primerapellido" required>
                        <label for="">PRIMER APELLIDO</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="segundoapellido" id="segundoapellido" required>
                        <label for="">SEGUNDO APELLIDO</label>
                    </div>
                     <h3 id="sexo">Sexo</h3>
                     <div class="forradio">
                        <input type="radio" id="femenino" name="drone" value="sexo" required>
                        <label for="femenino">FEMENINO</label>
                    </div>
                    <div class="forradio">
                        <input type="radio" id="masculino" name="drone" value="sexo">
                        <label for="masculino">MASCULINO</label>
                    </div>
                    <h3 id="estudio">Estudios</h3>
                    <div class="forchecbox">
                        <input type="checkbox" id="notiene" name="drone" value="estudio">
                        <label for="notiene">NO TIENE</label>
                    </div>
                    <div class="forchecbox">
                        <input type="checkbox" id="tecnico" name="drone" value="estudio">
                        <label for="tecnico">TECNICO</label>
                    </div>
                    <div class="forchecbox">
                        <input type="checkbox" id="universitario" name="drone" value="estudio">
                        <label for="universitario">UNIVERSITARIO</label>
                    </div>
                    <br>
                     <h3 id="archivos">Archivos</h3>
                     <label class="currifo" for="curri">CURRICULUM</label> <br>
                     <div class="forfile">
                        <input type="file" id="curri" name="drone" value="curri" required>
                    </div>
                    <br>
                    <label class="currifo" for="foto">FOTO</label> 
                    <div class="forfile">    
                        <input type="file" id="foto" name="foto" value="foto">
                    </div>
                    <div>
                    <button type="reset">BORRAR</button>
                    </div>
                    <br>
                    <div class="CRUD">
                       <button type="submit" name="btn_insertar" id="btn_insertar">INSERTAR</button>
                        <button>CONSULTAR</button>
                        <button>ACTULIZAR</button>
                        <button>ELIMINAR</button>
                    </div>
                    <br>  
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>