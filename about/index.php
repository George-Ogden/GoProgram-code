<!doctype html>
<html>
<head>
<title>About</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="A website created by George Ogden for sharing AI and other programming projects.">
<meta name=keywords content="ai projects ideas">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content=about>
</head><?php include "../header.php" ?>
<section>
<?php echo image("../images/home.jpg", "Main Image", "text", ["id" => "top", "text" => "<h1 class='colour'>About</h1>"]);
echo image("images/code.jpg", "Computer Code", "text-darken", ["text" => "<h2 class=pad-1>Welcome</h2><p>Welcome to GoProgram, a website showcasing programming. Enjoy browsing round the projects and using them, and feel free to use some of the code in your own projects if you wish!</p>"]);
echo about();
echo skills(); include "../footer.php" ?><?php include "../scripts.php" ?>
</html>