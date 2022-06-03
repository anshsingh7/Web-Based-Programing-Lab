<!DOCTYPE html>
<html lang="en">

<head>
    <TITLE>Php Operators</TITLE>
</head>

<body bgcolor="powderblue">
    <?php
    echo "<h1> Operators </h1>";
    echo "<h2> Increment / Decrement Operators :- </h2>";
    echo "<h3> Ansh Singh </h3>";

    $a = 15;
    echo '$a is ' . $a;
    echo '<br> Value after Pre-increment ( i.e. ++$a ) is ' . ++$a;

    echo '<br> $a is ' . $a;
    echo '<br> Value after Post-increment ( i.e. $a++ ) is ' . $a++;

    echo '<br> $a is ' . $a;
    echo '<br> Value after Pre-decrement ( i.e. --$a ) is ' . --$a;

    echo '<br> $a is ' . $a;
    echo '<br> Value after Post-decrement ( i.e. $a-- ) is ' . $a--;
    ?>
</body>

</html>