<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <style>
  .ui-widget-content {width: 40px; height: 40px; padding: 0.5em; text-align: center; }
  .ui-widget-header { width: 60px; height: 60px; padding: 1.5em; text-align: center; float: left; margin: 10px;}
  .ul {list-style-type: none;}
  #hidden { display: none;}
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
<body>
<div id="dice">

<<<<<<< HEAD:DnDCharacterBuilder/resources/views/dice.php
<?php
if(isset($displayValues["Race"])){
		$RaceName = $displayValues["Race"] -> Race_Name;
		$StrModifier = $displayValues["Race"] -> Strength;
		$DexModifier = $displayValues["Race"] -> Dexterity;
		$ChaModifier = $displayValues["Race"] -> Charisma;
		$WisModifier = $displayValues["Race"] -> Wisdom;
		$ConModifier = $displayValues["Race"] -> Constitution;
		$IntModifier = $displayValues["Race"] -> Intelligence;
		$Movespeed = $displayValues["Race"] -> Move_Speed;
			}
			?>
=======
>>>>>>> master:DnDCharacterBuilder/resources/views/dice.blade.php
<?php
$final = false;

if(isset($displayValues["Race"])){
		$RaceName = $displayValues["Race"] -> Race_Name;
		$StrModifier = $displayValues["Race"] -> Strength;
		$DexModifier = $displayValues["Race"] -> Dexterity;
		$ChaModifier = $displayValues["Race"] -> Charisma;
		$WisModifier = $displayValues["Race"] -> Wisdom;
		$ConModifier = $displayValues["Race"] -> Constitution;
		$IntModifier = $displayValues["Race"] -> Intelligence;
		$Movespeed = $displayValues["Race"] -> Move_Speed;
			}
			
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
			}
			
			
//Dice Rolls
$dice = array(
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)),
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)),
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)),
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)),
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)),
array(rand(1,6),rand(1,6),rand(1,6),rand(1,6)));

array_multisort($dice[0], SORT_NUMERIC, SORT_DESC);
array_multisort($dice[1], SORT_NUMERIC, SORT_DESC);
array_multisort($dice[2], SORT_NUMERIC, SORT_DESC);
array_multisort($dice[3], SORT_NUMERIC, SORT_DESC);
array_multisort($dice[4], SORT_NUMERIC, SORT_DESC);
array_multisort($dice[5], SORT_NUMERIC, SORT_DESC);
array_pop($dice[0]);
array_pop($dice[1]);
array_pop($dice[2]);
array_pop($dice[3]);
array_pop($dice[4]);
array_pop($dice[5]);


echo "<h1>Your rolls are:</h1>";
$totals = array(array_sum($dice[0]), array_sum($dice[1]), array_sum($dice[2]), array_sum($dice[3]), array_sum($dice[4]), array_sum($dice[5]));
for ($row = 0; $row < 6; $row++) {
echo"<p><b>$totals[$row]</b></p>";
}

?>
<form action=<?php echo "/DnDBuilder/".urlencode($displayValues["Race"] -> Race_Name)."/Class/".urlencode($displayValues["Class"] -> Class_Name)."/Dice"?> method="submit">
    <button name="click" class="click">Reroll?</button>
</form> 
 <ul class="ul"> 
	<li id="1" data-roll="0" class="ui-widget-content"><?php echo $totals[0];?></li>
	<li id="2" data-roll="0" class="ui-widget-content"><?php echo $totals[1];?></li>
	<li id="3" data-roll="0" class="ui-widget-content"><?php echo $totals[2];?></li>
	<li id="4" data-roll="0" class="ui-widget-content"><?php echo $totals[3];?></li>
	<li id="5" data-roll="0" class="ui-widget-content"><?php echo $totals[4];?></li>
	<li id="6" data-roll="0" class="ui-widget-content"><?php echo $totals[5];?></li>
 </ul>
  <script>
 var test = [<?php Print($totals[0]);?>, <?php Print($totals[1]);?>, <?php Print($totals[2]);?>, <?php Print($totals[3]);?>, <?php Print($totals[4]);?>, <?php Print($totals[5]);?>];
 $("#1").attr("data-roll", test[0]);
 $("#2").attr("data-roll", test[1]);
 $("#3").attr("data-roll", test[2]);
 $("#4").attr("data-roll", test[3]);
 $("#5").attr("data-roll", test[4]);
 $("#6").attr("data-roll", test[5]);
  $( function() {
    $( ".ui-widget-content" ).draggable({ snap: ".ui-widget-header", snapMode: "inner" });
    $( ".ui-widget-header" ).droppable({
      drop: function(event, ui ) {     
       $(ui.draggable).draggable('disable');
	   $(this).addClass( "ui-state-highlight" )
	   $(this).droppable('disable');
	   var id = ui.draggable.attr("data-roll");
	   $(this).attr("data-roll", id);
      }
    });
  } );
 
  $(function() {
      $("#button").click( function()
           {
				 var Str = $("#Strength").attr("data-roll");
				 var Dex = $("#Dexterity").attr("data-roll");
				 var Con = $("#Constitution").attr("data-roll");
				 var Int = $("#Intelligence").attr("data-roll");
				 var Wis = $("#Wisdom").attr("data-roll");
				 var Char = $("#Charisma").attr("data-roll");
			if(Str == 0 || Dex == 0 || Con == 0 || Int == 0 || Wis == 0 || Char == 0){
				alert("Missing Values!");
			}
			
			else{	
			 $("#dice").toggle("visibility");
             $("#hidden").toggle("visibility");
			 $(this).remove();
			 $("#undo").remove();
			 var Str = $("#Strength").attr("data-roll");
			 document.getElementById("Str").innerHTML = <?php echo intval($StrModifier) ?> + parseInt(Str);
			 var Dex = $("#Dexterity").attr("data-roll");
			 document.getElementById("Dex").innerHTML = parseInt(Dex) + <?php echo intval($DexModifier) ?>;
			 var Con = $("#Constitution").attr("data-roll");
			 document.getElementById("Con").innerHTML = parseInt(Con) + <?php echo intval($ConModifier) ?>;
			 var Int = $("#Intelligence").attr("data-roll");
			 document.getElementById("Int").innerHTML = parseInt(Int) + <?php echo intval($IntModifier) ?>;
			 var Wis = $("#Wisdom").attr("data-roll");
			 document.getElementById("Wis").innerHTML = parseInt(Wis) + <?php echo intval($WisModifier) ?>;
			 var Char = $("#Charisma").attr("data-roll");
			 document.getElementById("Char").innerHTML = parseInt(Char) + <?php echo intval($ChaModifier) ?>;
			 
			          
			<?php $final =  true;?>
			}
		}
      );
	});
	</script>
<ul class="ul">
<li id="Strength" data-roll="0" class="ui-widget-header">Strength</li>
<li id="Dexterity" data-roll="0" class="ui-widget-header">Dexterity</li>
<li id="Constitution" data-roll="0" class="ui-widget-header">Constitution</li>
<li id="Intelligence" data-roll="0" class="ui-widget-header">Intelligence</li>
<li id="Wisdom" data-roll="0" class="ui-widget-header">Wisdom</li>
<li id="Charisma" data-roll="0" class="ui-widget-header">Charisma</li>
</ul>
</div>
<ul class="ul" id="hidden">
<<<<<<< HEAD:DnDCharacterBuilder/resources/views/dice.php
	<li>Strength:<div id="Str"></div> + <?php echo $StrModifier ;?></li>
	<li>Dexterity:	<div id="Dex"></div> + <?php echo $DexModifier ;?></li>
	<li>Constitution:	<div id="Con"></div> + <?php echo $ConModifier ;?></li>
	<li>Intelligence:	<div  id="Int"></div> + <?php echo $IntModifier ;?></li>
	<li>Wisdom:	<div id="Wis"></div> + <?php echo $WisModifier ;?></li>
	<li>Charisma:	<div id="Char"></div> + <?php echo $ChaModifier ;?></li>
=======
<ul><i><b>Your Character:</b></i></ul>
<aside class="animated slideInLeft">
	<li>Race: <div id="Race"><?php echo $RaceName?></li>
	<li>Strength:	<div id="Str"></div></li>
	<li>Dexterity:	<div id="Dex"></div></li>
	<li>Constitution:	<div id="Con"></div></li>
	<li>Intelligence:	<div  id="Int"></div></li>
	<li>Wisdom:	<div id="Wis"></div></li>
	<li>Charisma:	<div id="Char"></div></li>
	<li>Movement Speed: </td><div id="Mov"><?php echo $Movespeed; ?>
>>>>>>> master:DnDCharacterBuilder/resources/views/dice.blade.php
	
		</aside>
			<table>
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
				<!--<tr>
					<td class="tdName">First Level Hit Points:</td>
					<td id="1HP"><?php echo $FirstLevelHP; ?></td>
				</tr>
				-->
				<tr>
					<td class="tdName">Armor: </td>
					<td id="Armor"><?php echo $Armor; ?></td>
				</tr>
				<tr>
					<td class="tdName">Weapons: </td>
					<td id="Weapon">
					<?php echo $Weapons;
						//$exWeapons = explode(",", $Weapons);
						//foreach($exWeapons as $x){
						//print ($x . "\r\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
						//}
						
					?>
					</td>
				</tr>
				
				<!--<tr>
					All null values in dataqbase currently
				<td class="tdName">Description</td>
					<td id="Desc"><?php //echo $Description; ?></td> -->
				</tr>
			</table>
</ul>
		


	


<button id="undo" onclick="undo()">Undo!</button>
 <script>
  	function undo() {
		$(".ui-widget-header").removeClass("ui-state-highlight");
		$( ".ui-widget-content" ).draggable('enable');
		$( ".ui-widget-header" ).droppable('enable')
		$( ".ui-widget-header" ).attr("data-roll", 0);
	}
</script>
<button id="button" class="click">Finalize!</button>
<<<<<<< HEAD:DnDCharacterBuilder/resources/views/dice.php
=======


>>>>>>> master:DnDCharacterBuilder/resources/views/dice.blade.php
		
</body>
</html>

