//九九乘法表
<?php
	echo"<table border=1 width=400>";
	for($i=1;$i<=9;$i++){
	    echo"<tr>";
	    for($j=1;$j<=$i;$j++){
	      echo "<td>{$i}*{$j}=".($i*$j)."</td> ";
	    }
	    echo"</tr>";
	}
	echo"</table>";
?>

<?php
	echo "<br>";
?>

<?php
	echo "<table border=1 width=400>";
	for ($i=9; $i >0; $i--) { 
		echo "<tr>";
		for ($j=1; $j <=$i ; $j++) { 
			echo "<td>{$i}*{$j}=".($i*$j)."";
		}
		echo "</tr>";
	}
	echo "</table>";
?>

<?php
	echo "<br>";
?>

<?php
	echo "<table border=1 width=400>";
	for ($i=9; $i >0 ; $i--) { 
		echo "<tr>";
		for ($j=1; $j <=9-$i ; $j++) { 
			echo "<td>";
			echo "&nbsp;";
		}
		for ($j=1; $j<=$i ; $j++) { 
			echo "<td>{$i}*{$j}=".($i*$j)."";
		}
		echo "</tr>";
	}
	echo "</table>";
?>

<?php
	echo "<br>"
?>

<?php
	echo "<table border=1 width=400>";
	for ($i=1; $i <10 ; $i++) { 
		echo "<tr>";
		for ($j=1; $j <=9-$i ; $j++) { 
			echo "<td>";
			echo "&nbsp;";
		}
		for ($j=1; $j <=$i ; $j++) { 
			echo "<td>{$i}*{$j}=".($i*$j)."";
		}
		echo "<tr>";
	}

?>