<?php
require "conexion.php";

// Si no recibimos un ID, mostramos el catálogo.
$id = (int) ($_GET["id"] ?? 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>MI TIENDA</h1>
        <p>Los Mejores productos de tecnologia</p>
    </header>
    <main class="contenedor">
        <?php if ($id == 0):?>
          <h2 class="titulo">Nuestros Productos</h2>
          <div class="productos">
            <?php
              $resultado=$conexion->query("SELECT * FROM productos ORDER BY id");
              while ($producto = $resultado ->fetch_assoc()):
             ?>
               <div class="producto">
                 <div class="imagen">
                    <?= ($producto["icono"])?>
                 </div>
                 <h2>
                    <?= ($producto['nombre'])?>
                 </h2>
                 <p class="precio">
                    S/ <?= $producto['precio']?>
                 </p>
                 <a class="boton" href="index.php?id=<?=$producto["id"]?>">
                    Ver Detalle
                 </a>
               </div>
             <?php endwhile;?>
          </div>
          <?php else:?>
            <h2 class="titulo">Detalle del Producto</h2>
            <div class="detalle">
                <?php
                 $resultado=$conexion->query("SELECT * FROM PRODUCTOS where id=$id");
                 $producto=$resultado->fetch_assoc();
                 if ($producto) {
                    ?>
                    <div class="imagen-detalle">
                        <?= htmlspecialchars($producto["icono"]) ?>
                    </div>

                    <h2>
                       <?= htmlspecialchars($producto["nombre"]) ?>
                    </h2>

                    <p class="precio">
                        S/ <?= $producto["precio"] ?>
                    </p>
                    <p>
                        <?= $producto["descripcion"] ?>
                    </p>
                    <?php } else { ?>
                      <h3>Producto no encontrado</h3>
                   <?php }?>   
                   <br>
                   <a class="boton volver" href="index.php">
                    Volver a la tienda
                   </a>
            </div>
          <?php endif;?>  
    </main>   
</body>
</html>