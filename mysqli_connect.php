<?php

DEFINE('DB_USER', 'webuser');
DEFINE('DB_PASSWORD', 'password');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'coloranswers');


$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($dbc->connect_error) {
  die("Connection failed: " . $dbc->connect_error);
}
 ?>
