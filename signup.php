<?php
/*
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
*/

// Error Handling example (as above but with some error handlers)

if (isset($_POST['submit'])) {
    // refer the database connection
    include_once 'db-connect.php';

    // get the user-entered data from the form
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // check all fields contain data
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        // if any empty field, redirect to index
        header("Location: insert-into-db.php?signup=empty");
        exit();
        } else {
            // Check input characters are valid
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: insert-into-db.php?signup=char&first=$first&last=$last&email=$email&uid=$uid");
            exit();
            } else {
            // validate email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: insert-into-db.php?signup=invalid-email&first=$first&last=$last&uid=$uid");
                    exit(); 
                } else {
                    // Insert into the database using the variables above
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
                    $stmt = mysqli_stmt_init($conn);
                    // handle error with statement prepare
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL Error";
                    } 
                    else {
                        // Insert new user into database
                        // Hash the password
                        $hashedPwd = password_hash($pws, PASSWORD_DEFAULT);
                        // Bind parameters to the placeholder(s)
                        // "sssss" placeholders in the function here, correspond to the placeholders in the sql query
                        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $hashedPwd);
                        // Run parameters inside database
                        mysqli_stmt_execute($stmt);
                        header("Location: insert-into-db.php?signup=success");
                        exit();
                    }   
                }
            }
        }
} else {
    header("Location: insert-into-db.php?signup=error");
    exit();
}

?>