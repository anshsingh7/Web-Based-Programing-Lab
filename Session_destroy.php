<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Session Destroy</title>
</head>

<body bgcolor="powderblue">
    <?php
    echo "Ansh Singh<br>";
    $_session["login"] = "succesful";
    // echo"session_start";
    // print_r($_session);
    if (isset($_session["login"])) {
        echo $_session['login'];
    }

    // session_unset();
    session_destroy();
    ?>

</body>

</html>