<?php
    include_once "header.php";
   
?>
<?php

// Loops

// While Loop
$x = 1;

while ($x <= 5) {
    echo "Hi there<br>";
    $x++;
}
// do While Loop
$y = 10;
do {
    echo "Goodbye<br>";
    $y++;
}
while ($y <= 5);


// For Loop

for ($x = 0; $x <=10; $x++) {
    echo "Hi<br>";

}


// Foreach Loop
$array = array("Brett", "Andrea", "Devon", "Ryan");

foreach ($array as $loopData) {
    echo "My name is ".$loopData."<br>";
}


// Arrays

    echo $array[0];

?>

</body>
</html>

<?php
