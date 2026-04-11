<?php
$items = ["Samsung", "Apple", "Google", "Asus"];

sort($items); // Action: Sorting
echo "Sorted: " . implode(", ", $items) . "<br>";

echo "Total items: " . count($items) . "<br>"; // Action: Counting

$find = "Apple";
echo array_search($find, $items) !== false ? "$find is found!" : "Not found"; // Action: Searching
?>