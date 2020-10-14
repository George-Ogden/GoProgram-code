    <!doctype html>
    <html>
    <head>
    <title>Calculator</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=calculator.css?v=1>
    <?php include "../meta.php" ?>
    <meta name=description content="Play with this calculator or use it to solve difficult maths. The project is online for you to just use.">
    <meta name=keywords content="calculator online">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content="calculator">
    </head><?php include "../header.php" ?>
    <section class=scroll>
    <div class=section id=top>
    <h1 class=colour>Calculator</h1>
    </div>
    <div class=section>
    <calculator class="mx-auto"><input id=output class=w-100 disabled>
    <?php
    function button($class, $id, $text = "")
    {
    if ($text == "") {
    $text = $id;
    }
    echo "<button class='$class w-100' id=$id>$text</button>";
    }
    button("memory", "ans");
    button("memory", "mc");
    button("memory", "mp", "m+");
    button("memory", "mm", "m-");
    button("memory", "mr");
    button("''", "c");
    button("symbol", "bo", "(");
    button("symbol", "bc", ")");
    button("symbol", "square", "&sup2;");
    button("symbol", "divide", "<i class='fa fa-divide'></i>");
    button("symbol", "times", "<i class='fa fa-times'></i>");
    button("symbol", "back", "<i class='fa fa-backspace'></i>");
    button("symbol", "minus", "<i class='fa fa-minus'></i>");
    button("symbol", "plus", "<i class='fa fa-plus'></i>");
    button("symbol", "equals", "<i class='fa fa-equals'></i>");
    button("symbol", "percent", "<i class='fa fa-percent'></i>");
    button("symbol", "dot", ".");
    button("number", "e");
    button("number", "n1", "1");
    button("number", "n2", "2");
    button("number", "n3", "3");
    button("number", "n4", "4");
    button("number", "n5", "5");
    button("number", "n6", "6");
    button("number", "n7", "7");
    button("number", "n8", "8");
    button("number", "n9", "9");
    button("number", "n0", "0"); ?>
    </calculator>
    </div>
    <script src=calculator.js?v=1></script>
    <script src="https://kit.fontawesome.com/f6748a38ea.js?v=1" type="text/javascript"></script>
    <?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
    </html>