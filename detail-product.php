<?php

require_once 'includes.php';

$product = $connection
    ->query('SELECT name, cost_price, selling_price, category FROM product WHERE id=' . $_GET['id'])
    ->fetch(PDO::FETCH_ASSOC);

require_once 'template_head.php';
?>

<h3>Product : <?= $product['name'] ?></h3>

<table>
    <thead>
    <tr>
        <th>cost_price</th>
        <th>selling_price</th>
        <th>category</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $product['cost_price'] ?></td>
            <td><?= $product['selling_price'] ?></td>
            <td><?= $product['category'] ?></td>
        </tr>
    </tbody>
</table>