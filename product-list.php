<?php

$sqlProduct = 'SELECT * FROM `product` ORDER BY `id` DESC LIMIT 5';

$productList = $connection
    ->query($sqlProduct)
    ->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
require_once 'template_head.php';
?>

<h3>Products</h3>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Selling Price</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($productList as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['selling_price'] ?></td>
            <td>
                <a href="/product-details.php?id=<?= $product['id'] ?>">
                    <button>
                        Product detail
                    </button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
