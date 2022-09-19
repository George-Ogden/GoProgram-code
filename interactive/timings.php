<!doctype html>
<html>
<head>
<title>Timings Converter</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=interactive.css?v=1>
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
<div class="section interactive">
<div class=main>
<input class=d-none id=speed>
<h2 class=mt-5>Laps (400m)</h2>
<div><input id=lap placeholder="Lap time" format=s></div>
<h2 class=mt-5>Kilometres</h2>
<div><input id=km placeholder="Kilometre time" format=m></div>
<h2 class=mt-5>Miles</h2>
<div><input id=mi placeholder="Mile time" format=m></div>
<h2 class=mt-5>Custom Distance</h2>
<div><select class="mdb-select md-form" id=distance>
<option value="" disabled>Distance</option>
<option value=100m id=100m format=s>100m</option>
<option value=200m id=200m format=s>200m</option>
<option value=300m id=300m format=s>300m</option>
<option value=400m id=400m format=s>400m</option>
<option value=800m id=800m format=m>800m</option>
<option value=1km id=1km format=m>1000m / 1km</option>
<option value=1500m id=1500m format=m>1500m</option>
<option value=1-mile id=1-miles format=m>1 mile</option>
<option value=3km id=3km format=m>3000m / 3 km</option>
<option value=5km id=5km format=m>5000m / 5 km</option>
<option value=5-miles id=5-miles format=m>5 miles</option>
<option value=10km id=10km format=m>10000m / 10 km</option>
<option value=10-miles id=10-miles format=h>10 miles</option>
<option value=half id=half format=h>Half Marathon</option>
<option value=marathon id=marathon format=h>Marathon</option>
</select><input id=time placeholder="Time"></div>
</div>
</div>
<script src=timings.js?v=8></script>
<?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
</html>