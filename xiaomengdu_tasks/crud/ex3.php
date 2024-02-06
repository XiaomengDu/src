<?php
$title = "Exercise 3: Variable, Strings & Operators";
include '../lect2/header.php';


$name = $email = $dob = $color = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["nimi"]) ? $_POST["nimi"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $dob = isset($_POST["dob"]) ? $_POST["dob"] : "";
    $color = isset($_POST["color"]) ? $_POST["color"] : "";
}
?>

<div class="container mt-5">
    <h3>2.Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an <h3> tag. </h3>
    <h3>3.Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your <head> tag.</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-3">
        <div class="mb-3 row">
            <label for="firstName" class="col-sm-2 col-form-label">Name:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nimi" value="<?php echo $name; ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dob" class="col-sm-2 col-form-label">DOB:</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="color" class="col-sm-2 col-form-label">Select Color:</label>
            <div class="col-sm-2">
                <input type="color" class="form-control" name="color" style="height: 38px;" value="<?php echo $color; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    
    <?php
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div class='container mt-5'>";
        echo "<h3>Hello, $name! Your email is: $email</h3>";
        echo "</div>";
       
    }
    ?>
</div>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
?>
<div class="container mt-5">
    <h3>4.HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">S.n.</th>
                <th scope="col">Name</th>
                <th scope="col">Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td><?php echo $g1; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Alice</td>
                <td><?php echo $g2; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bob</td>
                <td><?php echo $g3; ?></td>
            </tr>
        </tbody>
    </table>
    <h3>5.String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h3>
<?php
$str1 = "Hello";
$str2 = "World";

$combinedString = $str1 . " " . $str2;


echo "$combinedString <br>";


$length = strlen($combinedString);
echo "$length";
?>

<h3>6.Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h3>
<?php

$num1 = 298;
$num2 = 234;
$num3 = 46;


$sum = $num1 + $num2 + $num3;

echo "$sum";
?>
<h3>7.Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER)</h3>
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident/') !== false) {
    $browser = 'Internet Explorer';
} elseif (strpos($userAgent, 'Firefox') !== false) {
    $browser = 'Mozilla Firefox';
} elseif (strpos($userAgent, 'Chrome') !== false) {
    $browser = 'Google Chrome';
} elseif (strpos($userAgent, 'Safari') !== false) {
    $browser = 'Apple Safari';
} elseif (strpos($userAgent, 'Opera') !== false || strpos($userAgent, 'OPR/') !== false) {
    $browser = 'Opera';
} else {
    $browser = 'Unknown Browser';
}

echo "<br>You are using: $browser";
?>

</div>


<?php include '../lect2/footer.php'; ?>

