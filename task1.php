<?php
	function get_numbers($a) {
		for ($b = 0; $b <= $a; $b++) {
			print $b . " ";
		}
	}
	print get_numbers(1000);
?>