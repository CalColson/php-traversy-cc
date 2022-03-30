<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'cal';
$age = 29;
$is_a_dummy = true;
$cash_on_hand = 40.25;


// echo $is_a_dummy;
// var_export($is_a_dummy);

// echo $name . ' is ' . $age . ' years old';
// echo "$name is $age years old";

// Constants
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST, DB_NAME;