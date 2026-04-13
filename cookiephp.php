<?php
$cookie_name="aryan";
$cookie_value="123";
setcookie($cookie_name,$cookie_value,time() + 5,"/");
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie denied";
    }else{
        echo "cookie accepted" . $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>