<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'connection.php';
require 'insert.php';


// here you call all the functions
// use get or post methods to fill all the variables
// call the connection function
// use the sql file inside the php storm open it with view


session_start();

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    /*    echo '<h2>$_COOKIE</h2>';
        var_dump($_COOKIE);
        echo '<h2>$_SESSION</h2>';
        var_dump($_SESSION);*/
}

whatIsHappening();
$connect = openConnection();

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $username = $_GET ['username'];
    $gender = $_GET ['gender'];
    $linkedin = $_GET ['linkedin'];
    $github = $_GET ['github'];
    $email = $_GET ['email'];
    $preferred_language = $_GET ['preferred_language'];
    $avatar = $_GET ['avatar'];
    $video = $_GET ['video'];
    $quote = $_GET ['quote'];
    $quote_author = $_GET ['quote_author'];
   // $date = $_GET ['date'];
//    $submit = $_GET ['submit'];


    try {
        $prepare = $connect->prepare ('INSERT INTO student (first_name, last_name, username, gender, linkedin, github, email, preferred_language, avatar, video, quote, quote_author ) VALUES (:first_name,:last_name,:username,:gender,:linkedin,:github,:email,:preferred_language,:avatar,:video,:quote,:quote_author)');
       // echo $prepare;
        $var = $prepare->execute([$first_name, $last_name, $username, $gender, $linkedin, $github, $email,$preferred_language, $avatar, $video,$quote ,$quote_author]);
       // echo $var;
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (string)$e->getCode());
    }
}
?>
<table>
<thead>

<tr>
    <td>First name:</td>
    <td>Last name:</td>
    <td>Email:</td>
    <td>Preferred Language:</td>
    <td>PersonalPage:</td>
</tr>
</thead>
<tbody>
<?php
$sqltable = 'SELECT first_name,last_name,email,preferred_language,video FROM student ORDER BY id';

foreach ($connect-> query($sqltable)as $row):?>

    <tr>
        <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['last_name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['preferred_language'] ?></td>
        <td><?php echo $row['video'] ?></td>

    </tr>

<?php endforeach; ?>

</tbody>
</table>