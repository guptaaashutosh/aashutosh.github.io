<?php 

include("include/connection.php");

$sql="
    select 
       id,
       machine_name,
       description
    from 
          tbl_machine
    where
       is_delete =0
    order by 
        machine_name desc 
    limit
       1,20   
    ";
//1-starting and 20- no of data
// echo $sql;

$result = $db -> query($sql);
if($result->num_rows){
    echo "<table border=1 align=center >";
    while($row=$result->fetch_assoc()){
        //echo $row['machine_name'],"</br>";
        //echo $row['id'],"- ",$row['machine_name'],"</br>";
        echo "<tr>";
          echo "<td>",$row['id'],"</td>";
          echo "<td>",$row['machine_name'],"</td>";
          echo "<td>",$row['description'],"</td>";
        echo "</tr>";
    }
    echo "</table>";
  
}else{
    echo "no record found.";
}


?>