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
<?php 
echo section("Emotion Detection", "After playing around with object detection in the past, I thought that I could train a model to detect emotion. This proved harder than anticipated, so I ended up using two AIs, working together, to detect facial expressions in images. You can find out more about it <a href=/ai/3/emotion>here</a>.", "/artificial-intelligence/third-party/images/emotions.jpg");
echo section("Third-Party AI", "There are many researchers and organisations working on a wide range of open-sourced AI projects. I have experimented with some of these to create <a href=/ai/3/>my own work</a> based on their code.", "/artificial-intelligence/third-party/images/coco.jpg")?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?></html>