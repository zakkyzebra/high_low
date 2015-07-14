<?
	fwrite(STDOUT, 'Starting Number?');
	$var1 = trim(fgets(STDIN));
	fwrite(STDOUT, 'Second Number?');
	$var2 = trim(fgets(STDIN));
	$var3 = 0;

	for ($i = $var1; $i <= $var2; $i++) {
	    if ($i % 3 == 0 && $i % 5 == 0){
	    	echo "$i FizzBuzz" . PHP_EOL;
	    	$var3 += $i;
	    }else if($i % 3 == 0){
	    	echo "$i Fizz" . PHP_EOL;
	    	$var3 += $i;
	    }else if($i % 5 == 0){
	    	echo "$i Buzz" . PHP_EOL;
	    	$var3 += $i;
	    }else{
	    	echo "$i" . PHP_EOL;
	    }
	}
	echo "The sum of numbers divisible by 3 or 5 between $var1 and $var2 is = $var3" . PHP_EOL;
?>