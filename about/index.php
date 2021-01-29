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
<?php echo image("../images/home.jpg", "Main Image", "text", ["id" => "top", "text" => "<h1 class='colour'>About</h1>"]);  ?>
<div id=main class="section text">
<h2>Welcome</h2>
<p>Welcome to GoProgram, a website showcasing programming. Everything is coded from scratch and it is all entirely original. Enjoy browsing round the projects and using them, and feel free to use some of the code in your own projects if you wish!</p>
</div>
<?php echo section("George Ogden","I have a vision to make high-quality, automated technology services available to everyone so that the world functions better. I use my experience as a software and web developer to create websites and software that present or demonstrate the power of technology to others through clean, yet beautifully crafted code that solves problems effectively.<br><br>Working as a freelance software and web developer allows me to apply my knowledge and creativity to other people’s ideas and problems. Hence, I can rise to new challenges and learn new skills in each job that enhance my ability as a programmer.","images/george ogden.jpg");
echo image("images/code.jpg", "Computer Code", "text-darken", ["text" => "<h2>Programs</h2><p>With passions in maths and computer science, you will notice a wide range of mathematical concepts display throughout the projects on the website.</p>"]);
echo skills(); include "../footer.php" ?><?php include "../scripts.php" ?>
</html>