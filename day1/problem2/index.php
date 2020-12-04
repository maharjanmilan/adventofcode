<?php

$input = file(__DIR__ . "/../input", FILE_IGNORE_NEW_LINES);

$totalInput = count($input);

for($i=0; $i < $totalInput -2; $i++){
	
	$remainingSum = 2020 - $input[$i];
	$temp = [];
	
	for($j=$i; $j < $totalInput; $j++) {
		
		if(!empty($temp[$input[$j]])) {
			echo "Answer is " . $input[$i] * $temp[$input[$j]] * $input[$j];
		}
		else {
			$temp[$remainingSum - $input[$j]] = $input[$j];
		}
	}
}