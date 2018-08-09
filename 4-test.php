<?php
	$user[id]=1;
	$user[name]="laoxie";
	$user[age]="29";
	$user[gender]="male";
	$user[email]="laoxie@163.com";

	foreach ($user as $key => $value) {
		echo $key."=>".$value."<br>";
	}
?>