<?php
include 'funciones/BaseDatos.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Solo para iconos -->
    <!-- //Solo para iconos-->
    <link rel="stylesheet" href="css/catalogo.css">
    <link rel="stylesheet" href="css/Ayuda.css">
    <link rel="stylesheet" href="css/Inicio.css">
    <title>Surtienda</title>
</head>
<body>

<!-- Menu de navegacion -->
<header>
<nav>
    <div class="logo" >
    <a href="Index.php">
    <img src="img/Logo/Surtiendamx.jpg" width="200" height="50" alt="">
    </a>
    </div>

    <ul class="navbar">
                <li><button onclick="mostrarSucursales()">Sucursales</button></li>
                <li><button onclick="mostrarAyuda()">Ayuda</button></li>
                <li><a onmouseover="Mostrarinfo()" class="activo" href="formularios/Login.html">Inicio de sesión</a></li>
            </ul>
            
    <div class="navbarh">
        <div class="linea1"></div>
        <div class="linea2"></div>
        <div class="linea3"></div>
    </div>
</nav>


<!-- Detalle amarillo -->
<nav class="nav2">
    <ul class="navbar">
            </ul>
</nav>

<!--
<form action="funciones/busqueda1.php" method="get" class="form_busqueda">
    <input type="text" name="busqueda" id="busqueda" class="" placeholder="Entra todo lo que necesites">
    <input type="submit" value="buscar" class="btn_buscar">
</form>
-->

<!-- Banner -->
<div class="banner-contenedor">
        <div class="banner fade">
            <img id="logo" src="img/Slider/slider2.jpg" onmouseover="newimg()"
            onmouseout="vimg()">
        </div>
</div>



<div id="contenido" class="contenido">

<!-- Categoria de productos -->
<div class="wrap">
    <h1  onmouseover="Mostrarcate()" >Categorias</h1>
    <div class="store-wrapper">
    <?php
       $prod="SELECT * FROM marcas";
        $most=mysqli_query($con,$prod);
    while($varia1=mysqli_fetch_array($most)){
    ?>

    <div class="category_list">
    <a onclick="mostrarProductos(<?php echo $varia1['ID_MARCAS']?>)" class="category_item" ><?php echo $varia1[1]?></a>
    </div>
    <?php } ?>
</div>

<!-- Listado de productos -->

    <h1>Productos</h1>
    <section class="products-list">
        <?php
           $sucur="SELECT * FROM producto";
            $mos=mysqli_query($con,$sucur);
        while($varia1=mysqli_fetch_array($mos)){
        ?>
        <div class="product-item" category="<?php echo $varia1[1]?>">
        <img class="imga" height="250px" src="<?php echo ($varia1[4]); ?>"/>
        <br>
        <button type="button" class="btn "><?php echo $varia1[2]?>
        <br>
                    $<?php echo $varia1[5]?></button>
        </div>

<?php } ?>

        </section>
</div>
<!-- Finaliza listado de productos -->
</div>

<!-- Pie de pagina -->
<footer class="footer">

        <div class="content">
            <div class="left box">
                <h2>Sobre nosotros</h2>
                <br>
                    <div class="contenido">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quae nihil et odio numquam architecto molestias recusandae soluta porro quod atque dolorum, consectetur facilis placeat, optio ipsa vero sed eaque.</p>

                    <br>    
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        </div>
                    </div>

                    <br>
                    <h2>Navegacion</h2>  
                    <br> 
                        <a href="Index.php">Inicio</a>
                        <br>
                        <br>
                        <a  onclick=" mostrarSucursales()">Sucursales</a>
                        <br>
                        <br>
                        <a href="Index.php">Productos</a>
                        <br>
                        <br>
                        <a onclick="mostrarAyuda()">Ayuda</a>
                        <br>
                        <br>
                        <a href="formularios/Login.html">Usuario</a>

            </div>
                <div class="Central box">
                    <h2>Direccion</h2>
                    <br>
                    <div class="contenido">
                        <div class="Lugares">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">&nbsp; Av General Augusto Cesar Sandino 318, Primero de Mayo, 86190 Villahermosa, Tab.</span>
                        </div>
                        <br>
                        <div class="Telefono">
                            <span class="fas fa-calendar-check"></span>
                            <span class="text"> &nbsp;Horario de atencion via telefonica Lunes 8:00 am a 7:00 pm y Domingos de 8:00 a 2:00 pm</span>
                        </div>
                        <br>
                        <div class="Telefono">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text"> &nbsp;+(52)9931808288 o 3159198</span>
                        </div>
                        <br>
                    </div>
                </div>
                    <div class="right box">
                        <h2>Contactanos</h2>
                        <br>
                        <div class="contenido">
                        <form id="form">
                            <div class="email">
                                <div  class="text">Correo electronico</div>
                                    <input id="correo" name="correo" type="email">
                            </div>
                            <div class="msg">
                            <div class="text">Mensaje</div>
                            <textarea id="mensaje" name="mensaje" cols="25" rows="2"></textarea>
                            </div>
                            <div class="btn">
                                <button type="submit">Enviar</button>
                            </div>
                            <br>
                        </form>
                        </div>
                    </div>
        </div>
            <div class="bottom">
                <center>
                    <span class="creditos">Todos los derechos reservados por Comercializadora De Alimentos Varios S.A. De C.V. | &copy; 2021</span>
                </center>
            </div>
</footer>





<script src="../Ejemplo2/Tabla-ajax.js"></script>
<script src="js/validarcontactanos.js"></script>
<script src="js/ContenidoInicio.js"></script>
<script src="js/ayuda.js"></script>
<script src="js/inicio.js"></script>

</body>
</html>