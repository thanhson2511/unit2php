<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Tìm số nguyên lớn nhất trong mảng</h2>
	<?php 
		$array = array(1,4,2,6,9,100,45,8,20);
		$max = null;
 
		for ($i = 0; $i < count($array); $i++)
		{
		    if ($max == null){
		        $max = $array[$i];
		        
		    }
		    else {
		        if ($array[$i] > $max){
		            $max = $array[$i];
		           
		        }
		    }
		}
		 
		echo "Số nguyên lớn nhất là $max";

	 ?>
</body>
</html>