<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $categoryName = $_POST['category_name'];
    $targetDir = "../uploads/category_icons/";

    // File upload path 
    // used index of 0 since it will only accept one file
    $fileName = basename($_FILES['categories_icons']['name'][0]);
    $targetFilePath = $targetDir . $fileName;
    echo $targetFilePath;

    // Upload file to server 
    if (move_uploaded_file($_FILES["categories_icons"]["tmp_name"][0], $targetFilePath)) {
        echo $fileName . " " . $categoryName;
    } else {
        echo "error";
    }
}
