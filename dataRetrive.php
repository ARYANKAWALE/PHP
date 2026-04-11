<?php
$conn = new PDO("mysql:host=localhost;dbname=my_db", "root", "");

$data = $conn->query("SELECT * FROM students");

foreach($data as $row) {
    echo "ID: " . $row['id'] . " | Name: " . $row['name'] . " | Email: " . $row['email'] . "<br>";
}
?>