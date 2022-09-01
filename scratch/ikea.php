<!doctype html>
<html>
<head>
<title>IKEA Generator</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=ikea.css>
<?php include "../meta.php" ?>
<meta name=description content="An AI that generates names of IKEA furniture.">
<meta name=keywords content="ikea name generator">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="IKEA generator">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class="colour pad-1">IKEA Generator</h1>
</div>
<div class="section text pad-1 interactive" id="generator">
    <p class="text-center display-3 container" id=output><span class="typed font-weight-bold">
        <?php $curl = curl_init("https://api.goprogram.ai/ikea");curl_exec($curl);curl_close($curl) ?> 
    </span><span class="generated font-weight-light"></span></p>
</div>
<?php include "../footer.php"?></section><?php include "../scripts.php" ?>
</html>