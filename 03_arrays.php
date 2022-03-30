<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'kiwi', 'bananas');

// var_dump($numbers);
// echo $fruits[1];

// associative array
$colors = [
  1 => 'red',
  4 => 'blue',
  7 => 'green'
];

// echo $colors[7];

$hex = [
  'red' => 'f00',
  'green' => '0f0',
  'blue' => '00f',
];

// echo $hex['red'];

$person = [
  'first_name' => 'cal',
  'last_name' => 'col'
];

// echo $person['last_name'];

$people = [
  [
    'first_name' => 'cal',
    'last_name' => 'col'
  ],
  [
    'first_name' => 'ste',
    'last_name' => 'rob'
  ],
  [
    'first_name' => 'don',
    'last_name' => 'mas'
  ],
];

// echo $people[2]['first_name'];

var_dump(json_encode($people));