
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
		<header>
			<h1>Character Builder</h1>
			<table id="Stage">
				<tr id="StgRow">
					<td class="Stg" id="RaceStg">Race</td>
					<td class="Stg" id="ClassStg">Class</td>
					<td class="Stg" id="AblPntStg">Ability Points</td>
					<td class="Stg" id="MagicStg">Magic</td>
					<td class="Stg" id="FinalStg">Final</td>
				</tr>
			</table>
		</header>
		<div id="canvas" style="background-image: url('{{ asset('images/forest.jpg') }}');">
		<aside id="list">
			<ul>				
				<li><a href="/DnDBuilder/Human">Human</a></li>
				<li><a href="/DnDBuilder/Elf%20(Drow)">Elf (Drow)</a></li>
				<li><a href="/DnDBuilder/Elf%20(High)">High  Elf</a></li>
				<li><a href="/DnDBuilder/Elf%20(Wood)">Wood  Elf</a></li>
				<li><a href="/DnDBuilder/Dwarf%20(Hill)">Hill Dwarf</a></li>
				<li><a href="/DnDBuilder/Dwarf%20Mountain)">Mountain Dwarf</a></li>
				<li><a href="/DnDBuilder/Halfling%20(Lightfoot)">Lightfoot Halfling</a></li>
				<li><a href="/DnDBuilder/Halfling%20(Stout)">Stout Halfling</a></li>
				<li><a href="/DnDBuilder/Dragonborn">Dragonborn</a></li>
				<li><a href="/DnDBuilder/Gnome%20(Forest)">Forest Gnome</a></li>
				<li><a href="/DnDBuilder/Gnome%20(Rock)">Rock Gnome</a></li>
				<li><a href="/DnDBuilder/Half-Elf">Half-Elf</a></li>
				<li><a href="/DnDBuilder/Half-Orc">Half-Orc</a></li>
				<li><a href="/DnDBuilder/Tiefling">Tiefling</a></li>
			</ul>
		</aside>
			
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
		$LinkToClass = "/DnDBuilder/".urlencode($RaceName)."/Class";
			?>
			
				<h1><?php echo $RaceName;?></h1>
				<h2>Race Information</h2>
					<table id="stats" class="animated slideInLeft">
				<tr>
					<td class="tdName">Strength</td>
					<td id="Str" class="mod"><?php echo $StrModifier ;?></td>
				</tr>
				<tr>
					<td class="tdName">Dexterity</td>
					<td id="Dex" class="mod"><?php echo $DexModifier; ?></td>
				</tr>
				<tr>
					<td class="tdName">Constitution</td>
					<td id="Con" class="mod"><?php echo $ConModifier; ?></td>
				</tr>
				<tr>
					<td class="tdName">Intelligence</td>
					<td id="Int" class="mod"><?php echo $IntModifier; ?></td>
				</tr>
				<tr>
					<td class="tdName">Wisdom</td>
					<td id="Wis" class="mod"><?php echo $WisModifier; ?></td>
				</tr>
				<tr>
					<td class="tdName">Charisma</td>
					<td id="Cha" class="mod"><?php echo $ChaModifier; ?></td>
				</tr>
				<tr>
					<td class="tdName">Movement Speed</td>
					<td id="Mov"><?php echo $Movespeed; ?></td>
				</tr>
			</table>
			
			<img src="<?php echo asset( "$RaceName" . '.jpg') ?>"/> 
			
			<p id="RaceData">
				This is the section used to displaying the race's data. Information about who they are and any other pertinent data that may apply.
			</p>
		
		<a id="button" href=<?php echo $LinkToClass ?>> Choose this Race! </a>
		<?php
			}
		?>		
		</div>
		<footer>&#169; 2017 &#9889; Team Rachet</footer>
	</body>
</html>
