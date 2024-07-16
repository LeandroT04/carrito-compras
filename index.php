<?php
require_once 'Product.php';
$product = new Product();
$products = $product->getProducts();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tienda</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Productos Disponibles</h1>
    <div class="products">
        <?php foreach ($products as $product) { ?>
            <div class="product">
                <h2><?php echo $product["name"]; ?></h2>
                <p>Precio: $<?php echo $product["price"]; ?></p>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product["id"]; ?>">
                    <button type="submit">Añadir al Carrito</button>
                </form>
            </div>
        <?php } ?>
    </div>
    <a href="cart.php">Ver Carrito</a>
</body>
</html>


