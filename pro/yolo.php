<!doctype html>
<html>
<head>
<title>YOLO</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<link rel=stylesheet href=/ai.css?v=1>
<meta name=description content="An implementation of YOLO to detect solar panels or objects in the COCO dataset or to classify cards using a custom dataset.">
<meta name=keywords content="yolo implementation in python">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="YOLO implementation">
</head><?php include "../header.php" ?>
<section class=colour>
<div class=section id=top>
<h1 class="colour pad-2 loaded text-left"><span class=highlight>Y</span>ou<br><span class=highlight>O</span>nly<br><span class=highlight>L</span>ook<br><span class=highlight>O</span>nce</h1>
</div>
<?php echo section("YOLO","YOLO is an artificial intelligence algorithm for object detection. It achieves very a high level of accuracy and is fast enough to be run in real-time, which is why I trained it to detect and group solar panels for a professional project. Unfortunately, I can't display any of the results.","images/coco.jpg","about") . image("images/yolo.jpg","Custom Playing Card Detector","none") ?>
<div class="section icons">
<a class="icon" href="https://github.com/pjreddie/darknet" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>GitHub Code</p>
</a>
<a class="icon" href="https://pjreddie.com/darknet/yolo/" target="_blank">
<ion-icon name="link"></ion-icon>
<p>Website</p>
</a>
<a class="icon" href="https://arxiv.org/pdf/2004.10934.pdf" target="_blank">
<ion-icon name="document"></ion-icon>
<p>Original Paper</p>
</a>
</div>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>

</html>