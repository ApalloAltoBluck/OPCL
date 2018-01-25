<?php
if(isset($_POST['submit'])){

    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed)){

        if($fileError === 0){
        
            if($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'img/'. $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            header("Location: index.php?uploadsuccess")
            } else{
                echo "File too large";

            }
        } else{
            echo "Error uploading!";
        }

    } else{
        echo "You cannot upload files of this type!";
    }

}
?>
