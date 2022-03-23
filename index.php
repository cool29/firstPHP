<?php
    $name = "Hamza";

    $greeting = "Hello";
    $greeting = ($name) ? 'Welcome back ' . $name : "Hello";

    $product = "Lollipop";
    $cost = 2;

    for ($i = 1; $i <= 10; $i++) {
        $subtotal = $cost * $i;
        $discount = ($subtotal/100) * ($i * 4);
        $totals[$i] = $subtotal - $discount;
    }


?>
<!DOCTYPE html>

<?php require "includes/header.php";?>
<p><?= $greeting ?></p>
<h2><?= $product ?></h2>
<table>
    <tr>
        <th>Packs</th>
        <th>Price</th>
    </tr>
    <?php foreach ($totals as $quantity => $price) { ?>
        <tr>
            <td>
                <?= $quantity ?>
                pack<?=  ($quantity === 1) ? '' : 's'?>
            </td>

            <td>
                <?= $price ?>

            </td>
        </tr>
    <?php } ?>

</table>

<?php include 'includes/footer.php';?>
