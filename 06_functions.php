<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

$glob = 'hi calvin ';
function registerUser($email) {
  // global variables must be redeclared w/ global keyword to be used in function scope
  global $glob;
  echo "$glob: $email registered";
}

// registerUser('calbot@calbot.com');

function sum($num1 = 7, $num2 = 77) {
  return $num1 + $num2;
}

// echo sum(5, 9);
// echo sum();

$subtract = function($n1, $n2) {
  return $n1 - $n2;
};

// echo $subtract(21, 7);

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(21, 7);