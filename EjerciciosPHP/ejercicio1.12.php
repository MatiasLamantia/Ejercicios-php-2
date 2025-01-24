<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video 1.12</title>
</head>
<body>
    <?php

    /* OPERATORS */

    //Aritmetic Operators (+ - * / % **)
    $x = "10";
    $y = 2;

    //var_dump($x * $y);
    //var_dump($x - $y);
    //var_dump($x / $y);
    //var_dump(fdiv($x, $y));
    //var_dump(fmod($x , $y));


    //assigmetn operators

    //$x = $y = 10;   //ambas variables adquieren el valor de 10
    //$x = ($y = 10) * 5;

    $x = 5;
    $x *= 3;

    //echo $x;

    //String operators
    $x = "Hello";

    $x .= ' World';

    //echo $x;

    //Comparison Operators (== === != <> )

    $x = 15;
    $y = 15;

    //var_dump($x == $y);
    //var_dump($x === $y);
    //var_dump($x != $y);
    //var_dump($x < $y);
    var_dump($x <=> $y);

    $x = "Hello World";
    $y = strpos($x,'H');

    //if($y === false){
     //   echo 'H Not Found';
    //}
    //else{
     //   echo "H Found at index". $x;
    //}
    
    $result = $y === false ? "H Not Found" : "H Found at index" . $y;

    echo $result;
    $x = null;
    $y = $x ?? 'Hello';

    var_dump($y);
    ?>
</body>
</html>