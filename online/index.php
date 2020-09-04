<!doctype html>
<html>

<head>
    <title>Online Projects</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=index.css>
    <?php include "../meta.php" ?> 
    <meta name=description content="A website with a wide variety of showcased programming projects, some of which are online and interactive.">
    <meta name=keywords content="code, programming, GoProgram, online, interactive, JavaScript">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="colour">
    <?php echo image("images/code.jpg", "Computer Code", "text-darken", ["id" => "top", "text" => "<h1>Online Projects</h1>"]);  ?>
    
    <div class="section text text-center">
        <p>Welcome to an array of online projects. View a variety of projects in browser. They have been written in HTML, CSS and JS to create a fun, interactive display.</div>
    </div>
    <?php echo section("Sudoku Solver","As sudoku puzzles are known for their notorious difficulty, why not use a computer to solve it, instead of wasting brain power?","images/sudoku.gif");
    echo section("Calculator","If you need a hand with some maths or just want to try it out, give the calculator a go. It is a mix between the classic model and a modernistic version.");
    echo section("Colour Converter","If you want to convert a named colour into RGB, hexadecimal, CMYK or HSL, this is the tool. If not, have some fun with it anyway.","images/colours.jfif"); ?>
</section>
<?php include "../footer.php" ?> </script><?php include "../scripts.php" ?> </html>