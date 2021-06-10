<!doctype html>
<html>
<head>
<title>About</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="A wide variety of programming projects, ranging from AI to apps and everything in between. Have a play online or download some software to try.">
<meta name=keywords content="programming portfolio projects">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content=about>
</head><?php include "../header.php" ?>
<section>
<?php echo image("../images/home.jpg", "Main Image", "text", ["id" => "top", "text" => "<h1 class='colour'>About</h1>"]);
echo image("images/code.jpg", "Computer Code", "text-darken", ["text" => "<h2 class=pad-1>Welcome</h2><p>Welcome to GoProgram, a website showcasing programming. Enjoy browsing round the projects and using them, and feel free to use some of the code in your own projects if you wish!</p>"]);
echo about();
echo skills(); include "../footer.php" ?><?php include "../scripts.php" ?>
</html>