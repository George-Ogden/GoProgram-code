<!doctype html>
<html>
<head>
<title>Apps</title>
<?php include "../main.php" ?>
<?php include "../meta.php" ?>
<meta name=description content="View or download some useful apps. Currently, there is a working memory trainer, a prime number checker and an app to list all your other apps.">
<meta name=keywords content="	android apps free">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="apps">
</head><?php include "../header.php" ?>
<section class="colour">
<?php echo image("images/apps.jpg", "Mobile Phones", "text-darken", ["id" => "top", "text" => "<h1>Apps</h1>"]);  ?>
<div class="section icons">
<div class="icon">
<ion-icon name="logo-android"></ion-icon>
<p>Currently, I have released three apps, but there may be more coming soon. The theme ranges from utility to interesting and, like everything else on the website, they are free to use and have no ads.</p>
</div>
</div>
<?php echo section("Prime Number Checker", "<a href=https://play.google.com/store/apps/details?id=uk.co.goprogram.primenumberchecker>This app</a> will factor numbers or tell you if it is prime, an extremely useful tool to have.");
echo section("Four Squares", "Repeat the pattern to test and improve your working memory, an invaluable skill closely linked to IQ and academic success. <a href=https://play.google.com/store/apps/details?id=uk.co.goprogram.workingmemorytrainer>This app is great to use every day.");
echo section("What's Installed?", "<a href=https://play.google.com/store/apps/details?id=uk.co.goprogram.myapps>Find out everything that is installed on your device</a>, from the applications that you use daily to the apps you didn't know existed.", "images/whats installed.jpg", "installed");
?>
</section>
<?php include "../footer.php" ?></script><?php include "../scripts.php" ?>
</html>