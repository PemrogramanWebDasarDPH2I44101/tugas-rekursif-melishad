<?php 

$z = 0;
function rekursif2 ($x, $y) {
	global $z;
	if ($x > $z - $y) {
		echo "*";
		rekursif2($x -1, $y);
	}
}
function rekursif1($y){
	global $z;
	rekursif2($z, $y);
	echo "<br>";
	if (--$y > $z) {
		rekursif1($y);
			
		}
	}

rekursif1(5);

	echo "/*====================================================================================*/<br>";


function rekursif($b,$c,$a) {
	if ($b <= $a) {
		if ($c <= $b) {
			echo $c;
			$c++;
			rekursif($b, $c, $a);
		}
		else {
			echo "<br>";
			$b++;
			rekursif($b,1,$a);
		}
	}
}
$a = 5;
	rekursif(1,1,$a);
 ?>
