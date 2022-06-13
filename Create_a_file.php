<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create a File</title>
</head>

<body bgcolor="powderblue">
    <?php
    // Ansh Singh
    $file = fopen("new_file.txt", "w+");
    fwrite($file, "Hey, I'm Ansh Singh currently i'm Pursuing BCA programme in Tecnia Institute of Advanced Studies.");
    readfile("new_file.txt");
    ?>
</body>

</html>

