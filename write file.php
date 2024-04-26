<?php

$filename = "C:/Users/ASUS/Desktop/New Text Document.txt";

$file = fopen($filename,'w') or die("Can't open file");

$content = "your first file vansh is ready";

fwrite($file, $content); // Corrected to fwrite instead of $fclose

fclose($file); // Corrected to fclose

 echo "your file is ready go check your file folder name vansh.txt at" ,"<br>",$filename;// Corrected to display filename
?>

