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



        <?php


        // select all data from student table
        $sql = " SELECT * FROM student";

        // prepared statement
        $result = mysqli_prepare($conn, $sql);
        // Bind REsult set in variable
        mysqli_stmt_bind_result($result, $id, $name, $roll, $address);

        // execute statement

        mysqli_stmt_execute($result);

        // store Result
        mysqli_stmt_store_result($result);
        if (mysqli_stmt_execute($result) > 0) {

            echo '<table class="table">';
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Roll</th>";
            echo "<th>Address</th>";
            echo "</tr>";

            echo "</thead>";
            echo "<tbody>";
            // fetch all the table data
            while (mysqli_stmt_fetch($result)) {
                echo "<tr>";
                echo "<th>  $id   </th>";
                echo "<th> $name  </th>";
                echo "<th> $roll  </th>";
                echo "<th>  $address  </th>";
                echo "</tr>";
            };

            echo "</tbody>";
            echo "</table>";
        } else
            echo "0 result";



        ?>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
<?php
// close prepared statement
mysqli_stmt_close($result);
// close the conncetion
mysqli_close($conn);
?>

</html>