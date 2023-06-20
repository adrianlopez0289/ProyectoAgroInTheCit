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
        <h1>HOME</h1>
        <nav >
            <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="productos.html">Productos</a></li>
                <li><a href="ventas.html">Ventas</a></li>
                <li><a href="Empleados.html">Empleados</a></li>
            </ul>
        </nav>
        <a href="plantillalogin.html" class="btn"><button> LOGIN </button></a>
        
    </header>
    <section>

        <div class="content">
            <h1>AGRO IN THE CITY</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, <br>
                 repellendus eligendi. Perspiciatis veniam dolorem illo totam, tempora,<br>
                  minima minus praesentium ratione molestias repudiandae debitis temporibus omnis vero eveniet suscipit quod. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aliquid architecto sit maiores. <br> Dignissimos excepturi quod, quas facere adipisci nemo nihil laborum, perferendis blanditiis numquam laboriosam in alias ducimus commodi?<br>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quisquam aliquid nulla dolorem aperiam, repudiandae maiores assumenda at delectus. <br>
             Deserunt qui amet voluptatem vel, iusto eum veniam odio <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse accusamus eos tenetur. Sit delectus non rem quasi reiciendis fugiat sint exercitationem doloremque maxime, facilis consectetur aliquid optio, ea accusamus ullam? fuga voluptatibus.</p>

             <button><a href=""></a>Abrir Exposicion</button>

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
                       <button type="submit" name="btn_insertar" id="btn_insertar">INSERTAR</button>
                        
                    </div>
                    <br>  

                </form>
            </div>
        </div>
    </section>
    
</body>
</html>