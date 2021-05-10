<!doctype html>
<html>
<head>
<title>Hangman Solver</title>
<?php include "../main.php" ?>
<link rel=stylesheet href=hangman.css?v=1>
<?php include "../meta.php" ?>
<meta name=description content="This hangman solver figures out your word by looking up what other people have done before you! Then, it learns and improves based on what you do.">
<meta name=keywords content="hangman solver">
<meta name=viewport content="width=device-width,initial-scale=1">
<meta name=subject content="hangman">
</head><?php include "../header.php" ?>
<section>
<div class=section id=top>
<h1 class="colour pad-1">Hangman Solver</h1>
</div>
<div class="section text">
<h2>What it is</h2>
<p>This hangman solver uses a <span class=font-italic>Reward-based selection algorithmn</span> to determine the most likely letter that you are thinking of by searching through a lexicon of text. It evaluates the words that come up more frequently, so it learns over time which words are more common in hangman than in the dictionary!</p>
</div>
<div class="section text">
<h2>How to use</h2>
<p>Think of a word and input the length. Then, select the letters as it makes each guess. If there are none, just click next and see how long it takes to guess your word!</p>
</div>
<div class="section interactive" id=main>
<div class="main mx-0 w-100">
<p>Think of a word:</4>
<h2 class=pad-1>Length</h2>
<div class="main d-none"><div class="mx-auto pad-2 w-100"><p class=guess></p><div class=buttons></div><p class=info></p><button class="major done">Done</button></div></div>
<select class="mdb-select md-form my-2 mx-auto" id=length>
<?php for ($i = 4; $i <= 12; $i++){
if ($i == 5){
echo "<option value=$i selected>$i</option>";
} else {
echo "<option value=$i>$i</option>";
}
}
?>
</select>
</div><button id=start class="major mt-5">Start</button></div>
<script type="text/javascript" src=sdk/lib/axios/dist/axios.standalone.js></script>
<script type="text/javascript" src=sdk/lib/cryptojs/rollups/hmac-sha256.js></script>
<script type="text/javascript" src=sdk/lib/cryptojs/rollups/sha256.js></script>
<script type="text/javascript" src=sdk/lib/cryptojs/components/hmac.js></script>
<script type="text/javascript" src=sdk/lib/cryptojs/components/enc-base64.js></script>
<script type="text/javascript" src=sdk/lib/url-template/url-template.js></script>
<script type="text/javascript" src=sdk/lib/apigatewaycore/sigv4client.js></script>
<script type="text/javascript" src=sdk/lib/apigatewaycore/apigatewayclient.js></script>
<script type="text/javascript" src=sdk/lib/apigatewaycore/simplehttpclient.js></script>
<script type="text/javascript" src=sdk/lib/apigatewaycore/utils.js></script>
<script type="text/javascript" src=sdk/apigClient.js></script>
<?php include "../footer.php" ?></section>
<?php include "../scripts.php" ?>
<script src=hangman.js?v=2></script>
</script>
</html>