<!doctype html>
<html>

<head>
    <title>Circles</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=circles.css>
    <?php include "../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects, some of which are circular.">
    <meta name=keywords content="code, programming, GoProgram, circles, turtle, python">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="showcase">
<?php echo image("images/loops.jpg", "Long Exposure Photograph", "text-darken", ["id" => "top", "text" => "<h1>Colours</h1>"]);
    echo generate([
        ["title" => "Colour Whirl", "code" => "KOhffwDtdJk", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Colour%20Whirl.py"],
        ["title" => "360 Pointed Star", "code" => "x3-MtfG8UkM?start=25", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/360%20pointed%20star.py"], 
        ["title" => "Square = Circle", "code" => "x3-MtfG8UkM?start=8&end=24", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Square%20%3D%20Circle.py"]
    ])
    ?>
</section><?php include "../footer.php" ?></script><?php include "../scripts.php" ?>

</html>