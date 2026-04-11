<?php
$host = "localhost";
$db   = "my_db";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    
    $name  = $_POST['u_name'];
    $email = $_POST['u_email'];

    $sql = "INSERT INTO students (name, email) VALUES (:n, :e)";
    $stmt = $conn->prepare($sql);

    $stmt->execute([':n' => $name, ':e' => $email]);

    echo "<h3>Data successfully saved in 'my_db'!</h3>";
    echo "<a href='form.php'>Add more records</a>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>