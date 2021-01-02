<!doctype html>
<html>
<head>
<title>Colour Converter</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=online.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="Play with this colour converter or use it as a tool in design. It will convert colours into different formats from hex to HLS.">
<meta name=keywords content="colour converter">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="colour converter">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class="colour pad-1">Colour Converter</h1>
</div>
<div class="section interactive">
<div class=main>
<h2 class=mt-5>Name</h2>
<div><input id=colourName value=black placeholder="Enter a colour"></div>
<h2 class=mt-5>Hex</h2>
<div><input id=hexColour placeholder="Enter a hex number"></div>
<h2 class=mt-5>RGB</h2>
<div><input id=rgbColour placeholder="Enter an RGB code"></div>
<h2 class=mt-5>CMYK</h2>
<div><input id=cmykColour placeholder="Enter a CMYK code"></div>
<h2 class=mt-5>HSL</h2>
<div><input id=hslColour placeholder="Enter an HSL code"></div>
</div>
<div id="output" class="scale w-100"></div>
</div>
<script src=converter.js></script>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>