
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
	lang="en">
	<head>
		<meta http-equiv="Content-Type"
			content="text/html; charset=iso-8859-1" />
		<title>DnD Character Builder</title>
		<link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	</head>
	<body>
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
		$RaceName = $displayValues -> Race_Name;
		$StrModifier = $displayValues -> Strength;
		$DexModifier = $displayValues -> Dexterity;
		$ChaModifier = $displayValues -> Charisma;
		$WisModifier = $displayValues -> Wisdom;
		$ConModifier = $displayValues -> Constitution;
		$IntModifier = $displayValues -> Intelligence;
		$Movespeed = $displayValues -> Move_Speed;
		
		echo $RaceName;
			?>
					<aside class="animated slideInLeft">
			<table>
				<tr>
					<td class="tdName">Strength</td>
					<td id="Str"><?php echo $StrModifier ;?></td>
				</tr>
				<tr>
					<td class="tdName">Dexterity</td>
					<td id="Dex"><?php echo $DexModifier; ?></td>
				</tr>
				<tr>
					<td class="tdName">Constitution</td>
					<td id="Con"><?php echo $ConModifier; ?></td>
				</tr>
				<tr>
					<td class="tdName">Intelligence</td>
					<td id="Int"><?php echo $IntModifier; ?></td>
				</tr>
				<tr>
					<td class="tdName">Wisdom</td>
					<td id="Wis"><?php echo $WisModifier; ?></td>
				</tr>
				<tr>
					<td class="tdName">Charisma</td>
					<td id="Cha"><?php echo $ChaModifier; ?></td>
				</tr>
				<tr>
					<td class="tdName">Movement Speed</td>
					<td id="Mov"><?php echo $Movespeed; ?></td>
				</tr>
			</table>
		</aside>
		<?php
		
			}
		?>
			
			
			<!--<img id="racePic" class="animated slideInRight" src="$RaceName"+".jpg"/>-->
	
		
		</section>
		<button>Choose This Race</button>
		<footer>&#169; 2017 &#9889; Team Rachet</footer>
	</body>
</html>
