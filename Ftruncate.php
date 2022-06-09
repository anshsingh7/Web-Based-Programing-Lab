<?php
// Ansh Singh
$file=fopen("file.txt","r+");
ftruncate($file,100);
fclose($file);
?>