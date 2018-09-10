<?php
    include "header.php";
?>
   
<?php
    // echo "test123";
    // echo "<br>";
    // echo password_hash("test123", PASSWORD_BCRYPT);

    $input = "test123";
    $hashedPwdInDb = password_hash("test123", PASSWORD_BCRYPT);

    // the password_verify function makes a comparison between user-entered password and a hashed pwd in the database. Returns 1 if True
    echo password_verify($input, $hashedPwdInDb);
?>



</body>
</html>