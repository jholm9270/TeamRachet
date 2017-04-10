<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="{{ URL::asset('/css/viewStyle.css') }}">
		<title>Race</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	</head>
	<body>
		<?php
		<h1 id="raceName" class="animated zoomIn"><?php print_r($displayValues -> Race_Name); ?></h1>
		<p id="raceInfo" class="animated fadeIn">
			print displayValues for the race information
		</p>
		<aside class="animated slideInLeft">
			<table>
				<tr>
					<td class="tdName">Strength</td>
					<td id="Str"><?php print_r($displayValues -> Strength); ?></td>
				</tr>
				<tr>
					<td class="tdName">Dexterity</td>
					<td id="Dex"><?php print_r($displayValues -> Dexterity); ?></td>
				</tr>
				<tr>
					<td class="tdName">Constitution</td>
					<td id="Con"><?php print_r($displayValues -> Constitution); ?></td>
				</tr>
				<tr>
					<td class="tdName">Intelligence</td>
					<td id="Int"><?php print_r($displayValues -> Intelligence); ?></td>
				</tr>
				<tr>
					<td class="tdName">Wisdom</td>
					<td id="Wis"><?php print_r($displayValues -> Wisdom); ?></td>
				</tr>
				<tr>
					<td class="tdName">Charisma</td>
					<td id="Cha"><?php print_r($displayValues -> Charisma); ?></td>
				</tr>
				<tr>
					<td class="tdName">Movement Speed</td>
					<td id="Mov"><?php print_r($displayValues -> Move_Speed); ?></td>
				</tr>
			</table>
		</aside>
		
	
		
		<img id="racePic" class="animated slideInRight" src="human.jpg"/>
	
		<button>Choose This Race</button>
		
	</body>
</html>
