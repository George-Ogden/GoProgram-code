<!doctype html>
<html>

<head>
    <title>Turtle Projects</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=index.css>
    <?php include "../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects, some of which are ">
    <meta name=keywords content="code, programming, GoProgram, turtle, python">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/collage.jpg", "Collage", "text-darken", array("id" => "top", "text" => "<h1>Turtle Projects</h1>"));  ?>
<hr>
<?php echo image("images/collage (landscape).jpg", "Collage", "text-darken", array("text" => "<p>Welcome to the home of turtle projects. View an artistic array of Python programming done using the turtle library and be impressed by some artistic programming.</p>"));  
 echo section("Python","Python is a powerful, high-level, general-purpose programming language. If you are new to Python, or do not have Python installed, click the picture of the logo to visit the Python website and install it, so that you can run .py files.","../images/python.png");
 echo section("Maths","Whether you are a maths fan or not, it is hard to deny the beauty of the incredible mathematical designs.");
 echo section("Fractals","Learn about recursive programming in some nature inspired and original design patterns.");
 echo section("Circles","View some simple, yet satisfying programming based on the ideas of a shape that has inspired centuries of maths.");
 echo section("Colours","Programming inspired by colour wheels and the three colours that make up a computer's display: red, green and blue.");
  ?> 
</section><?php include "../footer.php" ?></script><?php include "../scripts.php" ?>

</html>