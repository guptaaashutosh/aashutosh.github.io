<?php
include("include/connection.php");

$id=isset($_POST['id'])?$_POST['id']:"";
$machinename=isset($_POST['machinename'])?$_POST['machinename']:"";
$description=isset($_POST[''])?$_POST['machinename']:"";

if($id=""){
    $sql="insert into tbl_machine (machine_name,description) values ('$machinename','$description')";
}else{
    $sql="update tbl_machine set machine_name='$machinename',$description='$description' where id=$id";
}
$db->query($sql);
header['location:index.php'];
?>