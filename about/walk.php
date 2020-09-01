<!doctype html>
<html>

<head>
    <title>Walking</title>
    <link rel=stylesheet href=../fonts.css> <link rel=stylesheet href=../colours.css> <meta name=description content="Walking the Sussex Border Path">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=hiking>
    <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css> <link rel=stylesheet href=walk.css>
</head>
<div class="jumbotron text-center">
    <h1>Walking the Sussex Border Path</h1>
</div>
<div class="card text-white" id=donate>
    <div class=card-body><button class="btn text-white" type=button onclick='window.location.href="https://uk.virginmoneygiving.com/donation-web/fundraiser?fundraiserActivityId=1178899&stop_mobi=yes"'>Donate</button></div>
</div>
<div class=card id=map>
    <div class=card-body>
        <div class=card-title>
            <h2>Map</h2>
        </div>
        <div class="image container-fluid"><img src=images/map.png> <div class="cover overlay">
            <div class="bottom text">Map of the route</div>
        </div>
    </div>
</div>
</div>
<div class="card mx-auto" id=stats>
    <div class=card-body>
        <div class=card-title>
            <h2>Stats</h2>
        </div>
        <div class=text-center>
            <p class=stat>These are the stats for George during the time spent walking.</p>
            <p class=stat><b>174.35</b> km walked</p>
            <p class=stat><b>41</b> hours, <b>57</b> minutes and <b>1</b> second active</p>
            <p class=stat><b>213,796</b> steps</p>
            <p class=stat><b>11,842</b> kcal burned</p>
            <p class=stat><b>40</b> hours, <b>5</b> minutes and <b>59</b> seconds walking</p>
            <p class=stat><b>2.105</b> km ascended</p>
        </div>
    </div>
</div>
<div class="d-flex flex-wrap justify-content-around days">
    <div class=card id=day-1>
        <div class=card-body>
            <div class=card-title>
                <h2>Day 1</h2>
            </div>
            <div class=card-body>
                <div class="container strava"><iframe height=405 width=590 frameborder=0 allowtransparency=true scrolling=no src=https://www.strava.com/activities/3960564100/embed/4d5f4296c5f1e8213e30c5273ed55ada97326885> </iframe> </div> </div> </div> </div> <div class=card id=day-2>
                        <div class=card-body>
                            <div class=card-title>
                                <h2>Day 2</h2>
                            </div>
                            <div class=card-body>
                                <div class="container strava"><iframe height=405 width=590 frameborder=0 allowtransparency=true scrolling=no src=https://www.strava.com/activities/3963999623/embed/836396178251e170a804571152a6846601736916> </iframe> </div> </div> </div> </div> <div class=card id=day-3>
                                        <div class=card-body>
                                            <div class=card-title>
                                                <h2>Day 3</h2>
                                            </div>
                                            <div class=card-body>
                                                <div class="container strava"><iframe height=405 width=590 frameborder=0 allowtransparency=true scrolling=no src=https://www.strava.com/activities/3969332977/embed/21705e4353de1e1bc1df1d905514aa2fb43241b7> </iframe> </div> </div> </div> </div> <div class=card id=day-4>
                                                        <div class=card-body>
                                                            <div class=card-title>
                                                                <h2>Day 4</h2>
                                                            </div>
                                                            <div class=card-body>
                                                                <div class="container strava"><iframe height=405 width=590 frameborder=0 allowtransparency=true scrolling=no src=https://www.strava.com/activities/3973960450/embed/4a7ba4dbda76734f9cfeeaed379dd69dadc68d0b> </iframe> </div> </div> </div> </div> <div class=card id=day-5>
                                                                        <div class=card-body>
                                                                            <div class=card-title>
                                                                                <h2>Day 5</h2>
                                                                            </div>
                                                                            <div class=card-body>
                                                                                <div class="container strava"><iframe height=405 width=590 frameborder=0 allowtransparency=true scrolling=no src=https://www.strava.com/activities/3977223717/embed/fdf1ab8651450ab5771ba7b8718e795df78fcfd1> </iframe> </div> </div> </div> </div> </div> <div class=card id=gallery>
                                                                                        <div class=card-body>
                                                                                            <div class=card-title>
                                                                                                <h2>Gallery</h2>
                                                                                            </div>
                                                                                            <div class="d-flex flex-wrap justify-content-around images"><?php for ($i = 1; $i <= 37; $i++) {
                                                                                                                                                            echo "<a href='images/$i.jpg'><img class='image align-self-center' src='images/$i.jpg'></a>";
                                                                                                                                                        }            ?></div>
                                                                                        </div>
                                                                                </div>
                                                                                <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js> </script> <script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js> </script> <script src=https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js> </script> </html>