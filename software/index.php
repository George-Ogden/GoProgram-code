<!doctype html>
<html>

<head>
    <title>Software</title>
    <?php include "../main.php" ?>
    <?php include "../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects, including software that can be downloaded.">
    <meta name=keywords content="code, programming, GoProgram, python, software development, software">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/software-development.jpg", "Software Development", "text-darken", ["id" => "top", "text" => "<h1>Software</h1>"]);  ?>
<div class="section text text-center">
        <p>Welcome to a range of software that you can just download and run. You can view the source code or just install with an installer.</div>
    </div>
    <?php 
    echo section("Graph Creator","Whether you need to analyse or visualise data, or you just want to throw some random numbers onto a screen, <a href=graph>have a play with this, undeniably useful, graph creator.</a>","images/graph-creator-icon.jpg");
    echo section("Birthday Reminder","Unless you have a memory like a hard drive, <a href=reminder>lighten the load with this birthday reminder software</a> to take note of birthdays and other special occasions.","images/birthday-reminder-icon.jpg");
    echo section("UNIX Commands","The Windows command tools are fairly limited compared to Linux, but <a href=commands>these executable files</a> allow you to run the Coreutils, as well as other commands on a Windows device without WSL.","images/gnu.jpg");

    ?>
</section><?php include "../footer.php" ?></script><?php include "../scripts.php" ?>

</html>