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
<section class=scroll>
<?php echo image("images/updates.jpg", "Main Image", "text-darken", ["id" => "top", "text" => "<h1>Updates</h1>"]);  ?>
<div class="section text">
<p>Every time a new web page is launched, it will show up here so that you can see what is new!</p>
</div>
<?php echo section("Timings Converter", "This combines my passion for running and programming, as it converts paces between different distances for athletics. It will give pacing for laps, kilometres and miles for different competitive distances. <a href=timings>Check it out!</a>", "/online/images/track.jpg");
echo section("Dinosaur Generator", "This new page uses and n-gram-like algorithm to generate realistic dinosaur names. <a href=/ai/dinosaurs>Check it out</a> and have a play with the cool feature.","../artificial-intelligence/images/dinosaur.jpg");
echo section("Redesign", "The site has been redesigned to transform the look. After taking a visual design course, I applied what I learnt to create a clean, more modern look with some cool new features.","images/paint.jpg"); ?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?></html>