<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = "../uploads/category_icons/";

    $fileNames = array_filter($_FILES['categories_icons']['name']);
    foreach ($_FILES['categories_icons']['name'] as $key => $val) {
        // File upload path 
        $fileName = basename($_FILES['categories_icons']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        echo $targetFilePath;

        // Upload file to server 
        if (move_uploaded_file($_FILES["categories_icons"]["tmp_name"][$key], $targetFilePath)) {
            echo $fileName;
        } else {
            $errorUpload .= $_FILES['categories_icons']['name'][$key] . ' | ';
        }
    }
}
