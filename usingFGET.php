<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $my_file = fopen("sample.txt","r");
    while(!feof($my_file)){
        echo fgets($my_file);
    }
    fclose($my_file)
    ?>
</body>
</html>