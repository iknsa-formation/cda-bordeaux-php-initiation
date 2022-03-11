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
        <form method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?= isset($user) ? $user['name'] : '' ?>">
            </div>
            <div>
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="<?= isset($user) ? $user['first_name'] : '' ?>">
            </div>

            <div>
                <label for="gender-male">Male</label>
                <input type="radio" name="gender" id="gender-male" value="male"   <?= isset($user) && $user['gender'] === 'male' ? 'checked="checked"' : '' ?>>
                <label for="gender-female">Female</label>
                <input type="radio" name="gender" id="gender-female" value="female"   <?= isset($user) && $user['gender'] === 'female' ? 'checked="checked"' : '' ?>>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?= isset($user) ? $user['email'] : '' ?>">
            </div>

            <div>
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone"  value="<?= isset($user) ? $user['phone'] : '' ?>">
            </div>

            <div><input type="submit" value="Envoyer"></div>
        </form>
    </body>
</html>

