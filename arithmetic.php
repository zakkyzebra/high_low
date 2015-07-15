<?php

function add($a, $b){
	if(is_numeric($a) && is_numeric($b)){
	    echo $a + $b . PHP_EOL;
	}else{
		error();
		echo "either \$a: '$a' or \$b: '$b' is not a number\n";
	}
}
function subtract($a, $b){
	if(is_numeric($a) && is_numeric($b)){
	    echo $a - $b . PHP_EOL;
	}else{
		error();
		echo "either \$a: '$a' or \$b: '$b' is not a number\n";
	}
}
function multiply($a, $b){
	if(is_numeric($a) && is_numeric($b)){
	    echo $a * $b . PHP_EOL;
	}else{
		error();
		echo "either \$a: '$a' or \$b: '$b' is not a number\n";
	}
}
function divide($a, $b){
	if($b == 0){
		echo "cannot divide by 0" . PHP_EOL;
	}else if(is_numeric($a) && is_numeric($b)){
	    echo $a / $b . PHP_EOL;
	}else{
		error();
		echo "either \$a: '$a' or \$b: '$b' is not a number\n";
	}
}
function modulus($a, $b){
	if(is_numeric($a) && is_numeric($b)){
	    echo "Remainder is: " . $a % $b . PHP_EOL;
	}else{
		error();
		echo "either \$a: '$a' or \$b: '$b' is not a number\n";
	}
}

function error(){
	echo "ERROR: ";
}

add("attacl",5);
subtract(5,5);
multiply(2,5);
divide(5, 0);
modulus("wooot",7);










?>