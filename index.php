<?php
  include 'includes/inc.autoloader.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>MVC login lib</title>
   </head>
   <body>
     <?php
        if(@!$_GET['link']):
          ?>
            <button type="button" name="register" onclick="location.href='index.php?link=register';">Register</button>
            <button type="button" name="login" onclick="location.href='index.php?link=login';">Login</button>
          <?php
        elseif(@$_GET['link'] == 'register'):
          include 'includes/inc.register.php';
        elseif(@$_GET['link'] == 'login'):
          include 'includes/inc.login.php';
        endif;
      ?>
   </body>
 </html>
