<?php
$file = fopen("test_file.txt","r");
while(!feof($file)){
    echo fgets($file) . "<br>";
}
fclose($file);
// $content = fread($file, filesize("test_file.txt"));
// echo $content;
// fclose($file);
?>