<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 11/03/2022
 * Time: 12:05
 */

require_once 'includes.php';

$product = $connection
    ->query('SELECT * FROM product WHERE id=' . $_GET['id'])
    ->fetch(PDO::FETCH_ASSOC);

require_once 'template_head.php';

echo "<p>Name</p><p>" . $product['name'] .
    "</p><p>cost price</p><p>" . $product['cost_price'] .
    "</p><p>selling price</p><p>" . $product['selling_price'] .
    "</p><p>category</p><p>" . $product['category'] . "</p>"
;
