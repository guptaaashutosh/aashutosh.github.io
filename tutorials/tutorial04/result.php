<?php

$principle=$_GET["principle"];
$roi=$_GET["roi"];
$noy=$_GET["noy"];

$si=(($principle * $roi * $noy)/100); 

?>
<h1 style="color:green;text-align:center;margin-top:300px;font-size:100px;">Your interest is : <?= $si ?></h1>