<?php

$somelistofwords = array(
  "battery", 
  "stable", 
  "correct",
  "crazy", 
  "gorilla",
  "doge", 
  "sophistry", 
   "russia", 
   "peace",
   "protests");
function random4digits() {
  return (string) rand(1001,9999); //cast to string to split to array
}


//generate a randomdigit
$digits = random4digits();

//change into array the digits
$values = str_split($digits);

//for each value in the random digit, print it according to the list of words
foreach($values as $val) {
  echo $somelistofwords[$val] . " ";
}
