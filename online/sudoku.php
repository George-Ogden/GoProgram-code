<!doctype html>
<html>

<head>
    <title>Sudoku Solver</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=sudoku.css?v=1>
    <?php include "../meta.php" ?>
    <meta name=description content="A website with a wide variety of showcased programming projects, including a sudoku solver.">
    <meta name=keywords content="code, programming, GoProgram, sudoku solver, sudoku, JavaScript">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section>
    <div class="section" id=top>
        <h1 class="colour">Sudoku Solver</h1>
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
</section><?php include "../footer.php" ?>
<?php include "../scripts.php" ?>
</script>

</html>