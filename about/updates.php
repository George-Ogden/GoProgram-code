<!doctype html>
<html>
<head>
<title>What's New?</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=updates.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="Get all of the updates about GoProgram as soon as they are released on this page.">
<meta name=keywords content="updates">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="updates">
</head><?php include "../header.php" ?>
<section class=colour>
<?php echo image("images/updates.jpg", "Main Image", "text-darken", ["id" => "top", "text" => "<h1>Updates</h1>"]) ?>
<div class="section text">
<p>Every time a new web page is launched, it will show up here so that you can see what is new!</p>
</div>
<?php echo section("Painted Faces", "Following on from a project converting Minecraft images to real life, I decided to take it a step further and train CUT for another image to image translation task. Have a look <a href=/painter>here</a> to see the project that extracts faces from an image and converts them to paintings.","/fork/images/painting.jpg");
echo section("Mask-RCNN", "Image Segmentation is a cool field of AI but it be quite user-unfriendly. I've worked with some code and shared some examples <a href=/segmentation>here</a>! You can also rewatch the 100m world record with the background greyed out and the focus on the runners <a href=http://www.youtube.com/watch?v=fRnFHRNIQRs>(very cool)</a>!","/fork/images/maskrcnn.jpg");
?>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?></html>