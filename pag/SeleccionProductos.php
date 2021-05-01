
<?php
include '../funciones/BaseDatos.php';
$idv=$_REQUEST['ID_MARCAS'];
?>


<!-- Categoria de productos -->
<div class="wrap">

    <h1>Categorias</h1>
    <div class="store-wrapper">
    <?php
       $prod="SELECT * FROM marcas";
    $most=mysqli_query($con,$prod);
    while($varia1=mysqli_fetch_array($most)){
    ?>
    <div class="category_list">
        <a onclick="mostrarProductos(<?php echo $varia1['ID_MARCAS']?>)" class="category_item" ><?php echo $varia1[1] ?></a>
    </div>
<?php } ?>
</div>

<!-- Breadcrumbs -->
<?php
    $prod="SELECT * FROM marcas WHERE ID_MARCAS='$idv' ";
    $most=mysqli_query($con,$prod);
    while($varia1=mysqli_fetch_array($most)){
    ?>

    <ul class="pan">
        <li class="pan-item">
            <a href="Index.php" class="pan-links">Inicio</a>
        </li>
        <li class="pan-item">
        <a onclick="mostrarProductos(<?php echo $varia1['ID_MARCAS']?>)" class="pan-links" ><?php echo $varia1[1]?></a>
        </li>

    </ul>
    <?php } ?>


<!-- Listado de productos -->
    <h1>Productos</h1>
    <section class="products-list">
        <?php
           $sucur="SELECT * FROM producto WHERE ID_MARCAS='$idv' ";
            $mos=mysqli_query($con,$sucur);
            while($varia1=mysqli_fetch_array($mos)){
        ?>
        <div class="product-item" category="<?php echo $varia1[1]?>">
            <img height="250px" src="<?php echo ($varia1[4]); ?>"/>
            <br>
                <button type="button" class="btn "><?php echo $varia1[2]?>
            <br>
                    $<?php echo $varia1[5]?></button>
        </div>

<?php } ?>

    </section>
</div>
