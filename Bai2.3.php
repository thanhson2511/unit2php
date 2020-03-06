<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Sắp xếp theo thứ tự tăng dần </h2>
<?php 
	$dayso = array(1,4,2,6,9,100,4);
	sort($dayso);
	foreach ($dayso as $key => $value) {
		echo "<br> $value ";
	}
 ?>

</body>
</html>
