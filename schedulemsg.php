<?php
    include_once "header.php";
   
?>
    
<?php
    $dayofweek = date('w e');
    switch ($dayofweek) {
        case 1:
        echo "It is Monday!";
        break;
        case 2:
        echo "It is Tuesday!";
        break;
        case 3:
        echo "It is Wednesday!";
        break;
        case 4:
        echo "It is Thursday!";
        break;
        case 5:
        echo "<p>It is Friday!</p>";
        break;
        case 6:
        echo "It is Saturday!";
        break;
        case 0:
        echo "It is Sunday!";
        break;
    }

?>

</body>
</html>