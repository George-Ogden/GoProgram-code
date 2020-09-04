<!doctype html>
<html>

<head>
    <title>Maths</title>
    <?php include "../main.php" ?>
    <link rel=stylesheet href=maths.css>
    <?php include "../meta.php" ?>
    <meta name=description content="A website with a wide variety of showcased programming projects, some of which are mathematical.">
    <meta name=keywords content="code, programming, GoProgram, pFython, turtle, maths">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section  class="showcase">
    <?php echo image("images/equations.jpg", "Mathematical Equations", "text-darken", ["id" => "top", "text" => "<h1>Maths</h1>"]);
    echo generate([
        ["title" => "Fibonacci Spiral", "code" => "3_S9lz5viOg", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Fibonacci%20Spiral.py"],
        ["title" => "Wave", "code" => "x3-MtfG8UkM?end=8", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Wave.py"], 
        ["title" => "Squares", "code" => "jRk9JKZ2WEE", "git" => "https://github.com/George-Ogden/Turtle-Projects/blob/master/Squares.py"]
    ])
    ?>
    <h2>Black 'n' White Squares</h2>
    </div> <a href=/turtle/pyscripts/Squares.py target=blank class=code download><code><span class="tooltip_ mouse">Click to download</span>
            <h3>Code</h3> <span class=orange>import</span> turtle<br><span class=orange>import</span> time<br><span class=orange>import</span> math<br>turtle.bgcolor(<span class=green>"black"</span>)<br>turtle.ht()<br><span class=orange>while True</span>:<br>&emsp;i = 600<br>&emsp;turtle.pu()<br>&emsp;turtle.seth(45)<br>&emsp;turtle.forward((math.sqrt(2)*i/2))<br>&emsp;turtle.right(90)<br>&emsp;<span class=orange>for</span> x <span class=orange>in</span> <span class=purple>range</span>(16):<br>&emsp;&emsp;turtle.right(45)<br>&emsp;&emsp;turtle.pd()<br>&emsp;&emsp;<span class=orange>if</span> x==0:<br>&emsp;&emsp;&emsp;turtle.color(<span class=green>"white"</span>,<span class=green>"black"</span>)<br>&emsp;&emsp;<span class=orange>elif</span> x%2==0:<br>&emsp;&emsp;&emsp;turtle.color(<span class=green>"black"</span>)<br>&emsp;&emsp;<span class=orange>else</span>:<br>&emsp;&emsp;&emsp;turtle.color(<span class=green>"white"</span>)<br>&emsp;&emsp;turtle.begin_fill()<br>&emsp;&emsp;<span class=orange>for</span> y <span class=orange>in</span> r<span class=purple>ange</span>(4):<br>&emsp;&emsp;&emsp;turtle.forward(i)<br>&emsp;&emsp;&emsp;turtle.right(90)<br>&emsp;&emsp;turtle.end_fill()<br>&emsp;&emsp;turtle.pu()<br>&emsp;&emsp;turtle.forward(i/2)<br>&emsp;&emsp;i = math.sqrt(2*i*i)/2<br>&emsp;time.sleep(10)<br>&emsp;turtle.goto(0,0)<br>&emsp;clear()<br>
        </code></a>
    <div class=image><a target=blank href=/turtle/images/squares.jpg> <span class="tooltip_ mouse">Black 'n' White Squares</span><img src=images/squares.jpg alt="an infinite abyss of black and white squares"></a></div>
    <div class=vid><iframe src="https://youtube.com/embed/jRk9JKZ2WEE?mute=1" allow="autoplay encrypted-media" allowfullscreen>Video Unavailable</iframe></div>
    </div>
</section><?php include "../footer.php" ?><?php include "../scripts.php" ?><