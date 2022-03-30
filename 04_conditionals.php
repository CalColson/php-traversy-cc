<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

// if ($age > 18) echo 'you are old enough to vote';
// else echo 'you are too young to vote';

date_default_timezone_set('US/Central');
$t = date("H");

// echo $t;

// if ($t < 12) echo 'good morning';
// else if ($t < 17) echo 'good afternoon';
// else echo 'good evening';

$posts = ['First post'];

// if (!empty($posts)) {
//   echo $posts[0];
// } else echo 'no posts';

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// $first_post = empty($posts) ? 'there are no posts' : $posts[0];

$first_post = $posts[0] ?? 'no posts';
// echo $first_post;

/* -------- Switch Statements ------- */

$fav_color = 'red';

switch($fav_color) {
  case 'red': 
    echo 'i love red';
    break;
  case 'green': 
    echo 'i love green';
    break;
  case 'blue': 
    echo 'i love blue';
    break;
  default:
    echo 'you are too cool for colors';
}
