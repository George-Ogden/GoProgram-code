<!doctype html>
<html>

<head>
    <title>Fractals</title>
    <?php include "../../main.php" ?>
    <link rel=stylesheet href=index.css>
    <?php include "../../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects, some of which are fractals.">
    <meta name=keywords content="code, programming, GoProgram, fractals, python, turtle">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../../header.php" ?>
<section>
<?php echo image("images/mandelbrot.jpg", "The Mandelbrot Set", "text-darken", array("id" => "top", "text" => "<h1>Fractals</h1>")); ?>
<div class="section text">
    <h2>From Wikipedia</h2>
    <?php echo json_decode(file_get_contents("https://en.wikipedia.org/api/rest_v1/page/summary/Fractal"),true)["extract_html"]; ?>
</div>
<hr>
<div class="section image">
    <p>Welcome to the home of fractals. Enjoy an array of various exciting and interesting shapes. These fractals range from very famous to very original, but all share the same ideas of recursion and self-similarity.</p>
    <?php echo image("../images/fractals.jpg","A collage of fractals"); ?>
</div>
<?php echo section("Famous Fractals","Meet some famous and beautiful fractals. Even if you have met them before, they are still mesmerising.","images/famous.jpg"); 
echo section("Line Fractals","See some less well known fractals and even some that I made up! All these fractals are made up of a repeated iterator.","images/line.jpg"); 
?>
</section><?php include "../../footer.php" ?><?php include "../../scripts.php" ?></script><?php include "../../scripts.php" ?>

</html>