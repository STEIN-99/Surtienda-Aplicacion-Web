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
    <!-- Solo para iconos -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- //Solo para iconos-->
    <link rel="stylesheet" href="../css/ayuda.css">
    <link rel="stylesheet" href="../css/Inicio.css">
    <title>Surtienda</title>
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



<!-- Categoria de productos -->
<div class="wrap">
        <h1>Consultas frecuentes</h1>
        
        <ul class="pan">
        <li class="pan-item">
            <a href="Usuario.php" class="pan-links">Inicio</a>
        </li>
        <li class="pan-item">
        <a href="ayudaUsua.php" class="pan-links">Ayuda</a>
        </li>
    </ul>
    <br>

		<div class="store-wrapper">
			<div class="category_list">
				<a  class="category_item"  onclick="mostrarConsulta();">Consulta de prodcutos</a>
				<a  class="category_item"  onclick="mostrarServicios();">Servicios</a>
				<a  class="category_item"  onclick="mostrarQuienes();">¿Quienes somos?</a>
				<a  class="category_item"  onclick="mostrarConsultas();">Consultas de pedidos</a>
				<a  class="category_item"  onclick="mostrarcancelar();">¿Se puede cancelar pedidos en caja?</a>
				<a  class="category_item"  onclick="mostrarGarantias();">Garantias de productos</a>
			</div>
			<section class="products-list">

				<div id="Consulta" class="product-item" style="display:none">
					<a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                    <a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                    <a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                    <a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                    <a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                </div>
                
                
				<div id="Servicios" class="product-item" category="smartphones" style="display:none">
					<a>Servicios Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro accusamus vel ipsa placeat odio. Exercitationem impedit facere, quis mollitia veniam velit dicta necessitatibus, labore vero fugiat, facilis molestias asperiores quas?</a>
                    <a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                    <a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                    <a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                </div>
                
				<div id="Quienes" class="product-item" category="smartphones" style="display:none">
					<a>Quienes Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga architecto libero at excepturi aut veritatis distinctio eius ut possimus laboriosam amet, esse optio? Possimus mollitia corrupti rerum blanditiis dolorum molestias.</a>
                    <a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                    <a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                </div>
                
				<div id="Consultas" class="product-item" category="ordenadores" style="display:none">
					<a>Consultas Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, reprehenderit aperiam. Iure, soluta, deserunt error harum debitis culpa eius a quis sed ullam voluptatem suscipit officiis ipsam libero assumenda at.</a>
                    <a>Consulta Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis sed commodi dolore? Quae saepe ipsam nihil, neque iste corrupti harum, asperiores optio ducimus numquam sequi aut obcaecati adipisci quibusdam laudantium?</a>
                </div>
                
				<div id="cancelar" class="product-item" category="ordenadores" style="display:none">
					<a>Cancelar Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nihil cupiditate autem natus eaque tenetur deserunt. Et eligendi suscipit nesciunt non, reiciendis doloribus culpa amet inventore laudantium aut asperiores officiis.</a>
                </div>
                
				<div id="Garantias" class="product-item" category="monitores" style="display:none">
					<a>Garantias Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa error nemo quo accusamus eligendi quisquam ratione quos delectus, quia ipsum odit commodi reprehenderit iste iure vitae exercitationem minus incidunt.</a>
                </div>
                
			</section>
		</div>
	</div>
<!-- Finaliza listado de productos -->
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
<script src="../js/ayuda.js"></script>
<script src="../js/inicio.js"></script>

</body>
</html>