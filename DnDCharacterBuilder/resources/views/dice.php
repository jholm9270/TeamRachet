<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .ui-widget-content {width: 40px; height: 40px; padding: 0.5em; text-align: center; }
  .ui-widget-header { width: 60px; height: 60px; padding: 1.5em; text-align: center; float: left; margin: 10px;}
  .ul {list-style-type: none;}
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
<body>

<?php
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
<form action="multidice.php" method="post">
    <button name="click" class="click">Reroll?</button>
</form> 
 <ul class="ul">
	<li id="1" data-roll="1" class="ui-widget-content"><?php echo $totals[0];?></li>
	<li id="2" data-roll="1" class="ui-widget-content"><?php echo $totals[1];?></li>
	<li id="3" data-roll="1" class="ui-widget-content"><?php echo $totals[2];?></li>
	<li id="4" data-roll="1" class="ui-widget-content"><?php echo $totals[3];?></li>
	<li id="5" data-roll="1" class="ui-widget-content"><?php echo $totals[4];?></li>
	<li id="6" data-roll="1" class="ui-widget-content"><?php echo $totals[5];?></li>
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
	   var id = ui.draggable.attr("data-roll");
	   $(this).attr("data-roll", id);
      }
    });
  } );
  </script>
<ul class="ul">
<li id="Strength" data-roll="1" class="ui-widget-header">Strength</li>
<li id="Dexterity" data-roll="1" class="ui-widget-header">Dexterity</li>
<li id="Constitution" data-roll="1" class="ui-widget-header">Constitution</li>
<li id="Intelligence" data-roll="1" class="ui-widget-header">Intelligence</li>
<li id="Wisdom" data-roll="1" class="ui-widget-header">Wisdom</li>
<li id="Charisma" data-roll="1" class="ui-widget-header">Charisma</li>
</ul>

</body>
</html>
<form action="multidice.php" method="post">
    <button name="click" class="click">Finalize!</button>
</form>