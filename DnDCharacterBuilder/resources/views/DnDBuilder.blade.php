
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
	lang="en">
	<head>
		<meta http-equiv="Content-Type"
			content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="{{ URL::asset('css/style.css'}}" type="text/css">
				<title>DnD Character Builder</title>
	</head>
	<body>
		<header>Character Builder</header>
		<aside>
			<ul>
				<li><a href="?race=Human">Human</a></li>
				<li><a href="?race=Elf">Elf</a></li>
				<li><a href="?race=Dwarf">Dwarf</a></li>
				<li><a href="?race=Halfling">Halfling</a></li>
				<li><a href="?race=Dragonborn">Dragonborn</a></li>
				<li><a href="?race=Gnome">Gnome</a></li>
				<li><a href="?race=Half-Elf">Half-Elf</a></li>
				<li><a href="?race=Half-Orc">Half-Orc</a></li>
				<li><a href="?race=Tiefling">Tiefling</a></li>
				<!---->
			</ul>
		</aside>
		<section>
			<p>This is where each races information will be displayed<p>
			</html>
			<?php
			$db = new SQLite3('database.sqlite');
			$dbquery = "SELECT * from Races where RaceName = '" . $_Get('race') ;
			$results = $db->query($dbquery);
	while ($row = $results->fetchArray()) {
    var_dump($row);
}

			?>
			<?php
			$db = new SQLite3('database.sqlite');
			$dbquery = "SELECT * from Races where RaceName = '" . $_Get('race') ;
			$results = $db->query($dbquery);
	while ($row = $results->fetchArray()) {
    var_dump($row);
}

			?>
			<html
		</section>
		<footer>&#?race=169; 2017 &#?race=9889; Team Rachet</footer>
	</body>
</html>
