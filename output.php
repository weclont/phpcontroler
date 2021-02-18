<?php
if($_GET['id']!=""){
	$filepath = "./do/".$_GET['id']."-message.txt";
	$_INF = file_get_contents($filepath);
	echo $_INF;
	$fopen = fopen($filepath,'wb') or die('文件不存在');
	fwrite($fopen,"");
	fclose($fopen);
}else{
	echo "请正确输入ID值！！";
}
?>