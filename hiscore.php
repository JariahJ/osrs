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
    if (isset($_POST['submit'])) {
        $player = $_POST['player'];

        $result = file_get_contents("https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=" . $player);
        
        //thin space character was used as spaces. this wipes all whitespace.
        $array = preg_replace(
            "/(\t|\n|\v|\f|\r| |\xC2\x85|\xc2\xa0|\xe1\xa0\x8e|\xe2\x80[\x80-\x8D]|\xe2\x80\xa8|\xe2\x80\xa9|\xe2\x80\xaF|\xe2\x81\x9f|\xe2\x81\xa0|\xe3\x80\x80|\xef\xbb\xbf)+/",
            '',
            $result
        );

        echo $array;

    }
    ?>

</body>

</html>