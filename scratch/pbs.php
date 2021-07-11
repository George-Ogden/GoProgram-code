<!doctype html>
<html>

<head>
    <title>PB Predictor</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=pbs.css?v=1>
    <?php include "../meta.php" ?>
    <!-- <meta name=description content="This hangman solver figures out your word by looking up what other people have done before you! Then, it learns and improves based on what you do.">
<meta name=keywords content="hangman solver">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="hangman"> -->
</head><?php include "../header.php" ?>
<section>
    <div class=section id=top>
        <h1 class="colour pad-1">PB Predictor</h1>
    </div>
    <div class="section interactive" id=main>
        <div class="options d-flex flex-column position-relative">
            <?php
            
            $distances = ["100" => "100m",  "200" => "200m", "300" => "300m", "400" => "400m", "400H" => "400m Hurdles", "800" => "800m", "1000" => "1000m / 1km",  "1500" => "1500m", "Mile" => "1 mile",  "3000" => "3000m / 3km", "3000SC" => "3000m Steeplechase", "5000" => "5000m / 5km", "5M" => "5 miles",  "10000" => "10000m / 10km",  "10M" => "10 miles", "HM" => "Half Marathon",  "Mar" => "Marathon",
            "LJ" => "Long Jump", "TJ" => "Triple Jump","HJ" => "High Jump",];
            foreach ($distances as $k => $v) {
                echo "<div id=$k class='d-flex justify-content-around py-1'><div><label for=$k class=pr-2>$v</label><input name=$k class=in></div><input name=$k-predicted class=out disabled></div>";
            }
            ?>
        </div>
    </div>
    <?php include "../footer.php" ?>
</section>
<?php include "../scripts.php" ?>
<script src=pbs.js?v=1></script>
</script>

</html>