<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connection successfull <hr> <br>";
}
if(isset($_REQUEST['submit']))
{
    // checking for empty field
    if(($_REQUEST['name']=="") || ($_REQUEST['roll']=="") ||  ($_REQUEST['address']=="" ))
{
    echo "<small>Fill All Field....</small> <hr>";
}
else
// insert SQL statement
$sql="INSERT INTO student(name,roll,address)VALUES(?,?,?)";
// prepare statement
$result=mysqli_prepare($conn,$sql);
if($result)
{
    // BInd VAriables To prepare Statement as parameter
    mysqli_stmt_bind_param($result,'sis',$name ,$roll , $address);
    // variable and values


    $name=$_REQUEST['name'];
    $roll=$_REQUEST['roll'];
    $address=$_REQUEST['address'];
  
    // execute prepared statement
    mysqli_stmt_execute($result);

    echo mysqli_stmt_affected_rows($result) . "Row inserted <br>";
}
else
echo "NOT CONNECTED";
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

    </div>
</head>

<body>
    <h1>Hello, world!</h1>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
    <form>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" name="name" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">name</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text"  name="roll" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">roll</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text"  name="address" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Address</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
        <label class="form-check-label" for="form1Example3"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
</form>
        </div>
    </div>
</div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>


</html>