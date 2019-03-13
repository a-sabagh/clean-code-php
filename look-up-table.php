<?php

if($a == 'ir') {
	$country = 'iran';
}elseif($a == 'fr'){
	$country = 'france';
}elseif($a == 'us'){
	$country = 'usa';
}else{
	$country = false;
}
//****************** Refactoring ***************************
$mapp = [
	'ir' => 'iran',
	'fr' => 'france',
	'us' => 'usa'
];

$country = (isset($map[$a]))? $map[$a] : false;
