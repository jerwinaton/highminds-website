<?php
if (isset($_POST['submit'])) {
    $targetDir = "uploads/";

    $fileNames = array_filter($_FILES['files']['name']);
    foreach ($_FILES['files']['name'] as $key => $val) {
        // File upload path 
        $fileName = basename($_FILES['files']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server 
            if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                // Image db insert sql 
                $insertValuesSQL .= "('" . $fileName . "', NOW()),";
            } else {
                $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
            }
        } else {
            $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
        }
    }
}
