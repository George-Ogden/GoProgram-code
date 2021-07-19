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
<?php echo section("PB Predictor", "Working out a target time for a running race is very difficult, but this tool can calculate it for you! The <a href=/scratch/pb>PB predictor</a> takes in your current PBs and then gives you targets for other times.","/scratch/images/track.jpg") ?>
<div class="section text"><h2>Shuffle</h2><p>GoProgram has been around for a while and I thought it was time to move things around. Now, there's a new layout and some of the old projects have been removed to keep everything up to date.</div>
<?php 
echo section("Connect 4", "For a while, I have been experimenting with different genetic algorithms and finally decided to publish this connect 4 AI. It isn't unbeatable but it's very good so I hope you have fun playing it <a href=/scratch/4/>here</a>!", "/scratch/images/connect4.jpg");
echo section("Emotion Detection", "After playing around with object detection in the past, I thought that I could train a model to detect emotion. This proved harder than anticipated, so I ended up using two AIs, working together, to detect facial expressions in images. You can find out more about it <a href=/fork/emotion>here</a>.", "/fork/images/emotions.jpg");
include "../footer.php" ?></section><?php include "../scripts.php" ?></html>