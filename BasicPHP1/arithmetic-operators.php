<?php
    $items = 9;
    $cost = 7;
    $subtotal = $cost * $items;
    $tax = ($subtotal / 100) * 20;
    $total = $subtotal + $tax;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Updating Variables</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <h2>Shopping Cart</h2>
        <p>Items: <?= $cost ?></p>
        <p>Subtotal: $<?= $subtotal ?></p>
        <p>Tax: $<?= $tax ?></p>
        <p>Total: $<?= $total ?></p>
    </body>
</html>