<?php

    include "header.php";
   
?>
<hr>
 




<?php

/*
$GLOBALS

$x = 5;

function something() {
    $y = 10;
    echo $GLOBALS['x'];
}

something();

$_POST
$_GET


echo $_GET['name'];
?>
<br>
<form method="GET">
    <input type="hidden" name="name" value="Brett">
    <button type='submit'>PRESS ME!</button>
</form>

$_COOKIE
$_SESSION

setcookie("cookieName", "Brett", time() + 86400);

$_SESSION['sessionName'] = "12";

*/
// Start a session (added session_start to header.php)

$_SESSION['username'] = "Brett1976";
echo $_SESSION['username'];


?>
    </body>
</html>