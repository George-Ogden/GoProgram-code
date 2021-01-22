<!doctype html>
<html>
<head>
<title>Software</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="George Ogden does freelance software development and he is always looking for new and interesting challenges.">
<meta name=keywords content="freelance software developer">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="freelance software development">
</head>
<?php include "../header.php" ?>
<link rel=stylesheet href=software.css>
<section class="colour">
<?php echo image("images/software.jpg", "Software Development", "text-darken", ["id" => "top", "text" => "<h1>Software Development</h1>"]);  ?>
<div class="section text text-center">
<p>I have completed a wide range of software development projects, and some highlights are listed below.</p>
</div>
<?php 
echo feedback("Automated Email System","Another great project completed quickly and professionally. We look forward to working with you again soon.");
echo feedback("Software Lifecycle Management Milestone","More great python code from George! Great communication and very supportive.");
echo feedback("SolarSteam Workflow Tasks","Highly recommend George to solve your complex python programming problems.");
echo feedback("AWS Lambda Python Function","Excellent work from George for this small project, he delivered quick and good");
echo feedback("User interface development","Quick turnaround with a quality output that fit the brief.");
echo feedback("Python Development - Web Scraping and Comparisons","Fantastic, great communication and completed to a high standard");
echo feedback("Betfair API Python Project","Fantastic, great communication and completed to a high standard");
echo feedback("Write Python Code","...");
?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>