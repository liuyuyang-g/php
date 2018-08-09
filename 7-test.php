
<table width="400" border="1" align="center">
	<tr>
		<td>商品顺序</td>
		<td>商品名称</td>
	</tr>
<?php
	$arr=array('2012 Macbookpro','2009 iMac','2011 Macbookair','2007 iPad');
	foreach ($arr as $k => $v) {
		echo "<tr>";
		echo "<td>".($k+1)."</td>";
		echo "<td>".$v."</td>";
		echo "</tr>";
	}
?>
</table>