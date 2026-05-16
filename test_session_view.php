<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    if(isset($_SESSION["name"],$_SESSION["age"])){
    echo "Your name is:" . $_SESSION["name"] . '<br>';
    echo "Your age is:" . $_SESSION["age"];
    };
    ?>
</body>
</html>