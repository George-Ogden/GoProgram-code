<!doctype html>
<html>
<head>
<title>Tic-Tac-Toe</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=tictactoe.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="">
<meta name=keywords content="">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class="colour pad-1">Tic-Tac-Toe</h1>
</div>
<div class="main section interactive"><table id=board>
<?php
for ($i = 0; $i < 5; $i++) {
echo "<tr>";
for ($j = 0; $j < 5; $j++) {
echo "<td class=box pos=".strval($i * 5 + $j + 1)." col=$j row=$i><circle></circle></td>";
}
echo "</tr>";
} ?>
</table>
    <div class="cover d-none w-100 h-100">
        <div id="spinner" class="m-auto"></div>
    </div></div>
<?php include "../footer.php"?></section><?php include "../scripts.php" ?>
<script src=ai/matrix.js></script>
<script src=ai/umpire.js></script>
<script src="ai/noughts and crosses.js"></script>
<script src=tictactoe.js></script>