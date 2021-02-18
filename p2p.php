<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>文件上传</title>
	</head>
	<body>
		<?php 
		echo "欢迎进入控制页面！"; 
		if($_GET['id']!=""){
			echo "当前ID：".$_GET['id'];
		}else{
			echo "请先带ID参数POST访问！";
		}
		?>
		<form action="" method="post" enctype="multipart/form-data" name="form" accept-charset="UTF-8">
		<input name="up_file" type="file">
		<input type="submit" name="submit" value="upload">
		<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
		<?php
		$filepath = "./do/".$_GET['id']."-message.txt";
		if(!empty($_FILES['up_file']['name'])){
			$fileinfo = $_FILES['up_file'];
		if($fileinfo['size'] < 10000000000 && $fileinfo['size'] > 0){
			move_uploaded_file($fileinfo['tmp_name'],'./uploads/'.$fileinfo['name']);
			$fopen = fopen($filepath,'wb') or die('文件不存在');
			fwrite($fopen,'.upload('.$fileinfo['name'].')');
			fclose($fopen);
			echo $fileinfo['name'];
			echo '上传成功';
		}else{
			echo '文件太大或未知';
		}
	}
?>
	</body>
</html>