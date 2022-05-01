<?php

$db= new mysqli("localhost","root","","rkuniversity");

//echo $db->connect_errno;
if($db->connect_errno){
    echo $db->connect_errno;
}else{
    echo "connected successfully";
}



?>