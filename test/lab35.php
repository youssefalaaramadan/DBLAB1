<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$namet = $email = $gender = $comment = $website = $courses = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["namet"])) {
    $nameErr = "This field is required";
  } else {
    $namet = test_input($_POST["namet"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  //*if (empty($_POST["courses"])) {
  //*  $courses = "";
  //*} else {
  //  $courses = test_input($_POST["courses"]);
  //}
  $values = $_POST['courses'];


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Application name: AAST_BIS class registration</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="namet">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Group# <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Class details: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <label for="courses">Select Courses:</label>
<select name="courses[ ]" multiple>
  <option value="PHP">PHP</option>
  <option value="Java Script">Java Script</option>
  <option value="MySQL">MySQL</option>
  <option value="HTML">HTML</option>
</select>
<br><br>  
  Agree <input type="checkbox" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
<input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your given values are as:</h2>";
echo "name:".$namet;
echo "<br>";
echo "E-mail:".$email;
echo "<br>";
echo "Group#:".$website;
echo "<br>";
echo "Class details:".$comment;
echo "<br>";
echo "Gender:".$gender;
echo "<br>";
foreach ($values as $a){
    echo "Your courses are:" .$a;
}

?>

</body>
</html>
