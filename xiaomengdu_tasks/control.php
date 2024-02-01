<?php
//if
$a = 5;
if($a == 5){
    echo "the condition is true";
}
else{
    echo "the condition is fals<br>";
    echo "the number is $a";
}

//if else statement with date function
$d = date("D");
if ($d == "Sat" or $d =="Sun"){
    echo "<br>Today id $d, it is weekend";
}
else{
    echo"<br>Today is $d, it is a working day";
}


//if else if statement
$d = date("D");
if ($d == "Sat" or $d =="Sun"){
    echo "<br>Today id $d, it is weekend";
}
elseif($d == "Wed"){
    echo "<br>Today is the $d and it is the third working day of the week";
}

//switch
echo"<hr><h1>Switch statement example</h1>";
$num = 8;
switch ($num){
    case 5:
        echo"this is 5";
        break;
    case 6:
        echo"this is 6";
        break;    
    case 7:
        echo"this is 7";
        break;
    default:
        echo"this is neither 5, nor 6 nor 7";


}
$grade = "Very Good";
switch($grade){
    case "Excellent":
        echo "<br>Your grade is 5";
        break;
    case "Very Good":
        echo "<br>Your grade is 4";
        break;
    default:
        echo "<br>Your have failed the exam";
        break;
}


echo"<hr><h1>While Loop</h1>";
while ($a <= 10) {
    echo "The number is $a <br>";
    $a++;
}
echo"<hr><h1>Do While Loop</h1>";
$num = 16;
do {
    echo "the number is $num <br>";
    $num++;
}
while ($num <= 15);
echo"<hr><h1>For Loop</h1>";
for ($c = 5; $c <= 10; $c++){
    echo "*<br>";
}

echo"<hr><h1>foreach Loop</h1>";
$x = array("Good", "Very Good", "Excellent");
foreach ($x as $value){
    echo $value . "<br>";
}


?>