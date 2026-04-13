<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}else{
    echo "Connected successfully";
}
$sql = "CREATE  DATABASE db";
if($conn->query($sql) === TRUE){
    echo "Database created successfully";
}else{
    echo "Databse failed";
}
$conn->close()
?>