<!doctype html>
<html>
<head>
<title>Colour Converter</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=timings.css?v=1>
<?php include "../meta.php" ?>
<!-- <meta name=description content="Play with this colour converter or use it as a tool in design. It will convert colours into different formats from hex to HLS.">
<meta name=keywords content="colour converter"> -->
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="colour converter">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class=colour>Timings Converter</h1>
</div>
<div class="section image">
<div class=text>
<h2>Laps (400m)</h2>
<div><input id=lap value=80s placeholder="Lap time"></div>
<h2>Kilometres</h2>
<div><input id=km placeholder="Kilometre time"></div>
<h2>Miles</h2>
<div><input id=mi placeholder="Mile time"></div>
<h2>Custom Distance</h2>
<div><select class="mdb-select md-form">
  <option value="" disabled selected>Distance</option>
  <option value=100>100m</option>
  <option value=200>200m</option>
  <option value=300>300m</option>
  <option value=800>800m</option>
  <option value=1500>1500m</option>
  <option value=3000>3000m / 3km</option>
  <option value=5000>5000m / 5km</option>
  <option value=10000>1000m / 10 km</option>
  <option value=16093>10 miles</option>
  <option value=21081>Half Marathon</option>
  <option value=42162>Marathon</option>
</select><input id=time placeholder="Time"></div>
</div>
</div>
<script src=timings.js></script>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>