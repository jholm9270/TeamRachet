<?php

$rolls = 24;
$sides = 6;

$results = array();

for($i = 0; $i < $rolls; $i++) {
	$results[] = rand(1,$sides);
}

echo "Each roll:<ul><li>";
echo implode("</li><li>", $results);
echo "</li></ul>";

?>