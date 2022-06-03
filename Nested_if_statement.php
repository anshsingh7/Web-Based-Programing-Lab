<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP nested if Statement</title>
</head>

<body bgcolor="powderblue">
    <?php
    echo "<h1> Nested if Statement </h1>";
    echo "<h2> Ansh Singh </h2>";

    $age = 23;
    $nationality = "Indian";
    //applying conditions on nationality and age  
    if ($nationality == "Indian") {
        if ($age >= 18) {
            echo "Eligible to give vote";
        } else {
            echo "Not eligible to give vote";
        }
    }
    ?>
</body>

</html>