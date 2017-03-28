<?php 

function find_saddle_points($arr) {
  $points = array();
  // traverse the passed matrix by row
  foreach($arr as $i => $row) {
    // get the highest value from each row
    $max = max($row);
    foreach($row as $j => $cell) {
      // for each highest value only, check whether it is the lowest value in its column
      if($cell == $max AND min_in_col($arr, $cell, $j)) {
        $points[] = array($i, $j);
      }
    }
  }
  print_r($points ? $points : 'No saddle points found.');
}
function min_in_col($arr, $val, $col) {
  foreach($arr as $row) {
    // as soon as there is at least one lower value, quit
    if($val > $row[$col]) {
      return FALSE;
    }
  }
  return TRUE;
}

$arr1 = array(
  array(39, 43, 49, 29, 18),
  array(30, 47, 24, 29, 15),
  array(49, 50, 39, 20, 33),
  array(18, 38, 35, 32, 35),
  array(29, 44, 18, 34, 44)
);
find_saddle_points($arr1);

