<?php
include("include/connection.php");

if(isset($_GET['deletedid'])){
    $id=$_GET['deletedid'];

$delete="DELETE  FROM registrationdata WHERE sno=$id ";
$result=mysqli_query($db,$delete);

if($result){
   // echo "deleted successfully";
    header("location:index.php");
}else{
    die (mysqli_error($db));
}

}
?>


