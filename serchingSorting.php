<?php
$items = [ "aryan", "1945", "nagpur"];
sort($items);
$items[] = "Kawale";
$count = count($items);

$query = 1945;
$found = in_array($query,$items);
echo "Total: $count | search ($query): $found\n";
print_r($items);
?>