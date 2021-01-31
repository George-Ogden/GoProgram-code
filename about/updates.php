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
<?php echo image("images/updates.jpg", "Main Image", "text-darken", ["id" => "top", "text" => "<h1>Updates</h1>"]);  ?>
<div class="section text">
<p>Every time a new web page is launched, it will show up here so that you can see what is new!</p>
</div>
<div class="section text"><h2>Freelancing</h2><p>After a year of freelancing at PeoplePerHour, I thought that it was finally time to add a section to the website to let people know what I can do. In <a href=/freelancing>this section</a>, I provide details about the kind of work that I can do!</div>
<?php echo section("Hangman Solver", "Usually, hangman is about guessing another person's word. But here, the artificial intelligence tries to guess your word, and it learns with every attempt! Why not <a href=/ai/hangman>have a play with it?</a>","/artificial-intelligence/images/hangman.jpg")?>
<div class='section image'><div class='text'><h2 class=pb-5>New Logo</h2><p class=pb-5>The old logo for GoProgram had been used since its creation a couple of years ago. Since the website was redesigned a few months ago, it was time for the logo to change too!</p></div><?php echo image("/images/goprogram.png", "New Logo", "none") ?></div>
<?php echo section("Timings Converter", "This combines my passion for running and programming, as it converts paces between different distances for athletics. It will give pacing for laps, kilometres and miles for different competitive distances. <a href=timings>Check it out!</a>", "/online/images/track.jpg");?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?></html>