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

// Including dependencies
require "database.php";


// Useful data
$mysql_table      = 'battlepass_creator';
$success          = '../index.php';


// Setting up our needed variables
$week             = '0';
$weekday          = '0';
$type             = 'NULL';
$variable         = 'NULL';
$name             = 'NULL';
$requiredprogress = '0';
$expworth         = '0';
$exclusive        = 'NULL';
$item             = 'NULL';
$itemname         = 'NULL';
$lore             = 'NULL';
$lore_secondline  = 'NULL';
$lore_thirdline   = 'NULL';


// Querying our database
$sql = "SELECT * FROM $mysql_table ORDER BY id DESC";
  $result = mysqli_query($db, $sql);
  if($data = mysqli_fetch_array($result)) {
      $week             = $data['week'];
      $weekday          = $data['week_day'];
      $type             = $data['type'];
      $variable         = $data['variable'];
      $name             = $data['name'];
      $requiredprogress = $data['requiredprogress'];
      $expworth         = $data['expworth'];
      $exclusive        = $data['exclusive'];
      $item             = $data['item'];
      $itemname         = $data['item_name'];
      $lore             = $data['lore'];
      $lore_secondline  = $data['lore_second'];
      $lore_thirdline   = $data['lore_third'];
}

// Setting up custom messages for free and premium challenges
switch ($exclusive) {
  case 'free':
    // Custom lore for free challenges
    $loredata_exclusive = "&aAVAILABLE FOR EVERYONE";
    break;
  case 'premium':
    // Custom lore for premium challenges
    $loredata_exclusive = "&bAVAILABLE FOR PREMIUMS ONLY";
    break;
}
// Getting challenge reward and progress
$loredata_progress = "&fProgress:&7 %status% / $requiredprogress";
$loredata_exp = "&fExperience reward:&7 $expworth";


// Looping our database data
$battlepass = array(
    "$week" => array(
      "$weekday" => array(
        "type" => "$type",
        "variable" => "$variable",
        "name" => "$name",
        "requiredProgress" => $requiredprogress,
        "expWorth" => $expworth,
        "exclusive" => "$exclusive",

        "item" => array(
          "item" => "$item",
          "name" => "$itemname",
          "lore" => array(
            // Writing our custom lore text submitted before
            "$lore",
            "$lore_secondline",
            "$lore_thirdline",
            // Writing custom lore for premium or free challenges
            "$loredata_exclusive",
            // Writing challenge data such as experience and progress
            "$loredata_progress",
            "$loredata_exp",
        ) ,
      ) ,
    ) ,
  ) ,
);

$outputdata     = yaml_emit_file("../documents/output.yml", $battlepass, YAML_UTF8_ENCODING, YAML_CRLN_BREAK);
$readfile     = file_get_contents('../documents/output.yml');
$writemissions = fopen('../documents/missions.yml', 'a');

fwrite($writemissions, "$readfile");
fclose($writemissions);
header('Location: '.$success);
?>
