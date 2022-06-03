<!DOCTYPE html>
<html lang="en">

<head>
    <TITLE>PHP Operators</TITLE>
</head>

<body bgcolor="powderblue">
    <?php
    echo "<h1> Operators </h1>";
    echo "<h2> Comparison Operators :- </h2>";
    echo "<h3> Ansh Singh </h3>";

    $a = 20;
    $b = 18;
    echo "EQUALS TO: the value of $a == $b";
    echo var_dump($a == $b), "<br>";
    
    echo "<br> NOT EQUALS TO: the value of $a != $b";
    echo var_dump($a != $b), "<br>";
   
    echo "<br> GREATER THAN: the value of $a > $b";
    echo var_dump($a > $b), "<br>";

    echo "<br> LESS THAN: the value of $a < $b";
    echo var_dump($a < $b), "<br>";
   
    echo "<br> GREATER THAN OR EQUALS TO: the value of $a >= $b";
    echo var_dump($a >= $b), "<br>";
   
    echo "<br> LESS THAN OR EQUALS TO: the value of $a <= $b";
    echo var_dump($a <= $b);
    ?>
</body>

</html>



