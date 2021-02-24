<!doctype html>
<html>
<head>
<title>MuseGAN</title>
<?php include "../../main.php" ?>
<?php include "../../meta.php" ?>
<link rel=stylesheet href=external.css?v=1>
<meta name=description content="This is an implementation of MuseGAN to generate melodies based on tracks by The Beatles.">
<meta name=keywords content="music generation artificial intelligence">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="MuseGAN implmentation">
</head><?php include "../../header.php" ?>
<section class=colour>
<div class=section id=top>
<h1 class="colour pad-2 loaded text-left"><span class=highlight>Mu</span>lti-track<br><span class=highlight>se</span>quential<br><span class=highlight>G</span>enerative<br><span class=highlight>A</span>dversarial<br><span class=highlight>N</span>etwork</h1>
</div>
<div class=section>
<div class="section text"><h2>MuseGAN</h2><p>MuseGAN is an artificial intelligence model that generates music with multiple instruments. It is able to generate music either from scratch or with an accompanying track. I trained it on songs by The Beatles, and, in the processes, made contributions to the original project in the form data preparation scripts.</div>
<?php echo video("https://youtube.com/embed/WOHWmnyZ6zc") ?>
<div class="section icons">
<a class="icon" href="https://github.com/salu133445/musegan" target="_blank">
<ion-icon name="logo-github"></ion-icon>
<p>GitHub Code</p>
</a>
<a class="icon" href="https://arxiv.org/pdf/1709.06298.pdf" target="_blank">
<ion-icon name="document"></ion-icon>
<p>Original Paper</p>
</a>
<a class="icon" href="https://youtu.be/WOHWmnyZ6zc" target="_blank">
<ion-icon name="logo-youtube"></ion-icon>
<p>YouTube Video</p>
</a>
</div>
<?php include "../../footer.php" ?></section><?php include "../../scripts.php" ?>

</html>