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
    if(3<10){
        print "yes";
    }
    else {
        print "no";
    }
    print "</br>";
    if(3>10){
        print "yes";
    }
    elseif(4<5){
print "4 nav lielāks par 5";
    }
    else{
        print "nekas neizpildijās";
    }
print "</br>";
    if(1==1){
        print "ir vienādi";
    }
    print "</br>";
     if(1==="1"){
        print "ir vienādi";
    }
    else{
        print "nav vienādi datu tipi";
    }
print "</br>";
// vienāds ==
// identiski vienāds === (sakrīt arī datu tipi)
//salīdzināšana < > >= <>
//nav vienāds !=
//nav identiski vienāds !==
if ((1===1 && 2===2 )|| 3===3){
    print "ok";
}
// un &&
// vai ||

    ?>
    
<?php
print "</br>";
//switch
$number = 100;
switch($number){
    case 34:
    print "34";
    break;
    case 100:
    print "100";
    break;
    default:
    print "Default triggered!!";
}
?>



</body>
</html>