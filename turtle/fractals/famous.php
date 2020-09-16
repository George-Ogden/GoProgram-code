<!doctype html>
<html>
<head>
<title>Famous Fractals</title>
<?php include "../../main.php" ?>
<?php include "../../meta.php" ?>
<meta name=description content="View some of the most beautiful and famous shapes. The code can be downloaded and run or just admired in the browser.">
<meta name=keywords content="most famous fractals">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="famous fractals">
</head><?php include "../../header.php" ?>
<section class="showcase"><?php echo image("images/bang.jpg", "Fractals After the Big Bang", "text-darken", ["id" => "top", "text" => "<h1>Famous Fractals</h1>"]);
echo generate([
["title" => "Fractal Tree", "code" => "40q7DRDjf0E", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Fractal%20Tree.py"],
["title" => "Sierpinski Carpet", "code" => "U1mxm0bLrcw", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Sierpinski%20Carpet.py"],
["title" => "Sierpinski Triangle", "code" => "rZIWzLYBPIE", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Sierpinski%20Triangle.py"],
["title" => "Koch Snowflake", "code" => "1coK5WjWqvU", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Koch%20Snowflake.py"]
])
?>
</section><?php include "../../footer.php" ?><?php include "../../scripts.php" ?>
</html>