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

        <a href="logout.php" class="btn btn-primary">Logout </a><br> <br>

        <div>
            <a href="adduser.php" class='btn btn-primary'>Add User</a>
        </div> 
        <table class="table table-hover">
            <thead>
                <tr>
                    <th> Sno </th>
                    <th scope="col">Name</th>
                    <th scope="col">username</th>
                    <th scope="col">Age</th>
                    <th scope="col">Country</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sno=0;
                // $sql="select name,username,age,country from registrationdata where username='$username' and password='$password'";
                $sql="select sno,name,username,age,country from registrationdata";
                //$result=$db->query($sql);
                $result=mysqli_query($db,$sql);
                while($row=$result->fetch_assoc()){
                    $sno=$row['sno'];
                    $name=$row['name'];
                    $username=$row['username'];
                    $age= $row['age'];
                    $country=$row['country'];
                   
                   
                echo '<tr>
                    <td>'.$sno.'</td>
                    <td>'.$name.'</td>
                    <td>'.$username.'</td>
                    <td>'.$age.'</td>
                    <td>'.$country.'</td>
                    <td>
                        <a href="update.php?updatedid='.$sno.'" class="btn btn-warning">Update</a>
                        <a href="delete.php?deletedid='.$sno.'" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>';}
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>