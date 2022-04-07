let move_promise, thinking = !1;
const umpire = new Noughts_and_Crosses(5,4)
const player = {move : function(){
    return Matrix.fromArray([[1,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0]])
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
    umpire.challenge(player,1)
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
        move_promise([$(this).attr("row"),$(this).attr("col")])
        $(".cover").removeClass("d-none"),
        $(".cover").addClass("darken d-flex"),
        $(".box:not(.taken) circle").css("background", "transparent"),
        $(".box").css("background", "var(--primary-light)")
    }
    // !thinking && $(`[col=${$(this).attr("pos")}]:not(.taken)`).length > 0 && (move_promise([Object.values($(`[col=${$(this).attr("col")}]:not(.taken)`)).reduce((t,o)=>Math.max(t, $(o).attr("row") || 0), 0), $(this).attr("col")]),
})