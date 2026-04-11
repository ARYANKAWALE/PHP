<?php
$filename = "sample.txt";  
$content = "Hello, this text is written using PHP.";

// create file and write content
$file = fopen($filename, "w");
fwrite($file, $content);
fclose($file);

echo "File created and text written successfully.";
?>
