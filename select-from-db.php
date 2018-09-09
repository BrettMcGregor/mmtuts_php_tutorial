<?php
   include_once 'db-connect.php'; // connection to db referenced here

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Select from MySQL Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
    // query the database
    // $sql = "SELECT * FROM users WHERE user_uid='Brett';";
    // $result = mysqli_query($conn, $sql);
    // // check the number of rows the query returns
    // $resultCheck = mysqli_num_rows($result);
    // error handling - if zero rows returned
    // if ($resultCheck < 1 ) {
    //     echo "No results returned";
    // } else
    // // use a while loop to iterate through each row in query result
    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo $row['user_uid'] . "<br>"; }

    // Using Prepared Statements
    $data = "Brett";
    $data2 = "McGregor";
    $sql = "SELECT * FROM users WHERE user_uid=? AND user_last=?;";
    // Create a prepared statement
    $stmt = mysqli_stmt_init($conn); // initialise the object
    // Prepare the prepared statement
    // if the statement fails return an error message, else run the code in the conditional
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
    } else {
        // Bind parameters to the placeholder(s)
        // Two "ss" placeholders in the function here, corresponding to the placeholders in the sql query
        mysqli_stmt_bind_param($stmt, "ss", $data, $data2);
        // Run parameters inside database
        mysqli_stmt_execute($stmt);
        // now execute the prepared statement query
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid'] . "<br>";
    }
}

?>
</body>
</html>