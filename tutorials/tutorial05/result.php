<?php


$mthno= isset($_POST['monthno'])? $_POST['monthno']:0;
// echo $mthno;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
       <form action="" method="post">
           <div class="form-group">
               <lable class="btn btn-success mt-3" >Month Name</lable>
               <select name="" id="" class="form-control ">
                   <option value="" <?=($mthno==1)?"selected":""?>>January</option>
                   <option value="" <?=($mthno==2)?"selected":""?> >February</option>
                   <option value=""<?=($mthno==3)?"selected":""?>>March</option>
                   <option value="" <?=($mthno==4)?"selected":""?>>April</option>
                   <option value=""<?=($mthno==5)?"selected":""?>>May</option>
                   <option value=""<?=($mthno==6)?"selected":""?>>June</option>
                   <option value=""<?=($mthno==7)?"selected":""?>>July</option>
                   <option value=""<?=($mthno==8)?"selected":""?>>August</option>
                   <option value=""<?=($mthno==9)?"selected":""?>>September</option>
                   <option value=""<?=($mthno==10)?"selected":""?>>October</option>
                   <option value=""<?=($mthno==11)?"selected":""?>>November</option>
                   <option value=""<?=($mthno==12)?"selected":""?>>December</option>
               </select>
           </div>
       </form>
   </div>
</body>
</html>