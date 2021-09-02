<!doctype html>
<html>
<head>
<title>Painted Faces</title>
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
<?php echo image("images/paint.jpg", "Paint", "text-darken", ["id" => "top", "text" => "<h1>Painted Faces</h1>"]); 
echo section("Painted Faces","This code uses two AIs to extract the faces from images and then convert them into painted portraits. I have reused my YOLOv5 from the emotion detection project to extract the faces and this is then fed through the generator from a CUT model. The CUT model was trained on a custom dataset based on the CelebA dataset for the conversion task. Together, the code runs on single images or folders for batch conversion.","images/painting.jpg");
?>
<div class="section icons">
<a class="icon" href="https://github.com/George-Ogden/painter" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>GitHub Repo</p>
</a>
</div>
</div>
<div class="section icons">
<a class="icon" href="https://github.com/ultralytics/yolov5" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>YOLOv5 GitHub Code</p>
</a>
<a class="icon" href="https://ultralytics.com/yolov5" target="_blank">
<ion-icon name="link"></ion-icon>
<p>YOLOv5 Website</p>
</a>
<a class="icon" href="https://github.com/taesungp/contrastive-unpaired-translation" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>CUT GitHub Code</p>
</a>
<a class="icon" href="https://arxiv.org/pdf/2007.15651.pdf" target="_blank">
<ion-icon name="document"></ion-icon>
<p>CUT Paper</p>
</a>
<a class="icon" href="https://taesung.me/ContrastiveUnpairedTranslation/" target="_blank">
<ion-icon name="link"></ion-icon>
<p>CUT Website</p>
</a>
</div>
<div class="section icons">
    <a class="icon" href="https://arxiv.org/abs/1411.7766" target="_blank">
    <ion-icon name="document"></ion-icon>
    <p>CelebA Paper</p>
</a>
<a class="icon" href="http://mmlab.ie.cuhk.edu.hk/projects/CelebA.html" target="_blank">
<ion-icon name="link"></ion-icon>
<p>CelebA Website</p>
</a>
<a class="icon" href="https://arxiv.org/pdf/1511.06523.pdf" target="_blank">
<ion-icon name="document"></ion-icon>
<p>WIDER FACE Paper</p>
</a>
<a class="icon" href="http://shuoyang1213.me/WIDERFACE/" target="_blank">
<ion-icon name="link"></ion-icon>
<p>WIDER FACE Website</p>
</a>
</div>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>

</html>