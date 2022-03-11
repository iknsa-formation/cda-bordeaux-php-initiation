<?php

require_once 'includes.php';

$page = intval(isset($_GET['page']) ? $_GET['page'] : 1);

$previous = $page - 1;
$next = $page + 1;

$startingAt = ($page - 1) * 5;

$sql = 'SELECT * FROM `user` ORDER BY `id` ASC LIMIT ' . $startingAt . ', 5';

$users = $connection
    ->query($sql)
    ->fetchAll(PDO::FETCH_ASSOC);

$sql = 'SELECT COUNT(*) AS count FROM `user`';
$countUser = $connection->query($sql)->fetch(PDO::FETCH_ASSOC);
$nbUser = $countUser['count'];

$numberOfPages = ceil($nbUser / 5);

/**
 * @todo Edit user
 * @todo Delete User
 *
 * @todo Pagination
 *
 *
 * @todo TP M'afficher les 5 derniers produits sur la page d'accueil (id, name, selling_price)
 * @todo Je veux pouvoir cliquer sur un produit et avoir le détail du produit
 * @todo               (name, cost_price, selling_price, category) (sur une nouvelle page)
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
    <tfoot>
        <?php if ($page > 1) : ?>
        <a href="<?= '/?page=' . $previous ?>">Précédent</a>
        <?php endif; ?>

        <?php if ($page < $numberOfPages): ?>
        <a href="<?= '/?page=' . $next ?>" style="margin-left: 15px">Suivant</a>
        <?php endif; ?>
    </tfoot>
</table>
</body>
</html>