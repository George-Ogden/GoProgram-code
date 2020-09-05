<!doctype html>
<html>

<head>
    <title>Colour Classifier</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=classifier.css>
    <?php include "../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects, including an artificial intelligence colour classifier.">
    <meta name=keywords content="code, programming, GoProgram, JavaScript, colour, converter, AI, artificial, intelligence">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="colour">
                <div class="section text py-0 border border-dark border-bottom">
                    <h1 class="text-right">Colour&nbsp;</h1><h1 class="text-left bg-dark text-white">&nbsp;Classifier</h1>
                </div>
                <div class="section text">
                        <h2>What it is</h2>
                    <p>This colour classifier will convert the inputed colour into its red, green and blue elements, then feed that into the neural network. The neural network processes the information and outputs a number between -1 and 1, which represents whether the text should be black or white. The same technology is used in the colour converter.</p>
                </div>
                
                <div class="section text">
                        <h2>How to use</h2>
                    <p>Input red, green and blue values and the artificial intelligence will change the text colour of the output below.</p>
                </div>
                
                <div class="section pad-1">
                    <h2>Inputs</h2>
                    <form class="d-flex">
                        <div id=red><input id=redInput class=input type=input min=0 max=255 value=0><input id=redSlider class=slider type=range min=0 max=255 step=1></div>
                        <div id=green><input id=greenInput class=input type=input min=0 max=255 value=0><input id=greenSlider class=slider type=range min=0 max=255 step=1></div>
                        <div id=blue><input id=blueInput class=input type=input min=0 max=255 value=0><input id=blueSlider class=slider type=range min=0 max=255 step=1></div>
                    </form>
                </div>
                
                <div id=output class="section pad-1">
                    <h2>Output</h2>
                    <p class="text-center">This colour is chosen by an AI!</p>
                </div>
                <script src=/scripts/js/matrix.js> </script> <script src=/scripts/js/lambertw.js> </script> <script src=/scripts/js/activation_functions.js> </script> <script src=/scripts/js/ann.js> </script><script src=/scripts/js/fcnn.js> </script> <script src=classifier.js></script>
                </section><?php include "../footer.php" ?></script><?php include "../scripts.php" ?>

</html>