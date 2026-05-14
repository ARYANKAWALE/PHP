<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myDATABASE";
$conn = mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo "Connection Successful";
}else{
    die("Connection failed". mysqli_connect_error());
}
$sql = "CREATE TABLE student(
rollNo int PRIMARY KEY,
name varchar(20),
lastname varchar(20)
)";
if(!$sql){
    die("Table creation error". mysqli_connect_error());
}else{
    echo "Table created successfully";
}
?>