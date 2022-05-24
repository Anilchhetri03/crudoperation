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
// bind result set in variable
mysqli_stmt_bind_result($result,$id,$name,$roll,$address);
// execute prepared statement
mysqli_stmt_execute($result);


// fetch single row data
mysqli_stmt_fetch($result);
echo "ID:" .$id ."name:" .$name ."roll:" .$roll ."address:" .$address . "<br>" . "<br>" ;

// fetch next row data
mysqli_stmt_fetch($result);
echo "ID:" .$id ."name:" .$name ."roll:" .$roll ."address:" .$address   ;


// this is for whole result fetch

while(mysqli_stmt_fetch($result))
 {
    echo "ID:" .$id ."name:" .$name ."roll:" .$roll ."address:" .$address . "<br>" . "<br>" ;

 };



// close prepared statement
mysqli_stmt_close($result);


// close conncetion
mysqli_close($result);

?>