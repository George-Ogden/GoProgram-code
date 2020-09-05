<!doctype html>
<html>

<head>
    <title>JavaScript AI Library</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=code.css>
    <?php include "../meta.php" ?>
    <meta name=description content="A website with a wide variety of showcased programming projects, some of which involve artificial intelligence.">
    <meta name=keywords content="code, programming, GoProgram, JavaScript, code, AI, artificial intelligence">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="colour">
    <?php echo image("images/library.jpg", "Library", "text-darken", ["id" => "top", "text" => "<h1>AI Library</h1>"]); ?>

    <div class="section text text-center">
        <p>All of the files below can be downloaded and imported. They are all required to make a neural network and are all original. It is available on GitHub and can be used freely.</p>
    </div>

    <div class="section code">
            <h2>All Code</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning","/scripts/zip/ai library.zip")?>
    </div>
    <div class="section code">
            <h2>Matrix</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning/blob/master/Matrix.js")?>
    </div>

    <div class="section code">
            <h2>Lambert W Function</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning/blob/master/lambertw.js")?>
    </div>
    <div class="section code">
            <h2>Activation Functions</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning/blob/master/Activation_Functions.js")?>
    </div>
    <div class="section code">
            <h2>Neural Network Parent Class</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning/blob/master/ANN.js")?>
    </div>

    <div class="section code">
            <h2>Fully Connected Neural Network</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning/blob/master/FCNN.js")?>
    </div>

    <div class="section code">
            <h2>Convolutional Layers</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning/blob/master/Convolutional%20Layers.js")?>
    </div>

    <div class="section code">
            <h2>Pooling Layers</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning/blob/master/Pooling%20Layers.js")?>
    </div>

    <div class="section code">
            <h2>Flattening Layers</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning/blob/master/Flatten.js")?>
    </div>
    <div class="section code">
            <h2>Combined Neural Network</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning/blob/master/Combined%20Network.js")?>
    </div>
    <div class="section code">
            <h2>Convolutional Neural Network</h2>
            <?php echo source("https://github.com/George-Ogden/Machine-Learning/blob/master/CNN.js")?>
    </div>

</section><?php include "../footer.php" ?></script>
</script><?php include "../scripts.php" ?>