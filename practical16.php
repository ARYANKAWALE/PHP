<?php
$conn = new mysqli("localhost", "root", "", "myDB");
$conn->query("DELETE FROM users WHERE id=1");
echo "Deleted!";
?>