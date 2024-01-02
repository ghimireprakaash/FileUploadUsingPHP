<?php
    $targetDIR = "uploads/";
    $targetFILE = $targetDIR.basename($_FILES['fileToUpload']['name']);

    $uploadSuccess = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFILE);

    if($uploadSuccess){
        echo "File Uploaded Successfully";
    } else{
        echo "Upload Failed...";
    }
?>