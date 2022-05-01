<?php



$db= new mysqli('localhost','root','','tutorial10');

#connection check
if($db->connect_errno){
    echo $db->connect_error;
}
else{
    echo "connected succesfully</br>";
}


?>