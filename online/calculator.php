<!doctype html>
<html>

<head>
    <title>Calculator</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=calculator.css>
    <?php include "../meta.php" ?>
    <meta name=description content="A website with a wide variety of showcased programming projects, including a calculator.">
    <meta name=keywords content="code, programming, GoProgram, JavaScript, calculator">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section>
    <div class="section" id=top>
        <h1 class="colour">Calculator</h1>
    </div>
    <div class="section">
        <calculator class="mx-auto"><input id=output disabled>
        <?php
        function button($class,$id,$text=""){
            if ($text==""){
                $text = $id;
            }
            echo "<button class=$class id=$id>$text</button>";
        }
        button("memory","ans");button("memory","mc");button("memory","mp","m+");button("memory","mm","m-");button("memory","mr");button("''","c");button("symbol","bo","(");button("symbol","bc",")");button("symbol","square","&sup2;");button("symbol","divide","<i class='fa fa-divide'></i>");button("symbol","times","<i class='fa fa-times'></i>");button("symbol","back","<i class='fa fa-backspace'></i>");button("symbol","minus","<i class='fa fa-minus'></i>");button("symbol","plus","<i class='fa fa-plus'></i>");button("symbol","equals","<i class='fa fa-equals'></i>");button("symbol","percent","<i class='fa fa-percent'></i>");button("symbol","dot",".");button("number","e");button("number","n1","1");button("number","n2","2");button("number","n3","3");button("number","n4","4");button("number","n5","5");button("number","n6","6");button("number","n7","7");button("number","n8","8");button("number","n9","9");button("number","n0","0"); ?>
        </calculator>
    </div>
</section>
<script src=calculator.js></script>
<script src="https://kit.fontawesome.com/f6748a38ea.js" type="text/javascript"></script>
<?php include "../footer.php" ?> </script><?php include "../scripts.php" ?> </html>