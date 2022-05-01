<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include("include/connection.php");
    $name=$_POST['cname'];
    $username=$_POST['email'];
    $password=$_POST['pwd'];
    $age=$_POST['age'];
    $birthdate=$_POST['bdate'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $note=$_POST['note'];

    $sql="insert into registrationdata (name,username,password,age,birthdate,country,state,city,note)
      values ('$name','$username','$password','$age','$birthdate','$country','$state','$city','$note')
      ";
      $db->query($sql);
     
      
    }
    
    header('location:index.php');

?>
