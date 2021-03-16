<!doctype html>
<html>
<head>
<title>Faceswap</title>
<?php include "../../main.php" ?>
<?php include "../../meta.php" ?>
<link rel=stylesheet href=external.css?v=1>
<meta name=description content="A deepfake has been used to change the McFly's face from the famous hoverboard scene in Back to the Future">
<meta name=keywords content="deepfake technology">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="deepfake faceswap">
</head><?php include "../../header.php" ?>
<section class=colour>
<?php echo image("images/delorean.jpg", "Deloreanr", "text-darken", ["id" => "top", "text" => "<h1>Deepfakes Faceswap</h1>"]); ?>
<div class=section>
<div class="section image"><div class=text><h2>Faceswap</h2><p>Faceswap is a deepfake implementation in Python that allows a user to transform a series of images by changing the face of the subject. In this project, I converted the famous hoverboard scene from "Back to the Future" and then pieced back together each of the frames with the audio on top.</div><?php echo image("images/faceswap.jpg","Original / Edited") ?></div>
<?php echo video("https://youtube.com/embed/d6Z4e14Zy94") ?>
<div class="section icons">
<a class="icon" href="https://github.com/deepfakes/faceswap" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>GitHub Code</p>
</a>
<a class="icon" href="https://faceswap.dev/" target="_blank">
<ion-icon name="link"></ion-icon>
<p>Website</p>
</a>
<a class="icon" href="https://youtu.be/d6Z4e14Zy94" target="_blank">
<ion-icon name="logo-youtube"></ion-icon>
<p>YouTube Video</p>
</a>
</div>
<?php include "../../footer.php" ?></section><?php include "../../scripts.php" ?>

</html>