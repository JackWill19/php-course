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

$firstName = 'Jack';
$firstName = 'Berwyn';
echo $firstName; // Berwyn will be printed as the variable has been changed, like a let in JS

define('SATUS_PAID', 'paid'); // define is used to set a constant variable, it takes a name and a value, the name follows the same rules as variable names
                              // As a best practice to show it is a constant, uppercase letters are typically used


