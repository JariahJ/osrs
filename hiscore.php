<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OSRS HISCORE</title>
</head>
<div class="banner-image">
    <div class="banner-text">
        <h1>OSRS HISCORES</h1>
        <p>By: Jariah Jaramillo</p>
    </div>
</div>

<body>
    <p class=user><strong> Username:</strong></p>

    <form method="post" action="hiscore.php">
        <input type=text name="player">
        <input type=submit name=submit value="SEND">
    </form>
    <?php

include "player.php";
    if (isset($_POST['submit'])) {
        $player = $_POST['player'];

        $result = file_get_contents("https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=" . $player);
        //thin space character was used as spaces. this wipes all whitespace and replaces with real space.
        $temp = preg_replace(
            "/(\t|\n|\v|\f|\r| |\xC2\x85|\xc2\xa0|\xe1\xa0\x8e|\xe2\x80[\x80-\x8D]|\xe2\x80\xa8|\xe2\x80\xa9|\xe2\x80\xaF|\xe2\x81\x9f|\xe2\x81\xa0|\xe3\x80\x80|\xef\xbb\xbf)+/",
            ' ',
            $result
        );
        
        // commas & thin spaces fully replaced with spaces
        $statsStr = str_replace(',', ' ', $temp);
        $stats = explode(' ', $statsStr);
        $user = new player($player);
    
        $user->overall = array($stats[0], $stats[1], $stats[2]);
        $user->attack = array($stats[3], $stats[4], $stats[5]);
        $user->defence = array($stats[6], $stats[7], $stats[8]);
        $user->strength = array($stats[9], $stats[10], $stats[11]);
        $user->hitpoints = array($stats[12], $stats[13], $stats[14]);
        $user->ranged = array($stats[15], $stats[16], $stats[17]);
        $user->prayer = array($stats[18], $stats[19], $stats[20]);
        $user->magic = array($stats[21], $stats[22], $stats[23]);
        $user->cooking = array($stats[24], $stats[25], $stats[26]);
        $user->woodcutting = array($stats[27], $stats[28], $stats[29]);
        $user->fletching = array($stats[30], $stats[31], $stats[32]);
        $user->fishing = array($stats[33], $stats[34], $stats[35]);
        $user->firemaking = array($stats[36], $stats[37], $stats[38]);
        $user->crafting = array($stats[39], $stats[40], $stats[41]);
        $user->smithing = array($stats[42], $stats[43], $stats[44]);
        $user->mining = array($stats[45], $stats[46], $stats[47]);
        $user->herblore = array($stats[48], $stats[49], $stats[50]);
        $user->agility = array($stats[51], $stats[52], $stats[53]);
        $user->thieving = array($stats[54], $stats[55], $stats[56]);
        $user->slayer = array($stats[57], $stats[58], $stats[59]);
        $user->farming = array($stats[60], $stats[61], $stats[62]);
        $user->runecraft = array($stats[63], $stats[64], $stats[65]);
        $user->hunter = array($stats[66], $stats[67], $stats[68]);
        $user->construction = array($stats[69], $stats[70], $stats[71]);

    }
    ?>

</body>

</html>