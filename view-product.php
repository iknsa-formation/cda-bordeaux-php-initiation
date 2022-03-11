<?php

require_once 'includes.php';

$product = $connection
    ->query('SELECT * FROM product WHERE id=' . $_GET['id'])
    ->fetch(PDO::FETCH_ASSOC);

require_once 'template_head.php';

?>

<h3> <?= $product["name"] ?> </h3>
<p> Cost price : <?= $product["cost_price"] ?> </p>
<p> Selling price: <?= $product["selling_price"] ?> </p>
<p> Category : <?= $product["category"] ?> </p>