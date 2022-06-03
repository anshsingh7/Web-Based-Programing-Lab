<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sorting in PHP</title>
</head>

<body bgcolor="powderblue">
    <?php
    echo "<h1>Sorting</h1>";
    echo "<h2>Ansh Singh</h2>";

    $color = array("red", "green", "yellow", "pink", "white", "blue", "silver", "orange");
    sort($color);
    $num = count($color);
    echo "<h3> Number of element in this array is $num </h3>";
    for ($i = 0; $i < $num; $i++) {
        echo $color[$i];
        echo "<br>";
    }
    echo "<br>";
    $color = array("red", "green", "yellow", "pink", "white", "blue", "silver", "orange");
    rsort($color);
    $num = count($color);
    echo "<h3> Number of element in this array is $num </h3>";
    for ($i = 0; $i < $num; $i++) {
        echo $color[$i];
        echo "<br>";
    }
    ?>
</body>

</html>