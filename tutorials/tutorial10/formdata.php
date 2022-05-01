<?php

include("include/connection.php");

$id=isset($_GET['id'])?$_GET['id']:"";

$sql="select machine_name,description from tbl_machine where id=$id";
$result = $db->query($sql);

$name='';
$description='';

if($result->num_rows){
    $row=$result->fetch_assoc();
    $name=$row['mschine_name'];
    $description=$row['dexcription'];
}

?>