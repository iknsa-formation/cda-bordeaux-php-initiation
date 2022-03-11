<?php
//require_once 'include.php';
//if (mb_strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
//    $deleteUser = $connection->prepare(
//        "DELETE FROM `user` WHERE id=:id;"
//    );
//    $deleteUser->bindValue('id', $_GET['id']);
//
//    $deleteUser->execute();
//    header('Location: /');
//    exit;
//}
//?>

<!--//prof version-->
<?php

require_once 'include.php';

if (strtolower($_SERVER['REQUEST_METHOD']) !== 'post') {
    echo '<h3>La méthode n\'est pas autorisé</h3>';
    die;
}

$query = $connection->prepare(
    'DELETE FROM `user` WHERE `id`=:id'
);

$query->bindValue('id', $_GET['id']);

if (!$query->execute()) {
    echo "La suppression ne s'est pas bien passé";
    die;
}

header('Location: /');
exit;
?>
