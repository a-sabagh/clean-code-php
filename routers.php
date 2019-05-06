<?php

#bad 

if($what == 'a'){
  $this->aa();
}elseif($what == 'b'){
  $this->bb();
}else{
  $this->otherwise();
}

#good

$map = [
  'a' => 'aa',
  'b' => 'bb'
];

$method = $map[$what] ?? 'otherwise';

$this->$method();
