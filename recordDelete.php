<?php
$conn = new PDO("mysql:host=localhost;dbname=my_db", "root", "");
$id = 1;
$sql = "DELETE FROM students WHERE id = :id";
$stmt = $conn->prepare($sql);
if($stmt->execute([':id' => $id])) {
    echo "Record deleted successfully!";
} else {
    echo "Failed to delete.";
}
?>