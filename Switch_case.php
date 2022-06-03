<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Switch Statement</title>
</head>

<body bgcolor="powderblue">
    <?php
    echo "<h1> Switch Case </h1>";
    echo "<h2> Ansh Singh </h2>";

    $today = date("D");
    switch ($today) 
    {
        case "Mon":
            echo "Today is Monday. Cleaning your house.";
            break;
        case "Tue":
            echo "Today is Tuesday. Buy some fruits.";
            break;
        case "Wed":
            echo "Today is Wednesday. Visit a doctor.";
            break;
        case "Thu":
            echo "Today is Thursday. Do your assignments.";
            break;
        case "Fri":
            echo "Today is Friday. Party tonight.";
            break;
        case "Sat":
            echo "Today is Saturday. Its movie time.";
            break;
        case "Sun":
            echo "Today is Sunday. Do some Shopping.";
            break;
        default:
            echo "Sorry, No information available for that day.";
            break;
    }
    ?>
</body>

</html>