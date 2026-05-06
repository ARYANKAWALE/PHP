<?php
$conn = new mysqli("localhost","root","","myDB");
$conn->query("INSERT INTO users(name, email) VALUES ('Aryan','aryankawale163@gmail.com')");
echo "inserted !";
?>