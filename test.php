<?php 
 
$player = $_POST['player'];

$result = file_get_contents("https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=".$player);

for ($i = 0; $i < 494; $i++){
    if ($result[$i] === ',' or $result[$i] === ' '){
        echo "<br>";
    }
    else {
        echo $result[$i];
    }
}
header("Location:http://localhost/hiscore/hiscore.php");
?>