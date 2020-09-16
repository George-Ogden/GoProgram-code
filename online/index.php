<!doctype html>
<html>
<head>
<title>Online Projects</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="There are a few projects online that you can use or play with without downloading anything. There as a sudoku solver, a calculator and a colour converter.">
<meta name=keywords content="online projects ideas">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="online projects">
</head><?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/code.jpg", "Computer Code", "text-darken", ["id" => "top", "text" => "<h1>Online Projects</h1>"]);  ?>
<div class="section text text-center">
<p>Welcome to an array of online projects. View a variety of projects in browser. They have been written in HTML, CSS and JS to create a fun, interactive display.
</div>
</div>
<?php echo section("Sudoku Solver", "As sudoku puzzles are known for their notorious difficulty, why not <a href=sudoku>use a computer to solve it</a>, instead of wasting brain power?", "images/sudoku.gif");
echo section("Calculator", "If you need a hand with some maths or just want to <a href=calculator>try it out, give the calculator a go</a>. It is a mix between the classic model and a modernistic version.");
echo section("Colour Converter", "If you want to convert a named colour into RGB, hexadecimal, CMYK or HSL, this is the tool. If not, <a href=converter>have some fun with it</a> anyway.", "images/colours.jpg"); ?>
</section>
<?php include "../footer.php" ?></script><?php include "../scripts.php" ?>
</html>