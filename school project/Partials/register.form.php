<?php
  if(isset($_POST['firstName'])){
  require("../school project/core/database.php");
  require("../school project/core/database.registreer.php");
  }
?>

<div class="register-form-holder">
  <form action="" method="post">

  <p>Voornaam</p>
    <label for="firstName"></label>
    <input type="text" name="firstName" placeholder="Please fill in your First Name!" required>

    <p>Tussenvoegsel</p>
    <label for="middleName"></label>
    <input type="text" name="middleName" placeholder="Please fill in your Insertion!">

    <p>Achternaam</p>
    <label for="lastName"></label>
    <input type="text" name="lastName" placeholder="Please fill in your Last Name!" required>

    <p>Emailadress</p>
    <label for="email"></label>
    <input type="email" name="email" placeholder="Please fill in your Email adress!" required>

    <p>Wachtwoord</p>
    <label for="password"></label>
    <input type="password" name="password" placeholder="Please fill in your Password here!" minlength="8" required>

    <p>Herhaal Wachtwoord</p>
    <label for="repeat-password"></label>
    <input type="password" name="repeat-password" placeholder="Please repeat your Password here!" required> <br>

    <button class="submit-button" type="submit" value="Submit">Sign Up</button>
  </form>
</div>