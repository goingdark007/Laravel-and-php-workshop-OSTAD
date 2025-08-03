<?php 

$age = 50;

if ( $age<30) { // returns true if condition is correct.

    print 'You are under 30';

} else {

    print 'You are above 30';

}

// short hand if
if ($age > 10) $b = "Bigger than 10";

echo'<br>',$b; // if the condition is true then b is assigned with a value

// short hand if else

$c = $age > 20 ? 'Your older than 20' : 'Your younger than 20'; // the syntax is x condition ? if true : else false. It is called ternary operator

echo '<br>',$c;

// elseif
$a = 30;

if ($a <10){

    print "<br>It is smaller than 10";

}

elseif ($a < 20){

    print"<br>It is smaller than 20";

}
else {

    print"<br>It is bigger than 10 and 20";

}

// switch statement
$favcolor = "black";

switch ($favcolor) { // if favcolor matches with case it runs that code and breaks

  case "red":

    echo "<br>Your favorite color is red!";

    break;

  case "blue":

    echo "<br>Your favorite color is blue!";

    break;

  case "green":

    echo "<br>Your favorite color is green!";

    break;

  default:

    echo "<br>Your favorite color is neither red, blue, nor green!"; // default is used if no case is matched
    
}
?>