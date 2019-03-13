<?php

$array = [1,2,4,null,5];

foreach($array as $elem){
  if($elem !== null){
    //do something
  }
}
//****************** Refactoring ***************************
$array = [1,2,4,null,5];

array_filter($array);
foreach($array as $elem){
  //do something
}
