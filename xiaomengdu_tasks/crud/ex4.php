<?php
$title = "Exercise 4: Control flow and loops";
include '../lect2/header.php';?>
<h3>1.Create a file (ex4.php): Create a file named ex4.php in your exercise folder. Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3>
<h3>2.If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting).</h3>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br><br>

    <label for="age">Age:</label>
    <input type="number" name="age" required><br><br>

    <input type="submit" value="Voting">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = htmlspecialchars($_POST["name"]);
    $age = intval($_POST["age"]); 


    if ($age >= 18) {
        echo "<p>Dear $name, you are eligible for voting!</p>";
    } else {
        echo "<p>Sorry $name, you are not eligible for voting. You need to be 18 or older.</p>";
    }
}
?>
<h3>3.Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h3>
<?php

$currentMonth = date("F");


switch ($currentMonth) {
    case "August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $currentMonth, so I don't have any holidays.";
        break;
}
?>
<h3>4.For Loop: Write a PHP script that will print the multiplication table of a number (n).</h3>
<?php
$n = 3;
echo "Multiplication table for $n:<br>";
for ($i = 1; $i <= 10; $i++) {
    $result = $n * $i;
    echo "$n x $i = $result<br>";
}
?>
<h3>5.While Loop: Write a PHP script that will print all the numbers from 1 to n.</h3>
<?php
$n = 9; 
$i = 1;
echo "Numbers from 1 to $n:<br>";
while ($i <= $n) {
    echo "$i<br>";
    $i++;
}
?>
<h3>6.Foreach Loop: Write a PHP script that will print all the elements of an array.</h3>
<?php
$myArray = array("A", "B", "C", "D", "E");
echo "Elements of the array:<br>";
foreach ($myArray as $element) {
    echo "$element<br>";
}
?>

</body>



<?php include '../lect2/footer.php'; ?>