<?php
$cookie_name = "Aryan";
$cookie_value ="aryank";
setcookie($cookie_name,$cookie_value,time()+ (86000 * 30),"/");
?>
<html>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "cookie denied";
    }else{
        echo "Cookie value:" . $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>