<!doctype html>
<html>

<head>
    <title>PB Predictor</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=predictor.css?v=3>
    <?php include "../meta.php" ?>
    <meta name=description content="Unsure on what times you need to aim for? This tool calculates target times for a range of distances.">
<meta name=keywords content="running time predictor">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="runnnig time predictor">
</head><?php include "../header.php" ?>
<section>
    <div class="section d-one"></div>
    <div class="section" id=top>
        <h1 class="colour pad-1">PB Predictor</h1>
    </div>
    <div class="section interactive" id=main>
        <div class="options d-flex flex-column position-relative">
            <?php
            
            $distances = ["100" => "100m",  "200" => "200m", "300" => "300m", "400" => "400m", "400H" => "400m Hurdles", "800" => "800m", "1000" => "1000m / 1km",  "1500" => "1500m", "Mile" => "1 mile",  "3000" => "3000m / 3km", "3000SC" => "3000m Steeplechase", "5000" => "5000m / 5km", "5M" => "5 miles",  "10000" => "10000m / 10km",  "10M" => "10 miles", "HM" => "Half Marathon",  "Mar" => "Marathon"];
            foreach ($distances as $k => $v) {
                echo "<div id=$k class='d-flex justify-content-around py-1 time'><div class='w-50 d-flex align-items-center in'><label for=$k class='pr-2 mr-1'>$v</label><input type='checkbox' class='check mr-3 ml-1' name=$k><input name=$k class='in disabled ml-1'></div><div class='w-50 d-flex flex-center out'><input name=$k-predicted class=out disabled></div></div>";
            }
            ?>
        </div>
        <button id=calculate class="major mt-5">Calculate</button>
    </div>
    <?php include "../footer.php" ?>
</section>
<?php include "../scripts.php" ?>
<script src=predictor.js?v=2></script>
</script>

</html>