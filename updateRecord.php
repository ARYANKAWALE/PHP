<?php
$conn = new PDO("mysql:host=localhost;dbname=my_db", "root", "");

$newName = "Amit Sharma";
$id = 1; 

$sql = "UPDATE students SET name = :n WHERE id = :i";
$stmt = $conn->prepare($sql);

if($stmt->execute([':n' => $newName, ':i' => $id])) {
    echo "Record updated successfully!";
} else {
    echo "Update failed.";
}
?>