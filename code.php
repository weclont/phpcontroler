<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>新建ID并建立索引</title>
	</head>
	<body>
		<?php
			$filepath = "./id/".$_GET['id']; 
			$fopena = fopen("./do/".$_GET['id']."-json.txt",'wb');
			fwrite($fopena,"");
			fclose($fopena);
			$fopenb = fopen($filepath,'wb');
			fwrite($fopenb,"/".$_GET['id']."*".$_GET['username']."&".$_GET['pcname']."+".$_GET['cpuname']."=");
			fclose($fopenb);
			$fopenc = fopen("./do/".$_GET['id']."-message.txt",'wb');
			fwrite($fopenc,"");
			fclose($fopenc);
		?>
	</body>
</html>