<?php 
function check_output($a){
  if($a > 10){
    //do something
    //do something
    //do something
    //do something
    //do something
    //do something
    //do something
  }else{
    //do else
  }
}
//****************** Refactoring ***************************

function check_output($a){
  if($a < 10){
    //do else
    return;
  }
  //do something
  //do something
  //do something
  //do something
  //do something
  //do something
  //do something
}
