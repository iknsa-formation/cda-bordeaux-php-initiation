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


?>
<?php
require_once 'template_head.php';
?>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Selling Price</th>
        <th>Cost Price</th>
        <th>Category</th>
    </tr>
    </thead>
    <tbody>

        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['selling_price'] ?></td>
            <td><?= $product['cost_price'] ?></td>
            <td><?= $product['category'] ?></td>
        </tr>

    </tbody>
</table>