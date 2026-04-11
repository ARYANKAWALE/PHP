<html>
<body>
<h2>User Information Form</h2>
<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit" value="Submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "<h3>Submitted Data:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>
</body>
</html>
