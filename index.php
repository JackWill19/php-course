<?php //If it is only a php document with no html or other languages, theres no need for a closing php tag --> -->

// echo 'Hello World'; // Echo prints to the page. // '' makes the content a string // Statement ends with a semi colon
// print 'Hello World'; //Print is the same as echo but print has a return value of 1 (typically use echo)

// $name = 'Jack'; //variables are declared with  $variableName = 'name'; // Variables cant start with a number but can use underscore
//                 // $123name wouldnt work, but $_123name would work fine, also no special characters (&^%$)
//                 // $this cant be used as a variable name as it is already used to reference an object
// echo $name; //the value can be called by using the variable name ($name) 

// $x = 1; // x is set to 1
// $y = $x; // y is set to the value of x that is set previously NOT AFTER so y = 1


// $y = &$x; //using a & is asigning the variable by reference, so in this case y will change to whatever x changes to


// $x = 3; // x is now 3

// echo $y; // echo value of y which is 1 as it was set before x was changed

// $firstName = 'Jack';

// echo "Hello {$firstName}"; // cant use variables in single quotes, but you can in double quotes, wrap variable in {} for added clarity
// echo 'Hello' . $firstName; // You can concatenate strings and variables by using a full stop . which will work the same


//CONSTANTS

// $firstName = 'Jack';
// $firstName = 'Berwyn';
// echo $firstName; // Berwyn will be printed as the variable has been changed, like a let in JS

// define('STATUS_PAID', 'paid'); // define is used to set a constant variable, it takes a name and a value, the name follows the same rules as variable names
//                               // As a best practice to show it is a constant, uppercase letters are typically used
// echo STATUS_PAID; // YOU DO NOT NEED A DOLLAR SIGN TO CALL A CONSTANT

// echo defined('STATUS_PAID'); // defined is used to see is a constant has been defined

// const STATUS_PAID = 'paid'; //Also works the same as 'define'

//There are lots of predefined constants most of which show when PHP_ is typed
// echo PHP_VERSION;

// There are also magic constants
// echo __LINE__; //This will tell you what line this has been ran on

//Variable variables

// $foo = 'bar';
// $$foo = 'baz'; // $$ will take the value of the first variable ($$foo will take $foo's value 'bar) and turn it into a variable $bar which baz will be set to

// echo $foo , $bar; // You can also reference $bar as ${$foo}

/* DATA TYPES AND TYPE CASTING */

# 4 Scalar Types 
    // # bool - True or False - True prints as 1 - False prints as a blank
    // $completed = true;
    // # int - Whole Numbers - 1, 2, 3, 4, 5
    // $score = 19;
    // # float - Numbers w/ decimal - 1.5, 2.25, 3.75
    // $price = 0.99;
    // # string - series of characters "Jack", 'Hello World'
    // $greeting = 'Hello World';

    // echo $completed . '<br />';
    // echo $score . '<br />';
    // echo $price . '<br />';
    // echo $greeting . '<br />';

    // echo gettype($completed); // gettype() will fetch the type of the variable you pass through it
    // var_dump($score); // var_dump() will fetch all known information about the variable passed, eg $score will be int(19)


# 4 Compound Types 
    # array - List of items, can have mixed data typres
    // $companies = ['Apple', 'Microsoft', 'Sony', 1, 2, 3, true, false]; // You can not print an array via echo $companies
    // print_r($companies); // Print_r will print the array and the index of each value "Array ([0] => Apple, [1] => Microsoft)"
    # object
    # callable
    # iterable

# 2 Special Types 
    # resource
    # null - NO VALUE

// declare(strict_types=1); // Enabling strict mode so once a data type has been set to a variable, the type cannot be changed

// function sum($x, $y){   //Creating a function that takes 2 arguments x and y
//     return $x + $y;     // return the sum of x + y 
// }                       // The type of the variable is determined by the context in which the variable is used

// $sum = sum(2, '3');
// echo sum(2, 3); //Calling the function and setting the x value to 2 and the y value to 3

// $x = (int)'5'; // (int) forces the data being passed into being an interger, '5' is a string, but with (int)'5', it will be passed as 5.

// var_dump($x);

// BOOLEANS

// is_bool(); will check is a variable is true or false

// Int - 0, -0 = false
// Float - 0.0, -0.0 = false
// Strings - '' (empty string), '0' = false
// Array - [] (empty array) = false
// null = false

// Pretty much everything else will be true

// $isComplete = true;
// $isComplete = 'false'; // 'false' is not an empty string so it will = true...

// if($isComplete) { // If isComplete = true
//     // Do something
//     echo 'Success';
// } else { // Else, if false
//     // Do something else
//     echo 'Fail';
// }

// INTERGERS
// Whole Numbers, 1, 2, 3, 19, 200, -33, -21

// is_int() checks is a value is an interger

// $x = (int)5.98; // Will return as 5
// $x = (int)true; // Will return as 1
// $x = (int)'87kjfdshs'; // Will return as 87



// $x = PHP_INT_MAX; // The largest interger supported in PHP
// $x = PHP_INT_MAX + 1; // If this interger goes over the max it changes to a float

// FLOAT
// Numbers with a decimal

// $x = 13.068;
// echo PHP_FLOAT_MIN;
// echo PHP_FLOAT_MAX;

// $x = floor((0.1 + 0.7) * 10); // round decimal down
// $x = ceil((0.1 + 0.7) * 10); // round decimal up

// $x = PHP_FLOAT_MAX * 2;

// var_dump(is_infinite($x)); // Checks if number is infinite (out of bounds of max float)
// var_dump(is_finite($x)); // Checks if a number is not infinite
// var_dump(is_nan($x)); // Checks if number is NaN (Not a Number)

// var_dump((float) $x); // ((float) $x) will convert the value of x into float

// Strings
// Series of characters

$firstName = 'Jack'; // strings are set with single quotes or double quotes
$lastName = 'Will'; 
$fullName = "${firstName} ${lastName}"; // variables can be used in double quotes, not in single quotes (this will spit out Jack Will)

// Accessing single characters in a string
// Can use 0 based indexing to reference each character

// echo $fullName[0]; // Will spit out the first letter of the string (J) (This works from left to right, using negative numbers will go from right to left)

// You can individually modify each character too
$fullName[1] = 'A';
echo $fullName;
