<!doctype html>
<html>
<head>
<title>Fractals</title>
<?php include "../../main.php" ?>
<link rel=stylesheet href=index.css?v=1>
<?php include "../../meta.php" ?>
<meta name=description content="A wide range of fractal-based projects from some very famous ones to ones that are entirely original.">
<meta name=keywords content="fractals in math">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content=fractals>
</head><?php include "../../header.php" ?>
<section class=scroll>
<?php echo image("images/mandelbrot.jpg", "The Mandelbrot Set", "text-darken", ["id" => "top", "text" => "<h1>Fractals</h1>"]); ?>
<div class="section text">
<h2>From Wikipedia</h2>
<?php echo json_decode(file_get_contents("https://en.wikipedia.org/api/rest_v1/page/summary/Fractal"), true)["extract_html"]; ?>
</div>
<div class="section image">
<div class=text>
<p>Welcome to the home of fractals. Enjoy an array of various exciting and interesting shapes. These fractals range from very famous to very original, but all share the same ideas of recursion and self-similarity.</p>
</div><?php echo image("../images/fractals.jpg", "A collage of fractals"); ?>
</div>
<?php echo section("Famous Fractals", "<a href=famous>Meet some famous and beautiful fractals</a>. Even if you have met them before, they are still mesmerising.", "images/famous.jpg");
echo section("Line Fractals", "<a href=line>See some less well known fractals and even some that I made up</a>! All these fractals are made up of a repeated iterator.", "images/line.jpg");
?>
<?php include "../../footer.php" ?></section><?php include "../../scripts.php" ?></script><?php include "../../scripts.php" ?>
</html>