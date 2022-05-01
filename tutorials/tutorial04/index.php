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
    <form class="container" action="result.php" method="get" >
        <h1 >Simple interest</h1>
        <div class="form-group mt-3" >
            <label for="principle" >Principle</label>
            <input type="text" value="2000"name="principle" id="principle" class="form-control">    
        </div>

        <div class="form-group mt-3" >
            <label for="roi" >Rate of interest</label>
            <input type="text" value="4"name="roi" id="roi" class="form-control">    
        </div>

        <div class="form-group mt-3" >
            <label for="noy" >No of years</label>
            <input type="text" value="2" name="noy" id="noy" class="form-control">    
        </div>

        <div class="form-group  mt-3">  
            <input type="submit" class="btn btn-primary">    
        </div>

    
    </form>
</body>