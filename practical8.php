<?php
$items = ["Laptop", "Mouse", "Keyboard", "Monitor"];
// Count
echo "Total items: " . count($items) . "\n";
// Sort (A-Z)
sort($items);
echo "Sorted: " . implode(", ", $items) . "\n";
// Search
$found = array_search("Mouse", $items);
echo $found !== false ? "Mouse found at index $found\n" : "Not found\n";
?>
