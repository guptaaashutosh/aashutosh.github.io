<?php
include("include/connection.php");
if(isset($_GET['name'])){
    $name=$_GET['name'];

    $sql=" DELETE FROM registrationdata ";
    $result=mysqli_query($db,$sql);
    if($result){
        echo "1 row deleted";
    }

}

?>