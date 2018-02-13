<?php
$target_dir = "uploadtest/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$docFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
    $check = ($docFileType == "pdf"));
    if($check) {
        echo "File is a PDF - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not a PDF.";
        $uploadOk = 0;
    }
}
?>
