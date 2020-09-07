<!doctype html>
<html>

<head>
    <title>Graph Creator</title>
    <?php include "../main.php" ?>
    <?php include "../meta.php" ?>
    <meta name=description content="A website with a wide variety of showcased programming projects, including a graph creator.">
    <meta name=keywords content="code, programming, GoProgram, python, code, graph, interactive, maths">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="colour">
    <?php echo image("images/graph.jpg", "Graph Creator", "text-darken", ["id" => "top", "text" => "<h1>Graph Creator</h1>"]);  ?>
    <div class="section image">
        <div class='text'>
            <p>If you would like to use the graph creator, you can either download the python source code and run it or download the executable file. This software graphs data: it can draw a line of best fit that is either straight, following a power-law or exponential. Additionally, you can use colours and a key to make a series of data clearer. It is undoubtedly a useful tool to have.
        </div>
        <?php echo image("images/graph-creator-demo.jpg", "Graph Creator Demo", "floor"); ?>
    </div>
    </div>
    <?php
    echo source("https://github.com/George-Ogden/Graph-Creator","/scripts/zip/graph creator.zip");
    echo section("Installer", "You can <a href=/scripts/exe/graph-creator-setup.exe download>run the Windows installer</a> with a few options to customise the software for what you need. It no longer requires an interpreter to run and can be used just like any other software.", "images/installer.jpg");
    ?>
</section><?php include "../footer.php" ?></script><?php include "../scripts.php" ?>

</html>