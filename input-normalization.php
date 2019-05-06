<?php
#bad 
if(is_array($products){
  foreach($products as $product){
    //do something
  }
}

#good
$products = (array) $products;
foreach($products as $product){
  //do something
}
