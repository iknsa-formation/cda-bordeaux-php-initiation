<?php
require_once 'includes.php';

$product = $connection
    ->query('SELECT * FROM `product` WHERE id=' . $_GET['id'])
    ->fetch(PDO::FETCH_ASSOC);
?>

<?php
require_once 'template_head.php';
?>

<div>
    <div>
        <h3>
            My product
        </h3>
    </div>
    <div>
        Name : <?= $product['name']?> <br>
        Cost-price : <?= $product['cost_price']?> <br>
        Selling-price : <?= $product['selling_price']?> <br>
        Category : <?= $product['category']?> <br>
    </div>
</div>


