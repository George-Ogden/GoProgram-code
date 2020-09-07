<!doctype html>
<html>

<head>
    <title>About</title>
    <?php include "../main.php" ?>
    <?php include "../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects.">
    <meta name=keywords content="code, programming, GoProgram, about, python, JavaScript">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section>
<?php echo image("../images/home.jpg","Main Image","text",["id"=> "top","text" => "<h1 class='colour'>About</h1>"]);  ?>
<div id=main class="section text">
        <h2>Welcome</h2>
    <p>Welcome to GoProgram, a website showcasing programming. Everything is coded from scratch and it is all entirely original. Enjoy browsing round the projects and using them, and feel free to use some of the code in your own projects if you wish!</p>
</div>
<?php echo image("images/code.jpg","Computer Code","text-darken",["text" => "<h2>Programs</h2><p>With passions in maths and computer science, you will notice a wide range of mathematical concepts display throughout the projects on the website.</p>"])  ?>
<?php echo image("../images/logos.jpg","Hand Drawn Logos","text-overlay",["text" => "<h2>Skills</h2><p>These are the main skills that I am proficient in, in picture format. If you are looking for a skill that is not listed, feel free to contact me.</p>"]); ?>  
<div class="section text">
        <h2>Donate</h2>
    <p>The website costs money to run, as do all the open source projects that I work on and the weekly videos that I publish. These rely on an entirely donation-based system. Please, consider <a href="/patreon" target="blank"  data-toggle="tooltip" title="Donate">donating via Patreon</a> to support the site as well as receiving exclusive benefits and early access.</p>
</div>

<?php include "../footer.php" ?> </script><?php include "../scripts.php" ?> </html>