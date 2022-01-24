<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $collectionName = $_POST['collection_name'];
    $targetDir = "../uploads/collections_images/";

    // File upload path 
    // used index of 0 since it will only accept one file
    $fileName = basename($_FILES['collection_image']['name'][0]);
    $targetFilePath = $targetDir . $fileName;
    echo $targetFilePath;

    // Upload file to server 
    if (move_uploaded_file($_FILES["collection_image"]["tmp_name"][0], $targetFilePath)) {
        echo $fileName . " " . $collectionName;
    } else {
        echo "error";
    }
}
