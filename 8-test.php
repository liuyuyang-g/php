<?php
	session_start();
?>
<form action="8-test.php" method="post">
	名称：<input type="text" name="username"><br>
	年龄：<input type="text" name="userage"><br>
	<input type="submit" name="sub" value="提交">
</form>

<table width="400" border="1">
	<tr>
		<td>编号</td>
		<td>姓名</td>
		<td>年龄</td>
	</tr>
	<?php
		// $_SESSION['arr']=array();
		if(isset($_POST['sub'])){
			$_SESSION['arr'][]=array($_POST['username'],$_POST['userage']);
		}
		foreach ($variable as $k => $v) {
			echo "<tr><td>".($k+1)."</td><td>".$v[0]."</td><td>".$v[1]."</td></tr>";
		}
	?>
</table>
<form action="8-test.php" method="post">
	<input type="submit" name="del" value="删除">
</form>
