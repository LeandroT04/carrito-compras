<?php
session_start();

$products = [
    1 => ["name" => "Producto 1", "price" => 10],
    2 => ["name" => "Producto 2", "price" => 20],
    3 => ["name" => "Producto 3", "price" => 30],
];

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Tu Carrito</h1>
    <div class="cart">
        <?php if (empty($cart)) { ?>
            <p>Tu carrito está vacío.</p>
        <?php } else { ?>
            <ul>
                <?php foreach ($cart as $id => $quantity) { ?>
                    <li>
                        <?php echo $products[$id]["name"]; ?> - Cantidad: <?php echo $quantity; ?>
                        <form action="remove_from_cart.php" method="post" style="display:inline;">
                            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                            <button type="submit">Eliminar</button>
                        </form>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
    <a href="index.php">Volver a la tienda</a>
</body>
</html>
