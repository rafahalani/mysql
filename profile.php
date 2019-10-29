<?php
require 'connection.php';
$userId = $_GET['user'];
$fetch = $connect->prepare('SELECT * FROM student WHERE ID=:id');

$fetch->execute(['id'=>$userId]);
$user = $fetch->fetch();

?>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile</title>
    </head>
    <body>

<?php echo "Welcome to " . $user['first_name'] . " Profile " .  "<br>" ?>

<?php echo $user['first_name'] . "<br>" ?>
<?php echo $user['last_name'] . "<br>" ?>
<?php echo $user['email'] . "<br>" ?>
<?php echo $user['quote'] . "<br>" ?>

<?php echo $user['avatar'] ?>

    </body>
    </html>
