    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Ansh Singh -->
        <title>Upload and display image in PHP</title>
    </head>

    <body bgcolor="powderblue">
        <form action='' method="post" enctype="multipart/form-data">
            <input type="file" name="upload"><br><br>
            <input type="submit" name="login"><br>
        </form>
        <h2>Download file from HERE:</h2>
        <a href="Upload_and_display_img.php?file=php.jpg">Click Here</a>
    </body>

    </html>
    <?php
    if (isset($_FILES['upload'])) {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        $uploadir =  "uploads/";
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $file_type = $_FILES['upload']['type'];
        move_uploaded_file($file_tmp, "$uploadir/$file_name");
    }

    if (!empty($_GET['file'])) {
        $filename = basename($_GET['file']);
        $filepath = 'uploads/' . $filename;
        if (!empty($filename) && file_exists($filepath)) {
            header("Cache-Control: public");
            header("Content-Description:File Transfer");
            header("Content-Desposition: attachment; filename=$filename");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding:binary");
            readfile($filepath);
            exit;
        } else {
            echo "This File does not exist.";
        }
    }
    ?>



    <!-- img1.jpg -->
    <!-- download -->