<!doctype html>
<html>
<head>
<title>Web Development</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<link rel=stylesheet href=web.css?v=1>
<meta name=description content="George Ogden does freelance web development and he is always looking for new and interesting challenges.">
<meta name=keywords content="freelance web developer">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="freelance web development">
</head>
<?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/web.jpg", "Web Development", "text-darken", ["id" => "top", "text" => "<h1>Web Development</h1>"]);
echo skills()?>
<div class="section image" id=front><div class=text><h2 class=pb-5>Front End</h2><p class=pb-5>For the front end, I write a lot of JavaScript to produce smooth animations for a lovely feel or complex algorithms to solve a complicated task. I usually write and style with jQuery and Bootstrap, but these are there to make it easier, rather than being essential, and can transform the code.</p></div>
<div class="image display-3"><ion-icon name="code-slash-outline"></ion-icon></div>
</div>
<div class="section image" id=back><div class=text><h2 class=pb-5>Back End</h2><p class=pb-5>Behind the scenes, I often use PHP, but, more often than not, I just write pure HTML. Currently, the trend is to use APIs for backend code and call them with AJAX or jQuery. Most APIs that I create are in Python and it's nice to host them on AWS. Database work is done in MySQL or MariaDB (or NoSQL), but most SQL languages are almost identical, making the skills transferrable.</p></div>
<div class="image display-3"><ion-icon name="analytics-outline"></ion-icon></div>
</div>
<div class="section image" id=infrastructure><div class=text><h2 class=pb-5>Infrastructure</h2><p class=pb-5>A beautiful and functional website is useless if no one can see it, so setting up the best infrastructure is essential. With my AWS certifications, I find it easy to set up hosting on AWS and this can be done serverlessly with S3 or with necessary scaling in Elastic Beanstalk. AWS provide a myriad of services for backend support and you only pay for what you use.</p></div>
<div class="image display-3"><ion-icon name="construct-outline"></ion-icon></div>
</div>
<?php echo pph(); include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>