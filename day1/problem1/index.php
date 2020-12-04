<?php

$input = file(__DIR__ . "/../input", FILE_IGNORE_NEW_LINES);

foreach($input as $number){
	if(!empty($temp[$number])) {
		echo "Answer is " . $number * $temp[$number];
	}
	else {
		$temp[2020-$number] = $number;
	}
}