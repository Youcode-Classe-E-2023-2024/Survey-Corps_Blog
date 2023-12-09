<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = 'storage/';
    $targetFile = $targetDir . basename($_FILES['file']['name']);
    
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
        echo basename($_FILES['file']['name']);
        echo 'File uploaded successfully.';
    } else {
        echo 'Error uploading file.';
    }
}
?>
