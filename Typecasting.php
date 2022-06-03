<!DOCTYPE html>
<html lang="en">

<head>
    <title> Typecasting in PHP</title>
</head>

<body bgcolor="powderblue">
    <?php
    echo "<h1> Typecasting </h1>";
    echo "<h2> Ansh Singh </h2>";

    $i = 1;
    echo var_dump($i), "<br>"; //$i is integer

    $i = 2.3;
    echo var_dump($i), "<br>"; //$i is float

    $i = "php type casting";
    echo var_dump($i), "<br>"; //$i is string
    ?>
</body>

</html>