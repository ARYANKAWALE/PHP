<html>
<head>
</head>
<body>
    <?php
    $marks = 78;
    if($marks >= 90){
        echo "Grade: A+";
    }elseif($marks >= 80){
        echo  "Grade:A";
    }elseif($marks >= 70){
        echo "Grade:B";
    }elseif($marks >= 60){
        echo "Grade:C";
    }elseif($marks >= 50){
        echo "Grade: D";
    }else{
        echo "Grade:fail";
    }
    ?>
</body>
</html>