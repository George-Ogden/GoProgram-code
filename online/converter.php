<!doctype html>
<html>

<head>
    <title>Colour Converter</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=converter.css?v=1>
    <?php include "../meta.php" ?>
    <meta name=description content="A website with a wide variety of showcased programming projects, including a colour converter.">
    <meta name=keywords content="code, programming, GoProgram, JavaScript, colour, converter">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section>
    <div class="section" id=top>
        <h1 class="colour">Colour Converter</h1>
    </div>
    <div class="section image">
        <div class="text">
            <h2>Name</h2>
            <div><input id=colourName value=black placeholder="Enter a colour"></div>
            <h2>Hex</h2>
            <div><input id=hexColour placeholder="Enter a hex number"></div>
            <h2>RGB</h2>
            <div><input id=rgbColour placeholder="Enter an RGB code"></div>
            <h2>CMYK</h2>
            <div><input id=cmykColour placeholder="Enter a CMYK code"></div>
            <h2>HSL</h2>
            <div><input id=hslColour placeholder="Enter an HSL code"></div>
        </div>
        <div id="output" class="scale w-100"></div>
    </div>
    <script src=converter.js></script>
</section><?php include "../footer.php" ?><?php include "../scripts.php" ?>

</html>