<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php'; ?>
<h3>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an tag.</h3>
<form>         
    Name: <input type="text" name="nimi" required> <br><br>
    Email: <input type ="email" name="email" required> <br><br>
    DOB: <input type="date" name="dob"> <br><br>
    Select Color:<input type="color" name="color"> <br><br>
    <input type="submit" value="Submit">

</form>

<?php include 'footer.php'?>