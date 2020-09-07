<!doctype html>
<html>

<head>
    <title>Maths</title>
    <?php include "../main.php" ?>
    <?php include "../meta.php" ?>
    <meta name=description content="A website with a wide variety of showcased programming projects, some of which are mathematical.">
    <meta name=keywords content="code, programming, GoProgram, pFython, turtle, maths">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section  class="showcase">
    <?php echo image("images/equations.jpg", "Mathematical Equations", "text-darken", ["id" => "top", "text" => "<h1>Maths</h1>"]);
    echo generate([
        ["title" => "Fibonacci Spiral", "code" => "3_S9lz5viOg", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Fibonacci%20Spiral.py"],
        ["title" => "Wave", "code" => "x3-MtfG8UkM?end=8", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Wave.py"], 
        ["title" => "Squares", "code" => "jRk9JKZ2WEE", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Squares.py"]
    ])
    ?>
</section><?php include "../footer.php" ?><?php include "../scripts.php" ?><