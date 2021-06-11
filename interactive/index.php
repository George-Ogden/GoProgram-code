<!doctype html>
<html>
<head>
<title>Interactive Non-AI</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="Play with some interactive projects in your browser.">
<meta name=keywords content="online projects ideas">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="online projects">
</head><?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/code.jpg", "Computer Code", "text-darken", ["id" => "top", "text" => "<h1>Interactive Non-AI</h1>"]);  ?>
<div class="section text text-center">
<p>Welcome to an array of projects that you can play with in your browser. Even though they aren't specifically AI based, some of them do contain AI!
</div>
</div>
<?php echo section("Sudoku Solver", "As sudoku puzzles are known for their notorious difficulty, why not <a href=sudoku>use a computer to solve it</a>, instead of wasting brain power?", "images/sudoku.gif");
echo section("Colour Converter", "If you want to convert a named colour into RGB, hexadecimal, CMYK or HSL, this is the tool. If not, <a href=converter>have some fun with it</a> anyway.", "images/colours.jpg");
echo section("Timings Converter", "This combines my passion for running and programming, as it converts paces between different distances for athletics. It will give pacing for laps, kilometres and miles for different competitive distances. <a href=timings>Check it out</a>!", "images/track.jpg"); ?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>