<!DOCTYPE html>
<html>
<body>

<?php
$dice = array(
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)),
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)),
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)),
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)),
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)),
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)));


$stat = array("Strength", "Dexterity", "Constitution", "Intelligence", "Wisdom", "Charisma");
$length = count($stat);
for ($row = 0; $row < $length; $row++) {
echo"<p><b>$stat[$row]</b></p>";
	echo "<ul>";
	for($col = 0; $col < 4; $col++){
		echo "<li>".$dice[$row][$col]."</li>";
		}
		echo "</ul>";
}
?>

</body>
</html>
<form action="multidice.php" method="post">
    <button name="click" class="click">Reroll?</button>
</form>
<form action="multidice.php" method="post">
    <button name="click" class="click">Finalize</button>
</form>




