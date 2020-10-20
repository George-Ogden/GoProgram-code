<!doctype html>
<html>
<head>
<title>Connect 4</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=connect4.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="">
<meta name=keywords content="">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="">
</head><?php include "../header.php" ?><table id=board>
<?php
for ($i = 0; $i < 7; $i++) {
echo "<tr>";
for ($j = 0; $j < 7; $j++) {
echo "<td class=box row=$i col=$j></td>";
}
echo "</tr>";
} ?>
</table>
<script src=/scripts/js/activation_functions.js></script>
<script src=/scripts/js/matrix.js></script>
<script src=/scripts/js/gnn.js></script>
<script src=/scripts/js/gfcnn.js></script>
<script src=/scripts/js/player.js></script>
<script src=/scripts/js/umpire.js></script>
<script src="/scripts/js/noughts and crosses.js"></script>
<script src=/scripts/js/gamer.js></script>
<script src=connect4.js></script>