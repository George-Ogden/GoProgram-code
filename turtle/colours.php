<!doctype html>
<html>
<head>
<title>Colours</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="Colourful projects that have written in Python and are available to download and run or just watch in the browser.">
<meta name=keywords content="python turtle colours">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="Python turtle">
</head><?php include "../header.php" ?>
<section class="showcase">
<div class="section pad-4 bg-dark" id=top>
<h1>
<?php foreach ([["C", "#f94144"], ["O", "#f3722c"], ["L", "#f8961e"], ["O", "#f9c74f"], ["U", "#90be6d"], ["R", "#43aa8b"], ["S", "#577590"]] as list($letter, $colour)) {
echo "<span style='color:$colour'>$letter</span>";
} ?>
</h1>
</div>

<?php
echo generate([
["title" => "Colour Spin", "code" => "RGStj_7DqqM", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Colour%20Spin.py"],
["title" => "Colourful Circles", "code" => "knpAHoGCFhU", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Colourful%20Circles.py"], ["title" => "Colour Wheel", "code" => "7_EMslgw3cE", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Colour%20Wheel.py"]
])
?>
</section><?php include "../footer.php" ?><?php include "../scripts.php" ?>

</html>