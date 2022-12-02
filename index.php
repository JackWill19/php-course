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

// $firstName = 'Jack'; // strings are set with single quotes or double quotes
// $lastName = 'Will'; 
// $fullName = "${firstName} ${lastName}"; // variables can be used in double quotes, not in single quotes (this will spit out Jack Will)

// // Accessing single characters in a string
// // Can use 0 based indexing to reference each character

// // echo $fullName[0]; // Will spit out the first letter of the string (J) (This works from left to right, using negative numbers will go from right to left)

// // You can individually modify each character too
// $fullName[1] = 'A';
// echo $fullName;

//NULL
// A Variable with no value
// Variable can be null if it is assigned null
    // $x = null; // Gets casted into a string which makes it an empty string so nothing displays
    // var_dump(is_null($x)); // Quick test to see if the variable is actually null
    // var_dump($x === null); // Another test to see if it is null by using the === comparison operator like in JS


// Has not been defined yet
    // var_dump($x); // Here we are calling a variable that hasn't been defined yet therefore it is undefined or null
                     // If you call var_dump(is_null($x)) on an empty variable it will return true

// It has been unset
    // $x = 123;
    // unset($x); //unset essentially destroys the variable making it null

// If you cast null to a string then it becomes an empty string
    // $x = null
    // var_dump((string) $x); // = string(0)""

// If you cast null to an interger then it will return as a 0
    // var_dump((int) $x); // int(0)

// If you cast null to a boolean then it will return as a false
    // var_dump((bool) $x); // false

// If you cast null to an array then it will return as an empty array
    // var_dump((array) $x); // array(0) {}

// ARRAYS
    // Listing variables like this is inefficient and leads to repititon of code so we use Arrays to tidy it up
    // $programmingLanguage1 = 'PHP';
    // $programmingLanguage2 = 'JavaScript';
    // $programmingLanguage3 = 'Python';

    // $programmingLanguages = ['PHP', 'JavaScript', 'Python'];
    // echo $programmingLanguages[0]; // referencing the first entry of the array
    // echo $programmingLanguages[-1]; // Cannot reference an entry with a negative number
    // var_dump(isset($programmingLanguages[0])); // Checks to see if a variable has been set to the given index 0 = true, 5 = false

    // //You can change the value of an index like this
    // $programmingLanguages[2] = 'CSS';
    // echo $programmingLanguages[2];

    // // Use print_r to echo the contents of the array
    // echo '<pre>'; // Wrapping the array in a html 'pre' tag will tidy up the array making it easier to view
    // print_r($programmingLanguages);
    // echo '</pre>';

    // // You can count all entries in an array
    // echo count($programmingLanguages);

    // // You can push a new entry to the end of the array
    //     // $programmingLanguages[] = 'Python';
    // // OR
    //     array_push($programmingLanguages, 'Python', 'C++', 'C');

    // echo '<pre>';
    // print_r($programmingLanguages);
    // echo '</pre>';
    // echo count($programmingLanguages);

// ASSOCIATIVE ARRAYS
    // An array with named keys
    // $programmingLanguages = ['PHP', 'JavaScript', 'Python'];

    // //Setting keys to values in an associative array
    // $programmingLanguages = [
    //     'php' => '8.0',
    //     'python' => '3.9',
    // ];

    // // $programmingLanguages['go'] = '1.15'; // Adding a new key and value to the associated array
    // $newVariable = 'go';
    // $programmingLanguages[$newVariable] = '1.15'; // You can set the value of the variable to be a key in the array 

    // $programmingLanguages = [
    //     'php' => [ // You can make multi layered arrays with loads of different data types
    //         'creator' => 'Rasmus Lerdorf',
    //         'extension' => '.php',
    //         'website' => 'www.php.net',
    //         'isOpenSource' => 'true',
    //         'versions' => [
    //             ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
    //             ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
    //         ],
    //     ],
    //     'python' => [
    //         'creator' => 'Guido Van Rossum',
    //         'extension' => '.py',
    //         'website' => 'www.python.org',
    //         'isOpenSource' => 'true',
    //         'versions' => [
    //             ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
    //             ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019'],
    //         ],
    //     ],
    // ];

    // echo '<pre>';
    // print_r($programmingLanguages);
    // echo '</pre>';

    // // To access different layers of the array you do
    //     echo $programmingLanguages['php']['versions'][0]['releaseDate']; //Echoing into the php array, into the versions layer, the 0 index of versions, then the release date of that version

    // // If you have multiple keys that are the same, the last one will overwrite the other

    // $array = ['a', 'b', 50 => 'c', 'd', 'e']; //the index of a and be would be 0, 1. Index of c, d and e would start at 50 onwards, so 50, 51, 52
    
    // // You can manipulate the array with these methods
    //     echo array_pop($array); // In this case it would remove the last entry of the array
    //     echo array_shift($array); // This will remove the first entry of the array (this also reindexes the array)
    //     unset($array[50], $array[1]); // This will remove the entry with the index of 50

// // MORE ARRAYS
//     $x = 5;
//     var_dump((array) $x); // This will add 5 to the first index of a new array, it will do the same with strings and booleans

//     $y = null;
//     var_dump((array) $y); // Trying to cast null into an array would give you an empty array

//     $array = ['a' => 1, 'b' => null];
//     var_dump(array_key_exists('a', $array)); // Checks if the KEY exists in the array, not checking the value
//     var_dump(isset($array['a'])); // Checks if the KEY exists and if a VALUE has been assigned to the key

// EXPRESSIONS

// // Anything that has a value or evaluates to a value (const, variables and values)
// $x = 5; // Assigning a value
// $y = $x; // x evaluates to 5 therefore assigning it to y is an expression

// $z = $x === $y; // Evaluates to a boolean value
// $z = sum($x, $y); // returns a value and assigns it to z so its an expression

// if($x < 5) {
//     echo 'Hello'; // Is an expression as it returns a boolean value

// OPERATORS
// Something that takes one or more expressions and returns a value

// Arithmatic Operators (+ - / * % **)
    // $x = 10;
    // $y = 2;

    // var_dump($x + $y);
    // var_dump($x - $y);
    // var_dump($x / $y);
    // var_dump($x * $y);
    // var_dump($x ** $y);

// Assignment Operators ( = += -= *= /= %= **=)
    // $x = 10 // assign 10 to x
    // $x = $y = 10; // will assign 10 to y which is also assigned to x
    // $x = ($y = 10) + 5; // will assign 10 to y and then add 5 to assign 15 to x

    //$x += 3 // Will take the original value of x and add 3
    //$x -= 3 // Will take the original value of x and subtract 3
    //$x *= 3
    //$x /= 3
    //$x %= 3
    //$x **= 3
    

// String Operators (. *=)
    // $x = 'Hello'; // Assigns hello to x
    // $x = $x . 'World'; // concatenates the value of x with a string = Hello World


// Comparison Operators (== === < > ?? ?:)
    // $x = 10;
    // $y = 2;

    // var_dump($x == $y); // Loose Comparison
    // var_dump($x === $y); // Strict comparison
    // var_dump($x < $y); // Greater than
    // var_dump($x > $y); // Less than
    // var_dump($x <= $y); // Greater than or equal to
    // var_dump($x >= $y); // Less than or equal to
    // var_dump($x !== $y); // Does not equal
    // var_dump($x !=== $y); // Does not equal

    // $x = 'Hello World';
    // $y = strpos($x, 'H'); // Finding the position of H in string $x
    
    // $result = $y == false ? 'H Not Found' : 'H Found at Index' . $y; // If there is no H in the string, echo 'H Not Found' or if true echo 'H was found at index {position}'
    // echo $result;

    // $x = null;
    // $y = $x ?? 'hello';
    // var_dump($y);

// Error Operators (@)
    //Surpresses errors from expressions (Dont Really Use it)
    // $x = file('test.txt'); //file('') reads the file passed, if it does not exist you are thrown an error
    // $x = @file('test.txt'); // @infront of file('') ignores the error

// Increment / Decrement Operators (++, --)
    // $x = 5;
    // // Post increment, returns value and then does the increment 
    //     $x++; // = 5 and is incremented;
    //     echo $x; // = 6
    //     $x--; // Post decrement, so now it will return 6 and then decrement it
    //     echo $x; // = 5

    // // Pre increment, does the increment and then returns the value
    //     ++$x; // Will = 6 right away
    //     echo $x;
    //     --$x; // Will = 5 right away
    //     echo $x;
        
// Logical Operators (&& || ! and or xor)
    // && (and) = True if both values evaluate to true
    // || (or) = True if one of the values it true
    // ! (not) = flips the value, $x = false then !$x = true

// Array Operators (+ == === <>)

$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f', 'g', 'h'];

$z = $x + $y;
print_r($z);


// Execution Operators (``)

// Type Operators (instanceof)

//Nullsafe Operatoe - PHP8 (?)
