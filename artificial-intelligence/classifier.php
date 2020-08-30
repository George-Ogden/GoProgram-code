<!doctype html><html><head><title>Colour Classifier</title><link rel=stylesheet href=classifier.css><link rel=stylesheet href=../fonts.css><link rel=stylesheet href=../main.css><link rel=stylesheet href=../colours.css><?php include "../meta.php"?><meta name=description content="A website with a wide variety of showcased programming projects, including an artificial intelligence colour classifier."><meta name=keywords content="code, programming, GoProgram, JavaScript, colour, converter, AI, artificial, intelligence"><meta name=viewport content="width=device-width,initial-scale=1"><meta name=subject content=programming></head><?php include "../header.php"?><nav><ul><li><a href=index>Welcome</a></li>|<li><a href=code>Code</a></li>|<li><a href=../online/converter>Colour Converter</a></li></ul></nav><section><div id=return><span class="tooltip_ bottom">Top of page</span><div class=container><a href=#><i class="fa fa-angle-double-up"></i></a></div></div><div id=top><h1>Colour Classifier</h1></div><div id=about class="box colour-2"><div class=h2><h2>What it is</h2></div><div class=p>This colour classifier will convert the inputed colour into its red, green and blue elements, then feed that into the neural network. The neural network processes the information and outputs a number between -1 and 1, which represents whether the text should be black or white. The same technology is used in the colour converter.</div></div><div id=text class="box colour-3"><div class=h2><h2>How to use it</h2></div><div class=p>Input red, green and blue values and the artificial intelligence will change the text colour of the output below.</div></div><div id=inputs class="box colour-4"><div class=h2><h2>Inputs</h2></div><form><div id=red><input id=redInput class=input type=input min=0 max=255 value=255><input id=redSlider class=slider type=range min=0 max=255 step=1></div><div id=green><input id=greenInput class=input type=input min=0 max=255 value=255><input id=greenSlider class=slider type=range min=0 max=255 step=1></div><div id=blue><input id=blueInput class=input type=input min=0 max=255 value=255><input id=blueSlider class=slider type=range min=0 max=255 step=1></div></form></div><div id=output class="box colour-5"><div class=h2><h2>Output</h2></div><div class=p>This colour is chosen by an AI!</div></div><script src=scripts/Matrix.js></script><script src=scripts/lambertw.js></script><script src=scripts/activation_functions.js></script><script src=scripts/ANN.js></script><script src=classifier.js></script></section><div id=cookie></div><?php include "../footer.php"?><script src=../main.js></script><?php include "../scripts.php"?></html>