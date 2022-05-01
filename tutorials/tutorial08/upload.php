<?php

if(isset($_POST['submit'])){

    $file = $_FILES['file'];
    $filename=$_FILES['file']['name'];
    $filetmpname =$_FILES['file']['tmp_name'];
    $filesize =$_FILES['file']['size'];
    $fileError =$_FILES['file']['error'];
    $filetype =$_FILES['file']['type'];

    $fileext=explode('.',$filename);

    $fileactualext=strtolower(end($fileext));

    $allowed = array('jpg','jpeg','png','pdf','img','docs');
   
    if(in_array($fileactualext,$allowed)){
        if($fileError===0){
            if($filesize<1000000){
                $filedestination='uploads/'.$filename;
                 move_uploaded_file($filetmpname,$filedestination);
               echo "<h1 style='color:green;'>Uploadedd successfully!!<h1>";

               //header('location:index.php?uploadedsuccessfully');
         
            }else{
                echo "Your file is of large size , you can upload upto 1 mb only";
            }

        }else{
            echo "There was an Error in uploading your file";
        }

    }else{
        echo "Sorry!! This file is not allowed you can upload 'jpg','jpeg','png','pdf','img','docs' only";
    }



}



?>