<?php
session_start();
include '../funciones/BaseDatos.php';
?>

<?php

if (!$_SESSION) {
header("Location:  ../formularios/Login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/catalogo.css">
    <link rel="stylesheet" href="../css/Inicio.css">
    <title>Sucursales Surtienda</title>
</head>
<body>

<!-- Menu de navegacion -->
<header>
<nav>
    <div class="logo" >
    <a href="Usuario.php">
    <img src="../img/Logo/Surtiendamx.jpg" width="200" height="50" alt="">
    </a>
    </div>

    <ul class="navbar">
                <li><a class="activo" href="SucursalesUsua.php">Sucursales</a></li>
                <li><a class="activo" href="ayudaUsua.php">Ayuda</a></li>
                <li><a class="activo" href="#"><?php echo "".$_SESSION['usua']; ?></a></li>
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



<!-- Banner -->
<div class="banner-contenedor">
        <div class="banner fade">
            <img src="../img/Slider/slider2.jpg" alt="">
        </div>
</div>

<!-- Breadcrumbs -->
<div class="wrap">
<br>
  <ul class="pan">
        <li class="pan-item">
            <a href="Usuario.php" class="pan-links">Inicio</a>
        </li>
        <li class="pan-item">
        <a href="SucursalesUsua.php" class="pan-links">Sucursales</a>
        </li>
    </ul>


<!-- Ubicacion de sucursales -->

<center>
  <h2>Surtienda</h2>
  <br>
  <p>Av General Augusto Cesar Sandino 318, Primero de Mayo, 86190 Villahermosa, Tab.</p></center>
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121476.39938321263!2d-92.97389754425315!3d17.925740517915283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd1932632a53ae9!2sSurtienda!5e0!3m2!1ses-419!2smx!4v1554788546499!5m2!1ses-419!2smx" width="1050" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</center>
<br>

<center>
  <br>
  <br>
  <h2>Surtienda</h2>
  <br>
  <p>Sur Tienda
Carr. Villahermosa la Isla, Miguel Hidalgo III Etapa, 86127 Villahermosa, Tab.</p></center>
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121476.39938321263!2d-92.97389754425315!3d17.925740517915283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe264bed9c1334726!2sSur+Tienda!5e0!3m2!1ses-419!2smx!4v1554788660184!5m2!1ses-419!2smx" width="1050" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</center>
<br>

<center>
<br>
<h2>Surtienda</h2>
<br><center>
<p>Aquiles Calderón Marchena 416, Gaviotas Sur Sector San Jose, 86090 Villahermosa, Tab.</p></center>
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014.2464734003067!2d-92.91094247079207!3d17.974755174882098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd9b3b41b4d25%3A0x6d6feb153e3add5f!2sD&#39;stella!5e1!3m2!1ses-419!2smx!4v1554789736932!5m2!1ses-419!2smx" width="1050" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</center>
</div>
<!-- Ubicacion de sucursales -->
<br>
<br>
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
                    <a href="Usuario.php">Inicio</a>
                        <br>
                        <br>
                        <a href="SucursalesUsua.php">Sucursales</a>
                        <br>
                        <br>
                        <a href="Usuario.php">Productos</a>
                        <br>
                        <br>
                        <a href="ayudaUsua.php">Ayuda</a>
                        <br>
                        <br>
                        <a href="Usuario.php">Usuario</a>

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



<script src="../js/validarcontactanos.js"></script>
<script src="../js/inicio.js"></script>

</body>
</html>