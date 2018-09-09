<?php
    include_once 'db-connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert into DB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="signup.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="Email">
    <br>
    <input type="text" name="username" placeholder="Username">
    <br>
    <input type="password" name="password" placeholder="Password">
    <br>
    <button type="submit" name="submit">Submit</button>
</form>



</body>
</html>