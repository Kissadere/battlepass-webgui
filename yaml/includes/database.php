<?php
/* ZIBUU ENTERTAINMENT, (C) 2015 - 2020.
 ________   ______   ____     __  __  __  __
/\_____  \ /\__  _\ /\  _`\  /\ \/\ \/\ \/\ \
\/____//'/'\/_/\ \/ \ \ \L\ \\ \ \ \ \ \ \ \ \
     //'/'    \ \ \  \ \  _ <'\ \ \ \ \ \ \ \ \
    //'/'___   \_\ \__\ \ \L\ \\ \ \_\ \ \ \_\ \
    /\_______\ /\_____\\ \____/ \ \_____\ \_____\
    \/_______/ \/_____/ \/___/   \/_____/\/_____/

*/


  // Setting up our database connection
  $mysql_server = 'localhost';
  $mysql_username = 'username';
  $mysql_password = 'password';
  $mysql_database = 'database';
  // Should be left like this unless we've got a different port configured (DEFAULT: 3036)
  $mysql_port = '3336';


  // Checking our database connection
  $db = mysqli_connect($mysql_server, $mysql_username, $mysql_password);
  if (!$db) {
    die('<h1>An unexpected error ocurred while trying to connect to the server</h1><br>'.mysqli_error($db));
    }

  // Selecting our database and preparing it
  mysqli_select_db($db, $mysql_database) or die('<h1>An unexpected error ocurred while trying to select the database</h1><br>'.mysqli_error($db));
  mysqli_set_charset($db, 'utf8');

?>
