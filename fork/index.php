<!doctype html>
<html>
<head>
<title>Code Forks</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="There are many researchers working on a wide range of awesome projects and these have been used to implement original ideas.">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="artificial intelligence">
</head><?php include "../header.php" ?>
<section class="colour">
<?php 
echo image("images/ai.jpg", "Network", "text-darken", ["id" => "top", "text" => "<h1>Code Forks</h1>"]);
echo section("Abstract Art", "I trained a StyleGAN2-ADA model on a custom dataset of abstract art to generate realistic fakes. Check out <a href=abstract>the results</a> to see the interesting artwork it creates.","images/abstract-side.jpg");
echo section("Painted Faces", "Using a multiple AIs, <a href=painting>this project</a> extracts the faces from an image and converts them into painted portraits.","images/painting.jpg");
echo section("Emotion Detection", "This emotion detection AI is able to detect the facial expressions of someone in a picture! It uses two AIs working together to find faces and then classify them. Why not <a href=emotion>have a look</a>?","images/emotions.jpg");
echo section("Image Segmentation", "Image segmentation creates masks around objects to identify exactly where they start and end. <a href=maskrcnn>This code</a> provides an implementation of Mask-RCNN, which can run live.","images/maskrcnn.jpg");
echo section("Faceswap", "Deepfakes have sparked huge controversy, but they are definitely something to be actively aware of. I took the famouse hoverboard scene from <i>Back to the Future</i> and deepfaked myself into it! You can even <a href=faceswap>watch the updated scene</a>!","images/faceswap.jpg");?>
<div class="section text"><h2>MuseGAN</h2><p>MuseGAN is an artificial intelligence model, which learns to generate music . I trained it on songs by The Beatles, and, in the processes, made contributions to the original project in the form data preparation scripts. <a href=musegan>Have a listen</a>!</div>
<div class="section text"><h2>CycleGAN</h2><p>Combining generative technology with images is insanely cool and I had a lot of fun playing with it. In this project, I used an AI to change the genders of people in photographs. It's something that you should definitely <a href=cyclegan>have a look at</a>!</div>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>