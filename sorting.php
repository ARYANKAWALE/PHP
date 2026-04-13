<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = array(1,23,45,543,2345);
    sort($numbers);
    print_r($numbers);
    $arrayLength = count($numbers);
    for($x=0;$x<$arrayLength;$x++){
        echo $numbers[$x];
        echo "<br>";
    }
    ?>
</body>
</html>