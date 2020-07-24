<?php 
array_shift($argv);
$file = $argv;
$lb = $la = [];
$tmp = 0;
$compteur = 0;

while (sizeof($file) > 0 ) {
$min_key = array_keys($file, min($file))[0];
$totalkey = sizeof($file) -1;
$middle = sizeof($file) / 2;
if($min_key > 0){

if ($min_key < $middle) {
 $test = array_shift($file);
  array_push($file, $test);
  echo "ra ";
}
 else {
  $test = array_pop($file);
  array_unshift($file, $test);
  echo "rra ";
 }
  $compteur += 1;
  
}
else if ($min_key == 0) {
    $test = array_shift($file);
    array_unshift($lb,$test);
    echo "pb ";
    $compteur += 1;
}
var_dump($file);
var_dump($lb);
}

while (sizeof($lb) > 0 ) {
  $test2 = array_shift($lb);
    array_unshift($la,$test2);
    echo "pa ";
    $compteur += 1;
}

var_dump("compteur <<<  ".$compteur);
?>
