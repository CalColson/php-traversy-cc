<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($i = 0; $i < 10; $i++) echo 'number: ' . $i . '<br>';


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$i = 0;
while ($i < 10) {
  // echo 'number: ' . $i . '<br>';
  $i++;
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$i = 10;
do {
  // echo 'number: ' . $i . '<br>';
  $i++;
} while ($i < 10);



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['first ', 'second ', 'third'];

// for ($x = 0; $x < count($posts); $x++) {
//   echo $posts[$x];
// }

foreach ($posts as $i => $post) {
  echo "post $i is: $post<br>";
}
