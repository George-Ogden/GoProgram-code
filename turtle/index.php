<!doctype html>
<html>

<head>
  <title>Turtle Projects</title>
  <?php include "../main.php" ?>
  <link rel=stylesheet href=index.css?v=1>
  <?php include "../meta.php" ?>
  <meta name=description content="A website with a wide variety of showcased programming projects, some of which are ">
  <meta name=keywords content="code, programming, GoProgram, turtle, python">
  <meta name=viewport content="width=device-width,initial-scale=1">
  <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="colour">
  <?php echo image("images/collage.jpg", "Collage", "text-darken", ["id" => "top", "text" => "<h1>Turtle Projects</h1>"]);  ?>
<hr>
  <?php echo image("images/collage (landscape).jpg", "Collage", "text-darken", ["text" => "<p>Welcome to the home of turtle projects. View an artistic array of Python programming done using the turtle library and be impressed by some artistic programming.</p>"]);  ?>
  
  <div class="section icons">
    <a class="icon" href="https://github.com/George-Ogden/Turtle-Projects" target="_blank"><ion-icon name="logo-github"></ion-icon><p>GitHub Code</p></a>
    <a class="icon" href="/scripts/zip/turtle.zip"><ion-icon name="code-download-outline"></ion-icon><p>Download Zip</p></a>
    <a class="icon" href="https://www.youtube.com/playlist?list=PL1_riyn9sOje6rn3A0QOWv1aJoNBNlR4b" target="_blank"><ion-icon name="logo-youtube"></ion-icon><p>YouTube Playlist</p></a>
    </div>
  <?php
  echo section("Python", "Python is a powerful, high-level, general-purpose programming language. If you are new to Python, or do not have Python installed, <a href=https://python.org/downloads target=_blank>head over to the website to install it</a>, so that you can run .py files.", "../images/python.jpg");
  echo section("Maths", "Whether you are a maths fan or not, it is hard to deny the beauty of <a href=maths>the incredible mathematical designs</a>.");
  echo section("Fractals", "<a href=fractals>Learn about recursive programming</a> in some nature inspired and original design patterns.");
  echo section("Circles", "<a href=circles>View some simple, yet satisfying programming</a> based on the ideas of a shape that has inspired centuries of maths.");
  echo section("Colours", "<a href=colours>See some programming inspired by colour wheels and the three colours that make up a computer's display</a>: red, green and blue.");
  ?>
</section><?php include "../footer.php" ?></script><?php include "../scripts.php" ?>

</html>