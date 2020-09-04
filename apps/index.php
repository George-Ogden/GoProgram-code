<!doctype html>
<html>

<head>
    <title>Apps</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=index.css>
    <?php include "../meta.php" ?>
    <meta name=description content="A website with a wide variety of showcased programming projects, some of which are apps.">
    <meta name=keywords content="code, programming, GoProgram, apps, interactive, java">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="colour">
    <?php echo image("images/apps.jpg", "Mobile Phones", "text-darken", ["id" => "top", "text" => "<h1>Apps</h1>"]);  ?>
    <div class="section icons">
        <div class="icon">
            <ion-icon name="logo-android"></ion-icon>
            <p>Currently, I have released three apps, but there may be more coming soon. The theme ranges from utility to interesting and, like everything else on the website, they are free to use and have no ads.</p>
        </div>
    </div>
    <?php echo section("Prime Number Checker","This app will factor numbers or tell you if it is prime, an extremely useful tool to have."); 
     echo section("Four Squares","Repeat the pattern to test and improve your working memory, an invaluable skill closely linked to IQ and academic success."); 
     echo section("What's Installed?","Find out everything that is installed on your device, from the applications that you use daily to the apps you didn't know existed.","images/whats installed.jpg","installed"); 
     ?>
</section>
<?php include "../footer.php" ?> </script><?php include "../scripts.php" ?> </html>