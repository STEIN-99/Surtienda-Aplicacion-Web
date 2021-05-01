<?php
	session_start();
	include 'conexion.php';

	if(isset($_SESSION['carrito'])){
		if(isset($_GET['ID_PRODUCTOS'])){

            $arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){

						if($arreglo[$i]['ID_PRODUCTOS']==$_GET['ID_PRODUCTOS']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";


				       $re=("SELECT * FROM productos WHERE ID_PRODUCTOS=".$_GET['ID_PRODUCTOS']);
					   $mos=mysqli_query($con,$re);
						while ($f=mysqli_fetch_array($mos)) {
							$nombre=$f['NOMBRE'];
							$precio=$f['PRECIO_UNIT'];
							$imagen=$f['IMG'];
						}
						$datosNuevos=array('id'=>$_GET['ID_PRODUCTOS'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}

	}else{
		if(isset($_GET['ID_PRODUCTOS'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=("SELECT * FROM productos WHERE ID_PRODUCTOS=".$_GET['ID_PRODUCTOS']);
			$mos=mysqli_query($con,$re);
			while ($f=mysqli_fetch_array($mos)) {
				$nombre=$f['NOMBRE'];
				$precio=$f['PRECIO_UNIT'];
				$imagen=$f['IMG'];
			}
			$arreglo[]=array('ID_PRODUCTOS'=>$_GET['ID_PRODUCTOS'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>


<?php

session_start();
include 'BaseDatos.php';

if (!$_SESSION) {
header("Location:  Login.html");
}


 ?>


<!DOCTYPE html>
<html
  <head>
    <meta>
    <title>Surtienda</title>

      <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/catalogo.css">
    <script type="text/javascript" src="js/sweetAlert.js"></script>
    <script type="text/javascript" src="js/sesion.js"></script>
    <link rel="stylesheet" href="css/Sinicio.css">

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

      <a class="navbar-brand" href="Inicio1.php">
        <img src="img/Surtiendamx.jpg" width="200" height="50" alt="">
      </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  </div>

  <form class="form-inline">
<a href="#" class="btn btn-warning" role="button"><?php echo "".$_SESSION['usua']; ?></a>

<a href="carritodecompras.php" class="btn btn-warning " role="button">Mis compras</a>
   </form>
</nav>


<!-- Catalogo de productos -->
<div class="wrap">

      <h1>Detalle del Producto</h1>
      <section class="products-list">

				<?php
					$total=0;
					if(isset($_SESSION['carrito'])){
					$datos=$_SESSION['carrito'];

					$total=0;
					for($i=0;$i<count($datos);$i++){

			?>
						<div class="producto">
							<center>
								<!-- <img src="./productos/<?php echo $datos[$i]['Imagen'];?>">-->
								<img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($datos[$i]['Imagen']); ?>"/><br>
								<span><?php echo $datos[$i]['Nombre'];?></span><br>
								<span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
								<span>Cantidad:
									<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
									data-precio="<? echo $datos[$i]['Precio'];?>"
									data-id="<? echo $datos[$i]['ID_PRODUCTOS'];?>"
									class="cantidad"></span><br>


								<span>Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>



		                        <a href="./carritodecompras.php?ID_PRODUCTOS=<?php  echo $datos[$i]['ID_PRODUCTOS']?>">+ Agregar</a>

							</center>
						</div>

						</section>
						<br>
						<br>

					<?php
						$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
					}

					}else{
						echo '<center><h2>No has añadido ningun producto</h2></center>';
					}

					echo '<center><h2>Total: '.$total.'</h2></center>';

			// 		if($total!=0){
			// 		echo '<center><a href="compras.php" class="aceptar">Comprar</a></center>;';
			// }
			// 	?>
				<center><a href="	Inicio1.php">Ver catalogo</a></center>





</div>
<!-- Catalogo de productos -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/sesion.js"></script>
    <script type="text/javascript" src="js/sweetAlert.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js" ></script>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

  </body>
</html>
