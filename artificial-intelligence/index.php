<!doctype html>
<html>

<head>
    <title>Artificial Intelligence</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=index.css>
    <?php include "../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects, some of which involve artificial intelligence.">
    <meta name=keywords content="code, programming, GoProgram, JavaScript, ai, artificial intelligence">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/brain.jpg", "Intelligence", "text-darken", array("id" => "top", "text" => "<h1>Artificial Intelligence</h1>")); 
echo image("images/network.jfif", "Neural Network", "text", array("text" => "<p>Welcome to an array of projects encorporating artificial intelligence. The huge development of artificial intellegence suggest that it will be of even greater importance in the future. It is a really exciting field to be involved in.</p>"));  ?>
   
    <?php echo section("Code","Have a look at the code library behind the artificial intelligence projects. The code is written in JavaScript so that it can be run directly in the browser and is free and openly-sourced."); 
    echo section("Colour Classifier","A practical use of artificial-intelligence to change the colour of text based on the background. Although there are algorithms that do this, AI provides an alternative approach."); ?>
    
</section><?php include "../footer.php" ?></script><?php include "../scripts.php" ?>

</html>