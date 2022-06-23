<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modify the content of Existing file</title>
</head>

<body bgcolor="powderblue">
    <?php
    $file = "ansh.txt";

    // String of data to be written
    $data = "I'm Ansh Singh form BCA-Evening Shift.";

    // Open the file for writing
    $handle = fopen($file, "w") or die("ERROR: Cannot open the file.");

    // Write data to the file
    fwrite($handle, $data) or die("ERROR: Cannot write the file.");

    // Closing the file handle
    fclose($handle);

    echo "Data written to the file successfully.";
    ?>
</body>

</html>

