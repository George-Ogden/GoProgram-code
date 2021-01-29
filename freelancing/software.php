<!doctype html>
<html>
<head>
<title>Software Development</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="George Ogden does freelance software development and he is always looking for new and interesting challenges.">
<meta name=keywords content="freelance software developer">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="freelance software development">
</head>
<?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/software.jpg", "Software Development", "text-darken", ["id" => "top", "text" => "<h1>Software Development</h1>"]);
echo skills()?>
<div class="section image" id=python><div class=text><h2 class=pb-5>Python</h2><p class=pb-5>Python is my main language for software development. I have an extensive knowledge of various frameworks that allows me to implement efficient and effective code to solve a variety of problems.</p></div>
<?php echo image("images/python.jpg","Python logo","none") ?>
</div>
<div class="section image" id=code><div class=text><h2 class=pb-5>Code</h2><p class=pb-5>All code that I produce is commented and laid out in a clear manner with obvious meaning so that anyone can follow along. It is reusable and robust so that it can be used for many problems.</p></div>
<?php echo image("images/python-code.jpg","Python code","none") ?>
</div>
<?php echo pph(); include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>