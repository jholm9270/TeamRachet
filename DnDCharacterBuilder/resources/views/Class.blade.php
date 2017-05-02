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
					<td id="RaceStg">Race</td>
					<td id="ClassStg" class="activeStg">Class</td>
					<td id="AbtStg">Ability Points</td>
					<td id="FinStg">Final</td>
				</tr>
			</table>
		</header>
	<div id="canvas" style="background-image: url('{{ asset('images/forest.jpg') }}');">
	<body>
		<header>Choose Your Class</header>
		<aside id="list">
			<ul>
				<!-- each link corresponds with a query. -->
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Barbarian">Barbarian</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Bard">Bard</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Cleric">Cleric</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Druid">Druid</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Fighter">Fighter</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Monk">Monk</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Paladin">Paladin</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Ranger">Ranger</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Rogue">Rogue</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Sorcerer">Sorcerer</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Warlock">Warlock</a></li>
				<li><a href="/DnDBuilder/<?php echo urldecode($race) ?>/Class/Wizard">Wizard</a></li>
				<!---->
			</ul>
		</aside>
		<section>
			<?php
			if(!(isset($displayValues["Class"]))){ ?>
				<p>This is where each class will be displayed<p>
			<?php
			}
			
			
			//check if race went through, then populate variables
				if(isset($displayValues["Race"])){
		$RaceName = $displayValues["Race"] -> Race_Name;
		$StrModifier = $displayValues["Race"] -> Strength;
		$DexModifier = $displayValues["Race"] -> Dexterity;
		$ChaModifier = $displayValues["Race"] -> Charisma;
		$WisModifier = $displayValues["Race"] -> Wisdom;
		$ConModifier = $displayValues["Race"] -> Constitution;
		$IntModifier = $displayValues["Race"] -> Intelligence;
		$Movespeed = $displayValues["Race"] -> Move_Speed;
		
		echo $RaceName;
			?>
					<aside>
			<table class="animated slideInLeft">
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
		//check if the class query has been run. If it has populate the variables and display. 
			if(isset($displayValues["Class"])){
				
		$ClassName = $displayValues["Class"] -> Class_Name;
		$PrimaryAbility = $displayValues["Class"] -> Primary_Ability;
		$SavingThrows = $displayValues["Class"] -> Saving_Throw_Proficiencies;
		$HitDie = $displayValues["Class"] -> Hit_Die;
		$FirstLevelHP = $displayValues["Class"] -> First_Level_Hitpoints;
		$Armor = $displayValues["Class"] -> Armor;
		$Weapons = $displayValues["Class"] -> Weapons;
		$Description = $displayValues["Class"] -> Description;
		$LinkToDice = "/DnDBuilder/".urlencode($RaceName)."/Class/".urlencode($ClassName)."/Dice"; 
		
		
			?>
			
			<table class="animated slideInLeft">
				<tr>
					<td class="Class">Class:</td>
					<td id="Class"><?php echo $ClassName ;?></td>
				</tr>
				<tr>
					<td class="tdName">Primary Ability:</td>
					<td id="Primary"><?php echo $PrimaryAbility; ?></td>
				</tr>
				<tr>
					<td class="tdName">Saving Throw Proficiencies:</td>
					<td id="Saving"><?php echo $SavingThrows; ?></td>
				</tr>
				<tr>
					<td class="tdName">Hit Dice:</td>
					<td id="dice"><?php echo "d".$HitDie; ?></td>
				</tr>
				
				<tr>
					<td class="tdName">Armor: </td>
					<td id="Armor"><?php echo $Armor; ?></td>
				</tr>
				<tr>
					<td class="tdName">Weapons: </td>
					<td id="Weapon"><?php echo $Weapons; ?></td>
				</tr>
			</table>
			<!-- button to next page -->
	<form action=<?php echo $LinkToDice ?> method="submit">
    <button name="click" class="click">Choose This Class</button>
</form> 
		<?php
		
			}
		?>
		
	
		
		</section>
		
		<footer>&#169; 2017 &#9889; Team Rachet</footer>
	</body>
</html>
