<!DOCTYPE html>
<html>
<title>RAIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>


<header class="w3-display-container w3-content" style="max-width:1500px">
  <img class="w3-image" src="rainrain.png" alt="Me" width="1500" height="600">
 <div class="w3-display-middle w3-padding-xlarge w3-border w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">RAIN POTOZA</h1>
    <h3 class="w3-hide-medium w3-hide-small">MI-153</h3>
 </div>
</header>

<div class="w3-content w3-padding-jumbo w3-margin-top" id="portfolio">

 
  <img src="adventure.jpg" class="w3-image" width="1000" height="500">
  <img src="sports.jpg" class="w3-image w3-margin-top" width="1000" height="500">


  
  <div class="w3-light-grey w3-padding-xlarge w3-padding-32 w3-margin-top" id="contact">
   <FONT FACE = "Times New Roman" SIZE = "4" COLOR="BLACK">     
 <style>
 p.solid {border-style: solid;
    border-width: 5px; 
  }
 h1{ letter-spacing: 6px;
     }
</style>
<CENTER>
<?php

// define variables and set to empty values
$Complete_Name = $Nick_name = $Email_Address = $Home_Address = $Cell_No = "";
$gender = $Comment =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $Complete_Name = "Name is required";
  } else {
    $Complete_Name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$Complete_Name)) {
      $Complete_Name = "Only letters and space allowed"; 
    }
  }
  
  if (empty($_POST["Nickname"])) {
    $Nick_name = "Nickname is required";
  } else {
    $Nick_name = test_input($_POST["Nickname"]);
    
    }
  }
  
  if (empty($_POST["email"])) {
    $Email_Address = "Email is required";
  } else {
    $Email_Address = test_input($_POST["email"]);
    
    if (!filter_var($Email_Address, FILTER_VALIDATE_EMAIL)) {
      $Email_Address = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["Cell_No"])) {
    $Cell_No = "";
  } else {
    $Cell_No = test_input($_POST["Cell_No"]);
  }

  if (empty($_POST["Comment"])) {
    $Comment = "";
  } else {
    $Comment = test_input($_POST["Comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Information Fill-Up</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Complete-Name: <input type="text" name="Complete Name" value="<?php echo $Complete_Name;?>">
  <span class="error">* <?php echo $Complete_Name;?></span>
  <br><br>
  
   Nickname: <input type="text" name="Nickname" value="<?php echo $Nick_name;?>">
  <span class="error">* <?php echo $Nick_name;?></span>
  <br><br>
  
  E-mail Address: <input type="text" name="E-mail Address" value="<?php echo $Email_Address;?>">
  <span class="error">* <?php echo $Email_Address;?></span>
  <br><br>
  
   Home_Address: <input type="text" name="Home_Address" value="<?php echo $Home_Address;?>">
  <span class="error">* <?php echo $Home_Address;?></span>
  <br><br>
  
  Cell No. <input type="number" name="Cell No" value="<?php echo $Cell_No;?>">
  <span class="error"><?php echo $Cell_No;?></span>
  <br><br>
  
  Comment: <textarea name="Comment" rows="5" cols="40"><?php echo $Comment;?></textarea>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $gender;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $Complete_Name;
echo "<br>";
echo $Nick_name;
echo "<br>";
echo $Email_Address;
echo "<br>";
echo $Home_Address;
echo "<br>";
echo $Cell_No;
echo "<br>";
echo $Comment;
echo "<br>";
echo $gender;
?>

<CENTER>
<p><a href="https://twitter.com/">Twitter<a/></p>
   <a href="https://facebook.com/">Facebook<a/></p>
   
<audio controls>
<source src="LoveMyself.mp3" type="audio/mpeg">
</body>
</html>