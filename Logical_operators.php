<!DOCTYPE html>
<html lang="en">

<head>
    <TITLE>PHP Operators</TITLE>
</head>

<body bgcolor="powderblue">
    <?php
    echo "<h1> Operators </h1>";
    echo "<h2> Logical Operators :- </h2>";
    echo "<h3> Ansh Singh </h3>";

    echo "<h4>AND(&&) Operator :</h4>";
    $myvar = (true) && (true);
    echo var_dump($myvar), "<br>";

    $myvar1 = (true) && (false);
    echo var_dump($myvar1), "<br>";

    $myvar2 = (false) && (true);
    echo var_dump($myvar2), "<br>";

    $myvar3 = (false) && (false);
    echo var_dump($myvar3), "<br>";

    echo "<h4>OR(||) Operator :</h4>";
    $myvar = (true) || (true);
    echo var_dump($myvar), "<br>";

    $myvar1 = (true) || (false);
    echo var_dump($myvar1), "<br>";

    $myvar2 = (false) || (true);
    echo var_dump($myvar2), "<br>";

    $myvar3 = (false) || (false);
    echo var_dump($myvar3), "<br>";

    echo "<h4>XOR Operator :</h4>";
    $myvar = (true) xor (true);
    echo var_dump($myvar), "<br>";

    $myvar1 = (true) xor (false);
    echo var_dump($myvar1), "<br>";

    $myvar2 = (false) xor (true);
    echo var_dump($myvar2), "<br>";

    $myvar3 = (false) xor (false);
    echo var_dump($myvar3), "<br>";
    ?>
</body>

</html>