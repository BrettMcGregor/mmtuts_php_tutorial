<?php

if (!isset($_POST['submit'])) {
    echo "Error.";
} else {
    $file = $_FILES['file'];
    
    // now get file information
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    // control allowable file types for upload
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (!in_array($fileActualExt, $allowed)) {
        header("Location: upload-files.php?upload=type");
    } else {
        if ($fileError === 0) {
            if ($fileSize > 50000) {
                    header("Location: upload-files.php?upload=large");
            } else {
                // now upload the file
                // give the file a unique name to prevent duplicates
                $fileNameNew = uniqid('', TRUE).".".$fileActualExt;
                // set up upload destination
                $fileDestination = "uploads/".$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: upload-files.php?upload=success");
            }
        } else {
            header("Location: upload-files.php?upload=error");
        }
    }
}



