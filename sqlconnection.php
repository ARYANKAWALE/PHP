<?php
$servername= "localhost";
$username="root";
$password="";
$DBname = "db";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("Connecttion failed". $conn->connect_error);
}else{
    echo "Connected successfully";
}


?>
<!DOCTYPE html>
<html lang="en">
<body>
    
</body>
</html>