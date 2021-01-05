let length = 0;
var client = apigClientFactory.newClient();
var word = "";
var used = "";
$("#start").on("click", run);
function run() {
    $("#start").hide();
    length = parseInt($("#length").val());
    word = "_".repeat(length);
    $(".section.interactive > .main > *").hide();
    $(".section.interactive .main .main").removeClass("d-none");
    $(".section.interactive .main .main").show();
    update();
}
// run();
function guess() {
    $(".section.interactive .main .main .guess").text("Guess: ?");
    $(".section.interactive .main .main .info").text("Thinking ...");
    client
    .guess(word, used)
    .then(function (result) {
        if (result.status >= 200 && result.status < 300){
            var letter = result.data.toUpperCase()
            $(".section.interactive .main .main button.done").show();
            $(".section.interactive .main .main .guess").html(`Guess: <span class=font-weight-bold>${letter}</span>`);
            $(".section.interactive .main .main .info").html(`Please, select the all the letters that are <span class=font-weight-bold>${letter}</span><br> Then, press "Done"`);
            $(".section.interactive .main .main .info").after(``);
            $("button.letter.available").prop("disabled", false);
            $("button.letter.available").on("click", function () {
                $(this).text($(this).text() == "_" ? letter:'_');
            });
            $("button.done").on("click",function(){
                word = ""
                used += letter
                $("button.letter").each(function(){word += $(this).text()})
                update()
            })
        }
    })
    .catch((e) => console.log(e));
}
function update() {
    $("button").unbind("click")
    html = "";
    for (var letter of word) {
        html += `<button class="letter my-5 d-inline${letter == "_" ? " available" : ""}" disabled>${letter}</button>`;
    }
    $(".section.interactive .main .buttons").html(html);
    if (length * 40 > $(".section.interactive .main .main .buttons").width()){
        $(".section.interactive .main .main .buttons button.letter").css("font-size",`${$(".section.interactive .main .main .buttons").width()/length/20}em`)
        $(".section.interactive .main .main .buttons button.letter").width($(".section.interactive .main .main .buttons ").width()/length)

    }
    if (used.length > 25){
        $(".section.interactive .main .main .guess").html(`I'm out of guesses!`);
        $(".section.interactive .main .main .info").html(`Something seems wrong!`);
        $(".section.interactive .main .main button.done").text("Reset");
        $(".section.interactive .main .main button.done").on("click",function(){location.reload()});
    } else if (word.includes("_")){
        $(".section.interactive .main .main button.done").hide();
        guess()
    } else {
        var guesses = used.length
        $(".section.interactive .main .main .guess").html(`Wow! That took ${guesses} guess${guesses == 1 ? "":"es"}<br> and ${guesses - new Set(word).size} ${guesses - new Set(word).size == 1 ? "was" : "were"} incorrect!`);
        $(".section.interactive .main .main .info").html(`Thanks for using this tool and improving the AI for the next user!`);
        $(".section.interactive .main .main button.done").text("Reset");
        $(".section.interactive .main .main button.done").on("click",function(){location.reload()});
        client.update(word)
    }
}
$("section").animate({scrollTop:$("#main").offset().top},2e3,"easeOutExpo")