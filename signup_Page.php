<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body bgcolor="powderblue">
  <h2>Ansh Singh</h2>
  <h1><B>Sign-up</B></h1>
  <p>WE REQUEST YOU TO KINDLY FILL THIS FORM:</P>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      FIRST NAME:<input type="text" name="fname" placeholder="first name"><br><br>
      LAST NAME:<input type="text" name="lname" placeholder="last name"><br><br>
      DATE OF BIRTH:<input type="text" name="DOB" placeholder="DD/MM/YY"><br><br>
      EMAIL ID:<input type="email" name="email-id" placeholder="Email-id"><br><br>
      MOBILE NO:<input type="text" name="phone" placeholder="10 digit number"><br><br>
      GENDER:
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="female">Other<br><br>
    <br>
    <input type="submit" name="Submit">
    <h1>Your Input</h1>
  </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
  echo $_POST['fname'];
  echo "<br>";
  echo $_POST['lname'];
  echo "<br>";
  echo $_POST['DOB'];
  echo "<br>";
  echo $_POST['email-id'];
  echo "<br>";
  echo $_POST['phone'];
  echo "<br>";
  echo $_POST['gender'];
  echo "<br>";
  echo "<br>";
}
?>