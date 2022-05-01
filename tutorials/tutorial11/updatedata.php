<?php
include("include/connection.php");
session_start();

$id=$_SESSION['id'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    include("include/connection.php");
    $name=$_POST['cname'];
    $username=$_POST['email'];
    $password=$_POST['pwd'];
    $age=$_POST['age'];
    // $id=$_POST[' '];
   
    $country=$_POST['country'];
   
    $sql="update  registrationdata set name='$name',username='$username',password='$password',age=$age,
   country='$country' where sno=$id ";
     
    $db->query($sql);

    header('location:index.php');
     
      
    }
?>
