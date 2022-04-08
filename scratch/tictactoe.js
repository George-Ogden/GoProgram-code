let move_promise, thinking = !1;
const size = 5;
const umpire = new Noughts_and_Crosses(size,4)
pieces = {0:".",1:"X","-1":"O",".":0,"X":1,"O":-1}
const player = {move : async function(t,m){
    w = (t.rss() % 2) * 2 - 1
    let r = await this.request(Matrix.flatten(t).data[0].map(x => pieces[x]).join(""))
    if (200 == r.status) {
        // console.log(r.responseText)
        return Matrix.multiply(Matrix.resize(Matrix.fromArray([r.responseText.toUpperCase().split("").map(x => pieces[x])]),5,5),w)
    } else console.error("Error!");
},request : function(board){
    // console.log(board)
    return new Promise(function (resolve, reject) {
        let xhr = new XMLHttpRequest();
        xhr.open(
              "GET",
              `https://api.goprogram.ai/tictactoe?board=${board}`);
        xhr.onload = function () {
            if (this.status == 200) {
                resolve(xhr);
            } 
        };
        xhr.send();
    });

}};
function endGame() {
    finishMove(),
    thinking = !0
}
function finishMove() {
    thinking = !1,
    $(".cover").addClass("d-none"),
    $(".cover").removeClass("darken d-flex")
}
async function displayBoard(t) {
    for (let o = 0; o < t.rows; o++)
        for (let e = 0; e < t.cols; e++) {
            let n = t.data[o][e];
            0 != n && ($(`[row=${o}][col=${e}].box circle`).css({
                background: n < 0 ? "red" : "blue",
                opacity: 1
            }),
            $(`[row=${o}][col=${e}].box`).css("background", "var(--primary-light)"),
            $(`[row=${o}][col=${e}].box`).hasClass("taken") || $(`[row=${o}][col=${e}].box`).addClass("taken"))
        }
}
async function animateMove() {
}
function resize() {
    $("#board").height($("#board").width())
}
$("#board").on("mouseenter", function() {
    $(this).off("mouseenter"),
    umpire.challenge(player)
}),
$(window).resize(resize),
resize(),
$("td.box").on("mouseover", function() {
    if (!thinking && !$(this).is(".taken")){
        $(this).css("background","var(--base)")
        $(this).children("circle").css({
            opacity: "0.3",
            background: "red"
        })
    }
}),
$("td.box").on("mouseout", function() {
    if (!thinking && !$(this).is(".taken")){
        $(this).css("background","var(--primary-light)")
        $(this).children("circle").css("background","transparent")
    }
}),
$("td.box").on("click", function() {
    if (!thinking && !$(this).is(".taken")){
        thinking = true,
        $(".cover").removeClass("d-none"),
        $(".cover").addClass("darken d-flex"),
        $(".box:not(.taken) circle").css("background", "transparent"),
        $(".box").css("background", "var(--primary-light)")
        move_promise([$(this).attr("row"),$(this).attr("col")])
    }
})