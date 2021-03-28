<!doctype html>
<html>
<head>
<title>Artificial Intelligence</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="AI is a dynamic field that is quickly advancing. Try out the colour classifier to see one example of its use or download the code library for your own projects.">
<meta name=keywords content="artificial intelligence algorithms">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="artificial intelligence">
</head><?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/brain.jpg", "Intelligence", "text-darken", ["id" => "top", "text" => "<h1>Artificial Intelligence</h1>"]);
echo image("images/network.jpg", "Neural Network", "text", ["text" => "<p>Welcome to an array of projects encorporating artificial intelligence. The huge development of artificial intellegence suggest that it will be of even greater importance in the future. It is a really exciting field to be involved in.</p>"]);
echo section("Dinosaur Generator", "This new page uses and n-gram-like algorithm to generate realistic dinosaur names. <a href=/ai/dinosaurs>Check it out</a> and have a play with the cool feature.","../artificial-intelligence/images/dinosaur.jpg");
echo section("Hangman Solver", "Usually, hangman is about guessing another person's word. But here, the artificial intelligence tries to guess your word, and it learns with every attempt! Why not <a href=/ai/hangman>have a play with it?</a>","/artificial-intelligence/images/hangman.jpg");
echo section("Colour Classifier", "A practical use of artificial-intelligence to change the colour of text based on the background. Although there are algorithms that do this, AI provides an alternative approach. Why not <a href=classifier>check it out</a>?"); 
echo section("Code", "<a href=code>Have a look at the code library</a> behind the artificial intelligence projects. The code is written in JavaScript so that it can be run directly in the browser and is free and openly-sourced.");
include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>