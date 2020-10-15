<!doctype html>
<html>
<head>
<title>Dinosaur Generator</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=dinosaurs.css?v=2>
<?php include "../meta.php" ?>
<meta name=description content="This is an interactive piece of AI that generates dinasaur names with the input.">
<meta name=keywords content="color classifier">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="random dinosaur name generator">
</head><?php include "../header.php" ?>
<section class=colour>
<?php echo image("images/dinosaur.jpg", "Dinosaur Generator", "text-darken", ["id" => "top", "text" => "<h1>Dinosaur Generator</h1>"]); ?>
</div>
<div class="section text">
<h2>What it is</h2>
<p>This dinosaur generator uses an <span class=font-italic>n-gram</span> style algorithm to determine the most likely letter that will appear next, and then recursively attempts to complete the word.</p>
</div>
<div class="section text">
<h2>How to use</h2>
<p>Input the start of a word into the box and allow the program to generate the rest of the name.</p>
</div>
<div class="section text pad-1" id="generator">
<h2 class="w-100 mw-100">Generator</h2>
<input id=text class="text container mx-auto bg-white border border-dark my-5 text-center display-3">
<p class="text-center display-3 container" id=output><span class="typed font-weight-bold"></span><span class="generated font-weight-light"></span></p>
</div>
<?php include "../footer.php"?></section><?php include "../scripts.php" ?>
<script src=dinosaurs.js?v=3></script>
</html>