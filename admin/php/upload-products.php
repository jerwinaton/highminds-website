<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = "../uploads/products_images/";

    $fileNames = array_filter($_FILES['products_images']['name']);
    foreach ($_FILES['products_images']['name'] as $key => $val) {
        // File upload path 
        $fileName = basename($_FILES['products_images']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        echo $targetFilePath;

        // Upload file to server 
        if (move_uploaded_file($_FILES["products_images"]["tmp_name"][$key], $targetFilePath)) {
            echo $fileName;
        } else {
            $errorUpload .= $_FILES['products_images']['name'][$key] . ' | ';
        }
    }
}
