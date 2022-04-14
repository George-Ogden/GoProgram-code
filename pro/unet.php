<!doctype html>
<html>
<head>
<title>U-Net</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<link rel=stylesheet href=/ai.css?v=1>
<meta name=description content="This project uses U-Net to detect the veins in cigar plants.">
<meta name=keywords content="unet segmentation keras">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="vein detection deep learning">
</head><?php include "../header.php" ?>
<section class=colour>
<div class=section id=top>
<?php echo image("images/leaf.jpg", "Cigar Leaf", "text-darken", ["id" => "top", "text" => "<h1 style=color:var(--secondary-light);width:auto!important>U-Net</h1>"]);?>
</div>
<?php echo section("U-Net","U-Net was designed to perform image segmentation on medical images. I used it to train a model to detect the veins in cigar plants, which was deployed in a Docker container. As a result, the client could have a containerised way to process their images.","images/vein.jpg","about") . image("images/wall.jpg","Vein Detection","none") ?>
<div class="section icons">
<a class="icon" href="https://github.com/zhixuhao/unet" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>GitHub Code</p>
</a>
<a class="icon" href="http://lmb.informatik.uni-freiburg.de/people/ronneber/u-net/" target="_blank">
<ion-icon name="link"></ion-icon>
<p>Website</p>
</a>
<a class="icon" href="https://arxiv.org/pdf/1505.04597.pdf" target="_blank">
<ion-icon name="document"></ion-icon>
<p>Original Paper</p>
</a>
</div>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>

</html>