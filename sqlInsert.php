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
$sql = "INSERT INTO student(rollNo,name,lastname)
 VALUES(19,'Aryan','kawale')";
if(!$sql){
    die("value Insert error". mysqli_connect_error());
}else{
    echo "<br>value inserted";
}
?>