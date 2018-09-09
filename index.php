<?php
    include "header.php";
   
?>
<hr>
<form method="GET">
        <input type='text' name='person'>
        <button>SUBMIT</button>
   </form>
<br>
<?php

 // echo 'Hello there ';
    // print 'Brett';
    // echo 42;
 
    // echo 10+5;


    if (isset($_GET['person'])) {
        $name = $_GET['person'];
        echo $name.' is learning some PHP<br>';
    } else
    echo 'Please complete form.<br>';

 

    // echo $name;



    // echo strlen("Hi Brett");
    // echo nl2br("\n");
    // echo str_word_count("What the...?");
    // echo nl2br("\n");
    // echo strrev('Brett');
    // echo nl2br("\n");
    // echo strpos('Brett', "e");
    // echo nl2br("\n");
    // echo str_replace('Brett', 'Andre the Giant','Hello Brett');
    // echo nl2br("\n");
    // $string = 'string';
    // $integer = 20;
    // $float = 20.001;
    // echo $string.' ', $integer.' ', $float;
    // echo nl2br("\n");

    // //Array
    // $names = array("Brett", "Dennis", "Michael");
    // echo nl2br("\n");
    // echo $names['2'];
    // echo nl2br("\n");


    // // Arithmetic operators
    // echo 5+5;
    
    // echo nl2br("\n");

    // // Assignment Operators
    // echo nl2br("\n");
    // $x=100;
    // echo $x += 20;
    // echo nl2br("\n");

    // // Comparison Operators
    // $x = 5;
    // $y = 10;

    // if ($x == $y) {
    //     echo "True!";
    // }
    // else {
    //     echo "False!";
    // }


    // echo nl2br("\n");
    // if ($x != $y) {
    //     echo "True!";
    // }
    // else {
    //     echo "False!";
    // }

    // echo nl2br("\n");
    // if ($x === $y) {  /*same and same datatype*/
    //     echo "True!";
    // }
    // else {
    //     echo "False!";
    // }
    // echo nl2br("\n");
    // if ($x !== $y) {  //different but same datatype
    //     echo "True!";
    // }
    // else {
    //     echo "False!";
    // }
    // echo nl2br("\n");
    // if ($x <= $y) {  
    //     echo "True!";
    // }
    // else {
    //     echo "False!";
    // }

    // echo nl2br("\n");

    // // Increment and Decrement Operators
    // $z = 10;
    // echo ++$z; // ++ increments by one
    // echo nl2br("\n");
    // echo ++$z; // ++ increments by one
    // echo nl2br("\n");
    // echo ++$z; // ++ increments by one
    // echo nl2br("\n");
    // echo ++$z; // ++ increments by one
    // echo nl2br("\n");
    // echo --$z; // -- increments by one
    // echo nl2br("\n");
    // echo --$z; // -- increments by one

    // Logical Operators (or, and, xor)
    // Conditional Statements

    // $x = 2;
    // $y = 20;

    // if ($x == $y or 1 == 1) {
    //     echo "True";
    // }
    // else {
    //     echo "False";
    // }
    // echo nl2br("\n");

    // if ($x == 1) {
    //     echo "Hello everyone";
    // } 
    // elseif ($x == 2) {
    //     echo "Staying put";
    // }
    // else {
    //     echo "Goodbye now.";
    // }

    // Switch Statement
    // $x = 9;

    // switch ($x) {
    //     case 1:
    //         echo "The answer is 1";
    //     break;
    //     case 2:
    //         echo "The answer is 2";
    //     break;
    //     case 3:
    //         echo "The answer is 3";
    //     break;
    //     case 4:
    //         echo "The answer is 4";
    //     break;
    //     default:
    //         echo "There is no answer";
    // }

    if(!isset($_SESSION['username'])) {
        echo 'You are not logged in';
    } else
        echo $_SESSION['username'];
        echo '<br>You are logged in!';
?>

</body>
</html>