<?php
$name = "aryan";
$value = "server";
setcookie($name,$value,time() + 3600,"/","");
echo isset($_COOKIE[$name]) ? $_COOKIE[$name] : "Cookie is being set! Please refresh the page.";
?>