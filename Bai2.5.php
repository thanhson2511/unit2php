<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Tách họ đệm và tên từ chuỗi</h2>
<?php 
	$name = array();
	$name [0][0] = "Bùi";
	$name [0][1] = "Thanh";
	$name [0][2] = "Sơn";
	$name [1][0] = "Nguyễn";
	$name [1][1] = "Ngọc";
	$name [1][2] = "Phúc";

	echo "<br> Họ:" . $name[0][0] . ',' . $name[1][0];
	echo "<br> Tên Đệm :". $name[0][1] . ',' . $name[1][1];
	echo "<br> Tên :" . $name[0][2] . ',' . $name[1][2];
	
 ?>
</body>
</html>