<?
$things = array(
		'Sgt. Pepper', 
		"11", 
		null, 
		array(1,2,3), 
		3.14, 
		"12 + 7", 
		false, 
		(string) 11
	);

foreach ($things as $i){
	if(is_int($i)){
		echo "type is int";
	} else if(is_float($i)){
		echo "type is float" . PHP_EOL;
	} else if(is_bool($i)){
		echo "type is bool" . PHP_EOL;
	} else if(is_array($i)){
		echo "type is array" . PHP_EOL;
	} else if(is_null($i)){
		echo "type is null" . PHP_EOL;
	} else if(is_string($i)){
		echo "type is string" . PHP_EOL;
	}
}

foreach ($things as $i) {
	if(is_array($i)){
		foreach($i as $value){
			echo "$value" . PHP_EOL;
		}
	}else if(is_scalar($i)){
		echo "$i" . PHP_EOL;
	}
}





?>