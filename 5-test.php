<?php
	$count=0
	while($count<5){
		$num[]=rand(0,9);
		$res=array_unique($num);
		$count=count($res);
	}
	echo "$res";
?>
