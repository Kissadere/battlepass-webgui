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

// Database connections
require "database.php";


// Script variables
$success          = 'translator.php';
$mysql_table      = 'battlepass_creator';


// Getting form data
$creator          = $_SERVER['REMOTE_ADDR'];
$week             = $_REQUEST['week'];
$week_day         = $_REQUEST['weekday'];
$type             = $_REQUEST['type'];
$variable         = $_REQUEST['variable'];
$name             = $_REQUEST['name'];
$requiredprogress = $_REQUEST['requiredprogress'];
$expworth         = $_REQUEST['expworth'];
$exclusive        = $_REQUEST['exclusive'];
$item             = $_REQUEST['item'];
$item_name        = $_REQUEST['itemname'];
$lore             = $_REQUEST['itemlore'];
$lore_second      = $_REQUEST['itemlore-second'];
$lore_third       = $_REQUEST['itemlore-third'];


// Fixing weird characters
$creator          = mysqli_real_escape_string($db, $creator);
$week             = mysqli_real_escape_string($db, $week);
$week_day         = mysqli_real_escape_string($db, $week_day);
$type             = mysqli_real_escape_string($db, $type);
$variable         = mysqli_real_escape_string($db, $variable);
$name             = mysqli_real_escape_string($db, $name);
$requiredprogress = mysqli_real_escape_string($db, $requiredprogress);
$expworth         = mysqli_real_escape_string($db, $expworth);
$exclusive        = mysqli_real_escape_string($db, $exclusive);
$item             = mysqli_real_escape_string($db, $item);
$item_name        = mysqli_real_escape_string($db, $item_name);
$lore             = mysqli_real_escape_string($db, $lore);
$lore_second      = mysqli_real_escape_string($db, $lore_second);
$lore_third       = mysqli_real_escape_string($db, $lore_third);


// Inserting new data

  if(isset($_POST['form_status']))
  {
      $sql = "INSERT INTO $mysql_table (`creator`, `week`, `week_day`, `type`, `variable`, `name`, `requiredprogress`, `expworth`, `exclusive`, `item`, `item_name`, `lore`, `lore_second`, `lore_third`)
      VALUES (\"$creator\", \"$week\", \"$week_day\", \"$type\", \"$variable\", \"$name\", \"$requiredprogress\", \"$expworth\", \"$exclusive\", \"$item\", \"$item_name\", \"$lore\", \"$lore_second\", \"$lore_third\")";
      $result = mysqli_query($db, $sql);

      header('Location: '.$success);
      mysqli_close($db);
      exit;
  }
?>
