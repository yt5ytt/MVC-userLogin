<?php
  include 'includes/inc.autoloader.php';

  if( class_exists( 'LoginView' ) ){
    $table = new LoginView();
    $table->createTable();
  }
 ?>
