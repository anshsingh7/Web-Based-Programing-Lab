<!DOCTYPE html>
<html>

<head>
    <title>User-Defined Function</title>
</head>

<body bgcolor="powderblue">
    <?php
    echo "<h1>User-defined function</h1>";
    echo "<h2>Ansh Singh</h2>";

    $a = 5;
    $b = 10;
    $x;
    $y;
    function sum()
    {
        global $a, $b, $x;
        $x = $a + $b;
    }
    function multiplication()
    {
        global $a, $b, $y;
        $y = $a * $b;
    }
    echo "<b> Code for addition of 2 variables: </b>";
    sum();
    echo "<br> Sum of $a and $b is $x <br>";
    var_dump($x);
    
    echo "<br> <b> Code for multiplication of 2 variables: </b>";
    multiplication();
    echo "<br> Multiplication of $a and $b is $y <br>";
    var_dump($y);
    ?>
</body>

</html>