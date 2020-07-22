<!doctype html><html><head><title>Colours</title><link rel=stylesheet href=colours.css><link rel=stylesheet href=turtle.css><link rel=stylesheet href=../fonts.css><link rel=stylesheet href=../main.css><link rel=stylesheet href=../colours.css><?php include "../meta.php"?><meta name=description content="A website with a wide variety of showcased programming projects, some of which are colourful."><meta name=keywords content="code, programming, GoProgram, colours, turtle, python"><meta name=viewport content="width=device-width,initial-scale=1"><meta name=subject content=programming></head><?php include "../header.php"?><nav><ul><li><a href=#spin>Colour Spin</a></li> |<li><a href=#circles>Colourful Circles</a></li> |<li><a href=#wheel>Wheel</a></li></ul></nav><section><div id=return><div class=container><a href=#><i class="fa fa-angle-double-up"></i></a></div></div><div id=top><h1>Colours</h1></div><div id=spin class="box colour-2"><div class=h2><h2>Colour Spin</h2></div> <a href="https://www.goprogram.co.uk/turtle/pyscripts/Colour Spin.py" target=_blank class=code download><code><span class="tooltip mouse">Click to download</span><h3>Code</h3> <span class=orange>import</span> turtle <span class=orange>as</span> tur<br><span class=orange>import</span> time<br><span class=orange>import</span> math<br><span class=orange>def</span> <span class=blue>hex_col</span>(color):<br>&emsp;<span class=orange>return</span> <span class=green>"#"</span> + <span class=green>""</span>.join([<span class=purple>str</span>(<span class=green>"0"</span>+x[x.find(<span class=green>"x"</span>)+1:])[-2:] <span class=orange>for</span> x <span class=orange>in</span> <span class=purple>list</span>(<span class=purple>map</span>(<span class=purple>hex</span>,color))])<br>tur.speed(0)<br>tur.ht()<br>tur.bgcolor(<span class=green>"black"</span>)<br><span class=orange>while True</span>:<br>&emsp;<span class=orange>for</span> i <span class=orange>in</span> <span class=purple>range</span>(0,720,5):<br>&emsp;&emsp;color = [0,0,0]<br>&emsp;&emsp;color[(i//120+1)%3] = <span class=purple>int</span>((i%120)/8*17)<br>&emsp;&emsp;color[(i//120)%3] = <span class=purple>int</span>(255-(i%120)/8*17)<br>&emsp;&emsp;color = hex_col(color)<br>&emsp;&emsp;tur.color(color)<br>&emsp;&emsp;tur.seth(i/2)<br>&emsp;&emsp;tur.circle(250)<br>&emsp;time.sleep(10)<br>&emsp;tur.clear()<br></code></a><div class=image><a target=_blank href="https://www.goprogram.co.uk/turtle/images/colour spin.jpg"><span class="tooltip mouse">Colour Spin</span><img src="images/colour spin.jpg" alt="a spin of colour"></a></div><div class=vid><iframe src=https://youtube.com/embed/RGStj_7DqqM allow="autoplay encrypted-media" allowfullscreen>Video Unavailable</iframe></div></div><div id=circles class="box colour-4"><div class=h2><h2>Colourful Circles</h2></div> <a href="https://www.goprogram.co.uk/turtle/pyscripts/Colourful Circles.py" target=_blank class=code download><code><span class="tooltip mouse">Click to download</span><h3>Code</h3> <span class=orange>import</span> turtle <span class=orange>as</span> tur<br><span class=orange>import</span> time<br><span class=orange>def</span> <span class=blue>hex_col</span>(color):<br>&emsp;<span class=orange>return</span> <span class=green>"#"</span> + <span class=green>""</span>.join([<span class=purple>str</span>(<span class=green>"0"</span>+x[x.find(<span class=green>"x"</span>)+1:])[-2:] <span class=orange>for</span> x <span class=orange>in</span> <span class=purple>list</span>(<span class=purple>map</span>(<span class=purple>hex</span>,color))])<br><span class=orange>def</span> <span class=blue>get_col_ang</span>(x,y):<br>&emsp;<span class=orange>try</span>:<br>&emsp;&emsp;theta = math.atan(x/y) * 360 / math.pi<br>&emsp;<span class=orange>except</span>:<br>&emsp;&emsp;theta = 180<br>&emsp;<span class=orange>finally</span>:<br>&emsp;&emsp;<span class=orange>return</span> theta<br><span class=orange>def</span> <span class=blue>get_col</span>(theta):<br>&emsp;color = [0,0,0]<br>&emsp;color[(i//120+1)%3] = <span class=purple>int</span>((i%120)/8*17)<br>&emsp;color[(i//120)%3] = <span class=purple>int</span>(255-(i%120)/8*17)<br><span class=orange>def</span> <span class=blue>circle</span>(angle,radius,pos=(0,0)):<br>&emsp;tur.pu()<br>&emsp;tur.goto(*pos)<br>&emsp;tur.pd()<br>&emsp;tur.seth(angle)<br>&emsp;<span class=orange>for</span> i <span class=orange>in</span> <span class=purple>range</span>(360):<br>&emsp;&emsp;<span class=orange>if</span> i == 0:<br>&emsp;&emsp;&emsp;tur.color(get_col(angle))<br>&emsp;&emsp;<span class=orange>else</span>:<br>&emsp;&emsp;&emsp;tur.color(get_col(get_col_ang(*tur.pos())))<br>&emsp;&emsp;tur.circle(radius,1)<br><span class=orange>def</span> <span class=blue>major_circle</span>(radius):<br>&emsp;tur.pu()<br>&emsp;tur.goto(0,-radius)<br>&emsp;<span class=orange>for</span> i <span class=orange>in</span> <span class=purple>range</span>(360):<br>&emsp;&emsp;tur.color(get_col(get_col_ang(*tur.pos())))<br>&emsp;&emsp;<span class=orange>if </span>i*radius/200 % 60 == 0 <span class=orange>and</span> (radius != 0 <span class=orange>or</span> i == 0):<br>&emsp;&emsp;&emsp;<span class=orange>for</span> i <span class=orange>in</span> <span class=purple>range</span>(6):<br>&emsp;&emsp;&emsp;&emsp;circle(j*60,50,tur.pos())<br>&emsp;&emsp;tur.seth(i)<br>&emsp;&emsp;tur.circle(radius,1)<br><span class=orange>while True</span>:<br>&emsp;tur.speed(0)<br>&emsp;tur.width(5)<br>&emsp;tur.ht()<br>&emsp;tur.bgcolor(<span class=green>"black"</span>)<br>&emsp;<span class=orange>for</span> i <span class=orange>in</span> <span class=purple>range</span>(3):<br>&emsp;&emsp;major_circle(i*200)<br>&emsp;circle(90,100,(100,0))<br>&emsp;circle(90,300,(300,0))<br>&emsp;circle(90,500,(500,0))<br>&emsp;time.sleep(10)<br>&emsp;tur.reset()<br></code></a><div class=image><a target=_blank href="https://www.goprogram.co.uk/turtle/images/colourful circles.jpg"><span class="tooltip mouse">Colourful Circles</span><img src="images/colourful circles.jpg" alt="a wheel of colourful circles"></a></div><div class=vid><iframe src=https://youtube.com/embed/knpAHoGCFhU allow="autoplay encrypted-media" allowfullscreen>Video Unavailable</iframe></div></div><div id=wheel class="box colour-3"><div class=h2><h2>Colour Wheel</h2></div> <a href="https://www.goprogram.co.uk/turtle/pyscripts/Colour Wheel.py" target=_blank class=code download><code><span class="tooltip mouse">Click to download</span><h3>Code</h3> <span class=orange>import</span> turtle <span class=orange>as</span> tur<br><span class=orange>import</span> time<br><span class=orange>def</span> <span class=blue>hex_col</span>(color):<br>&emsp;<span class=orange>return</span> <span class=green>"#"</span> + <span class=green>""</span>.join([<span class=purple>str</span>(<span class=green>"0"</span>+x[x.find(<span class=green>"x"</span>)+1:])[-2:] <span class=orange>for</span> x <span class=orange>in</span> <span class=purple>list</span>(<span class=purple>map</span>(<span class=purple>hex</span>,color))])<br><span class=orange>def</span> <span class=blue>get_col_ang</span>(x,y):<br>&emsp;<span class=orange>try</span>:<br>&emsp;&emsp;theta = math.atan(x/y) * 360 / math.pi<br>&emsp;<span class=orange>except</span>:<br>&emsp;&emsp;theta = 180<br>&emsp;<span class=orange>finally</span>:<br>&emsp;&emsp;<span class=orange>return</span> theta<br><span class=orange>def</span> <span class=blue>circle</span>(angle,radius,pos=(0,0)):<br>&emsp;tur.pu()<br>&emsp;tur.goto(*pos)<br>&emsp;tur.pd()<br>&emsp;tur.seth(angle)<br>&emsp;<span class=orange>for</span> i <span class=orange>in</span> <span class=purple>range</span>(0,360,1):<br>&emsp;&emsp;<span class=orange>if</span> i == 0:<br>&emsp;&emsp;&emsp;tur.color(get_col(angle))<br>&emsp;&emsp;<span class=orange>else</span>:<br>&emsp;&emsp;&emsp;tur.color(get_col(get_col_ang(*tur.pos())))<br>&emsp;&emsp;tur.circle(radius,1)<br><span class=orange>while True</span>:<br>&emsp;tur.speed(0)<br>&emsp;tur.ht()<br>&emsp;tur.bgcolor(<span class=green>"black"</span>)<br>&emsp;<span class=orange>for</span> i <span class=orange>in</span> <span class=purple>range</span>(0,720,5):<br>&emsp;&emsp;circle(i/2,240)<br>&emsp;time.sleep(10)<br>&emsp;tur.reset()<br></code></a><div class=image><a target=_blank href="https://www.goprogram.co.uk/turtle/images/colour wheel.jpg"><span class="tooltip mouse">Colour Wheel</span><img src="images/colour wheel.jpg" alt="a wheel of colour"></a></div><div class=vid><iframe src="https://youtube.com/embed/7_EMslgw3cE?mute=1" allow="autoplay encrypted-media" allowfullscreen>Video Unavailable</iframe></div></div></section><div id=cookie></div><?php include "../footer.php"?><script src=../main.js></script><?php include "../scripts.php"?><link rel=stylesheet href=https://kit-free.fontawesome.com/releases/latest/css/free.min.css media=all><script src=https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js></script><script src=https://www.gstatic.com/firebasejs/7.13.2/firebase-analytics.js></script><script>var firebaseConfig={apiKey:"AIzaSyBZV2Zn1hwqX54jD9Hb8lNKNESJ_ztFLs8",authDomain:"goprogram-8f3e6.firebaseapp.com",databaseURL:"https://goprogram-8f3e6.firebaseio.com",projectId:"goprogram-8f3e6",storageBucket:"goprogram-8f3e6.appspot.com",messagingSenderId:"418286522925",appId:"1:418286522925:web:954105e701d876248bdea4",measurementId:"G-C5DRZPWGLV"};firebase.initializeApp(firebaseConfig),firebase.analytics()</script></html>