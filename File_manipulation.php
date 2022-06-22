<!DOCTYPE html>
<html lang="en">

<head>
    <title>File Manipulation</title>
</head>

<body bgcolor="powderblue">
    <?php
    echo  "<h2>fwrite :</h2>";
    $file = fopen("new1.txt", "w+");
    $txt = "I'm Ansh Singh form BCA-Evening shift";
    fwrite($file, "$txt");
    readfile("new1.txt");

    echo  "<h2>ftruncate :</h2>";
    ftruncate($file, 14);
    readfile("new1.txt");
    
    echo "<h2>fgetc :</h2>";
    $file = fopen("new1.txt", "r");
    while (!feof($file)) {
        $line = fgetc($file);
        echo $line . "<br>";
    }
    ?>
</body>

</html>