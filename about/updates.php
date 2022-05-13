<!doctype html>
<html>
<head>
<title>What's New?</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=updates.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="Get all of the updates about GoProgram as soon as they are released on this page.">
<meta name=keywords content="updates">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="updates">
</head><?php include "../header.php" ?>
<section class=colour>
<?php echo image("images/updates.jpg", "Main Image", "text-darken", ["id" => "top", "text" => "<h1>Updates</h1>"]) ?>
<div class="section text">
<p>Every time a new web page is launched, it will show up here so that you can see what is new!</p>
</div>
<?php echo section("Bitcoin Bot", "Bitcoin seems to be taking over the world at the moment, but it's not as unpredictable as you'd think. <a href=/pro/bitcoin>This bot</a> manages to find patterns in the data to make profitable investments!","/pro/images/bitcoin.jpg");
echo section("Tic-Tac-Toe", "As part of my research on games, I decided to create an AI that would always win at tic-tac-toe. To extend the challenge, I moved up from a 3x3 grid to a 5x5 one and you can <a href=/ai/tictactoe/>play against the result</a>!","/scratch/images/tictactoe.jpg");
echo section("U-Net", "Another interesting project that I've recently finished is vein detection in leaves. To accomplish this, I used U-Net - an image segmentation model designed for medical uses - and you can <a href=/ai/vein>view the results</a>!","/pro/images/vein.jpg");
?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?></html>