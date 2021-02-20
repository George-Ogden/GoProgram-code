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
<?php echo section("BreathBuddy", "<a href=https://play.google.com/store/apps/details?id=uk.co.goprogram.breathing.pro>Practise some breathing exercises</a> that will decrease blood pressure, heart rate and stress levels, while increasing lung capacity, VO<sub>2</sub> max at the same time! There is both a <a href=https://play.google.com/store/apps/details?id=uk.co.goprogram.breathing.lite>free trial</a> and a <a href=https://play.google.com/store/apps/details?id=uk.co.goprogram.breathing.pro>full version</a> available.", "/apps/images/breathing.jpg")?>
<div class="section text"><h2>Freelancing</h2><p>After a year of freelancing at PeoplePerHour, I thought that it was finally time to add a section to the website to let people know what I can do. In <a href=/freelancing>this section</a>, I provide details about the kind of work that I can do!</div>
<?php echo section("Hangman Solver", "Usually, hangman is about guessing another person's word. But here, the artificial intelligence tries to guess your word, and it learns with every attempt! Why not <a href=/ai/hangman>have a play with it?</a>","/artificial-intelligence/images/hangman.jpg")?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?></html>