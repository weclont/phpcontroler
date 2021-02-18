<?php 
	$_INF = file("./id/".$_GET['id']."");
	foreach($_INF as $cont){
		echo $cont."<br>";
	}
?>
