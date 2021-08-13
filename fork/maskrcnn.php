<!doctype html>
<html>
<head>
<title>Mask-RCNN</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<link rel=stylesheet href=/ai.css?v=1>
<meta name=description content="A PyTorch implementation of Mask-RCNN that has the ability to grey out the background.">
<meta name=keywords content="mask rcnn pytorch">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="Mask-RCNN implmentation">
</head><?php include "../header.php" ?>
<section class=colour>
<?php echo image("images/maskrcnn.jpg", "Mask-RCNN Implementation", "text-darken", ["id" => "top", "text" => "<h1>Mask-RCNN</h1>"]); ?>
<div class=section>
<div class="section text"><h2>Mask-RCNN</h2><p>Mask-RCNN is an image segmentation model that has been trained on the COCO dataset. It not only detects objects in image, but also works out which pixels belong to that object to create a mask. I've implemented this in PyTorch and added in a feature to grey out the background.</div>
</div>
<?php echo video("https://youtube.com/embed/fRnFHRNIQRs"); ?>
<div class="section icons">
<a class="icon" href="https://github.com/George-Ogden/Mask-RCNN" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>GitHub Code</p>
</a>
<a class="icon" href="https://arxiv.org/abs/1703.06870v1" target="_blank">
<ion-icon name="document"></ion-icon>
<p>Original Paper</p>
</a>
<a class="icon" href="https://youtu.be/fRnFHRNIQRs" target="_blank">
<ion-icon name="logo-youtube"></ion-icon>
<p>YouTube Video</p>
</a>
</div>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>

</html>