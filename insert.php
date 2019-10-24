<?php
require 'connection.php';
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
<body class="text-center">
//add action to the action
<form action="" method="get">
    <h1>Welcome to our StudentBook</h1>

    </br>
    <label for="gb-title">Name:</label>
    <input name="name" id="title" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-name">Last Name:</label>
    <input name="last-name" id="name" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-content">User Name:</label>
    <input name="user-name" id="user-name" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-content">gender:</label>
    <input name="gender" id="gender" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-content">linkedin:</label>
    <input name="linkedin" id="linkedin" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-content">github:</label>
    <input name="github" id="github" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-content">email:</label>
    <input name="email" id="email" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-content">preferred_language:</label>
    <input name="preferred_language" id="preferred_language" type="text" maxlength="255" required/></br>


    </br>
    <label for="gb-content">avatar:</label>
    <input name="avatar" id="avatar" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-content">video:</label>
    <input name="video" id="video" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-content">quote:</label>
    <input name="quote" id="quote" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-content">quote_author:</label>
    <input name="quote_author" id="quote_author" type="text" maxlength="255" required/></br>

    </br>
    <label for="gb-date">Date:</label>
    <input name="date" id="date" type="date" maxlength="255" required/></br>

    </br>
    <input type="submit" value="Submit"/></br>
</form>


</body>
</html>
