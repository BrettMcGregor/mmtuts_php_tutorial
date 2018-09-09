<?php
    include_once 'db-connect.php';

    // User inputs to the form are saved to variables
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];


    // Insert into the database using the variables above
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL Error";
    } else {
        // Bind parameters to the placeholder(s)
        // "sssss" placeholders in the function here, correspond to the placeholders in the sql query
        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
        // Run parameters inside database
        mysqli_stmt_execute($stmt);
    }
    header("Location: index.php?signup=success")
?>