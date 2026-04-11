<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        name:<input type="text" required name="name">
        email:<input type="text" required name="email">
        <input type="submit">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        echo "Name: $name <br> Email: $email";
    }
    
    ?>
</body>
</html>