<!doctype html>
<html>
<head>
<title>JavaScript AI Library</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=code.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="Download or view this vast library of code for different AI models. There are a lot of files that can be used together and make up the code for the colour classifier.">
<meta name=keywords content="	artificial intelligence algorithms code">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="AI code library">
</head><?php include "../header.php" ?>
<section class="colour showcase">
<?php echo image("images/library.jpg", "Library", "text-darken", ["id" => "top", "text" => "<h1>AI Library</h1>"]); ?>
<div class="section text text-center">
<p>All of the files below can be downloaded and imported. They are all required to make a neural network and are all original. It is available on GitHub and can be used freely.</p>
</div><?php
echo code([
["title" => "All Code", "git" => "https://github.com/George-Ogden/Machine-Learning", "file" => "/scripts/zip/ai library.zip"],
["title" => "Matrix Library", "git" => "https://github.com/George-Ogden/Machine-Learning/blob/master/Matrix.js"],
["title" => "Lambert W Function", "git" => "https://github.com/George-Ogden/Machine-Learning/blob/master/lambertw.js"],
["title" => "Activation Functions", "git" => "https://github.com/George-Ogden/Machine-Learning/blob/master/Activation_Functions.js"],
["title" => "Neural Network Parent Class", "git" => "https://github.com/George-Ogden/Machine-Learning/blob/master/ANN.js"],
["title" => "Fully Connected Neural Network", "git" => "https://github.com/George-Ogden/Machine-Learning/blob/master/FCNN.js"],
["title" => "Convolutional Layers", "git" => "https://github.com/George-Ogden/Machine-Learning/blob/master/Convolutional%20Layers.js"],
["title" => "Pooling Layers", "git" => "https://github.com/George-Ogden/Machine-Learning/blob/master/Pooling%20Layers.js"],
["title" => "Flattening Layers", "git" => "https://github.com/George-Ogden/Machine-Learning/blob/master/Flatten.js"],
["title" => "Combined Neural Network", "git" => "https://github.com/George-Ogden/Machine-Learning/blob/master/Combined%20Network.js"],
["title" => "Convolutional Neural Network", "git" => "https://github.com/George-Ogden/Machine-Learning/blob/master/CNN.js"]
])
?>

</section><?php include "../footer.php" ?></script>
</script><?php include "../scripts.php" ?>