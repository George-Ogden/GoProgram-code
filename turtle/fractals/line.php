<!doctype html>
<html>

<head>
    <title>Line Fractals</title>
    <?php include "../../main.php" ?>
    <?php include "../../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects, some of which are line fractals.">
    <meta name=keywords content="code, programming, GoProgram, python, turtle, fractals, line">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../../header.php" ?>
<section class="showcase"><?php echo image("images/lines.jpg", "Steel Wool", "text-darken", ["id" => "top", "text" => "<h1>Line Fractals</h1>"]);
    echo generate([
        ["title" => "Fractal", "code" => "R--ngYcAWmI", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Fractal.py"],
        ["title" => "Quadratic Koch Curve", "code" => "47VIU0mfGLI", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Quadratic%20Koch%20Curve.py"], 
        ["title" => "Minkowski Sausage", "code" => "VpAzyA4pWz8", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Minkowski%20Sausage.py"],
        ["title" => "Vicsek Fractal", "code" => "YGrAxYPMIxU", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Vicsek%20Fractal.py"],
        ["title" => "Line Fractal", "code" => "Rg-IVdXFi0M", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Line%20Fractal.py"]
    ])
    ?>
</section>
<?php include "../../footer.php" ?></script>
</script><?php include "../../scripts.php" ?>

</html>