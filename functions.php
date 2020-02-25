<?php
$a=2;
$b=6;
//call the functions
echo ("the answer is: ".add($a,$b));



function add($num1,$num2){
	//add the two numbers
	$result=$num1+$num2;
	return $result;
}

?>