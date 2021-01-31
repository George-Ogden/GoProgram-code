<!doctype html>
<html>
<head>
<title>Freelancing</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="George Ogden is a freelance software and web developer, who is always looking for new and interesting challenges.">
<meta name=keywords content="software web developer freelance">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content=freelancing>
</head><?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/software-development.jpg", "Freelancing", "text-darken", ["id" => "top", "text" => "<h1>Freelancing</h1>"]); 
echo about();
echo section("Freelancing","I have been writing code for as long as I remember, with which I can produce high quality software for a wide range of use cases. Whether you need something to send large numbers of personalised emails or group solar panels based on AI, I can provide custom algorithms to complete the task in the most efficient way possible. <a href=software>More details are available here!</a>","images/python-code.jpg","software");
echo section("Software Development","I have been writing code for as long as I remember, with which I can produce high quality software for a wide range of use cases. Whether you need something to send large numbers of personalised emails or group solar panels based on AI, I can provide custom algorithms to complete the task in the most efficient way possible. <a href=software>More details are available here!</a>","images/python-code.jpg","software");
echo section("Web Development","I can create a website that looks at least as good as this and sometimes better! I can work an all sorts of websites to provide either pure HTML, CSS and JS or work behind the scenes with APIs and databases. <a href=web>If you are interested in finding out more, have a read here.</a>","images/code.jpg","web");?>
<div class="section image" id=aws><div class=text><h2 class=pb-5>Amazon Web Services</h2><p class=pb-5>As an AWS Certified DevOps Engineer Professional and Developer Associate, I have both qualifications and experience working with the largest cloud provider in the world. Whether you are completely new to AWS or a seasoned professional, I can apply my knowledge to help you get the most effective solution at the best price. <a href=aws>Have a look here if you would like to read more!</a></p></div>
<?php echo image("images/aws.svg","Python logo","none") ?>
</div>
<?php echo pph(); include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>