<?php
#bad
if($data == 'a' || $data == 'b' || $data == 'c'){
  return true;
}

#good
if(in_array($data,['a','b','c']){
  return true;
}
