<!doctype html>
<html>
<head>
<title>Hangman Solver</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=hangman.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="This hangman solver figures out your word by looking up what other people have done before you! Then, it learns and improves based on what you do.">
<meta name=keywords content="hangman solver">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="hangman">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class="colour pad-1">Hangman Solver</h1>
</div>
<div class="section interactive" id=main>
<div class="main mx-0 w-100">
<p>Think of a word</4>
<h2 class=pad-1>Length</h2>
<div class="main d-none"><div class="mx-auto pad-2 w-100"><p class=guess></p><div class=buttons></div><p class=info></p><button class="major done">Done</button></div></div>
<select class="mdb-select md-form my-2 mx-auto" id=length>
<?php for ($i = 4; $i <= 12; $i++){
if ($i == 5){
echo "<option value=$i selected>$i</option>";
} else {
echo "<option value=$i>$i</option>";
}
}
?>
</select>
</div><button id=start class="major mt-5">Start</button></div>
<?php include "../footer.php" ?></section>
<?php include "../scripts.php" ?>
<script src=hangman.js?v=5></script>
</script>
</html>