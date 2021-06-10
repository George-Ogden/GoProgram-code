<!doctype html>
<html>
<head>
<title>Professional Projects</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="There are many researchers working on a wide range of awesome projects and these are some that I have used to create my own projects.">
<meta name=keywords content="artificial intelligence algorithms">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="artificial intelligence">
</head><?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/development.jpg", "Network", "text-darken", ["id" => "top", "text" => "<h1>Professional Projects</h1>"]);
echo section("Freelancing", "As a freelancer, I love the fact that people pay me to do what I love. To make it easier for myself, I use <a href=/pph>PeoplePerHour</a>, which is a website for freelancers. Here are some previous projects that I've done related to AI (that I'm allowed to share)!","/about/images/george ogden.jpg");
echo section("YOLO", "YOLO is a leading object detection AI, which generates results with very low latency and high accuracy. For a professional project, I wrote code to detect and group solar panels, but I'm not allowed to show you any of the results! Following that, I played around with this AI to create a custom card detector, as well as using the original model. Why not <a href=yolo>check it out</a>?","images/coco.jpg");
echo section("PoseNet", "PoseNet is an AI for pose estimation, which assigns keypoints to different parts of the body and then connects them. I integrated this AI with an algorithm to count the number of reps done by an athlete. Why not <a href=posenet>have a look</a>?")?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>
