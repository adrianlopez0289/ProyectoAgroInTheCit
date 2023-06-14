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

        <div class="form-box">
            <div class="form-value">
                <h1>Facturacion </h1>
                <form method="post" action="logica/insertar.php">
                    <div class="inputbox">
                        <input type="text" name="id" id="id" required>
                        <label for="">NUMERO DE VENTA</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="primernombre" id="primernombre" required>
                        <label for="">NOMBRE DEL PRODUCTO </label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="primerapellido" id="primerapellido" required>
                        <label for="">VALOR DE LA VENTA  </label>
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