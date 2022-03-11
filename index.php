<?php

require_once 'includes.php';

$sql_user = 'SELECT * FROM `user` ORDER BY `id` DESC LIMIT 5';

$users = $connection
    ->query($sql_user)
    ->fetchAll(PDO::FETCH_ASSOC);

$sql_product = 'SELECT * FROM `product` ORDER BY id DESC LIMIT 5';

$products = $connection->query($sql_product)->fetchAll(PDO::FETCH_ASSOC);

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

<h3>Product</h3>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>ACTION</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['name'] ?></td>
        <td><?= $product['selling_price'] ?></td>
        <td>
            <a href="/detail-product.php?id=<?= $product['id'] ?>">view more</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>


</body>
</html>