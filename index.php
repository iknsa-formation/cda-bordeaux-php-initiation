<?php
require_once 'includes.php';

$sql = 'SELECT * FROM `user` ORDER BY `id` DESC LIMIT 5';

$users = $connection
    ->query($sql)
    ->fetchAll(PDO::FETCH_ASSOC);

$sql2 = 'SELECT * FROM `product` ORDER BY `id` DESC LIMIT 5';
$products = $connection
    ->query($sql2)
    ->fetchAll(PDO::FETCH_ASSOC);
/**
 * @todo Edit user
 * @todo Delete User
 *
 * @todo Pagination
 *

* @todo TP M'afficher les 5 derniers produits sur la page d'accueil (id, name, selling_price)
* @todo Je veux pouvoir cliquer sur un produit et avoir le détail du produit
* @todo               (name, cost_price, selling_price, category) (sur une nouvelle page)
*/
?>
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
            <a href="./edit-user.php?id=<?= $user['id'] ?>">Edit user</a>
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
        <th>Name</th>
        <th>Selling Price</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['name'] ?></td>
        <td><?= $product['selling_price'] ?></td>
        <td>
                <a href="./detail-product.php?id=<?= $product['id'] ?>"><button>Detail product</button></a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>