
<!-- // include("include/connection.php");
// session_start();
// $username=$_SESSION['username'];
// $password=$_SESSION['password'];

// //echo $username;

// $update="UPDATE registrationdata SET birthdate=NOW() WHERE username=$username ";
// $result=mysqli_query($db,$update);
// if($result){
//     echo "updated date of".$db->affected_rows;
// } -->


<?php
include("include/connection.php");
session_start();

$id=$_GET['updatedid'];

$sql="select * from registrationdata where sno=$id";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$username=$row['username'];
$password=$row['password'];
$age=$row['age'];
$country=$row['country'];
$id=$row['sno'];

$_SESSION['id']=$id;

// if($_SERVER['REQUEST_METHOD']=='POST'){
//     include("include/connection.php");
//     $name=$_POST['cname'];
//     $username=$_POST['email'];
//     $password=$_POST['pwd'];
//     $age=$_POST['age'];
//     $birthdate=$_POST['bdate'];
//     $country=$_POST['country'];
//     $state=$_POST['state'];
//     $city=$_POST['city'];
//     $note=$_POST['note'];

//     $sql="update  registrationdata set name='$name',username='$username',password='$password',age=$ag,
//     birthdate=$birthdate,country='$country',state='$state',city='$city','$note' where sno='$id'";
     
//       $db->query($sql);
     
      
//     }



?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Client Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script>
			
		</script>
		<style>
			#error{
				color:red;	
			}
		</style>
	</head>
	<body>
        
		<div class="container">
			<h2>Client Detail Form</h2>
			<div id="error" style="display:none"></div>
			<form action="./updatedata.php" method="post" id="clientform">
				<div class="form-group">
					<label id="error" style="display:none;">Fill all detail</label>
				</div>
       
              

				<div class="form-group">
					<label for="cname">Name:</label>
					<input type="text" class="form-control" id="cname" value=<?php echo $name;?> name="cname">
				</div>
				<div class="form-group">
					<label for="email">Username:</label>
					<input type="email" class="form-control" id="email" value=<?php echo $username;?> name="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" value=<?php echo $password;?> name="pwd">
				</div>
				<div class="form-group">
					<label for="rpwd">Re-Password:</label>
					<input type="password" class="form-control" id="rpwd" value=<?php echo $password;?> name="rpwd">
				</div>
				<div class="form-group">
					<label for="age">Age:</label>
					<input type="number" class="form-control" id="age" value=<?php echo $age;?> name="age">
				</div>
			
				<div class="form-group">
					<label for="country">Country:</label>
					<input type="text" class="form-control" id="country" value=<?php echo $country;?> name="country">
                </div>
                 
                
				<button type="submit" name='' class="btn btn-success">Update</button>
			</form>
		</div>

		
	</body>
</html>
