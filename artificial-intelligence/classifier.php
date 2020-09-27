<!doctype html>
<html>
<head>
<title>Colour Classifier</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=classifier.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="This is a dynamic piece of code that classifies the colour of text based on the background to give more clear and readable text.">
<meta name=keywords content="color classifier">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="colour classifier">
</head><?php include "../header.php" ?>
<section class="colour">
<div class="section text py-0 border border-dark border-bottom" id="top">
<h1 class="text-right">Colour&nbsp;</h1>
<h1 class="text-left bg-dark text-white">&nbsp;Classifier</h1>
</div>
<div class="section text">
<h2>What it is</h2>
<p>This colour classifier will convert the inputed colour into its red, green and blue elements, then feed that into the neural network. The neural network processes the information and outputs a number between -1 and 1, which represents whether the text should be black or white. The same technology is used in the colour converter.</p>
</div>
<div class="section text">
<h2>How to use</h2>
<p>Input red, green and blue values and the artificial intelligence will change the text colour of the output below.</p>
</div>
<div class="section pad-1">
<h2>Inputs</h2>
<form class="d-flex">
<div id=red><input id=redInput class=input type=input min=0 max=255 value=0><input id=redSlider class=slider type=range min=0 max=255 step=1></div>
<div id=green><input id=greenInput class=input type=input min=0 max=255 value=0><input id=greenSlider class=slider type=range min=0 max=255 step=1></div>
<div id=blue><input id=blueInput class=input type=input min=0 max=255 value=0><input id=blueSlider class=slider type=range min=0 max=255 step=1></div>
</form>
</div>
<div id=output class="section pad-1">
<h2>Output</h2>
<p class="text-center display-3">This colour is chosen by an AI!</p>
</div>
<script src=/scripts/js/matrix.js?v=1></script><script src=/scripts/js/lambertw.js?v=1></script><script src=/scripts/js/activation_functions.js?v=1></script><script src=/scripts/js/ann.js?v=1></script><script src=/scripts/js/fcnn.js?v=1></script><script src=classifier.js?v=1></script>
</section><?php include "../footer.php" ?><?php include "../scripts.php" ?>
</html>