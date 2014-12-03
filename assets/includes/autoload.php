<?php

spl_autoload_register("my_autoload");

function my_autoload($class)
{

  $filepath = str_replace("_", "/", $class);
  $filepath .= '.class.php';
  if (file_exists($filepath))
  {
    require_once($filepath);
  }
  else
  {
    error_log($class . ' not found');
  }
}