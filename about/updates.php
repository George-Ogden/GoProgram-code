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
<section>
<?php echo image("images/updates.jpg", "Main Image", "text-darken", ["id" => "top", "text" => "<h1>Updates</h1>"]);  ?>
<div class="section text">
<p>Every time a new web page is launched, it will show up here so that you can see what is new!</p>
</div>
<?php echo section("New Logo", "The old logo for GoProgram had been used since its creation a couple of years ago. Since the website was redesigned a few months ago, it was time for the logo to change too!","/images/goprogram.png");
echo section("Timings Converter", "This combines my passion for running and programming, as it converts paces between different distances for athletics. It will give pacing for laps, kilometres and miles for different competitive distances. <a href=timings>Check it out!</a>", "/online/images/track.jpg");
echo section("Dinosaur Generator", "This new page uses and n-gram-like algorithm to generate realistic dinosaur names. <a href=/ai/dinosaurs>Check it out</a> and have a play with the cool feature.","../artificial-intelligence/images/dinosaur.jpg") ?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?></html>