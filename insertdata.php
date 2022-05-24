<?php
include("db_connect.php");
if(($_REQUEST['name']== "") || ($_REQUEST['roll'] =="") || ($_REQUEST['address']==""))
{
    echo "<small>Fill All Field</small> <hr> ";
}
else
{
$name= $_REQUEST['name'];
$roll= $_REQUEST['roll'];
$address= $_REQUEST['address'];
$sql="INSERT INTO student (name, roll, address)VALUES('$name' , '$roll', '$address')";
if(mysqli_query($conn,$sql)) 
{ 
    echo "<pre>";
    echo "New Record inserted successfully";
}

else
{
echo"unable to insert Data";
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container">
        <div class="row">
<div class="col-sm-4">
<form>
  <div class="">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="name"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">roll</label>
    <input type="roll" name="roll" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputaddress" class="form-label">address</label>
    <input type="address"  name="address" class="form-control" id="exampleInputaddress">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-sm-6">
<?php
$sql="SELECT * FROM student";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
   
        echo'<table class="table">';
        echo"<thead>";
        echo"<tr>";
    
     echo " <th>Id</th>";
     echo " <th>Name</th>";
     echo " <th>Roll</th>";
     echo " <th>Address</th>";
     echo " <th>Action</th>";
        echo"</tr>";
        echo"</thead>";

      
      
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" .$row["id"] . "</td>";
            echo "<td>" .$row["name"] . "</td>";
            echo "<td>" .$row["roll"] . "</td>";
            echo "<td>" .$row["address"] . "</td>";
            
            echo "</tr>";
        } 
            echo "</tbody>";
            echo"</table>";

}
    else
    {

    
    echo "0 results";
}

?>
</div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>