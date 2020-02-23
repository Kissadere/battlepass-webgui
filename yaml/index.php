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

$read = file_get_contents('documents/missions.yml');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Zibuu – Battlepass missions</title>
    <meta name="author" content="Zibuu Entertainment">
    <meta name="twitter:title" content="Zibuu – Battlepass missions">
    <meta name="twitter:image" content="assets/img/webtitle.png">
    <meta property="og:type" content="website">
    <meta name="description" content="Customizing your Battlepass missions have never been this easy">
    <meta property="og:image" content="assets/img/webtitle.png">
    <meta name="twitter:description" content="Customizing your Battlepass missions have never been this easy">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color: #ecf6ff;">
    <div class="col d-lg-flex justify-content-lg-center">
        <div class="row d-lg-flex align-content-center justify-content-lg-center" style="background-color: #ffffff;margin-top: 10px;margin-bottom: 10px;margin-right: 10px;margin-left: 10px;">

            <div class="col">
                <form method="post" action="includes/savedata.php" autocomplete="off">
                  <input type="hidden" name="form_status" value="1">
                    <div class="form-group">
                      <label style="font-size: 12px;">Mission type</label>
                      <select class="custom-select" name="type" required="true">
                        <optgroup label="Missions">
                          <option value="break">Break</option>
                          <option value="chat">Chat</option>
                          <option value="consume">Consume</option>
                          <option value="crafting">Craft items</option>
                          <option value="enchanting">Enchant items</option>
                          <option value="exp">Collect experience</option>
                          <option value="fishing">Fishing</option>
                          <option value="mobkilling">Kill Mobs</option>
                          <option value="place">Place blocks</option>
                          <option value="playerkilling">Kill players</option>
                          <option value="shear">Shear sheep</option>
                          <option value="smelting">Smelt items</option>
                          <option value="taming">Tame animals</option>
                          <option value="milking">Milk cows</option>
                          <option value="damage">Deal damage</option>
                          <option value="walking">Walk blocks</option>
                          <option value="riding">Riding</option>
                          <option value="gliding">Gliding</option>
                          <option value="sneaking">Sneaking</option>
                          <option value="swimming">Swimming</option>
                          <option value="rightclickblock">Right clicks</option>
                          <option value="healing">Health regeneration</option>
                          <option value="playercommand">Use a command</option>
                        </optgroup>
                        <optgroup label="Plugin missions">
                        </optgroup>
                      </select>
                    </div>
                        <div class="form-group">
                          <label style="font-size: 12px;">Week</label>
                          <input class="border rounded form-control form-control-lg" type="number" name="week" required="true">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 12px;">Week day</label>
                          <input class="border rounded form-control form-control-lg" type="number" name="weekday" required="true">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 12px;">Mission type variable</label>
                          <input class="border rounded form-control form-control-lg" type="text" name="variable" required="true">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 12px;">Mission name</label>
                          <input class="border rounded form-control form-control-lg" type="text" name="name" required="true">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 12px;">Requirements</label>
                          <input class="border rounded form-control form-control-lg" type="number" name="requiredprogress" required="true">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 12px;">Experience reward</label>
                          <input class="border rounded form-control form-control-lg" type="number" name="expworth" required="true">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 12px;">Availability</label>
                          <select class="custom-select" name="exclusive" required="true">
                            <option value="free">Available for everyone</option>
                            <option value="premium">Available for premiums only</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label style="font-size: 12px;">Displayed item</label>
                          <input class="border rounded form-control form-control-lg" type="text" name="item" required="true">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 12px;">Displayed item name</label>
                          <input class="border rounded form-control form-control-lg" type="text" name="itemname" required="true">
                        </div>
                        <div class="form-group">
                          <label style="font-size: 12px;">Displayed item lore</label>
                          <input class="border rounded form-control form-control-lg" type="text" name="itemlore" placeholder="First line" maxlength="30">
                          <input class="border rounded form-control form-control-lg" type="text" name="itemlore-second" placeholder="Second line" maxlength="30">
                          <input class="border rounded form-control form-control-lg" type="text" name="itemlore-third" placeholder="Third line" maxlength="30">
                        </div>
                        <div class="btn-group" role="group" style="width: 100%;padding: 20px;">
                          <button class="btn btn-primary bg-success border rounded" type="submit" style="margin-right: 10px;">Create mision</button>
                          <button class="btn btn-primary bg-danger border rounded" type="reset">Clear data</button>
                        </div>
                </form>
        </div>

        <div class="col d-lg-flex justify-content-lg-center">
            <div class="form-group" style="width: 100%;">
              <label style="font-size: 12px;">Output</label>
              <textarea class="border rounded form-control-lg" name="output" disabled="" readonly="" style="width: 100%;heigh:200px;"><?php echo $read ?></textarea>
            </div>
        </div>

    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
