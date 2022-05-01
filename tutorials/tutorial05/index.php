<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

  <style>
    form{
        
     margin-top:200px;
    }
  
    label{
        font-size:40px;
        color:blue;
    }
</style>

</head>
<body  style="text-align:center;">
<div class="container">

<form  action="result.php" method="post">
    <div >
       <label for="month" >Choose a month number </label>
       <select class="form-control" aria-label="Default select example" name="monthno">
           <option value="1" name="1" id="1">Month No 1</option>
           <option value="2" name="2" id="2">Month No 2</option>
           <option value="3" name="3" id="3">Month No 3</option>
           <option value="4" name="4" id="4">Month No 4</option>
           <option value="5" name="5" id="5">Month No 5</option>
           <option value="6" name="6" id="6">Month No 6</option>
           <option value="7" name="7" id="7">Month No 7</option>
           <option value="8" name="8" id="8">Month No 8</option>
           <option value="9" name="9" id="9">Month No 9</option>
           <option value="10"  name="10" id="10">Month No 10</option>
           <option value="11" name="11" id="11">Month No 11</option>
           <option value="12" name="12" id="12">Month No 12</option>
</select>
   
    <div>
        <input type="submit" name="submit"  class="btn btn-success mt-3" value="check">
    </div>
</div>


</form>
</div>


</body>
</html>