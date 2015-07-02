<?php
	function number_to_text($num) {
		switch ($num) {
			case 1:
				return "first";
			case 2:
				return "second";
			case 3:
				return "third";
			case 4:
				return "fourth";
			case 5:
				return "fifth";
			default:
				return "Введіть число від 1 до 5!";
		}
	}
	$a = number_to_text(2);
	print $a;
?>
