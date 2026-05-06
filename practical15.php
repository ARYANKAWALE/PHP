<?php
$conn = new mysqli("localhost", "root", "", "myDB");
$conn->query("UPDATE users SET email='newemail@example.com' WHERE id=1");
echo "Updated!";
?>