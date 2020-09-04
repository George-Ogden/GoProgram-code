<!doctype html>
<html>

<head>
    <title>About</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=index.css>
    <?php include "../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects.">
    <meta name=keywords content="code, programming, GoProgram, about, python, JavaScript">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section>
<?php echo image("../images/home.jfif","Main Image","text",["id"=> "top","text" => "<h1 class='colour'>About</h1>"]);  ?>
<div id=main class="section text">
        <h2>Welcome</h2>
    <p>Welcome to GoProgram, a website showcasing programming. Everything is coded from scratch and it is all entirely original. Enjoy browsing round the projects and using them, and feel free to use some of the code in your own projects if you wish!</p>
</div>
<div id="programs" class="section image">
<?php echo image("images/code.min.jfif","Computer Code","text-darken",["text" => "<h2>Programs</h2><p>With passions in maths and computer science, you will notice a wide range of mathematical concepts display throughout the projects on the website.</p>"])  ?>
</div>
<div class="section image">
<?php echo image("../images/logos.png","Hand Drawn Logos","text-overlay",["text" => "<h2>Skills</h2><p>These are the main skills that I am proficient in, in picture format. If you are looking for a skill that is not listed, feel free to contact me.</p>"]); ?>  
</div>
<div class="section text">
        <h2>Donate</h2>
    <p>The website costs money to run, as well as all the open source projects that I work on and the weekly videos that I publish. All of these rely on an entirely donation-based system. Please, consider donating via Patreon to support the site and receive exclusive benefits and early access.</p>
</div>

<?php include "../footer.php" ?> </script><?php include "../scripts.php" ?> </html>