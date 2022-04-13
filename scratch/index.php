<!doctype html>
<html>
<head>
<title>AI from Scratch</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="AI is a dynamic field that is quickly advancing. Try out some projects that I've written from scratch!">
<meta name=keywords content="artificial intelligence algorithms">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="ai from scratch">
</head><?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/brain.jpg", "Intelligence", "text-darken", ["id" => "top", "text" => "<h1>AI from Scratch</h1>"]);
echo image("images/network.jpg", "Neural Network", "text", ["text" => "<p>Take a look at some AI written from scratch that you can play with directly in your browser!</p>"]);
echo section("Connect 4", "<a href=connect4>Play against an AI</a> at a game of connect 4. It has trained by playing itself millions of times after only being taught the rules of the game.","images/connect4.jpg");
echo section("Dinosaur Generator", "The dinosaur generator uses an n-gram-like algorithm to generate realistic dinosaur names. <a href=/ai/dinosaurs>Check it out</a> and have a play with the cool feature.","images/dinosaur.jpg");
echo section("Tic-Tac-Toe", "The original 3x3 game of tic-tac-toe is trivial but on a larger grid, this is no longer the case. With a 5x5 grid and the aim of getting 4 in any direction, this advanced version gives you the opportunity to <a href=/ai/tictactoe>play against an AI</a>.","images/tictactoe.jpg");
echo section("Hangman Solver", "Usually, hangman is about guessing another person's word. But here, the artificial intelligence tries to guess your word, and it learns with every attempt! Why not <a href=/ai/hangman>have a play with it</a>?","images/hangman.jpg");
echo section("PB Predictor", "Working out a target time for a running race is very difficult, but this tool can calculate it for you! The <a href=/scratch/pb>PB predictor</a> takes in your current predictor and then gives you targets for other times.","images/track.jpg");
include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>