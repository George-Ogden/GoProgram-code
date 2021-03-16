<!doctype html>
<html>
<head>
<title>YOLO</title>
<?php include "../../main.php" ?>
<?php include "../../meta.php" ?>
<link rel=stylesheet href=external.css?v=1>
<meta name=description content="This is an implementation of YOLO to detect objects that has been trained on the COCO dataset or to classify cards using a custom dataset.">
<meta name=keywords content="yolo object detection">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="YOLO implmentation">
</head><?php include "../../header.php" ?>
<section class=colour>
<div class=section id=top>
<h1 class="colour pad-2 loaded text-left"><span class=highlight>Y</span>ou<br><span class=highlight>O</span>nly<br><span class=highlight>L</span>ook<br><span class=highlight>O</span>nce</h1>
</div>
<?php echo section("YOLO","YOLO is an artificial intelligence algorithm for object detection. As well as classification, YOLO identifies where in an image an object is. It is fast enough to be run in real-time and achieves very a high level of accuracy. The output is a series of bounding boxes with labelled classes, which identify each object in the image.","/about/images/george ogden.jpg","about") . image("images/yolo.jpg","Custom Playing Card Detector","none") ?>
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
<?php include "../../footer.php" ?></section><?php include "../../scripts.php" ?>

</html>