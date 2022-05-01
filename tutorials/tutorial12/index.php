<?php
include("include/connection.php");
session_start();

if($_SESSION['loggedin'] !=true){
    header('location:login.php');
}

$username=$_SESSION['username'];
$password=$_SESSION['password'];
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
    <title>Document</title>
</head>

<body>
   
    <div class="container">
        <h1>Registration Data</h1>

        <a href="logout.php" class="btn btn-primary">Logout </a><br><br>
        <a href="registration.php" class="btn btn-success">Add data</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th> sno </th>
                    <th scope="col">Name</th>
                    <th scope="col">username</th>
                    <th scope="col">age</th>
                    <th scope="col">country</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sno=0;
                $sql="select name,username,age,country from registrationdata where username='$username' and password='$password'";
                //$result=$db->query($sql);
                $result=mysqli_query($db,$sql);
                while($row=$result->fetch_assoc()){
                    $sno=$sno+1;
                    $name=$row['name'];
                echo '<tr>
                    <td>'.$sno.'</td>
                    <td>'.$name.'</td>
                    <td>'.$row['username'].'</td>
                    <td>'.$row['age'].'</td>
                    <td>'.$row['country'].'</td>
                    <td>
                        <a href="update.php" class="btn btn-warning">Edit</a>
                        <a href="delete.php?name='.$name.'" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>';}
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>