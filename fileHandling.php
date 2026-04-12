<!DOCTYPE html>
<html lang="en">
<body>
    
<?php

    $my_file = fopen("sample.txt","r");
    echo fread($my_file, filesize("sample.txt"));
    fclose($my_file);

    if($my_file){
        echo "<br>File opened successfully";
    }



    // $handling = fopen("post.php","w");
    // if($handling){
    //     echo "File opened successfully";
    // }
    // if(file_exists("form.php")){
    //     echo "File is already exist";
    // }
 ?>

</body>
</html>