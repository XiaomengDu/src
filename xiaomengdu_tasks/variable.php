<?php
//string concatenation
$name = "Pekka";
$lname = "Honkanen";
echo $name ." ". $lname;
echo"<br>".'this will pring $name';
echo"<br>"."this will pring $name";
//strlen built in function
echo "<br>The length of " . $name . " is " . strlen($name) ."<br>";
//strpos()
echo strpos('Hello World this is interesting',"is")."<br>";

//str_word_count()
echo str_word_count("Count the number of words");
//escaping characters
echo"this is \"interesting\"";
?>