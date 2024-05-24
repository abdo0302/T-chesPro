<?php
header('Content-Type: application/json');

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $upload_dir = "file_inpourt/";

    $filename = basename($file['name']);
    $file_path = $upload_dir . $filename;
 
    if (move_uploaded_file($file["tmp_name"], $file_path)) {
    }
} 

?>
