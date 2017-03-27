
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
	lang="en">
	<head>
		<meta http-equiv="Content-Type"
			content="text/html; charset=iso-8859-1" />
		<title>DnD Character Builder</title>
		<link rel="stylesheet" href="<?php echo asset('stylings/style.css')?>;" type="text/css" />
	</head>
	<body>
	<?php
	//$race ="Human";
	?>
		<header>Character Builder</header>
		<aside>
			<ul>
				
				<li><a href="/DnDBuilder/Human">Humans</a></li>
				<li><a href="/DnDBuilder/Elf (Drow)">Elf (Drow)</a></li>
				<li><a href="/DnDBuilder/Elf (High)">High  Elf</a></li>
				<li><a href="/DnDBuilder/Elf (Wood)">Wood  Elf</a></li>
				<li><a href="/DnDBuilder/Dwarf (Hill)">Hill Dwarf</a></li>
				<li><a href="/DnDBuilder/Dwarf (Mountain)">Mountain Dwarf</a></li>
				<li><a href="/DnDBuilder/Halfling (Lightfoot)">Lightfoot Halfling</a></li>
				<li><a href="/DnDBuilder/Halfling (Stout)">Stout Halfling</a></li>
				<li><a href="/DnDBuilder/Dragonborn">Dragonborn</a></li>
				<li><a href="/DnDBuilder/Gnome (Forest)">Forest Gnome</a></li>
				<li><a href="/DnDBuilder/Gnome (Rock)">Rock Gnome</a></li>
				<li><a href="/DnDBuilder/Half-Elf">Half-Elf</a></li>
				<li><a href="/DnDBuilder/Half-Orc">Half-Orc</a></li>
				<li><a href="/DnDBuilder/Tiefling">Tiefling</a></li>
				<!---->
			</ul>
		</aside>
		<section>
			<p>This is where each races information will be displayed<p>
			<?php
			if(isset($displayValues)){
			print_r($displayValues);
			// foreach($displayValues as $displayValue){
				// echo $displayValue[];
			 //}
			}
			?>
			
			
			
			
		</section>
		<footer>&#169; 2017 &#9889; Team Rachet</footer>
	</body>
</html>
