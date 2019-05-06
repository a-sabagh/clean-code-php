<?php
#bad
if($age>18 && $gender == "male" && $mondy > 1000){
  //do anything
}

#good
public function canTravelToAfrica($age,$gender,$money){
  return $age>18 && $gender == "male" && $mondy > 1000;
}

if($this->canTravelToAfrica($age,$gender,$money)){
  //do anything
}
