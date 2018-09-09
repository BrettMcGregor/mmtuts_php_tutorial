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
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    // check the number of rows the query returns
    $resultCheck = mysqli_num_rows($result);

    // error handling - if zero rows returned
    if ($resultCheck < 1 ) {
        echo "No results returned";
    } else
    // use a while loop to iterate through each row in query result
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['user_uid'] . "<br>";
    }
?>
</body>
</html>