<!doctype html>
<html>
<head>
<title>AWS</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<link rel=stylesheet href=aws.css?v=1>
<meta name=description content="George Ogden is a freelance developer with two AWS certifications and he is always looking for new and interesting challenges.">
<meta name=keywords content="aws developer">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="aws freelance development">
</head>
<?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/aws.svg", "AWS Logo", "none", ["id" => "top"]);?>
<div class="section icons">
<h2>Certifications</h2>
<div class="icon d-flex w-100 pad-1 justify-content-around">
<?php echo image("images/devops.png", "AWS DevOps Engineer Professional", "none") . image("images/developer.png", "AWS Developer Associate", "none") ;?>
</div>
</div>
<div class="section text">
<h2>Past Experience</h2>
<p>I have worked on numerous AWS projects, in a variety of use cases. Some of my web projects include the <a href=/hangman>hangman AI project</a>, which has the backend infrastructure of an API hosted on AWS, and the <a href=https://www.sendachildtohucklow.org.uk>website for the Send A Child to Hucklow Fund</a>, which is a static site hosted on AWS. I have also worked on other projects, including an automatic email sender and a Facebook messaging program, which both worked behind the scenes.</p>
</div>
<div class="section text">
<h2>Automation</h2>
<p>I also understand the importance of automation to make sure that the focus of projects is on the development and everything runs smoothly behind the scenes. It is also vital to make infrastructure easy to take down or update at an instant, hence, I make sure that my projects use infrastructure as code and version control, among other features, to make development as smooth as possible.</p>
</div>
<?php echo pph(); include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>