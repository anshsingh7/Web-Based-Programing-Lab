<?php
$cookie_name = "user";
$cookie_value = "instagram";
setcookie($cookie_name, $cookie_value, time() + (86400), "/");
?>

<html>

<body bgcolor="powderblue">
    <?php
    echo "Ansh Singh <br>";
    if (!isset($_COOKIE[$cookie_name])) {
        echo "cookie is notset";
    } else {
        echo $_COOKIE[$cookie_name];
    }
    ?>
</body>

</html>