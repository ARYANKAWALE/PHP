<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Couldn't connect: " . mysqli_connect_error());
}else{
    echo "Connected successful";
}
$sql = "CREATE DATABASE myDATABASE";
$result = mysqli_query($conn, $sql);
if($result){
    echo "the db created successfully";
}else{
    echo "databse cretion failed" . mysqli_error($conn);
}
mysqli_close($conn)
?>
