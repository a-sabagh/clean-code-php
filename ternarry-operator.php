<?php
#bad
if(some_function() !== null){
  $value = some_function();
}else{
  $value = 'Default';
}

#good
$value = some_function() ?: 'Default';
