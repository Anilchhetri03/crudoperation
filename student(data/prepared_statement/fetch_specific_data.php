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
$sql=" SELECT * FROM student WHERE id= ?";
// prepared statement
$result= mysqli_prepare($conn, $sql);
// Bind parameter
mysqli_stmt_bind_param($result,"i",$id);
$id= 5;


// bind result set in variable
mysqli_stmt_bind_result($result,$id,$name,$roll,$address);
// execute prepared statement
mysqli_stmt_execute($result);


// fetch single row data
mysqli_stmt_fetch($result);
echo "ID:" .$id ."name:" .$name ."roll:" .$roll ."address:" .$address . "<br>" . "<br>" ;


// this is for whole result fetch

while(mysqli_stmt_fetch($result))
 {
    echo "ID:" .$id ."name:" .$name ."roll:" .$roll ."address:" .$address . "<br>" . "<br>" ;

 };



?>