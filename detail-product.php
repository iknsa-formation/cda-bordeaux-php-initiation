<?php

require_once 'includes.php';

$product = $connection
    ->query('SELECT * FROM product WHERE id=' . $_GET['id'])
    ->fetch(PDO::FETCH_ASSOC);
?>
<a href="/">Home</a>
<ul>
    <li>name = <?= $product['name'] ?></li>
    <li>cost price = <?= $product['cost_price'] ?></li>
    <li>selling price = <?= $product['selling_price'] ?></li>
    <li>category = <?= $product['category'] ?></li>
</ul>
