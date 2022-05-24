<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "test_db"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}
else

{
    echo"connection successfull <hr> <br>";
}
// select all data from student table
$sql=" SELECT * FROM student";

// prepared statement
$result= mysqli_prepare($conn, $sql);

// execute statement

mysqli_stmt_execute($result);

// store Result
mysqli_stmt_store_result($result);


// Number of rows
$total_row= mysqli_stmt_num_rows($result);

echo $total_row;

// close prepared statement
mysqli_stmt_close($result);


?>