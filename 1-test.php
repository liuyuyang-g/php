<?php
	if(isset($_POST['sub'])){
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
	}
?>


<meta charset='utf-8'>
<form actions="1-test.php" method="post">
	用户名:<input type="text" name="uname"><br />
	密码： <input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">
</form>