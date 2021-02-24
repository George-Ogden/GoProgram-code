<!doctype html>
<html>
<head>
<title>Third-Party AI</title>
<?php include "../../main.php" ?>
<?php include "../../meta.php" ?>
<meta name=description content="There are many researchers working on a wide range of awesome projects and these are some that I have used to create my own projects.">
<meta name=keywords content="artificial intelligence algorithms">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="artificial intelligence">
</head><?php include "../../header.php" ?>
<section class="colour">
<?php echo image("images/ai.jpg", "Network", "text-darken", ["id" => "top", "text" => "<h1>Third-Party AI</h1>"]);
echo section("Third-Party AI","There are many researchers and organisations working on a wide range of open-sourced projects. These are some that I experimented with to create my own work based on their code.","images/vr.jpg");
echo section("YOLO", "YOLO is a leading object detection AI, which generates results with very low latency and high accuracy. I played around with this AI to create a custom card detector, as well as using the original model. Why not <a href=yolo>check it out</a>?","/about/images/george ogden.jpg");
echo section("PoseNet", "PoseNet is an AI for pose estimation, which assigns keypoints to different parts of the body and then connects them. I integrated this AI with an algorithm to count the number of reps done by an athlete. Why not <a href=posenet>have a look</a>?")?>
<div class="section text"><h2>MuseGAN</h2><p>MuseGAN is an artificial intelligence model, which learns to generate music . I trained it on songs by The Beatles, and, in the processes, made contributions to the original project in the form data preparation scripts. <a href=musegan>Have a listen!</a></div>
<?php include "../../footer.php" ?></section><?php include "../../scripts.php" ?>
</html>