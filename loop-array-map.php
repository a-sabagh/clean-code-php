<?php
#bad

$labels = ['a','b','c','d'];
$index = 0;
foreach($labels as $label){
  $labels[$index] = Carbon::format('Y-m-s',$label);
  $index++;
}

#good
$labels = ['a','b','c','d'];
foreach($labels as $index => $label){
  $labels[$index] = Carbon::format('Y-m-s',$label);
}
