<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $masivs = array("pirmais", "otrais", "tresais", "ceturtais", "piektais");
    foreach ($masivs as $key => $value) {
        print "<tb>" . $key . " " . $value . "<br>" . "</tb>";

    }
    ?>
</body>
</html>