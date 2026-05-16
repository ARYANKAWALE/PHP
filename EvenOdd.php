<?php
function evenOdd(){
    for($i=1;$i<=50;$i++){
        if($i % 2 == 0){
            echo $i . " ";
        }
    }
}
echo "even numbers are :";
evenOdd();
?>