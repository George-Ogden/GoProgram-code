<!doctype html>
<html>
<head>
<title>Sudoku Solver</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=sudoku.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="This sudoku solver will solve sudoku puzzles using an interactive backtracking algorithm. Watch as it figures out which numbers are correct using trial and error.">
<meta name=keywords content="sudoku solver online">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="sudoku solver">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class=colour>Sudoku Solver</h1>
</div>
<form class="mb-5">
<div id=valid>Invalid Sudoku!</div>
<table id=sudoku>
<?php
for ($i = 0; $i < 9; $i++) {
echo "<tr>";
for ($j = 0; $j < 9; $j++) {
echo "<td><input class='w-100 h-100' id=_$i$j type=number min=1 max=9 step=1 pattern=^[0-9]?$></td>";
}
echo "</tr>";
} ?>
</table>
<button id=solve class="py-3">Solve</button>
</form>
</div>
<script src=sudoku.js?v=1></script>
<?php include "../footer.php" ?></section>
<?php include "../scripts.php" ?>
</script>
</html>