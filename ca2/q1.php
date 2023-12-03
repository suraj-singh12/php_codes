<!-- 1. Create a registration form that includes the following fields: name, email, password, confirm password, phone number, and date of birth. All fields should be required and password fields should have a minimum length of 8 characters. The phone number field should only accept numeric values and must have a length of 10 digits. The date of birth field should only accept a valid date format. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .error {
      color: red;
    }
    .item, input[type=submit], h1 {
      display:flex;
      flex-direction: column;
      margin: 1rem;
      font-size: 1.3rem;
    }
    input {
      font-size: 1.6rem;
    }
    h1 {
      font-size: 2rem;
    }
    span {
      color: green;
    }
  </style>
  <title>Question1</title>
</head>
<body>
  <?php 
    function testInput($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $name = $email = $password = $password_confirm = $phone_no = $dob = "";
    $nameError = $emailError = $passwordError = $passwordConfirmError = $phoneError = $dobError = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(empty($_POST["name"])) {
        $nameError = "Name is required";
      } else $name = $_POST["name"];

      if(empty($_POST["email"])) {
        $emailError = "Email is required";
      } else $email = $_POST["email"];

      if(empty($_POST["password"]) || strlen($_POST["password"]) < 8) {
        $passwordError = "Password is required > 8 characters";
      } else $password = $_POST["password"];

      if($_POST["password_confirm"] != $_POST["password"]) {
        $passwordConfirmError = "Confirm Password Mismatching!";
      } else $password_confirm = $_POST["password_confirm"];
      
      if(empty($_POST["phone_no"]) || strlen($_POST["phone_no"]) != 10) {
        $phoneError = "Please enter a 10 digit phone number.";
      } else $phone_no = $_POST["phone_no"];

      if(empty($_POST["dob"])) {
        $dobError = "Date of birth is required";
      } else $dob = $_POST["dob"];
      
      if($name && $email && $password && $password_confirm && $phone_no && $dob) {
        echo "<h1><center>Form Submitted Successfully!</center><h1>";
      } else {
        echo "<h1><center>Form Details do not satisfy one or more criteria.</center></h1>";
      }
    }

  ?>
  <h1>Registration Form</h1>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    <div class="item">
      <label for="name">Name: </label>
      <input type="text" id="name" name="name" required/>
      <span class="error"><?php echo $nameError; ?></span>
    </div>

    <div class="item">
      <label for="email">Email: </label>
      <input type="email" id="email" name="email" required/>
      <span class="error"><?php echo $emailError; ?></span>
    </div>

    <div class="item">
      <label for="password">Password: </label>
      <input type="password" id="password" name="password" required/>
      <span class="error"><?php echo $passwordError; ?></span>
    </div>

    <div class="item">
      <label for="password_confirm">Confirm Password: </label>
      <input type="password" id="password_confirm" name="password_confirm" required/>
      <span class="error"><?php echo $passwordConfirmError; ?></span>
    </div>

    <div class="item">
      <label for="phone_no">Phone Number: </label>
      <input type="number" id="phone_no" name="phone_no" required/>
      <span class="error"><?php echo $phoneError; ?></span>
    </div>

    <div class="item">
      <label for="dob">Date of Birth: </label>
      <input type="date" id="dob" name="dob" required/>
      <span class="error"><?php echo $dobError; ?></span>
    </div>

    <input type="submit" value="Submit" />
  </form>

</body>
</html>