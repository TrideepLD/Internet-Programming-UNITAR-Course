<?php  include "db_con.php"; ?>
<?php  include "Assignment_functions.php"; ?>

<?php  personalInfo(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Personal Info</title>
  <link rel="stylesheet" type="text/css" href="Assignmentcss.css">
</head>
<body>
<div class="container">  
<form id="contact" action="contact_info.php" method="post">
  <h4>University X Regristration Form</h4>
  <fieldset>
    <input placeholder="Your Full Name" type="text" tabindex="1" required autofocus name="username">
  </fieldset>
  <fieldset>
    <input placeholder="Your Home Address" type="text" tabindex="2" required name="homeAdress">
  </fieldset>
  <fieldset>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
  <fieldset>
  <input type="date" name="dob">
  <fieldset>
    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
  </fieldset>
  <fieldset>
    <button name="reset" type="reset" id="contact-submit" data-submit="...Sending">Clear</button>
  </fieldset>
</form>
</div>
</body>
</html>