<?php

spl_autoload_register('aWebSAutoloader');

function aWebSAutoloader($className){
  $path = 'classes/class.';
  $extension = '.php';
  $fullPath = $path . $className . $extension;

  include_once $fullPath;
}
