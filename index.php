<?php
require_once 'include.php';

$sql = 'SELECT * FROM `user` ORDER BY `id` DESC LIMIT 5';
$sqlProduct = 'SELECT * FROM `product` ORDER BY `id` DESC LIMIT 5';

$userList = $connection
    ->query($sql)
    ->fetchAll(PDO::FETCH_ASSOC);

$productList = $connection
    ->query($sqlProduct)
    ->fetchAll(PDO::FETCH_ASSOC);

//$user = [
//    "id" => 1,
//    "full_name" => "Jonathan Hunter",
//    "first_name" => "Jonathan",
//    "name" => "Hunter",
//    "gender" => "male",
//    "email" => "jHunter@gmail.com",
//    "+33123456789"
//];

//$query = $connection->prepare("UPDATE `user` SET `full_name`=:full_name WHERE id=:id");
//$query->bindValue('full_name', $user["full_name"]);
//$query->bindValue("id", $user["id"]);
//$result = $query->execute();

//$query = $connection->prepare("SELECT * FROM `user` LIMIT :limit");
//$query->bindValue('limit', $limit);
//$userList = $query->execute();
//var_dump($userList);
//die;

/**
 * @todo Delete User
 * @todo Update user
 *
 * @todo TP M'afficher les 5 derniers produits sur la page d'accueil (id, name, selling_price)
 * @todo Je veux pouvoir cliquer sur un produit et avoir le détail du produit
 * @todo               (name, cost_price, selling_price, category) (sur une nouvelle page)
 *
 * @todo Pagination
 */

?>
<?php
require_once 'template_head.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Users</h3>
    <table>
        <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($userList as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['full_name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <button>
                     <a href="/update-user.php/?id=<?= $user['id'] ?>">Edit</a>
                    </button>
                    <form method="post" action="delete-user.php?id=<?= $user['id'] ?>">
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
            <td>Id</td>
            <td>Name</td>
            <td>Selling price</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($productList as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['selling_price'] ?></td>
                <td>
                    <button>
                        <a href="/detail-product.php/?id=<?= $product['id'] ?>">Detail</a>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>