<?php


if (isset($_POST['submit'])) {
    print_r($_POST);
    if (strlen($_POST['username']) > 8) {
        $error = true;
        print "username incorrect";
    };
    print "<br>";
    if (isset($_POST['submit'])) {
        if (strlen($_POST['username']) < 8) {
            $error = true;
            print "password to short";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="username" name="username" required>
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>