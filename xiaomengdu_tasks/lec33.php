<?php
//global scope
$var = 5;
$var1 = "Hello World";
echo $var . "<br>" . $var1;

//local scope
function myfunction(){
    $a = 10;
    echo $a . "<br>";
}
//calling function called my function()
myfunction();
?>