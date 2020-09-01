<!doctype html><html><head><title>Famous Fractals</title><link rel=stylesheet href=famous.css><link rel=stylesheet href=../turtle.css><link rel=stylesheet href=../../fonts.css><link rel=stylesheet href=../../main.css><link rel=stylesheet href=../../colours.css><?php include "../../meta.php"?><meta name=description content="A website with a wide variety of showcased programming projects, some of which are famous fractals."><meta name=keywords content="code, programming, GoProgram, fractals, python, turtle, famous"><meta name=viewport content="width=device-width,initial-scale=1"><meta name=subject content=programming></head><?php include "../../header.php"?><nav><ul><li><a href=#triangle>Sierpinski Triangle</a></li> |<li><a href=#tree>Fractal Tree</a></li> |<li><a href=#carpet>Sierpinski Carpet</a></li> |<li><a href=#snow>Koch Snowflake</a></li></ul></nav><section><div id=return><span class="tooltip_ bottom">Top of page</span><div class=container><a href=#><i class="fa fa-angle-double-up"></i></a></div></div><div id=top><h1>Famous Fractals</h1></div><div id=tree class="box colour-3"><div class=h2><h2>Fractal Tree</h2></div> <a class=code download href=/turtle/pyscripts/Fractal Tree.py target=blank><code><span class="tooltip_ mouse">Click to download</span><h3>Code</h3> <span class=orange>import</span> turtle <span class=orange>as</span> tur<br><span class=orange>import</span> math, time<br><span class=orange>def</span> <span class=blue>colour</span>(i):<br>&emsp;colours = [<span class=green>"red"</span>,<span class=green>"orange"</span>,<span class=green>"yellow"</span>,<span class=green>"green"</span>]<br>&emsp;<span class=orange>try</span>:<br>&emsp;&emsp;tur.color(colours[i//2])<br>&emsp;<span class=orange>except</span>:<br>&emsp;&emsp;tur.color(blue)<br><br><span class=orange>def</span> <span class=blue>rotate</span>(origin, point, angle):<br>&emsp;qx = origin[0] + math.cos(angle) * (point[0] - origin[0]) -<br>&emsp;&emsp;math.sin(angle) * (point[1] - origin[1])<br>&emsp;qy = origin[1] + math.sin(angle) * (point[0] - origin[0]) +<br>&emsp;&emsp;math.cos(angle) * (point[1] - origin[1])<br>&emsp;<span class=orange>return</span> qx, qy<br><br><span class=orange>def</span> <span class=blue>line</span>(x,y,x1,y1,x2,y2,angle):<br>&emsp;tur.pu()<br>&emsp;tur.goto(x+x1,y+y1)<br>&emsp;point = rotate([x1,y1],[x2,y2], angle)<br>&emsp;tur.pd()<br>&emsp;tur.goto(x+point[0],y+point[1])<br><br><span class=orange>class</span> <span class=blue>branch</span>:<br>&emsp;<span class=orange>def</span> <span class=blue>__init__</span>(self,length,angle,count):<br>&emsp;&emsp;self.len = length * 2 / 3<br>&emsp;&emsp;self.ang = angle<br>&emsp;&emsp;self.x = tur.xcor()<br>&emsp;&emsp;self.y = tur.ycor()<br>&emsp;&emsp;<span class=orange>if</span> self.len > 4:<br>&emsp;&emsp;&emsp;colour(count)<br>&emsp;&emsp;&emsp;line(x,y,0,0,0,self.len,self.ang+(pi/4))<br>&emsp;&emsp;&emsp;count += 1<br>&emsp;&emsp;&emsp;branch(self.len,self.ang+(pi/4),count)<br>&emsp;&emsp;&emsp;count -= 1<br>&emsp;&emsp;&emsp;tur.pu()<br>&emsp;&emsp;&emsp;tur.goto(x,y)<br>&emsp;&emsp;&emsp;colour(count)<br>&emsp;&emsp;&emsp;line(x,y,0,0,0,self.len,self.ang-(pi/4))<br>&emsp;&emsp;&emsp;count += 1<br>&emsp;&emsp;&emsp;branch(self.len,self.ang-(pi/4),count)<br>&emsp;&emsp;&emsp;count -= 1<br><br>pi = math.pi<br>tur.bgcolor(<span class=green>"black"</span>)<br>tur.ht()<br>tur.radians()<br>tur.speed(0)<br>tur.pensize(2)<br><span class=orange>while True</span>:<br>&emsp;tur.color(<span class=green>"white"</span>)<br>&emsp;tur.pu()<br>&emsp;tur.goto(0,-400)<br>&emsp;tur.pd()<br>&emsp;tur.goto(0,-200)<br>&emsp;branch(300,0,0)<br>&emsp;time.sleep(10)<br>&emsp;tur.clear()<br></code></a><div class=image><a target=blank href="/turtle/fractals/images/fractal tree.jpg"><span class="tooltip_ mouse">Fractal Tree</span><img src="images/fractal tree.jpg" alt="a tree made out of fractals"></a></div><div class=vid><iframe src="https://youtube.com/embed/40q7DRDjf0E?mute=1" allow="autoplay encrypted-media" allowfullscreen>Video Unavailable</iframe></div></div><div id=carpet class="box colour-4"><div class=h2><h2>Sierpinski Carpet</h2></div> <a class=code download href="/turtle/pyscripts/Sierpinski Carpet.py" target=blank><code><span class="tooltip_ mouse">Click to download</span><h3>Code</h3> <span class=orange>import</span> turtle <span class=orange>as</span> tur<br><span class=orange>import</span> time<br><span class=orange>def</span> <span class=blue>square</span>(centre, length):<br>&emsp;cx,cy = centre[0],centre[1]<br>&emsp;length = length/3<br>&emsp;half_length = length/2<br>&emsp;<span class=orange>if</span> length < 2:<br>&emsp;&emsp;<span class=orange>return</span><br>&emsp;Ax = cx - half_length<br>&emsp;Ay = cy + half_length<br>&emsp;tur.pu()<br>&emsp;tur.goto(Ax,Ay)<br>&emsp;tur.begin_fill()<br>&emsp;tur.pd()<br>&emsp;<span class=orange>for</span> i <span class=orange>in</span> <span class=purple>range</span>(4):<br>&emsp;&emsp;tur.forward(length)<br>&emsp;&emsp;tur.right(90)<br>&emsp;tur.end_fill()<br>&emsp;square([cx-length,cy-length],length)<br>&emsp;square([cx,cy-length],length)<br>&emsp;square([cx+length,cy-length],length)<br>&emsp;square([cx-length,cy],length)<br>&emsp;square([cx+length,cy],length)<br>&emsp;square([cx-length,cy+length],length)<br>&emsp;square([cx,cy+length],length)<br>&emsp;square([cx+length,cy+length],length)<br>&emsp;square([cx,cy],length)<br><br><span class=orange>while True</span>:<br>&emsp;tur.color(<span class=green>"white"</span>)<br>&emsp;tur.bgcolor(<span class=green>"black"</span>)<br>&emsp;tur.ht()<br>&emsp;tur.speed(0)<br>&emsp;square([0,0],648)<br>&emsp;time.sleep(10)<br>&emsp;tur.reset()<br></code></a><div class=image><a target=blank href="/turtle/fractals/images/sierpinski carpet.jpg"><span class="tooltip_ mouse">Sierpinski Carpet</span><img src="images/sierpinski carpet.jpg" alt="a sqaure fractal with one ninth repeatedly removed, called a Sierpinski Carpet"></a></div><div class=vid><iframe src="https://youtube.com/embed/U1mxm0bLrcw ?mute=1" allow="autoplay encrypted-media" allowfullscreen>Video Unavailable</iframe></div></div><div id=triangle class="box colour-2"><div class=h2><h2>Sierpinski Triangle</h2></div> <a class=code download href="/turtle/pyscripts/Sierpinski Triangle.py" target=blank><code><span class="tooltip_ mouse">Click to download</span><h3>Code</h3> <span class=orange>import</span> turtle <span class=orange>as</span> tur<br><span class=orange>import</span> math, time<br><span class=orange>def</span> <span class=blue>triangle</span>(top, length, i=<span class=orange>False</span>):<br>&emsp;tx,ty = top[0],top[1]<br>&emsp;<span class=orange>if</span> length < 8:<br>&emsp;&emsp;<span class=orange>return</span><br>&emsp;tur.pu()<br>&emsp;<span class=orange>if</span> i:<br>&emsp;&emsp;tur.goto(tx,ty)<br>&emsp;&emsp;tur.color(<span class=green>"white"</span>)<br>&emsp;&emsp;tur.begin_fill()<br>&emsp;&emsp;tur.pd()<br>&emsp;&emsp;<span class=orange>for</span> i <span class=orange>in</span> <span class=purple>range</span>(3):<br>&emsp;&emsp;&emsp;tur.forward(length)<br>&emsp;&emsp;&emsp;tur.right(120)<br>&emsp;&emsp;tur.end_fill()<br>&emsp;tur.goto(tx-(length/4),ty-(length*rt3/2))<br>&emsp;tur.color(<span class=green>"black"</span>)<br>&emsp;tur.begin_fill()<br>&emsp;tur.goto(tx+(length/4),ty-(length*rt3/2))<br>&emsp;tur.goto(tx,ty-(length*rt3))<br>&emsp;tur.end_fill()<br>&emsp;triangle([tx,ty],length/2)<br>&emsp;triangle([tx-(length/4),ty-(length*rt3/2)],length/2)<br>&emsp;triangle([tx+(length/4),ty-(length*rt3/2)],length/2)<br><br>length = 380<br>rt3 = math.sqrt(3)/2<br><span class=orange>while True</span>:<br>&emsp;tur.bgcolor(<span class=green>"black"</span>)<br>&emsp;tur.ht()<br>&emsp;tur.speed(0)<br>&emsp;tur.seth(-60)<br>&emsp;triangle([0,length*rt3],length*2,<span class=orange>True</span>)<br>&emsp;time.sleep(10)<br>&emsp;tur.reset()<br></code></a><div class=image><a target=blank href="/turtle/fractals/images/sierpinski triangle.jpg"><span class="tooltip_ mouse">Sierpinski Triangle</span><img src="images/sierpinski triangle.jpg" alt="a sqaure triangle fractal with one quarter repeatedly removed, called a Sierpinski Triangle"></a></div><div class=vid><iframe src="https://youtube.com/embed/rZIWzLYBPIE?mute=1" allow="autoplay encrypted-media" allowfullscreen>Video Unavailable</iframe></div></div><div id=snow class="box colour-5"><div class=h2><h2>Koch Snowflake</h2></div> <a class=code download href="/turtle/pyscripts/Koch Snowflake.py" target=blank><code><span class="tooltip_ mouse">Click to download</span><h3>Code</h3> <span class=orange>import</span> turtle <span class=orange>as</span> tur<br><span class=orange>import</span> math, time<br><span class=orange>def</span> <span class=blue>rotate</span>(origin, point, angle):<br>&emsp;qx = origin[0] + math.cos(angle) * (point[0] - origin[0]) -<br>&emsp;&emsp;math.sin(angle) * (point[1] - origin[1])<br>&emsp;qy = origin[1] + math.sin(angle) * (point[0] - origin[0]) +<br>&emsp;&emsp;math.cos(angle) * (point[1] - origin[1])<br>&emsp;<span class=orange>return</span> qx, qy<br><br><span class=orange>def</span> <span class=blue>line</span>(startx,starty, endx,endy):<br>&emsp;fullx = endx-startx<br>&emsp;fully = endy-starty<br>&emsp;distance = math.sqrt(fully**2+fullx**2)<br>&emsp;<span class=orange>if</span> distance < 5:<br>&emsp;&emsp;tur.pu()<br>&emsp;&emsp;tur.goto(startx,starty)<br>&emsp;&emsp;tur.pd()<br>&emsp;&emsp;tur.goto(endx,endy)<br>&emsp;&emsp;<span class=orange>return</span><br>&emsp;thirdx = fullx/ 3<br>&emsp;thirdy = fully/ 3<br>&emsp;Ax = thirdx+startx<br>&emsp;Ay = thirdy+starty<br>&emsp;Cx = 2*thirdx+startx<br>&emsp;Cy = 2*thirdy+starty<br>&emsp;Bx,By = rotate([Ax,Ay],[startx,starty],-math.pi/1.5)<br>&emsp;line(startx,starty, Ax,Ay)<br>&emsp;line(Ax,Ay, Bx,By)<br>&emsp;line(Bx,By, Cx,Cy)<br>&emsp;line(Cx,Cy, endx,endy)<br><br>length = 20<br>rt3 = math.sqrt(3)<br><span class=orange>while True</span>:<br>&emsp;tur.color(<span class=green>"cyan"</span>)<br>&emsp;tur.bgcolor(<span class=green>"black"</span>)<br>&emsp;tur.ht()<br>&emsp;tur.speed(0)<br>&emsp;line(-length*rt3,length, length*rt3,length)<br>&emsp;line(length*rt3,length, 0,-length*2)<br>&emsp;line(0,-length*2, -length*rt3,length)<br>&emsp;time.sleep(10)<br>&emsp;tur.reset()<br></code></a><div class=image><a target=blank href="/turtle/fractals/images/koch snowflake.jpg"><span class="tooltip_ mouse">Koch Snowflake</span><img src="images/koch snowflake.jpg" alt="a snowflake fractal in the shape of a hexagon, called a Koch Snowflake"></a></div><div class=vid><iframe src="https://youtube.com/embed/1coK5WjWqvU?mute=1" allow="autoplay encrypted-media" allowfullscreen>Video Unavailable</iframe></div></div></section><?php include "../../footer.php"?></script><script src=../../main.js></script><?php include "../../scripts.php"?></html> 