<?php
$filepath = "idtemp.txt";
$idnamed = file_get_contents($filepath);
$idint = (int)$idnamed + 1;
$idnamed = (string)$idint;
$fopen = fopen($filepath,'wb') or die('文件不存在');
fwrite($fopen,$idnamed);
fclose($fopen);
readfile($filepath);
?>