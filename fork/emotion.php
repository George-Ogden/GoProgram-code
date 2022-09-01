<!doctype html>
<html>
<head>
<title>Emotion Detection</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<link rel=stylesheet href=/ai.css?v=1>
<meta name=description content="Using two AIs, the emotion detector detects faces and then identifies the emotion of each face in the image.">
<meta name=keywords content="emotion detection ai">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="emotion detection">
</head><?php include "../header.php" ?>
<section class=colour>
<div class=section id=top>
<?php echo image("images/emojis.jpg", "Emojis", "text-darken", ["id" => "top", "text" => "<h1>Emotion Detection</h1>"]); 
echo section("Emotion Detection","I trained two AIs to classify faces into emotions and wrote some code so that they worked together to do this in real-time (20 fps). The first is YOLOv5, which was trained on WIDER FACE to detect faces in images. The second is RepVGG which was trained on AffectNet to classify emotions. Alongside the code that merges them together, I made a few changes to enhance the code and together they detect 8 different emotions from facial expressions.","images/emotion.jpg");
?>
<div class="section image">
    <div class="image my-2"><img src="images/emotions.jpg" alt="Image Unavailable (8 Emotions)"><div class="cover"></div></div>
</div>
<div class="section icons">
<a class="icon" href="https://github.com/George-Ogden/emotion" target="_blank">
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
<a class="icon" href="https://github.com/DingXiaoH/RepVGG" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>RepVGG GitHub Code</p>
</a>
<a class="icon" href="https://arxiv.org/pdf/2101.03697.pdf" target="_blank">
<ion-icon name="document"></ion-icon>
<p>RepVGG Paper</p>
</a>
</div>
<div class="section icons">
<a class="icon" href="http://mohammadmahoor.com/wp-content/uploads/2017/08/AffectNet_oneColumn-2.pdf" target="_blank">
<ion-icon name="document"></ion-icon>
<p>AffectNet Paper</p>
</a>
<a class="icon" href="http://mohammadmahoor.com/affectnet/" target="_blank">
<ion-icon name="link"></ion-icon>
<p>AffectNet Website</p>
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