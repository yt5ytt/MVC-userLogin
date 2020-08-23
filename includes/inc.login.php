<?php
  if(@$_POST['submit']):

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $login = new UserGet();
    $userRow = $login->getUser($email, $password);

    if(count($userRow) == 0):
      echo 'There is no user with that email';
    else:

      foreach($userRow as $user):

        if($user->password != $password):
          echo 'Incorect password';
        else:
          echo 'Login successful';
        endif;

      endforeach;

    endif;

  endif;
?>

<!-- THIS IS A SIMPLE LOGIN FORM -->
<form action="index.php?link=login" method="post">
  Email: <input type="email" name="email" value=""><br />
  Password: <input type="password" name="password" value=""><br />
  <input type="submit" name="submit" value="Submit">
  <button type="button" name="Back" onclick="location.href='index.php';">Back to index</button>
</form>
