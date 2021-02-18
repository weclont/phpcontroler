<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>返回数据发出</title>
	</head>
	<body>
		<?php
		if($_GET['return']!="" && $_GET['id']!=""){
		$filepath = "./do/".$_GET['id']."-json.txt";
		$fopen = fopen($filepath,'wb') or die('文件不存在');
		fwrite($fopen,"----------------------------------"."\r\n".$_GET['return']."\r\n"."ID:".$_GET['id']."\r\n".$_GET['id1']."\r\n".$_GET['id2']."\r\n".$_GET['id3']."\r\n".date(DATE_ISO8601)."\r\n"."----------------------------------");
		fclose($fopen);
		echo "-----------------------------------";
		echo "<br>".$_GET['return']."<br>".$_GET['id1']."<br>".$_GET['id2']."<br>".$_GET['id3']."<br>";
		echo "-----------------------------------";
		}else{
			echo "请正确输入返回值或ID！！";
		}
		?>
	</body>
</html>