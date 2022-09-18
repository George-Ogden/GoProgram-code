<!doctype html>
<html>
<head>
<title>Squares</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=squares.css>
<?php include "../meta.php" ?>
<meta name=description content="AlphaZero implementation of the squares game.">
<meta name=keywords content="alphazero squares algorithm">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="AlphaZero implementation">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class="colour pad-1">Squares</h1>
</div>
<div class="main section interactive"><table id=board>
<?php
for ($i = 0; $i < 7; $i++) {
echo "<tr>";
for ($j = 0; $j < 7; $j++) {
echo "<td class=box row=$i col=$j></td>";
}
echo "</tr>";
} ?>
</table><table class=guide>
<?php
for ($i = 0; $i < 7; $i++) {
echo "<tr>";
for ($j = 0; $j < 7; $j++) {
echo "<td></td>";
}
echo "</tr>";
} ?>
</table>
    <div class="cover d-none w-100 h-100">
        <div id="spinner" class="m-auto"></div>
    </div></div>
<?php include "../footer.php"?></section><?php include "../scripts.php" ?>
<script src=ai/matrix.js></script>
<script src=ai/umpire.js?v=2></script>
<script src="ai/mcts.js?v=2"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@3.19.0/dist/tf.min.js"></script>
<script src="ai/squares.js?v=2"></script>
<script src=squares.js></script>