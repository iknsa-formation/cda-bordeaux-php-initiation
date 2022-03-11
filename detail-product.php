<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 11/03/2022
 * Time: 12:05
 */

require_once 'includes.php';

$product = $connection
    ->query('SELECT * FROM `product` WHERE id=' . $_GET['id'])
    ->fetch(PDO::FETCH_ASSOC);



?>

<div>
        <p>Name: <?= $product['name'] ?></p>    
        <p>Cost Price : <?= $product['cost_price'] ?></p>
        <p>Selling price: <?= $product['selling_price'] ?></p>
        <p>Category : <?= $product['category'] ?></p>
</div>

<?php
require_once 'template_head.php';
require_once 'user-form.php';