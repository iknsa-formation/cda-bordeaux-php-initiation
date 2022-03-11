<?php
require_once 'includes.php';

$product = $connection
    ->query('SELECT * FROM `product` WHERE id=' . $_GET['id'])
    ->fetch(PDO::FETCH_ASSOC);

require_once 'template_head.php';
?>

<H2><?= $product['name']?></H2>
<p>Cost Price : <?= $product['cost_price']?></p>
<p>Selling Price : <?= $product['selling_price']?></p>
<p>Category : <?= $product['category']?></p>

