<?php
    include "header.php";


// Database connection variables
$dbServerName = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'phplessons';

// Connection variables must be listed in this order
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

?>
    
</body>
</html>