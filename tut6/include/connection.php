<?php

$db=new mysqli('localhost','root','','rkuniversity');

if($db->connect_errno){
    echo $db->connect_errno;
}
else{
 echo "connect successfully";
}


?>