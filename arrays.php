<?php
    include "header.php";
    include "db-connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
<?php

$person = "Daniel";
// Indexed array
$people = array("Brett", "Andrea", "Devon", "Ryan");
echo $people[3]."<br>";

// create an array
$data = array("first", "second");

// Add data to the array
$data[] = "Brett";
$data[] = "42";
echo $data[0]."<br>";
print_r($data);

// array_push function
array_push($data, "Andrea", "Devon", "Ryan");
echo "<br>";
print_r($data);

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$datas = array();
if (mysqli_num_rows($result) == 0) {
    echo "No results.";
} else {
    while($row = mysqli_fetch_assoc($result)) {
        $datas[] = $row;
    }
}
// print_r($datas);
echo "<br>";
// access elements of row by row id
foreach ($datas[0] as $d) {
    echo $d.", ";
}

// access elements of column using column name
foreach ($datas as $d) {
    echo 'user_first = '.$d['user_first'].'<br>';
}


// Types of arrays
// Indexed array
$family = array("Brett", "Andrea", "Devon", "Ryan");
print_r($family);
echo "<br>";
echo $family[1];
echo "<br>";

// Associative array
$names = array("first" => "Brett", "last" => "McGregor", "age" => 42);
print_r($names);
echo "<br>";
echo $names["last"];
echo "<br>";

// Multidimensional array
$multi = array(array("Brett", "McGregor"), "John", "Jane");
print_r($multi);
echo "<br>";
echo $multi[0][0];
echo "<br>";
echo $multi[2];
echo "<br>";

?>



</body>
</html>