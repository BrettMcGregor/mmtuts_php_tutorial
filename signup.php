<?php
    include_once 'db-connect.php';

    // User inputs to the form are saved to variables
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Insert into the database using the variables above
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";

    mysqli_query($conn, $sql); // execute the query. No need to store in variable here

    header("Location: index.php?signup=success")
?>