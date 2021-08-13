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
<?php echo section("Mask-RCNN", "Image Segmentation is a cool field of AI but it be quite user-unfriendly. I've worked with some code and shared some examples <a href=/segmentation>here</a>! You can also rewatch the 100m world record with the background greyed out and the focus on the runners <a href=http://www.youtube.com/watch?v=fRnFHRNIQRs>(very cool)</a>!","/fork/images/maskrcnn.jpg");
echo section("PB Predictor", "Working out a target time for a running race is very difficult, but this tool can calculate it for you! The <a href=/scratch/pb>PB predictor</a> takes in your current predictor and then gives you targets for other times.","/scratch/images/track.jpg") ?>
<div class="section text"><h2>Shuffle</h2><p>GoProgram has been around for a while and I thought it was time to move things around. Now, there's a new layout and some of the old projects have been removed to keep everything up to date.</div>
include "../footer.php" ?></section><?php include "../scripts.php" ?></html>