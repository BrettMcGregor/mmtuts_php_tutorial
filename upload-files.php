<?php
    include "header.php";
?>

<h2>Upload a File</h2>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">UPLOAD</button>
</form>

<?php

if (!isset($_GET['upload'])) {
    exit();
} else {
    $uploadCheck = $_GET['upload'];

    if ($uploadCheck == "large") {
        echo "<p class='error'>File too large!</p>";
        exit();
    }
    elseif ($uploadCheck == "type") {
        echo "<p class='error'>That file type is not allowed.</p>";
        exit();
    }
    elseif ($uploadCheck == "error") {
        echo "<p class='error'>There was an error uploading your file.</p>";
        exit();
    }
    elseif ($uploadCheck == "success") {
        echo "<p class='success'>File upload successful!</p>";
        exit();
    }

}

?>

</body>
</html>