<?php

require_once 'includes.php';


$product = $connection
    ->query('SELECT * FROM product WHERE id=' . $_GET['id'])
    ->fetch(PDO::FETCH_ASSOC);

?>
<?php
require_once 'template_head.php';
?>

    <div>
        <p>id: <?= $product['id'] ?></p>
        <p>Name: <?= $product['name'] ?></p>
        <p>Cost Price : <?= $product['cost_price'] ?></p>
        <p>Selling price: <?= $product['selling_price'] ?></p>
        <p>Category : <?= $product['category'] ?></p>
    </div>


