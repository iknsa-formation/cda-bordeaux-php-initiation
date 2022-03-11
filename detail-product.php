<?php
echo 'Product';
require_once 'include.php';

var_dump($_GET['id']);
$sql = 'SELECT * FROM `product` WHERE id=' . $_GET['id'];
$product = $connection
    ->query($sql)
    ->fetch(PDO::FETCH_ASSOC);
var_dump($product);
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
    <h1><?= $product['name']?></h1>
    <section>
        <p>Prix coûtant: <?= $product['cost_price']?> $</p>
        <p>Prix de vente: <?= $product['selling_price']?> $</p>
        <p>Categorie: <?= $product['category']?></p>
    </section>
</body>
</html>
