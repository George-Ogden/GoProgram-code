<!doctype html>
<html>
<head>
<title>Dinosaur Generator</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=dinosaurs.css?v=2>
<?php include "../meta.php" ?>
<meta name=description content="An interactive piece of AI that generates dinasaur names with the input.">
<meta name=keywords content="random dinosaur name generator">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="dinosaur generator">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class="colour pad-1">Dinosaur Generator</h1>
</div>
<div class="section text pad-1 interactive" id="generator">
<input id=text class="text container mx-auto bg-white border border-dark my-5 text-center display-3">
<p class="text-center display-3 container" id=output><span class="typed font-weight-bold"></span><span class="generated font-weight-light"></span></p>
</div>
<?php include "../footer.php"?></section><?php include "../scripts.php" ?>
<script src=dinosaurs.js?v=3></script>
</html>