<?php 
$player = $_POST['player'];

 
$player = $_POST['player'];

$result = file_get_contents("https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=".$player);
var_dump($result);
?>