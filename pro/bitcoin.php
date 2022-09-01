<!doctype html>
<html>
<head>
<title>Professional Projects</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<link rel=stylesheet href=/ai.css?v=1>
<meta name=description content="Bitcoin trading algorithm using AI.">
<meta name=keywords content="bitcoin bot">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="bitcoin trading algorithm">
</head><?php include "../header.php" ?>
<section class="colour">
<div class=section id=top>
<h1 class="colour pad-3 loaded">Bitcoin<br><span class=highlight>Trading</span><br>Algorithm</h1>
</div>
<div class="section image pad-100">
<?php 
echo image("https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Bitcoin_logo.svg/1920px-Bitcoin_logo.svg.png","Bitcoin Logo","none",["class" => "w-75"]);
?>
</div>
<div class="section text"><h2>Algorithm</h2><p>After many months of trying different algorithms and strategies, I finally produced an algorithm capable of making profitable Bitcoin trades. The final version performed sentiment analysis on Tweets and predicted the future price. If this value was outside a threshold, the bot would either buy or sell. As a result, trades were infrequent but the bot was making a profit or breaking even every week.</div>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>