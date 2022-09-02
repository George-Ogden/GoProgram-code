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
<?php 
echo section("IKEA Name Generator", "Natural language processing has interested me for a long time, but, recently, I've decided to scrutinise the details and have an in-depth play with the technology, implementing a <a href=/ikea>transformers model</a> to generate names like that of IKEA furniture.","/scratch/images/ikea.jpg");
echo section("Abstract Art", "After a hardware upgrade, I decided to train a fresh StyleGAN2-ADA model on a dataset I compiled of abstract art. <a href=/fork/abstract>The model</a> creates realistic abstract art with its own distinctive style!","/fork/images/abstract-side.jpg");
?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?></html>