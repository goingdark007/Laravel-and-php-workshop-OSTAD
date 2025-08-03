<?php 

// for loop
echo 'for loop:';

for ($i = 0; $i <10; $i++){ // prints 0 to 9

    print "<br>$i";

}

// while loop
echo '<br>while loop:';
$i = 10;

while ($i < 20){ // prints from 10 to 19

    print"<br>$i";

    $i ++; // increments i by one

}

// break can used to stop the loop and continue can be used to skip an iteration to move on to the next on

// do while loop
echo '<br>do while loop:';

$i = 20;

do { // runs the loop at least for once even if the condition is false

    echo'<br>',$i;

    $i ++;

} while ($i <19);

// foreach loop
echo '<br>foreach loop:<br>';

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) { // takes the elements of array and prints them as x in each iteration

  echo "$x <br>";

}

?>