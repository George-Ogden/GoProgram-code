<!doctype html>
<html>

<head>
    <title>Sudoku Solver</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=sudoku.css>
    ><?php include "../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects, including a sudoku solver.">
    <meta name=keywords content="code, programming, GoProgram, sudoku solver, sudoku, JavaScript">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section>
    <div class="section" id=top>
        <h1 class="colour">Sudoku Solver</h1>
    </div>
    <form>
        <div id=valid><br></div>
        <table id=sudoku>
<?php 
        for ($i = 0; $i < 9; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 9; $j++) {
            echo "<td><input class=w-100 id=_$i$j type=number min=1 max=9 step=1 pattern=^d?$></td>";
        }
            echo "</tr>";
        }?>
        </table>
        <button id=solve>Solve</button>
    </form>
    </div>
    <script src=sudoku.js></script>
</section><?php include "../footer.php" ?></script><?php include "../scripts.php" ?><script src=https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js> </script> <script src=https://www.gstatic.com/firebasejs/7.13.2/firebase-analytics.js> </script> <script>
    var firebaseConfig = {
        apiKey: "AIzaSyBZV2Zn1hwqX54jD9Hb8lNKNESJ_ztFLs8",
        authDomain: "goprogram-8f3e6.firebaseapp.com",
        databaseURL: "https://goprogram-8f3e6.firebaseio.com",
        projectId: "goprogram-8f3e6",
        storageBucket: "goprogram-8f3e6.appspot.com",
        messagingSenderId: "418286522925",
        appId: "1:418286522925:web:954105e701d876248bdea4",
        measurementId: "G-C5DRZPWGLV"
    };
    firebase.initializeApp(firebaseConfig), firebase.analytics()
</script>

</html>