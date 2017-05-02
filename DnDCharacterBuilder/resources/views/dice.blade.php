<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <style>
  .ui-widget-content {width: 40px; height: 40px; padding: 0.5em; text-align: center; display: inline-block;}
  .ui-widget-header { width: 60px; height: 60px; padding: 1.5em; text-align: center; float: left; margin: 10px;}
  .ul {list-style-type: none}
  #hidden { display: none;}
  .table{display: table; margin: 0 auto;}
  .click{margin: auto;}
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
<body>
			<header>
			<h1>Character Builder</h1>
			<table id="Stage">
				<tr id="StgRow">
					<td id="RaceStg">Race</td>
					<td id="ClassStg">Class</td>
					<td id="AbtStg" class="activeStg">Ability Points</td>
					<td id="FinStg">Final</td>
				</tr>
			</table>
		</header>
	<div id="canvas" style="background-image: url('{{ asset('images/forest.jpg') }}');">
<div id="dice">

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

}

?>
<div class="table">
 <ul class="ul"> 
	<li id="1" data-roll="0" class="ui-widget-content" ><?php echo $totals[0];?></li>
	<li id="2" data-roll="0" class="ui-widget-content" ><?php echo $totals[1];?></li>
	<li id="3" data-roll="0" class="ui-widget-content" ><?php echo $totals[2];?></li>
	<li id="4" data-roll="0" class="ui-widget-content" ><?php echo $totals[3];?></li>
	<li id="5" data-roll="0" class="ui-widget-content" ><?php echo $totals[4];?></li>
	<li id="6" data-roll="0" class="ui-widget-content" ><?php echo $totals[5];?></li>
 </ul>
 </div>
 <div align="center">
 <form action=<?php echo "/DnDBuilder/".urlencode($displayValues["Race"] -> Race_Name)."/Class/".urlencode($displayValues["Class"] -> Class_Name)."/Dice"?> method="submit">
    <button name="click" class="click" >Reroll?</button>
</form> 
</div>
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
      $("#finalize").click( function()
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
			 $("td").removeClass("activeStg");
			 $("#FinStg").addClass("activeStg");
			 document.getElementById("Str1").innerHTML = parseInt(Str);
			 document.getElementById("Str").innerHTML = Math.floor((parseInt(Str) + <?php echo intval($StrModifier) ?> -10)/2);
			 document.getElementById("Str2").innerHTML = parseInt(Str) + Math.floor((parseInt(Str) + <?php echo intval($StrModifier) ?> -10)/2);
			 document.getElementById("Dex1").innerHTML = parseInt(Dex);
			 document.getElementById("Dex").innerHTML = Math.floor((parseInt(Dex) + <?php echo intval($DexModifier) ?> -10)/2);
			 document.getElementById("Dex2").innerHTML = parseInt(Dex) + Math.floor((parseInt(Dex) + <?php echo intval($DexModifier) ?> -10)/2);
		     document.getElementById("Con1").innerHTML = parseInt(Con);
			 document.getElementById("Con").innerHTML = Math.floor((parseInt(Con) + <?php echo intval($ConModifier) ?> -10)/2);
			 document.getElementById("Con2").innerHTML = parseInt(Con) + Math.floor((parseInt(Con) + <?php echo intval($ConModifier) ?> -10)/2);
	      	 document.getElementById("Int1").innerHTML = parseInt(Int);
			 document.getElementById("Int").innerHTML = Math.floor((parseInt(Int) + <?php echo intval($IntModifier) ?> -10)/2);
			 document.getElementById("Int2").innerHTML = parseInt(Int) + Math.floor((parseInt(Int) + <?php echo intval($IntModifier) ?> -10)/2);
			 document.getElementById("Wis1").innerHTML = parseInt(Wis);
			 document.getElementById("Wis").innerHTML = Math.floor((parseInt(Wis) + <?php echo intval($WisModifier) ?> -10)/2);
			 document.getElementById("Wis2").innerHTML = parseInt(Wis) + Math.floor((parseInt(Wis) + <?php echo intval($WisModifier) ?> -10)/2);
			 document.getElementById("Char1").innerHTML = parseInt(Char);
			 document.getElementById("Char").innerHTML = Math.floor((parseInt(Char) + <?php echo intval($ChaModifier) ?> -10)/2);
			 document.getElementById("Char2").innerHTML = parseInt(Char) + Math.floor((parseInt(Char) + <?php echo intval($ChaModifier) ?> -10)/2);
			          
			<?php $final =  true;?>
			}
		}
      );
	});
	</script>
<div class="table">
<ul class="ul">
<li id="Strength" data-roll="0" class="ui-widget-header">Strength</li>
<li id="Dexterity" data-roll="0" class="ui-widget-header">Dexterity</li>
<li id="Constitution" data-roll="0" class="ui-widget-header">Constitution</li>
<li id="Intelligence" data-roll="0" class="ui-widget-header">Intelligence</li>
<li id="Wisdom" data-roll="0" class="ui-widget-header">Wisdom</li>
<li id="Charisma" data-roll="0" class="ui-widget-header">Charisma</li>
</ul>
</div>
</div>
<div id="hidden">
<img src="<?php echo asset("$RaceName" . '.jpg') ?>"/> 
<ul class="ul">
	<aside id="list">
	<li>Strength: <span id="Str1"></span> + <span id="Str"></span></li>
	<li>Dexterity: <span id="Dex1"></span> + <span id="Dex"></span></li>
	<li>Constitution: <span id="Con1"></span> + <span id="Con"></span></li>
	<li>Intelligence: <span id="Int1"></span> + <span id="Int"></span></li>
	<li>Wisdom: <span id="Wis1"></span> +	<span id="Wis"></span></li>
	<li>Charisma: <span id="Char1"></span> + <span id="Char"></span></li>
	</aside>
</ul>
<ul><i><b>Your Character:</b></i></ul>
<ul class="ul">
	<aside class="animated slideInLeft">
	<li><i><b>Race: </i><span id="Race"><?php echo $RaceName ?></span></b></li>
	<li><i>Strength: </i><span id="Str2"></span></li>
	<li><i>Dexterity: </i><span id="Dex2"></span></li>
	<li><i>Constitution: </i><span id="Con2"></span></li>
	<li><i>Intelligence: </i><span id="Int2"></span></li>
	<li><i>Wisdom: </i><span id="Wis2"></span></li>
	<li><i>Charisma: </i><span id="Char2"></span></li>
	<li><i>Movement Speed: </i><span id="Mov"><?php echo $Movespeed; ?></span></li>
	<li></br></li>
	<li><i><b>Class: </b></i><span id="Class" class="Class"><?php echo $ClassName; ?></span></b></li>
	<li><i>Primary Ability: </i><span id="Primary" class="tdName"><?php echo $PrimaryAbility; ?></span></li>
	<li><i>Saving Throw Proficiencies: </i><span id="Saving" class="tdName"><?php echo $SavingThrows; ?></span></li>
	<li><i>Hit Dice: </i><span id="dice" class="tdName"><?php echo "d".$HitDie; ?></span></li>
	<li><i>First Level Hit Points: </i><span id="1HP" class="tdName"><?php echo $FirstLevelHP; ?></span></li>
	<li><i>Armor: </i><span id="Armor" class="tdName"><?php echo $Armor; ?></span></li>
	<li><i>Weapons: </i><span id="Weapon" class="tdName"><?php echo $Weapons; ?></span></li>
	<!--<li><i><b>Description: </b></i><span id="Desc" class="tdName"><?php //echo $Description; ?></span></li>-->
	</aside>
</ul>

<!--
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
				<tr>
					<td class="tdName">First Level Hit Points:</td>
					<td id="1HP"><?php echo $FirstLevelHP; ?></td>
				</tr>
				<tr>
					<td class="tdName">Armor: </td>
					<td id="Armor"><?php echo $Armor; ?></td>
				</tr>
				<tr>
					<td class="tdName">Weapons: </td>
					<td id="Weapon"><?php echo $Weapons; ?></td>
				</tr>	
				<tr>
					<td class="tdName">Description</td>
					<td id="Desc"><?php //echo $Description; ?></td>
				</tr>
			</table> -->
</div>	


	

<div align="center"> 
<button id="undo" onclick="undo()">Undo!</button>
 <script>
  	function undo() {
		$(".ui-widget-header").removeClass("ui-state-highlight");
		$( ".ui-widget-content" ).draggable('enable');
		$( ".ui-widget-header" ).droppable('enable')
		$( ".ui-widget-header" ).attr("data-roll", 0);
	}
</script>

<button id="finalize" class="click">Finalize!</button>
</div>

</body>
</html>

