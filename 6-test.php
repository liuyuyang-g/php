<?php
	$data[03-21]='123';
	$data[04-11]='456';
	$data[10-12]='789';

	if (isset($_POST['sub'])) {
		$date=$_POST['date'];
		$flag=true;
		foreach ($data as $k => $v) {
			if($k==$date){
				echo "<script>alert('$v')</script>";
				$flag=false;
				break;
			}
		}
		if($flag==true){
			echo "<script>alert('无记录')</script>";
		}
	}
?>
<meta charset="utf-8">
<h3>查询当天日程</h3>
<form action="6-test.php" method="post">
	输入查询日期：<br>
	<input type="text" name="date"><br />
	<input type="submit" name="sub" value="查询">&nbsp;&nbsp;
	<input type="reset" name="rst" value="重置">
</form>