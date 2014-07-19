<?php
$n=$_POST["abc"];
function f($n)
{
	$step=1;
	if($n==1)
		return 1;
	else if($n%2 == 0)
		return $step+f($n/2);
	else 
		return min($step+f($n+1),$step+f($n-1));
}
echo f($n);
?>