<?php
  if (isset($_POST['submit'])) {
    // The form has been submitted

    // Retrieve and sanitize form data
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Further processing, such as validation and authentication
  }
  require("../school project/core/database.php");
  require("../school project/core/database.login.php");
?>

<div class="login-form-holder">
  <form action="" method="post">
    <p>Emailadress</p>
    <label for="email"></label>
    <input type="email" name="email" placeholder="Please fill in your Email adress!" required>

    <p>Wachtwoord</p>
    <label for="password"></label>
    <input type="password" name="password" placeholder="Please fill in your Password here!" minlength="8" required>
    
    <button class="submit-button" type="submit" value="Submit">Log In</button>
    <button class="submit-button"><a id="login" href="../school project/register.php">Make a account here</a></button>
  </form>