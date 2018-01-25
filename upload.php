<?php
if(isset($_POST['submit'])){

    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $message;

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed)){

        if($fileError === 0){
        
            if($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'img/'. $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            header("Location: index.php?uploadsuccess");
            }
             else{
                header( "refresh:0.5; url=index.php" );
                  echo "<script type='text/javascript'>alert('File too large');</script>";

            }
        } else{
            header( "refresh:0.5; url=index.php" );
            echo "<script type='text/javascript'>alert('Error uploading; Rederecting');</script>";
        }

    } else{
         header( "refresh:0.5; url=index.php" );
         echo "<script type='text/javascript'>alert('Invalid file type');</script>";
         

    }

}
?>
