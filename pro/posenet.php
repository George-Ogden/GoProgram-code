<!doctype html>
<html>
<head>
<title>PoseNet</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<link rel=stylesheet href=/ai.css?v=1>
<meta name=description content="An implementation of PosNet to count exercise reps during a workout.">
<meta name=keywords content="pose estimation deep learning">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="PoseNet implmentation">
</head><?php include "../header.php" ?>
<section class=colour>
<div class=section id=top>
<h1 class="colour pad-2 highlight">PoseNet</h1>
</div>
<div class=section>
<?php echo section("PoseNet","PoseNet is an artificial intelligence model that estimates the positions of various limbs and facial points in in an image. It generates a set of keypoints and then connects them to display the outline of a skeleton. I used this AI to count the number of reps during a workout so that a client could use the code in a gym.");
echo video("https://youtube.com/embed/ZHyjRYK9F3A") ?>
<div class="section icons">
<a class="icon" href="https://github.com/google-coral/project-posenet" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>GitHub Code</p>
</a>
<a class="icon" href="https://arxiv.org/pdf/1505.07427.pdf" target="_blank">
<ion-icon name="document"></ion-icon>
<p>Original Paper</p>
</a>
<a class="icon" href="https://youtu.be/ZHyjRYK9F3A" target="_blank">
<ion-icon name="logo-youtube"></ion-icon>
<p>YouTube Video</p>
</a>
</div>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>

</html>