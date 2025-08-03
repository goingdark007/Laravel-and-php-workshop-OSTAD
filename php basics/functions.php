<?php 

// functions in php
function familyName($fname,int $year) { /* function key is used to define a fucntion. Its different from other programming language.
it can take arguements or parameters and parameter type can be pre defined.*/

  echo "$fname Refsnes. Born in $year <br>";

}

familyName("John", 1975); // first parameter is John and second parameter is 1975

familyName("Max", 1978);

// default arguement
function set_height($height = 50){

    echo "The height is : $height <br>";

}

set_height(350);
set_height(); // prints the default value 50

// return type function
function sum($x, $y) {

  $z = $x + $y;

  return $z; // returns the summation value
}

echo "5 + 10 = " . sum(5, 10) . "<br>";

echo "7 + 13 = " . sum(7, 13) . "<br>";

// function accepting unknown number of arguements
function sumMyNumbers(...$x) { // by adding ... operator before the last arguement we can set unknown number of arguements

  $n = 0;

  $len = count($x); // count() is a method to find the length of a list or string.

  for($i = 0; $i < $len; $i++) {

    $n += $x[$i];

  }

  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);

echo $a,'<br>';

// two arguements with unknown number
function myFamily($lastname, ...$firstname) { /* lastname takes the first element of list. Other elementst are repeated in loop.
this means first arguement is set and from the second arguement it is unknown*/
  
    $txt = "";

  $len = count($firstname);
  
  for($i = 0; $i < $len; $i++) {
    
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  
}
  
    return $txt;

}

$b = myFamily("Doe", "Jane", "John", "Joey");

echo $b;

// output: Jane Doe, John Doe, Joey Doe
?>