<!doctype html>
<html>
<head>
<title>Connect 4</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=connect4.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="Play connect 4 against an AI that has learned the game and improved just by playing itself thousands of times.">
<meta name=keywords content="connect 4 ai oinline">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="Connect 4 AI">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class="colour pad-1">Connect 4</h1>
</div>
<div class="main section interactive"><table id=board>
<?php
for ($i = 0; $i < 7; $i++) {
echo "<tr>";
for ($j = 0; $j < 7; $j++) {
echo "<td class=box row=$i col=$j><circle></circle></td>";
}
echo "</tr>";
} ?>
</table>
    <div class="cover d-none w-100 h-100">
        <div id="spinner" class="m-auto"></div>
    </div></div>
<?php include "../footer.php"?></section><?php include "../scripts.php" ?>
<script src=ai/activation_functions.js></script>
<script src=ai/matrix.js></script>
<script src=ai/ann.js></script>
<script src=ai/gnn.js></script>
<script src=ai/gfcnn.js></script>
<script src=ai/convoluting.js></script>
<script src=ai/gcnn.js></script>
<script src="ai/genetic flatten.js"></script>
<script src="ai/genetic combined network.js"></script>
<script src=ai/player.js></script>
<script src=ai/umpire.js></script>
<script src="ai/noughts and crosses.js"></script>
<script src=ai/gamer.js></script>
<script src=connect4.js></script>