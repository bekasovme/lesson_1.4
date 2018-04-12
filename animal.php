<?php

$countinents = array(
	'africa' => array('macaca sylvanus', 'panthera pardus', 'felis margarita'),
	'eurasia' => array('capra', 'meleseles meles', 'tarsius'),
	'north america' => array('rangifer tarandus', 'lynx rufus', 'canis latrans'),
	'south america' => array('vicugna vicugna', 'hydrochoerus hydrochaeris', 'panthera onca'),
	'australia' => array('canis lupus dingo',	'macropodidae', 'raphus cucullatus'),
	'antarctica' => array('ursus maritimus', 'aptenodytes patagonicus', 'nyctea scandiaca')
);

// echo '<pre>';

// echo $countinents['australia'][0];


$new_array = [];
foreach ($countinents as $country => $animals) {
	// foreach ($animals as $key => $animal) {
	foreach ($animals as $animal) {
		if (strpos($animal, ' ') !== false) {
			$new_array[] = $animal;
			echo $animal, '<br>';
		}
		// $new_array[] = $animal;
		// echo $animal, '<br>';
	}
}

echo '<pre>';
print_r($new_array);












// {
// 	// $result = array_merge($result, array_filter($animals, function ($item){ return count(explode(' ', $item)) === 2; }) );

// 	// echo '<pre>';

// }


$animal1 = $animal2 = [];
    
    foreach($new_array as $value)
        list($animal1[], $animal2[]) = explode(' ', $value);
    
    shuffle($animal1);
    
    foreach($animal1 as $key=>$animal)
    		// echo '<pre>';
        echo "{$animal} {$animal2[$key]}" . PHP_EOL, '<br>';