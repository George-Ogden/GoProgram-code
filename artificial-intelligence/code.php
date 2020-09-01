<!doctype html><html><head><title>JavaScript AI Library</title><link rel=stylesheet href=code.css><link rel=stylesheet href=../fonts.css><link rel=stylesheet href=../turtle/turtle.css><link rel=stylesheet href=../main.css><link rel=stylesheet href=../colours.css><?php include "../meta.php"?><meta name=description content="A website with a wide variety of showcased programming projects, some of which involve artificial intelligence."><meta name=keywords content="code, programming, GoProgram, JavaScript, code, AI, artificial intelligence"><meta name=viewport content="width=device-width,initial-scale=1"><meta name=subject content=programming></head><?php include "../header.php"?><nav><ul><li><a href=#>Welcome</a></li>|<li><a href=#matrix>Matrix</a></li>|<li><a href=#lambertw>Lambert W Function</a></li>|<li><a href=#functions>Activation Functions</a></li>|<li><a href=#ann>Neural Network</a></li>|</ul></nav><section><div id=return><span class="tooltip_ bottom">Top of page</span><div class=container><a href=#><i class="fa fa-angle-double-up"></i></a></div></div><div id=top><h1>AI Library</h1></div><div id=about class="box colour-1"><div class=h2><span class="tooltip_ mouse">View GitHub Repository</span><a href=https://github.com/George-Ogden/Machine-Learning target=_blank><h2>About</h2></a></div><div class=p>All of the files below can be downloaded and imported. They are all required to make a neural network and are all original. It is available on GitHub and can be used freely.</div></div><div id=matrix class="box colour-2"><div class=h2><h2>Matrix</h2></div><a href=/artificial-intelligence/scripts/Matrix.js target=_blankclass=code download><code><span class="tooltip_ mouse">Click to download</span><h3>Code</h3><span class=orange>class</span><span class=blue>Matrix</span> {<br>&emsp;<span class=blue>constructor</span>(rows = 0, columns = 0){<br>&emsp;&emsp;this.data = [];<br>&emsp;&emsp;this.rows = rows;<br>&emsp;&emsp;this.cols = columns;<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < rows; i++){<br>&emsp;&emsp;&emsp;this.data.push([]);<br>&emsp;&emsp;&emsp;<span class=orange>for</span> (let j = 0; j < columns; j++){<br>&emsp;&emsp;&emsp;&emsp;this.data[i].push(1);<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;}<br>&emsp;&emsp;this.randomise();<br>&emsp;}<br>&emsp;<span class=orange>static</span><span class=blue>fromArray</span>(array){<br>&emsp;&emsp;let new_matrix = <span class=orange>new</span> Matrix(array.length, array[0].length);<br>&emsp;&emsp;new_matrix.data = array;<br>&emsp;&emsp;<span class=orange>return</span> new_matrix;<br>&emsp;}<br>&emsp;<span class=blue>toArray</span>(array){<br>&emsp;&emsp;<span class=orange>return</span> this.data;<br>&emsp;}<br>&emsp;<span class=blue>set</span>(matrix){<br>&emsp;&emsp;this.rows = matrix.rows;<br>&emsp;&emsp;this.cols = matrix.cols;<br>&emsp;&emsp;this.data = matrix.data;<br>&emsp;}<br>&emsp;<span class=blue>show</span>(){<br>&emsp;&emsp;console.table(this.data);<br>&emsp;&emsp;<span class=orange>return</span> this.data;<br>&emsp;}<br>&emsp;<span class=blue>map</span>(func, matrix = <span class=orange>null</span>){<br>&emsp;&emsp;<span class=orange>if</span> (matrix){<br>&emsp;&emsp;&emsp;let new_matrix = <span class=orange>new</span> Matrix(this.rows, this.cols);<br>&emsp;&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < this.rows; i++){<br>&emsp;&emsp;&emsp;&emsp;<span class=orange>for</span> (let j = 0; j < this.cols; j++){<br>&emsp;&emsp;&emsp;&emsp;&emsp;new_matrix.data[i][j] = func(this.data[i][j], matrix.data[i][j]);<br>&emsp;&emsp;&emsp;&emsp;}<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;&emsp;<span class=orange>return</span> new_matrix;<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < this.rows; i++){<br>&emsp;&emsp;&emsp;<span class=orange>for</span> (let j = 0; j < this.cols; j++){<br>&emsp;&emsp;&emsp;&emsp;this.data[i][j] = func(this.data[i][j]);<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;}<br>&emsp;}<br>&emsp;<span class=orange>static</span><span class=blue>map</span>(matrix, func){<br>&emsp;&emsp;let new_matrix = Matrix.fromArray(matrix.data);<br>&emsp;&emsp;new_matrix.map(func);<br>&emsp;&emsp;<span class=orange>return</span> new_matrix;<br>&emsp;}<br>&emsp;<span class=blue>randomise</span>(){<br>&emsp;&emsp;this.map(Math.random);<br>&emsp;}<br>&emsp;<span class=blue>reset</span>(){<br>&emsp;&emsp;this.map(x => 0);<br>&emsp;}<br>&emsp;<span class=blue>transpose</span>(){<br>&emsp;&emsp;this.set(Matrix.transpose(this));<br>&emsp;}<br>&emsp;<span class=orange>static</span><span class=blue>transpose</span>(matrix){<br>&emsp;&emsp;let image = <span class=orange>new</span> Matrix(matrix.cols, matrix.rows);<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < matrix.rows; i++){<br></matrix.rows> &emsp;&emsp;&emsp;<span class=orange>for</span> (let j = 0; j < matrix.cols; j++){<br></matrix.cols> &emsp;&emsp;&emsp;&emsp;image.data[j][i] = matrix.data[i][j];<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>return</span> image;<br>&emsp;}<br>&emsp;<span class=orange>static</span><span class=blue>add</span>(matrix1, matrix2){<br>&emsp;&emsp;<span class=orange>return</span> matrix1.map((x, y) => x + y, matrix2);<br>&emsp;}<br>&emsp;<span class=blue>add</span>(matrix){<br>&emsp;&emsp;this.set(Matrix.add(this, matrix));<br>&emsp;}<br>&emsp;<span class=orange>static</span><span class=blue>subtract</span>(matrix1, matrix2){<br>&emsp;&emsp;<span class=orange>return</span> matrix1.map((x, y) => x - y, matrix2);<br>&emsp;}<br>&emsp;<span class=blue>subtract</span>(matrix){<br>&emsp;&emsp;this.set(Matrix.subtract(this, matrix));<br>&emsp;}<br>&emsp;<span class=blue>multiply</span>(n){<br>&emsp;&emsp;<span class=orange>if</span> (typeof n == "number"){<br>&emsp;&emsp;&emsp;this.map(x => x * n);<br>&emsp;&emsp;} <span class=orange>else</span> {<br>&emsp;&emsp;&emsp;this.set(this.map((x, y) => x * y, n));<br>&emsp;&emsp;}<br>&emsp;}<br>&emsp;<span class=orange>static</span><span class=blue>multiply</span>(matrix, n){<br>&emsp;&emsp;<span class=orange>return</span> Matrix.fromArray(matrix.data).multiply(n);<br>&emsp;}<br>&emsp;<span class=orange>static</span><span class=blue>dot</span>(matrix1, matrix2){<br>&emsp;&emsp;<span class=orange>if</span> ((matrix1.cols = matrix2.rows)){<br>&emsp;&emsp;&emsp;let new_matrix = <span class=orange>new</span> Matrix(matrix1.rows, matrix2.cols);<br>&emsp;&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < new_matrix.rows; i++){<br>&emsp;&emsp;&emsp;&emsp;<span class=orange>for</span> (let j = 0; j < new_matrix.cols; j++){<br>&emsp;&emsp;&emsp;&emsp;&emsp;let valueue = 0;<br>&emsp;&emsp;&emsp;&emsp;&emsp;<span class=orange>for</span> (let k = 0; k < matrix1.cols; k++){<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;valueue += matrix1.data[i][k] * matrix2.data[k][j];<br>&emsp;&emsp;&emsp;&emsp;&emsp;}<br>&emsp;&emsp;&emsp;&emsp;&emsp;new_matrix.data[i][j] = valueue;<br>&emsp;&emsp;&emsp;&emsp;}<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;&emsp;<span class=orange>return</span> new_matrix;<br>&emsp;&emsp;} <span class=orange>else</span> {<br>&emsp;&emsp;&emsp;matrix1.show();<br>&emsp;&emsp;&emsp;matrix2.show();<br>&emsp;&emsp;}<br>&emsp;}<br>&emsp;<span class=blue>dot</span>(matrix){<br>&emsp;&emsp;this.set(Matrix.dot(this, matrix));<br>&emsp;}<br>&emsp;<span class=blue>rss</span>(){<br>&emsp;&emsp;let valueue = 0;<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < this.rows; i++){<br>&emsp;&emsp;&emsp;<span class=orange>for</span> (let j = 0; j < this.cols; j++){<br>&emsp;&emsp;&emsp;&emsp;valueue += this.data[i][j] * this.data[i][j];<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>return</span> valueue;<br>&emsp;}<br>&emsp;<span class=blue>sum</span>(){<br>&emsp;&emsp;<span class=orange>return</span> this.data.reduce((x, y) => x[0] + y.reduce((x, y) => x + y));<br>&emsp;&emsp;let valueue;<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < this.rows; i++){<br>&emsp;&emsp;&emsp;<span class=orange>for</span> (let j = 0; j < this.cols; j++){<br>&emsp;&emsp;&emsp;&emsp;valueue += data[i][j];<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>return</span> valueue;<br>&emsp;}<br>&emsp;<span class=orange>static</span><span class=blue>flatten</span>(matrix){<br>&emsp;&emsp;let new_matrix = <span class=orange>new</span> Matrix(1, matrix.rows * matrix.cols);<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < matrix.rows; i++){<br>&emsp;&emsp;&emsp;<span class=orange>for</span> (let j = 0; j < matrix.cols; j++){<br>&emsp;&emsp;&emsp;&emsp;new_matrix.data[0][i * matrix.cols + j] = matrix.data[i][j];<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>return</span> new_matrix;<br>&emsp;}<br>&emsp;<span class=orange>flatten</span>(){<br>&emsp;&emsp;this.set(Matrix.flatten(this));<br>&emsp;}<br>&emsp;<span class=blue>subsection</span>(x, y, rows, cols){<br>&emsp;&emsp;let new_matrix = <span class=orange>new</span> Matrix(rows, cols);<br>&emsp;&emsp;<span class=orange>for</span> (let i = x; i < x + rows; i++){<br>&emsp;&emsp;&emsp;<span class=orange>for</span> (let j = y; j < y + cols; j++){<br>&emsp;&emsp;&emsp;&emsp;new_matrix.data[i - x][j - y] = this.data[i][j];<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>return</span> new_matrix;<br>&emsp;}<br>&emsp;<span class=blue>copy</span>(){<br>&emsp;&emsp;<span class=orange>return</span> Matrix.fromArray(this.data);<br>&emsp;}<br>} </code></a></div><div id=lambertw class="box colour-3"><div class=h2><h2>Lambert W Function</h2></div><a href=/artificial-intelligence/scripts/lambertw.js target=_blankclass=code download><code><span class="tooltip_ mouse">Click to download</span><h3>Code</h3> const GSL_DBL_EPSILON = 2.2204460492503131e-16;<br>const one_over_E = 1 / Math.E;<br><span class=orange>function</span><span class=blue>halley_iteration</span>(x, w_initial, MAX_ITERATIONS){<br>&emsp;let w = w_initial,<br>&emsp;&emsp;i;<br>&emsp;let result = {};<br>&emsp;<span class=orange>for</span> (i = 0; i < MAX_ITERATIONS; i++){<br>&emsp;&emsp;let tol;<br>&emsp;&emsp;let e = Math.exp(w);<br>&emsp;&emsp;let p = w + 1.0;<br>&emsp;&emsp;let t = w * e - x;<br>&emsp;&emsp;<span class=orange>if</span> (w > 0){<br>&emsp;&emsp;&emsp;t = t / p / e;<br>&emsp;&emsp;} <span class=orange>else</span> {<br>&emsp;&emsp;&emsp;t /= e * p - 0.5 * (p + 1.0) * t / p;<br>&emsp;&emsp;}<br>&emsp;&emsp;w -= t;<br>&emsp;&emsp;tol = GSL_DBL_EPSILON * Math.max(Math.abs(w), 1.0 / (Math.abs(p) * e));<br>&emsp;&emsp;<span class=orange>if</span> (Math.abs(t) < tol){<br>&emsp;&emsp;&emsp;<span class=orange>return</span> {<br>&emsp;&emsp;&emsp;&emsp;value: w,<br>&emsp;&emsp;&emsp;&emsp;error: 2.0 * tol,<br>&emsp;&emsp;&emsp;&emsp;iters: i,<br>&emsp;&emsp;&emsp;&emsp;success: <span class=orange>true</span>,<br>&emsp;&emsp;&emsp;};<br>&emsp;&emsp;}<br>&emsp;}<br>&emsp;<span class=orange>return</span> {<br>&emsp;&emsp;value: w,<br>&emsp;&emsp;error: Math.abs(w),<br>&emsp;&emsp;iters: i,<br>&emsp;&emsp;success: <span class=orange>false</span>,<br>&emsp;};<br>}<br><span class=orange>function</span><span class=blue>series_eval</span>(r){<br>&emsp;const c = [<br>&emsp;&emsp;-1.0,<br>&emsp;&emsp;2.331643981597124203363536062168,<br>&emsp;&emsp;-1.812187885639363490240191647568,<br>&emsp;&emsp;1.936631114492359755363277457668,<br>&emsp;&emsp;-2.353551201881614516821543561516,<br>&emsp;&emsp;3.066858901050631912893148922704,<br>&emsp;&emsp;-4.17533560025817713885498417746,<br>&emsp;&emsp;5.858023729874774148815053846119,<br>&emsp;&emsp;-8.401032217523977370984161688514,<br>&emsp;&emsp;12.250753501314460424,<br>&emsp;&emsp;-18.100697012472442755,<br>&emsp;&emsp;27.02904479901056165,<br>&emsp;];<br>&emsp;const t_8 = c[8] + r * (c[9] + r * (c[10] + r * c[11]));<br>&emsp;const t_5 = c[5] + r * (c[6] + r * (c[7] + r * t_8));<br>&emsp;const t_1 = c[1] + r * (c[2] + r * (c[3] + r * (c[4] + r * t_5)));<br>&emsp;<span class=orange>return</span> c[0] + r * t_1;<br>}<br><span class=orange>function</span><span class=blue>lambert_W0_e</span>(x){<br>&emsp;const one_over_E = 1.0 / Math.E;<br>&emsp;const q = x + one_over_E;<br>&emsp;let result = {};<br>&emsp;<span class=orange>if</span> (x == 0.0){<br>&emsp;&emsp;result.value = 0.0;<br>&emsp;&emsp;result.error = 0.0;<br>&emsp;&emsp;result.success = <span class=orange>true</span>;<br>&emsp;&emsp;<span class=orange>return</span> result;<br>&emsp;} <span class=orange>else if</span> (q < 0.0){<br>&emsp;&emsp;result.value = -1.0;<br>&emsp;&emsp;result.error = Math.sqrt(-q);<br>&emsp;&emsp;result.success = <span class=orange>false</span>;<br>&emsp;&emsp;<span class=orange>return</span> result;<br>&emsp;} <span class=orange>else if</span> (q == 0.0){<br>&emsp;&emsp;result.value = -1.0;<br>&emsp;&emsp;result.error = GSL_DBL_EPSILON;<br>&emsp;&emsp;result.success = <span class=orange>true</span>;<br>&emsp;&emsp;<span class=orange>return</span> result;<br>&emsp;} <span class=orange>else if</span> (q < 1.0e-3){<br>&emsp;&emsp;const r = Math.sqrt(q);<br>&emsp;&emsp;result.value = series_eval(r);<br>&emsp;&emsp;result.error = 2.0 * GSL_DBL_EPSILON * Math.abs(result.value);<br>&emsp;&emsp;result.success = <span class=orange>true</span>;<br>&emsp;&emsp;<span class=orange>return</span> result;<br>&emsp;} <span class=orange>else</span> {<br>&emsp;&emsp;const MAX_ITERATIONS = 100;<br>&emsp;&emsp;let w;<br>&emsp;&emsp;<span class=orange>if</span> (x < 1.0){<br>&emsp;&emsp;&emsp;const p = Math.sqrt(2.0 * Math.E * q);<br>&emsp;&emsp;&emsp;w = -1.0 + p * (1.0 + p * (-1.0 / 3.0 + p * 11.0 / 72.0));<br>&emsp;&emsp;} <span class=orange>else</span> {<br>&emsp;&emsp;&emsp;w = Math.log(x);<br>&emsp;&emsp;&emsp;<span class=orange>if</span> (x > 3.0) w -= Math.log(w);<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>return</span> halley_iteration(x, w, MAX_ITERATIONS, result);<br>&emsp;}<br>}<br><span class=orange>function</span><span class=blue>lambert_Wm1_e</span>(x){<br>&emsp;let result = {};<br>&emsp;<span class=orange>if</span> (x > 0.0){<br>&emsp;&emsp;<span class=orange>return</span> lambert_W0_e(x);<br>&emsp;} <span class=orange>else if</span> (x == 0.0){<br>&emsp;&emsp;result.value = 0.0;<br>&emsp;&emsp;result.error = 0.0;<br>&emsp;&emsp;result.success = <span class=orange>true</span>;<br>&emsp;&emsp;<span class=orange>return</span> result;<br>&emsp;} <span class=orange>else</span> {<br>&emsp;&emsp;const MAX_ITERATIONS = 32;<br>&emsp;&emsp;const one_over_E = 1.0 / Math.E;<br>&emsp;&emsp;const q = x + one_over_E;<br>&emsp;&emsp;let w;<br>&emsp;&emsp;<span class=orange>if</span> (q < 0.0){<br>&emsp;&emsp;&emsp;result.value = -1.0;<br>&emsp;&emsp;&emsp;result.error = Math.sqrt(-q);<br>&emsp;&emsp;&emsp;result.success = <span class=orange>false</span>;<br>&emsp;&emsp;&emsp;<span class=orange>return</span> result;<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>if</span> (x < -1.0e-6){<br>&emsp;&emsp;&emsp;const r = -Math.sqrt(q);<br>&emsp;&emsp;&emsp;w = series_eval(r);<br>&emsp;&emsp;&emsp;<span class=orange>if</span> (q < 3.0e-3){<br>&emsp;&emsp;&emsp;&emsp;result.value = w;<br>&emsp;&emsp;&emsp;&emsp;result.error = 5.0 * GSL_DBL_EPSILON * Math.abs(w);<br>&emsp;&emsp;&emsp;&emsp;result.success = <span class=orange>true</span>;<br>&emsp;&emsp;&emsp;&emsp;<span class=orange>return</span> result;<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;} <span class=orange>else</span> {<br>&emsp;&emsp;&emsp;const L_1 = Math.log(-x);<br>&emsp;&emsp;&emsp;const L_2 = Math.log(-L_1);<br>&emsp;&emsp;&emsp;w = L_1 - L_2 + L_2 / L_1;<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>return</span> halley_iteration(x, w, MAX_ITERATIONS);<br>&emsp;}<br>}<br><span class=orange>function</span><span class=blue>lambert_W0</span>(x){<br>&emsp;<span class=orange>return</span> lambert_W0_e(x).value;<br>}<br><span class=orange>function</span><span class=blue>lambert_Wm1</span>(x){<br>&emsp;<span class=orange>return</span> lambert_Wm1_e(x).value;<br>}</code></a></div><div id=functions class="box colour-4"><div class=h2><h2>Activation Functions</h2></div><a href=/artificial-intelligence/scripts/activation_functions.js target=_blank class=code download><code><span class="tooltip_ mouse">Click to download</span><h3>Code</h3><span class=orange>class</span><span class=blue>activation_function</span>{<br>&emsp;<span class=blue>constructor</span>(func,derivative){<br>&emsp;&emsp;this.function = func;<br>&emsp;&emsp;this.derivative = derivative;<br>&emsp;}<br>}<br>let sigmoid = <span class=orange>new</span> activation_function(x => 1/(1+Math.exp(-x)), x => x*(1-x));<br>let tanh = <span class=orange>new</span> activation_function(x => Math.tanh(x), x => 1-x*x);<br>let ReLU = <span class=orange>new</span> activation_function(x => (x > 0) ? x:0, x => (x > 0) ? 1:0);<br>let lReLU = <span class=orange>new</span> activation_function(x => (x > 0) ? x:0.1*x, x => (x > 0) ? 1:0.1);<br>let SoftPlus = <span class=orange>new</span> activation_function(x => Math.log(1+Math.exp(x)), x => 1-1/Math.exp(x));<br>let swish = <span class=orange>new</span> activation_function(x => x/(1+Math.exp(-x)), x => x+x*(1-x)/(lambert_W0(x*Math.exp(-x))+x));<br>activation_functions = {<span class=green>"sigmoid"</span>:sigmoid,<span class=green>"tanh"</span>:tanh,<span class=green>"ReLU"</span>:ReLU,<span class=green>"lReLU"</span>:lReLU,<span class=green>"SoftPlus"</span>:SoftPlus,<span class=green>"swish"</span>:swish} </code></a></div><div id=ann class="box colour-5"><div class=h2><h2>Neural Network</h2></div><a href=/artificial-intelligence/scripts/ANN.js target=_blank class=code download><code><span class="tooltip_ mouse">Click to download</span><h3>Code</h3><span class=orange>class</span><span class=blue>Neural_Network</span> {<br>&emsp;<span class=blue>constructor</span>(<br>&emsp;&emsp;inputs,<br>&emsp;&emsp;hidden_layers,<br>&emsp;&emsp;layer_thickness,<br>&emsp;&emsp;outputs,<br>&emsp;&emsp;activation_function,<br>&emsp;){<br>&emsp;&emsp;this.length = hidden_layers + 2;<br>&emsp;&emsp;this.width = layer_thickness;<br>&emsp;&emsp;this.weights = [];<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < this.length; i++){<br>&emsp;&emsp;&emsp;this.weights.push(<span class=orange>new</span> Matrix(this.width, this.width));<br>&emsp;&emsp;}<br>&emsp;&emsp;this.weights[0] = <span class=orange>new</span> Matrix(inputs, this.width);<br>&emsp;&emsp;this.weights[this.length - 1] = <span class=orange>new</span> Matrix(this.width, outputs);<br>&emsp;&emsp;this.biases = [];<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < this.length; i++){<br>&emsp;&emsp;&emsp;this.biases.push(<span class=orange>new</span> Matrix(1, this.width));<br>&emsp;&emsp;}<br>&emsp;&emsp;this.biases[this.length - 1] = <span class=orange>new</span> Matrix(1, outputs);<br>&emsp;&emsp;this.activation_function_name = activation_function;<br>&emsp;&emsp;this.activation_function = activation_functions[activation_function];<br>&emsp;&emsp;this.learning_rate = 0.1;<br>&emsp;}<br>&emsp;<span class=blue>show</span>(){<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < this.length; i++){<br>&emsp;&emsp;&emsp;this.weights[i].show();<br>&emsp;&emsp;&emsp;this.biases[i].show();<br>&emsp;&emsp;}<br>&emsp;}<br>&emsp;<span class=blue>feedforward</span>(inputs){<br>&emsp;&emsp;let output = Matrix.fromArray([inputs]);<br>&emsp;&emsp;this.process = [output.copy()];<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < this.length; i++){<br>&emsp;&emsp;&emsp;output.dot(this.weights[i]);<br>&emsp;&emsp;&emsp;output.add(this.biases[i]);<br>&emsp;&emsp;&emsp;output.map(this.activation_function.function);<br>&emsp;&emsp;&emsp;this.process.push(output.copy());<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>return</span> output.data[0];<br>&emsp;}<br>&emsp;<span class=blue>train</span>(training_data, n = 1){<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < n; i++){<br>&emsp;&emsp;&emsp;let r = Math.floor(Math.random() * training_data.length);<br>&emsp;&emsp;&emsp;let error = Matrix.subtract(<br>&emsp;&emsp;&emsp;&emsp;Matrix.fromArray([training_data[r][1]]),<br>&emsp;&emsp;&emsp;&emsp;Matrix.fromArray([this.feedforward(training_data[r][0])]),<br>&emsp;&emsp;&emsp;);<br>&emsp;&emsp;&emsp;<span class=orange>for</span> (let j = this.length - 1; j >= 0; j--){<br>&emsp;&emsp;&emsp;&emsp;let gradient = Matrix.map(<br>&emsp;&emsp;&emsp;&emsp;&emsp;this.process[j + 1],<br>&emsp;&emsp;&emsp;&emsp;&emsp;this.activation_function.derivative,<br>&emsp;&emsp;&emsp;&emsp;);<br>&emsp;&emsp;&emsp;&emsp;gradient.multiply(error);<br>&emsp;&emsp;&emsp;&emsp;gradient.multiply(this.learning_rate);<br>&emsp;&emsp;&emsp;&emsp;error.dot(Matrix.transpose(this.weights[j]));<br>&emsp;&emsp;&emsp;&emsp;this.biases[j].add(gradient);<br>&emsp;&emsp;&emsp;&emsp;this.weights[j].add(<br>&emsp;&emsp;&emsp;&emsp;&emsp;Matrix.dot(Matrix.transpose(this.process[j]), gradient),<br>&emsp;&emsp;&emsp;&emsp;);<br>&emsp;&emsp;&emsp;}<br>&emsp;&emsp;}<br>&emsp;}<br>&emsp;<span class=blue>cost</span>(training_data){<br>&emsp;&emsp;let value = 0;<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < training_data.length; i++){<br>&emsp;&emsp;&emsp;value += Matrix.subtract(<br>&emsp;&emsp;&emsp;&emsp;Matrix.fromArray([training_data[i][1]]),<br>&emsp;&emsp;&emsp;&emsp;Matrix.fromArray([this.feedforward(training_data[i][0])]),<br>&emsp;&emsp;&emsp;).rss();<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>return</span> value / training_data.length;<br>&emsp;}<br>&emsp;<span class=orange>static</span><span class=blue>from_string</span>(dict){<br>&emsp;&emsp;let network = <span class=orange>new</span> Neural_Network(<br>&emsp;&emsp;&emsp;dict.weights[0].rows,<br>&emsp;&emsp;&emsp;dict.length - 2,<br>&emsp;&emsp;&emsp;dict.weights[0].cols,<br>&emsp;&emsp;&emsp;dict.weights[dict.weights.length - 1].cols,<br>&emsp;&emsp;&emsp;dict.activation_function_name,<br>&emsp;&emsp;);<br>&emsp;&emsp;network.process = dict.process;<br>&emsp;&emsp;network.weights = dict.weights;<br>&emsp;&emsp;network.biases = dict.biases;<br>&emsp;&emsp;<span class=orange>for</span> (let i = 0; i < network.length; i++){<br>&emsp;&emsp;&emsp;network.weights[i] = Matrix.fromArray(network.weights[i].data);<br>&emsp;&emsp;&emsp;network.biases[i] = Matrix.fromArray(network.biases[i].data);<br>&emsp;&emsp;}<br>&emsp;&emsp;<span class=orange>return</span> network;<br>&emsp;}<br>}<br></code></a></div></section><?php include "../footer.php"?></script></script><?php include "../scripts.php"?>