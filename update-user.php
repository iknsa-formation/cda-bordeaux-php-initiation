<?php
echo 'Update';
require_once 'include.php';

$sql = 'SELECT * FROM `user` WHERE id=' . $_GET['id'];

$user = $connection
    ->query($sql)
    ->fetch(PDO::FETCH_ASSOC);

if (mb_strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $updateUser = $connection->prepare(
        "UPDATE `user` 
                SET `full_name`=:full_name, 
                    `first_name`=:first_name, 
                    `name`=:name, 
                    `gender`=:gender, 
                    `email`=:email, 
                    `phone`=:phone 
                WHERE id=:id"
    );
    $updateUser->bindValue('id', $user['id']);
    $updateUser->bindValue('full_name', $_POST['first_name'] . ' ' . $_POST['name']);
    $updateUser->bindValue('first_name', $_POST['first_name']);
    $updateUser->bindValue('name', $_POST['name']);
    $updateUser->bindValue('gender', $_POST['gender']);
    $updateUser->bindValue('email', $_POST['email']);
    $updateUser->bindValue('phone', $_POST['phone']);

    $updateUser->execute();

    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit;
}

?>
<?php
require_once 'template_head.php';
?>
<?php
require_once 'template_form.php';
?>

