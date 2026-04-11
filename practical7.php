<?php
$str = "abcdef12345"; 
$shuffle = str_shuffle($str); 
$password = substr($shuffle, 0, 6); 
echo "Password: " . $password;
?>
