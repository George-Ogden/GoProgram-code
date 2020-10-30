<!doctype html>
<html>
<head>
<title>Timings Converter</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=timings.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="Convert timings for different running distances to figure out what pace you should run at.">
<meta name=keywords content="running time converter calculator">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="timings converter">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class="colour pad-1">Timings Converter</h1>
</div>
<div class="section image">
<div class=text>
<h2>Laps (400m)</h2>
<div><input id=lap value=80s placeholder="Lap time"></div>
<h2>Kilometres</h2>
<div><input id=km placeholder="Kilometre time" time=60></div>
<h2>Miles</h2>
<div><input id=mi placeholder="Mile time" time=60></div>
<h2>Custom Distance</h2>
<div><select class="mdb-select md-form" id=distance>
  <option value="" disabled>Distance</option>
  <option value=100>100m</option>
  <option value=200>200m</option>
  <option value=300>300m</option>
  <option value=800>800m</option>
  <option value=1500 selected time=60>1500m</option>
  <option value=3000 time=60>3000m / 3km</option>
  <option value=5000 time=60>5000m / 5km</option>
  <option value=10000 time=60>1000m / 10 km</option>
  <option value=16093 time=60>10 miles</option>
  <option value=21097 time=60>Half Marathon</option>
  <option value=42195 time=3600>Marathon</option>
</select><input id=time placeholder="Time" time=60></div>
</div>
</div>
<script src=timings.js></script>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>