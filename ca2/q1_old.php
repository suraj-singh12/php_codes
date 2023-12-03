
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $phone_number = $_POST['phone_number'];
  $date_of_birth = $_POST['date_of_birth'];

  // Validate name
  if (empty($name)) {
    $name_error = 'Name is required';
  }

  // Validate email
  if (empty($email)) {
    $email_error = 'Email is required';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = 'Invalid email format';
  }

  // Validate password
  if (empty($password)) {
    $password_error = 'Password is required';
  } elseif (strlen($password) < 8) {
    $password_error = 'Password must be at least 8 characters long';
  }

  // Validate confirm password
  if (empty($confirm_password)) {
    $confirm_password_error = 'Confirm password is required';
  } elseif ($password !== $confirm_password) {
    $confirm_password_error = 'Passwords do not match';
  }

  // Validate phone number
  if (empty($phone_number)) {
    $phone_number_error = 'Phone number is required';
  } elseif (!is_numeric($phone_number)) {
    $phone_number_error = 'Phone number must be numeric';
  } elseif (strlen($phone_number) !== 10) {
    $phone_number_error = 'Phone number must be 10 digits long';
  }

  // Validate date of birth
  if (empty($date_of_birth)) {
    $date_of_birth_error = 'Date of birth is required';
  } elseif (!DateTime::createFromFormat('Y-m-d', $date_of_birth)) {
    $date_of_birth_error = 'Invalid date format';
  }

  // If there are no errors, redirect to success page
  if (empty($name_error) && empty($email_error) && empty($password_error) && empty($confirm_password_error) && empty($phone_number_error) && empty($date_of_birth_error)) {
    header('Location: success.php');
    exit;
  }
}
?>

<form method="POST" action="">
  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <?php if (!empty($name_error)) { ?>
      <span><?php echo $name_error; ?></span>
    <?php } ?>
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <?php if (!empty($email_error)) { ?>
      <span><?php echo $email_error; ?></span>
    <?php } ?>
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" minlength="8" required>
    <?php if (!empty($password_error)) { ?>
      <span><?php echo $password_error; ?></span>
    <?php } ?>
  </div>
  <div>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" minlength="8" required>
    <?php if (!empty($confirm_password_error)) { ?>
      <span><?php echo $confirm_password_error; ?></span>
    <?php } ?>
  </div>
  <div>
    <label for="phone_number">Phone Number:</label>
    <input type="tel" id="phone_number" name="phone_number" pattern="[0-9]{10}" required>
    <?php if (!empty($phone_number_error)) { ?>
      <span><?php echo $phone_number_error; ?></span>
    <?php } ?>
  </div>
  <div>
    <label for="date_of_birth">Date of Birth:</label>
    <input type="date" id="date_of_birth" name="date_of_birth" required>
    <?php if (!empty($date_of_birth_error)) { ?>
      <span><?php echo $date_of_birth_error; ?></span>
    <?php } ?>
  </div>
  <button type="submit">Submit</button>
</form>
