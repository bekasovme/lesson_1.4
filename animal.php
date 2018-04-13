<?php
$countinents = array(
    'africa' => array('macaca sylvanus', 'panthera pardus', 'felis margarita'),
    'eurasia' => array('capra', 'meleseles meles', 'tarsius'),
    'north america' => array('rangifer tarandus', 'lynx rufus', 'canis latrans'),
    'south america' => array('vicugna vicugna', 'BUBU1 BUBU2 BUBU3', 'hydrochoerus hydrochaeris', 'panthera onca'),
    'australia' => array('canis lupus dingo',	'macropodidae', 'raphus cucullatus'),
    'antarctica' => array('ursus maritimus', 'aptenodytes patagonicus', 'nyctea scandiaca')
);

$new_array = [];
$animal1 = $animal2 = [];
foreach ($countinents as $country => $animals) {
  foreach ($animals as $animal) {
    if (count(explode(' ', $animal)) === 2) {
			list($animal1[], $animal2[]) = explode(' ', $animal);
    	$new_array[] = $animal;
    }
  }
}

shuffle($animal2);
foreach($animal1 as $key=>$animal) {
  echo "{$animal} {$animal2[$key]}" . PHP_EOL, '<br>';
}
