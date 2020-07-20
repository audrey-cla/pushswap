<?php 
array_shift($argv);
$file = $argv;
$lb = $la = [];
$tmp = 0;
$compteur = 0;

while (sizeof($file) > 0 ) {
$min_key = array_keys($file, min($file))[0];
$moitier = sizeof($file) / 2;

while($min_key > 0){
$minus_key = $min_key - 1;
$tmp = $file[$minus_key];
$file[$minus_key] = $file[$min_key];
$file[$min_key] = $tmp;
$min_key = $min_key - 1;
echo "ra ";
$compteur += 1;
}




if($min_key == 0){
    $test = array_shift($file);
    array_unshift($lb,$test);
    echo "pb ";
    $compteur += 1;
    }
}

while (sizeof($lb) > 0 ) {
  $test2 = array_shift($lb);
    array_unshift($la,$test2);
    echo "pa ";
    $compteur += 1;
}

var_dump($la);
var_dump("compteur <<<  ".$compteur);
?>
