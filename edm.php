<?php
//Eau de Mon
//Montoya, Justine S.
//WD - 202

declare(strict_types=1);
include 'includes/header.php';
require 'requires/fragrances.php';

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? 'Yes' : 'No';
}
function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}
function get_tax_due(float $price, int $quantity, int $tax = 0): float {
    return ($price * $quantity) * ($tax / 100);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $storeName; ?></title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        

        <table>
            <tr>
                <th>Name</th>
                <th>Notes</th>
                <th>Price</th>
                <!-- <th>Best Season</th>
                <th>Best Occasion</th> -->
                <th>Stock</th>
                <th>Reorder?</th>
                <th>Total Value</th>
                <th>Tax Due</th>
            </tr>

            
            <?php foreach ($fragrances as $perfume => $data): ?>
                    <tr>
                        <td><?= $data['name']; ?></td>
                        <td><?= $data['notes']; ?></td>

                    <!-- Price column -->
                    <?php 
                    $discRate = 0.10; //10% discount
                    $discountedPrice = $data['price'] - ($data['price'] * $discRate);?>
                    
                    <td>
                        ₱<?= number_format($data['price'], 2); ?>
                        <br><span style='color:#c0a062; font-weight: bold;'>
                        ₱<?= number_format($discountedPrice, 2); ?> (Sale)</span>                   
                    </td>
                    
                    <!-- Stock column -->
                    <td><?= $data['stock']; ?></td>

                    <!-- Reorder column -->
                    <td><?= get_reorder_message($data['stock']); ?></td>

                    <!-- Total Value column -->
                    <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2); ?></td>

                    <!-- Tax Due column -->
                   <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2); ?></td>
                    </tr>
                
            <?php endforeach; ?>
        </table>
        <?php
        include 'includes/footer.php';?>
    </body>
</html>
