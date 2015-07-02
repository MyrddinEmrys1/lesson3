<?php
	$a = 100;
	print '<table border="1" style="border: 1px solid green">';
		print "<tr>";
			for ($b = 1; $b <= $a; $b++) {
				print "<td>$b</td>";
			}
		print "</tr>";
	
		for ($c = 2; $c <= $a; $c++) {
			print "<tr>";
				print "<td>$c</td>";
				for ($x = 2; $x <= $a; $x++) {
					print "<td>" . $c*$x . "</td>";
				}
			print "</tr>";
		}
	print '</table>';
?>

