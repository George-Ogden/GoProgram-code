<!doctype html>
<html>
<head>
<title>CycleGAN</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<link rel=stylesheet href=fork.css?v=1>
<meta name=description content="An implementation of a CycleGAN to convert between male and female faces.">
<meta name=keywords content="yolo object detection">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="gender cycleGAN">
</head><?php include "../header.php" ?>
<section class=colour>
<div class=section id=top>
<h1 class="colour pad-2 loaded text-left"><span class=highlight>Cycle</span>-Consistent<br><span class=highlight>G</span>enerative<br><span class=highlight>A</span>dversarial<br><span class=highlight>N</span>etworks</h1>
</div>
<div class="section text"><h2>CycleGAN</h2><p>CycleGAN is a series of GANs that converts unpaired images between domains. In this implementation, I took a dataset of high quality images and partitioned it into male and female faces. Through training, it picked up specific features in the faces to convert male to female and female to male.</div>
<div class="section image">
<div class="image my-2"><img src="images/male.jpg" alt="Image Unavailable (Male to Female CycleGAN)"><div class="cover floor"><div class="bottom caption text-white text-center">Male → Female</div></div></div>
<div class="image my-2"><img src="images/female.jpg" alt="Image Unavailable (Female to Male CycleGAN)"><div class="cover floor"><div class="bottom caption text-white text-center">Female → Male</div></div></div>
</div>
<div class="section icons">
<a class="icon" href="https://github.com/LynnHo/CycleGAN-Tensorflow-2" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>GitHub Code</p>
</a>
<a class="icon" href="https://arxiv.org/pdf/1703.10593.pdf" target="_blank">
<ion-icon name="document"></ion-icon>
<p>Original Paper</p>
</a>
<a class="icon" href="https://junyanz.github.io/CycleGAN/" target="_blank">
<ion-icon name="link"></ion-icon>
<p>Website</p>
</a>
</div>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>

</html>