<?php
#bad
if(isset($map['key']){
  $value = $map['key'];
}else{
  $value = 'Default';
}

#good
$value = $map['key'] ?? 'Defualt';
