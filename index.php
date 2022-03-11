<?php

require_once 'includes.php';

$sqlUsers = 'SELECT * FROM `user` ORDER BY `id` DESC LIMIT 5';

$users = $connection
    ->query($sqlUsers)
    ->fetchAll(PDO::FETCH_ASSOC);

$sqlProduct = 'SELECT id, name, selling_price FROM `product` ORDER BY `id` DESC LIMIT 5';

$products = $connection
    ->query($sqlProduct)
    ->fetchAll(PDO::FETCH_ASSOC);

/**
 * @todo Edit user
 * @todo Delete User
 *
 * @todo Pagination
 */
?>

<?php
require_once 'template_head.php';
?>

<h3>Users</h3>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['name'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>

            <a href="/edit-user.php?id=<?= $user['id'] ?>">Edit user</a>

            <form method="post" action="/delete-user.php?id=<?= $user['id'] ?>">
                <button>Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>Products</h3>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>selling_price</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['selling_price'] ?></td>
            <td>

                <a href="/detail-product.php?id=<?= $product['id'] ?>">Detail Product</a>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>