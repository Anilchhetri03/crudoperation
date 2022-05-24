<?php
include("db_connect.php");

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
    <div class="container">
        
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
