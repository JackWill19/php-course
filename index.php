<!-- <?php //If it is only a php document with no html or other languages, theres no need for a closing php tag 

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

//  $x = ['a', 'b', 'c'];
//  $y = ['d', 'e', 'f', 'g', 'h'];

//  $z = $x + $y; // Compining the two arrays, if the two index's are the same, the first one set will take precedence

    // $x = ['a' => 1, 'b' => 2, 'c' => 3];
    // $y = ['d' => 4, 'e' => 5, 'f' => 6];

    // $z = $x + $y; // If you combine two associative arrays, as long as the keys dont match, the second array will be appended onto the end of the first, if the key matches the original takes precedence
    // $z = $x == $y; // Will return true if both keys and values of array match
    // $z = $x === $y; // Will return true if both keys, values and data types of array match
    // print_r($z);


// OPERATOR PRESEDENCE AND ASSOCIATIVITY
    // $x = 5 + 3 * 5; // 3 * 5 runs first and + adds 5 = 20

    // //Can force presedence with()
    // $x = (5 + 3) * 5; // 5 + 3 gets calculated first then multiply by 5 = 40

    // $x = 5;
    // $y = 2;
    // $z = 10;

    // $result = $x / $y * $z;

// Control Structures (if / else / elseif / else if)

// if($condition) { // If this condition is true
    // Do something;
// } elseif($nextCondition) { // Or check if this condition is true
    // Do this instead
//} else { // Or if it is false
    // Do something else
// }

// LOOPS

// While
//     $i = 0;
//     while($i <= 15){ //While i is less than or equal to 15
//         echo $i++; // print i and increment it by 1 = 1, 2, 3, 4... 15
//     }

// // Do-while
// do {
//     echo $i++; // prints 0, 1, 2, 3... 15
// } while ($i <= 15);

// // For
// for($i = 0; $i < 15; $i++){ // i starts at 0, loop while i is less than 15, after every loop, add 1 to i
//     echo $i; // prints 1, 2, 3, 4... 14
// }


// // You can loop through strings (strlen)
// $text = 'Hello World';
// for($i = 0; $i < strlen($text); $i++){ // Loops through each character of $text string
//     echo $text[$i] . '<br />'; // Echo each character of $text onto their own line
// }

// // You can also loop through arrays (count)
// $array = ['a', 'b', 'c', 'd'];
// $length = count($array); // setting a length variable for performance reasons

// for ($i = 0; $i < $length; $i++) { 
//     echo $array[$i] . '<br />';
// }

// // Foreach
// //  $programmingLanguages = ['php', ['java', 'c', 'c++', 'go', 'rust']];

// //  foreach($programmingLanguages as $language) { // foreach loops through each iteration of an array and assigns it to a variable
// //     echo $language . '<br />';
// //  }

// //  foreach($programmingLanguages as $key => $language) { // you can set a key to each iteration also
// //     echo $key . ':' . $language . '<br />';
// //  }
//  //QUICK NOTE - The variable doesnt get destroyed after the loop so typically you'd unset($language) after the loop to prevent problems

//  // Foreach over associatibe arrays

//  $user = [
//     'name' => 'Jack',
//     'email' => 'jack@email.com',
//     'skills' => ['html', 'css', 'javascript', 'php'],
//  ];

// //  foreach($user as $key => $value) {
// //     echo $key . ': ' . $value . '<br />'; // This will only print name and email, not the skills array
// //  }

//  foreach($user as $key => $value) {
//     echo $key . ': ' . json_encode($value) . '<br />'; // Using json.encode() converts the array so it can be printed
//  };

// Switch Statements
// Like an if statement, allows you to compare the same expression with different values and run different code based on which value matches that expression

// $paymentStatus = 'paid';

// switch($paymentStatus) {
//     case 'paid':  // if $paymentStatus = 'paid'
//         echo 'Paid'; // print 'Paid'
//         break; // stop the loop when the correct case has been found
    
//     case 'declined':
//     case 'rejected': // This case accepts both declined and rejected as a correct value
//         echo 'Payment Declined';
//         break;

//     case 'pending':
//         echo 'Pending Payment';
//         break;

//     default:
//         echo 'Unknown Payment Status';
// }

// function x() {
//     sleep(3);

//     echo 'Done <br />'
// }

// if(x() === 1){ // Using this would be a problem as the function takes 3 seconds to run however this if else statement runs the function 3 times so overall takes 9 seconds to complete
//     echo 1;
// } elseif (x() === 2){
//     echo 2;
// } elseif (x() === 3){
//     echo 3;
// } else {
//     echo 4;
// }

// switch(x()) { // This is where the switch statement works well as the function only needs to run once
//     case 1:
//         echo 1;
//         break;
//     case 2:
//         echo 2;
//         break;
//     case 3:
//         echo 3;
//         break;
//     default:
//         echo 4;
// }

// MATCH
// $paymentStatus = 1;

// $paymentStatusDisplay = match($paymentStatus) { // match does strict comparison
//     1 => print 'Paid',
//     2, 3 => print 'Payment Declined', // This case accepts both 2 or 3 as a correct value
//     0 => print 'Payment Pending',
// };

// echo $paymentStatusDisplay;

// Return 

// Returns the control of the program execution back to where it was called from
// When used in a function it will stop the execution of that function and will return the given argument

    // function sum(int $x, int $y) {
    //     $z = $x + $y;
    //     return $z;
    // }

    // $x = sum(5, 10);
    // echo $x;
    // echo '<br />';
    // echo 'Hello World';

// Declare

// Declare - ticks
    // $x = 3;
    // $y = 5;
    // $z = $x*$y;

    // function onTick() {
    //     echo 'Tick<br />';
    // }

    // register_tick_function('onTick');

    // declare(ticks=3);

    // $i = 0;
    // $length = 10;

    // while($i < $length) {
    //     echo $i++ . '<br />';
    // }

// Declare - strict_types
    // declare(strict_types=1);

    // function sum(int $x, int $y) {
    //     return $x + $y;
    // }

    // echo sum('5', 10);

// Include and Require
    // A way to split your code into multiple files and include them where needed
    // Use require when the file is required by the application.
    // Use include when the file is not required and application should continue when file is not found.
        
    // include 'file.php'; // Include the code from file.php

    // require
    // require_once
    // include
    // include_once


// Functions
// Has global scoping

// you can call a function before its been created
    // function example() { // name of function can either start with letters or underscore
    //     return 'Hello World'; // you can return values
    // }
    
    // $x = example();
    // echo $x;

// unless it is within a condition like an if statement 
    // var_dump(foo()); //This will return an undefined error as the if statement needs run in order to create the function

    // if(false){
    //     function foo() {
    //         return 'Hello World';
    //     }
    // }


// foo() needs to be called before bar() can be called, if bar()
        // function foo() {
        //     echo 'Foo';
        //     function bar() {
        //         echo 'Bar';
        //     }
        // }

// Return values from functions

// function foo(): int { // foo(): int tells php that the expected value should be a number // If nothing is expected then you can use ': void' which will return null
//     return '1'; // Because we arent using strict types, we can return a string and it can be converted into an interger
// }

// function bar(): int|float { // you can use | to add one or more expected data types, or use : mixed if you dont want to be specific
//     return 1;
// }

// var_dump(foo());

//Functions - Continued

//Accepting arguments
    // function foo(int $x, int $y){ // $x and $y are parameters here, you can type hint these parameters with (int $x, int $y) which will tell php to expect a number to be passed
    //     return $x * $y;
    // }

    // echo foo(5, 10); // The values passed when calling the function are called arguments

// Variadic functions

    // function sum(...$numbers): int|float { // ...$numbers will create a new array called $numbers and store all arguments being passed within it 
    //     // $sum = 0;
    //     // foreach($numbers as $number){
    //     //     $sum += $number;
    //     // }
    //     return array_sum($numbers);
    // }

    // $a = 6.0;
    // $b = 7;

    // echo sum($a, $b) . '<br />';

// Named Arguments
    // function sum(int $x, int $y): int {
    //     if ($x % $y === 0) {
    //         return $x / $y;
    //     }
    //         return $x;
    //     }
    
    // // $x = 6;
    // // $y = 3;

    // // echo foo(x: $x, y: $y); // php allows you to name your arguments so you know which order to put your arguments

    // $arr = ['x' => 1, 'y' => 2];
    // echo foo(...$arr); // if using an associative array the name of the arguments will that of the key of each iteration of the array

// Static Variables 

// $x = 5; // This would be a global scope meaning it can be accessed all throughout the script and if included in any other file like 'include(example.php)'

// Variables in a function have local scope so they must be defined within the function
// or you can define it as a perameter and an argument
// or you can use the global keyword to access the variable globally

        // function foo() {
        //     global $x; //globally referencing the $x variable so the function can access it
        //     $x = 10; // you can also change the variable within the function and it will apply to the original variable when the function is called
        //     echo $x;
        // }
        // foo();

// The static keyword is also used to declare variables in a function which keep their value after the function has ended.
    // function getValue() {
    //     static $value = null; // Static variables are called one time after that they can not be called again with the same request
    //     if($value === null) {
    //         $value = someVeryExpensiveFunction();
    //     }
    //     return $value;
    //     }

    // function someVeryExpensiveFunction() {
    //     sleep(2);
    //     echo 'Processing';
    //     return 10;
    // }

    // getValue() . '<br />'; // = 'Processing10'
    // getValue() . '<br />'; // = '10'
    // getValue() . '<br />'; // = '10'

// Variable Functions
    // So you can call functions from variables by appending () to the variable
        // function sum(int|float ...$numbers): int|float {
        //     return array_sum($numbers);
        // }

        // $x = 'sum'; // Variable same name as function, if its different to the function you get an undefined error

        // if(is_callable($x)) { // Check whether the contents of a variable can be called as a function or not
        //     echo $x(1, 2, 3, 4); // Calling the variable with () afterwards so its essentially calling a function 'sum()'
        // } else {
        //     echo 'Not Callable';
        // }


// Anonymous Functions
    // Functions with no name
    //    $sum = function (int|float ...$numbers): int|float { // You can assign anonymous functions to a variable
    //         return array_sum($numbers);
    //     }; //Anonymous functions need to end in a semi colon

    //     echo $sum(1, 2, 3, 4);

//  Array mapping
    // $array = [1, 2, 3, 4];

    // $array2 = array_map(function($element){ // Same map functionality as JS, maps over the array and applies the function to each iteration
    //     return $element * 2; // multiply each iteration of array by 2
    // }, $array); // Referening what array is to be mapped over

    // // Or

    // function foo($element) { // Set the function first
    //     return $element * 2;
    // }

    // $array2 = array_map('foo', $array); // Then call it as a string

    // echo '<pre>';
    // print_r($array);

    // print_r($array2);
    // echo '</pre>';

// Arrow Functions
    // $array  = [1, 2, 3, 4];

    // $array2 = array_map(fn($number) => $number * $number, $array); // Arrow functions have a singular expression and returns the value of it

    // echo '<pre>';
    // print_r($array2);
    // echo '</pre>';

// Date & Time 

    // $currentTime = time(); // prints the amount of seconds since Jan 1st 1970

    // echo $currentTime . '<br />';

    // echo $currentTime + 5 * 24 * 60 * 60 . '<br />'; // Working out the time in 5 days

    // echo $currentTime - 60 * 60 * 24 . '<br />'; // working out the time yesterday

    // echo date('m/d/Y g:ia') . '<br />'; // Creating a date and time stamp

    // echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />'; // Creating a date and time stamp for 5 days in the future


// Working with Arrays

// Array Chunk
    // array_chunk(array $array, $int $length, bool $preserveKeys = false): array
    require 'helpers.php';
    // $items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    // prettyPrintArray(array_chunk($items, 2)); // This will split $items array into seperate arrays of 2 entries evenly and make another array with one outlayer if the array isnt divisable by two

// // Array Combine
    // // array_combine(array $keys, array $values): array;

    // $array1 = ['a', 'b', 'c'];
    // $array2 = [5, 10, 15];

    // prettyPrintArray(array_combine($array1, $array2)); // creates an array with the given keys and values, the first array acts as the keys and the second acts as values

// // Array Filter
    // // array_filter(array $array, callable|null $callback = $null, int $mode = 0): array

    // $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    // $even = array_filter($array, fn($number) => $number % 2 === 0); // If the number passed is divisable by 2 then keep that in the array otherwise, filter it out

    // $even = array_values($even); // Will reindex the even array so that the keys are indexed correctly

    // prettyPrintArray($even);

// Array Keys
    // array_keys(array $keys, mixed $search_value, bool $strict = false): array;

    // $array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

    // $keys = array_keys($array, 10); // will make an array of the specified keys, in this example it will search for the value 10 and will return 'b' and 'e'
    // prettyPrintArray($keys);

// Array Map
    // array_map(callable|null $callback, array $array, array ...$arrays): array
    // Applies the callback function to each element of an array

    // $array = ['a' => 1, 'b' => 2, 'c' => 3];
    // $array2 = ['d' => 4, 'e' => 5, 'f' => 6];
    // $array = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2); // Will multiply the numbers in array one by array 2

    // prettyPrintArray($array);

// Array Merge
    // array_merge(array ...$arrays): array
    // Merges multiple arrays
    
    // $array = [1, 2, 3];
    // $array = [4, 5, 6];
    // $array = [7, 8, 9];

    // $merged = array_merge($array1, $array2, $array3); // merges all the arrays and reindexes the keys, starting from 0
    // prettyPrintArray($merged);

// Array Reduce
    // array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed
    // will reduce an array into a single value using the callback function passed

    // $invoiceItems = [
    //     ['price' => 9.99,  'qty' => 3, 'desc' => 'Item 1'],
    //     ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    //     ['price' => 149,   'qty' => 1, 'desc' => 'Item 3'],
    //     ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    //     ['price' => 4.99,  'qty' => 4, 'desc' => 'Item 5'],
    // ];

    // $total = array_reduce(
    //     $invoiceItems, 
    //     fn($sum, $item) => $sum + $item['qty'] * $item['price']
    // );
    // echo $total;

// Array Search
    // array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

    // $array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

    // $key = array_search('b', $array); // only returns the index for the first matching value, if no result, returns false, can return 0 if the matching value is in index 0

    // if (! in_array('a', $array)) { // If 'a' is not in the array // Making sure 'a' is there given the fact it is indexed as 0 so could return as false
    //     echo 'Letter not found'; // Print Letter not found
    // }

// Array Difference

// $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
// $array2 = ['f' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
// $array3 = ['l' => 3, 'm' => 9, 'n' => 10];

// prettyPrintArray(array_diff($array1, $array2, $array3)); // Compares frist against other given arrays, will return the values of the first array that dont appear in the other two
// prettyPrintArray(array_diff_assoc($array1, $array2, $array3)); // Does the same as array_diff but with the keys not values so [a, b, c, d, e] will all be returned

// Sorting Arrays

    // $array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];
    // asort($array); // will sort by the value
    // ksort($array); // will sort by the key

    // usort($array, fn($a, $b) => $a <> $b);  // Sorting with a function $a <> $b will sort the array numerically
    // usort($array, fn($a, $b) => $b <> $a);  // Sorting with a function $a <> $b will sort the array numerically in reverse
    // prettyPrintArray($array);

// Destructuring Arrays

    // $array = [1, 2, 3, 4];
    // $array2 = [1, 2, [3, 4]];  // Nested Array 

        // list($a, $b, $c, $d) = $array; // this assigns the variables to the values in the same order, so $a = 1, $b = 2, $c = 3, $d = 4
        // [$a, $b, $c, $d] = $array; // this is the shorthand version but does the same thing
        // // [$a, , $c, $d] = $array; // you can skip adding a variable by having a blank comma
        
        // [$a, $b, [$c, $d]] = $array2; // This will destructure the nested array

    $array = [1, 2, 3];
    [1 => $a, 0 => $b, 2 => $c] = $array; // assigns variables via the key (index) of each value 


    echo $a . ', ' . $b . ', ' . $c . '<br />'; // Will echo 2, 1, 3

