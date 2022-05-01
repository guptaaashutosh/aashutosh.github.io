


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
			<h2>Add member</h2>
			<div id="error" style="display:none"></div>
			<form action="./savedata.php" method="post" id="clientform">
				<div class="form-group">
					<label id="error" style="display:none;">Fill all detail</label>
				</div>
       
              

				<div class="form-group">
					<label for="cname">Name:</label>
					<input type="text" class="form-control" id="cname"  name="cname">
				</div>
				<div class="form-group">
					<label for="email">Username:</label>
					<input type="email" class="form-control" id="email"  name="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd"  name="pwd">
				</div>
				<div class="form-group">
					<label for="rpwd">Re-Password:</label>
					<input type="password" class="form-control" id="rpwd"  name="rpwd">
				</div>
				<div class="form-group">
					<label for="age">Age:</label>
					<input type="number" class="form-control" id="age"  name="age">
				</div>
			
				<div class="form-group">
					<label for="country">Country:</label>
					<input type="text" class="form-control" id="country" name="country">
                </div>
                 
                
				<button type="submit" name='' class="btn btn-success">Add</button>
			</form>
		</div>

		
	</body>
</html>
