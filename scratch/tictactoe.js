let move_promise, thinking = !1;
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
async function animateMove(t, o) {
    t = parseInt(t),
    distance = $("#board").offset().top - $(`[row=${t}][col=${o}].box circle`).offset().top,
    $(`[row=${t}][col=${o}].box circle`).css("transform", `translate(0,${distance}px`),
    await new Promise(t=>setTimeout(t, 100)),
    $(`[row=${t}][col=${o}].box circle`).css("transition", `transform ${Math.sqrt(-1 * distance) / 100}s cubic-bezier(.3,0,.69,.17)`),
    $(`[row=${t}][col=${o}].box circle`).css("transform", "translate(0,0)")
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
    !thinking && $(`[col=${$(this).attr("col")}]:not(.taken)`).length > 0 && ($(`[col=${$(this).attr("col")}]:not(.taken)`).css("background", "var(--base)"),
    $(`[row=${Object.values($(`[col=${$(this).attr("col")}]:not(.taken)`)).reduce((t,o)=>Math.max(t, $(o).attr("row") || 0), 0)}][col=${$(this).attr("col")}] circle`).css({
        opacity: "0.3",
        background: "red"
    }))
}),
$("td.box").on("click", function() {
    !thinking && $(`[col=${$(this).attr("col")}]:not(.taken)`).length > 0 && (move_promise([Object.values($(`[col=${$(this).attr("col")}]:not(.taken)`)).reduce((t,o)=>Math.max(t, $(o).attr("row") || 0), 0), $(this).attr("col")]),
    thinking = !0,
    $(".cover").removeClass("d-none"),
    $(".cover").addClass("darken d-flex"),
    $(".box:not(.taken) circle").css("background", "transparent"),
    $(".box").css("background", "var(--primary-light)"))
}),
$("td.box").on("mouseout", function() {
    $(`[col=${$(this).attr("col")}]:not(.taken)`).length > 0 && ($(`[col=${$(this).attr("col")}]:not(.taken)`).css("background", "var(--primary-light)"),
    $(`[row=${Object.values($(`[col=${$(this).attr("col")}]:not(.taken)`)).reduce((t,o)=>Math.max(t, $(o).attr("row") || 0), 0)}][col=${$(this).attr("col")}] circle`).css({
        background: "transparent"
    }))
});
