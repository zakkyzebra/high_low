<?
	$playagain = true;
	do{
		$computer_number = mt_rand($argv[1],$argv[2]);
		$letsBool = false;
		$score = 0;
		do {
			fwrite(STDOUT, 'What is your guess? ');
			$guess = fgets(STDIN);
			if ($guess > $computer_number){
				echo "Your guess: " . $guess . " is too high!\n";
				$score++;
			} else if($guess < $computer_number){
				echo "Your guess: " . $guess . " is too low!\n";
				$score++;
			} else {
				fwrite(STDOUT, "Your guess: " . $guess . " is jussssst right!\n");
				echo "it took you $score tries!";
				$letsBool = true;
			}
		} while ($letsBool == false);
		if($letsBool == true){
			fwrite(STDOUT, "Play again? (y/n)");
			$letsPlay = trim(fgets(STDIN));
			if($letsPlay == 'n'){
				echo "Game over!" . PHP_EOL;
				$playagain = false;
			}
		}
	} while ($playagain == true);
?>