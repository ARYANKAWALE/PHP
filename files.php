<?php
$file = fopen("log.txt", "a+"); // 'a+' opens for reading/writing and starts at the end

// Writing a part
fwrite($file, "New log entry\n");

// Reading line by line
rewind($file); // Go back to the start
while (!feof($file)) {
    echo fgets($file) . "<br>";
}

fclose($file);
?>