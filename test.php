<?php
	$x=10;
	$y = &$x;
	echo $x,"<br>";
	echo $y,"<br>";
	
	$y=7;
	echo $x,"<br>";
	echo $y,"<br>";
	
	unset($y);
	echo $x,"<br>";
	echo $y,"<br>";
	
?>