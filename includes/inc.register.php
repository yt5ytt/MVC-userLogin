<?php
  //REGISTRATION INCLUDE FILE

  //if form is submited
  if(@$_POST['submit']):

    //fetching data from the form
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //initiating class UserSet for registration
    $controller = new UserSet();

    // creating users table (if not exists)
    $controller->createTable();

    // registrating user with MD5 encryption of the password
    $registration = $controller->setUser($firstname, $lastname, $email, $password);

    //if statement for register verification
    if($registration):
      echo 'Success';
    else:
      echo 'Fail';
    endif;

  endif;
 ?>

<!-- THIS IS A SIMPLE REGISTRATION FORM -->
<form action="index.php?link=register" method="post">
  First Name: <input type="text" name="firstName" value=""><br />
  Last Name: <input type="text" name="lastName" value=""><br />
  Email: <input type="text" name="email" value=""><br />
  Password: <input type="password" name="password" value=""><br />
  <input type="submit" name="submit" value="Submit">
  <button type="button" name="Back" onclick="location.href='index.php';">Back to index</button>
</form>
