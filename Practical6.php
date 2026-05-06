<?php
function printEvenNumbers(){
    echo "Even Numbers between 1 to 50: <br>";
    for($i=0;$i<=50;$i++){
        if($i%2 == 0){
            echo $i . " ";
        }
    }
    echo "<br><br>";
}
function printOddNumbers(){
    echo "Odd Numbers between 1 to 50: <br>";
    for($i=0;$i<=50;$i++){
        if($i%2 != 0){
            echo $i . " ";
        }
    }
}
printEvenNumbers();
printOddNumbers();
?>