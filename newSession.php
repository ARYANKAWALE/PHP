<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $_SESSION["car"] = "lambo";
    $_SESSION["color"] = "purple";
    echo "session variables are set<br>";
    echo $_SESSION["car"]. $_SESSION["color"];

    $_SESSION["car"] = "ferrari";
    print_r($_SESSION);
    session_unset();
    session_destroy();
    if(session_destroy()){
        echo "session has destroyed";
    }

    ?>
</body>
</html>