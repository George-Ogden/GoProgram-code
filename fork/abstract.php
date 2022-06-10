<!doctype html>
<html>
<head>
<title>Abstract Art</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<link rel=stylesheet href=/ai.css?v=1>
<meta name=description content="">
<meta name=keywords content="">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="">
</head><?php include "../header.php" ?>
<section class=colour>
<div class=section id=top>
<?php echo image("images/abstract-cover.jpg", "AI Generated Abstract Art", "text-darken", ["id" => "top", "text" => "<h1>Abstract Art</h1>"]); 
echo section("Abstract Art","This AI (StyleGAN2-ADA) has learned to extract the common patterns that we create in abstract art and then place them into its own version of art. It has seen 1000s of images from a range of artists, yet still has its own distinctive style.","images/abstract-side.jpg") . image("images/abstract-base.jpg","AI Generated Abstract Art","none") ?>

<div class="section icons">
<a class="icon" href="https://github.com/NVlabs/stylegan2-ada-pytorch" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>GitHub Code</p>
</a>
<a class="icon" href="https://arxiv.org/pdf/2006.06676.pdf" target="_blank">
<ion-icon name="document"></ion-icon>
<p>Paper</p>
</a>
</div>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>

</html>