<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>User Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- form action is the code that will be run when submit button is clicked -->
<h2>Signup</h2>
<form action="signup.php" method="POST">
    <?php
        // if the form is submitted, use the GET method to return the form data back to the form
        if (isset($_GET['first'])) {
        $first = $_GET['first'];   
        // Note the syntax for placing the variable into the value attribute
        echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'">';
        } 
        else {
        echo '<input type="text" name="first" placeholder="Firstname">';
        }

        if (isset($_GET['last'])) {
        $last = $_GET['last'];   
        echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'">';
        } 
        else {
        echo '<input type="text" name="last" placeholder="Lastname">';
        }
    
        if (isset($_GET['email'])) {
        $email = $_GET['email'];   
        echo '<input type="text" name="email" placeholder="Email" value="'.$email.'">';
        } 
        else {
        echo '<input type="text" name="email" placeholder="Email">';
        }

        if (isset($_GET['uid'])) {
        $uid = $_GET['uid'];   
        echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
        } 
        else {
        echo '<input type="text" name="uid" placeholder="Username">';
        }
    ?>
    <!-- Chosen not to return the password to the form -->
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
/*
 $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
 if (strpos($fullUrl, "signup=empty") == TRUE) {
    echo "<p class='error'>You did not complete all fields</p>";
    exit();
 }
 elseif (strpos($fullUrl, "signup=char") == TRUE) {
    echo "<p class='error'>You used invalid characters</p>";
    exit();
 }
 elseif (strpos($fullUrl, "signup=invalid-email") == TRUE) {
    echo "<p class='error'>You used an invalid email</p>";
    exit();
 }
 elseif (strpos($fullUrl, "signup=success") == TRUE) {
    echo "<p class='success'>You have been signed up!</p>";
    exit();
 }
 */

//  alternative approach where user-entered data is retained in the form fields

if (!isset($_GET['signup'])) {
    exit();
} else {
    $signupCheck = $_GET['signup'];

    if ($signupCheck == "empty") {
        echo "<p class='error'>You did not complete all fields</p>";
        exit();
    }
    elseif ($signupCheck == "char") {
        echo "<p class='error'>You used invalid characters</p>";
        exit();
    }
    elseif ($signupCheck == "invalid-email") {
        echo "<p class='error'>You used an invalid email</p>";
        exit();
    }
    elseif ($signupCheck == "success") {
        echo "<p class='success'>You have been signed up!</p>";
        exit();
    }
}
?>

</body>
</html>