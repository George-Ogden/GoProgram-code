const size = 6,
	umpire = new Squares(size),
	sides=["top", "right", "bottom", "left"],
	player = new Player(umpire);
let move_promise,
	thinking = !1,
	box = false;
function endGame() {
	finishMove(), (thinking = !0), umpire.find();
}
function finishMove() {
	(thinking = !1),
		$(".cover").addClass("d-none"),
		$(".cover").removeClass("darken d-flex");
}

function colourSquare(board, x, y){
			let r = board.data[x][y];
            for (let j = 0; j < 4; j++){
                if (r % 3){
                    $(`[row=${y}][col=${x}]`).css(
                        `border-${sides[j]}`, ((r % 3) > 1 ? "blue":"red") +" 5px solid"
                    )
                } else {
                    $(`[row=${y}][col=${x}]`).css(
                        `border-${sides[j]}`, "none"
                    )
				}
                r = Math.floor(r/3);
            }
            if (r % 3){
                $(`[row=${y}][col=${x}].box`).css({
                    background: r > 1 ? "blue" : "red",
                    opacity: 1
                })
            }
}
function findQuadrant(square, mouse){
    let x = (mouse.x - square.left) / square.width
    let y = (mouse.y - square.top) / square.height
    if (x > 1 || x < 0 || y > 1 || y < 0){
        return -1;
    }
    if (x < y){
        if (x + y < 1){
            return 3
        } else {
            return 2
        }
    } else {
        if (x + y < 1){
            return 0
        } else {
            return 1
        }
    }
}

async function displayBoard(t) {
	for (let o = 0; o < t.rows; o++)
		for (let e = 0; e < t.cols; e++) {
            colourSquare(t, o, e)
		}
}
async function animateMove(b) {
	displayBoard(b)
}
function resize() {
	$("#board").height($("#board").width());
	$("table.guide").offset($("#board").offset())
	$("table.guide").width($("#board").width())
	$("table.guide").height($("#board").height())
}
(start = () => $("body").off("mouseenter")),
	$("section").off("scroll"),
	umpire.challenge(player),
	$("body").on("mouseenter", start),
	$("section").on("scroll", function () {
		$("section").height() - $("table#board").offset().top > 50 && start();
	}),
	$(window).resize(resize),
	resize(),
	$("td.box").on("mouseover", function (e) {
		if (!thinking){
            box = $(this)
			let q = findQuadrant($(this).get(0).getBoundingClientRect(), {x: e.pageX, y:e.pageY});
			let x = $(this).attr("col")
			let y = $(this).attr("row")
			colourSquare(umpire.board, x, y)
			if (umpire.board.data[x][y] / Math.ceil(Math.pow(3, q)) % 3 == 0){
				$(this).css(
					`border-${sides[q]}`, "5px dashed rgba(255,0,0,.5)"
				)}
		}
	}),
	$("table#board").on("mousemove", function (e) {
		if (!thinking){
			let x = $(box).attr("col");
			let y = $(box).attr("row");
			colourSquare(umpire.board, x, y)
			let q = findQuadrant($(box).get(0).getBoundingClientRect(), {x: e.pageX, y:e.pageY});
			if (Math.floor(umpire.board.data[x][y] / Math.ceil(Math.pow(3, q))) % 3 == 0){
				$(box).css(
					`border-${sides[q]}`, "5px dashed rgba(255,0,0,.5)"
				)}
		}
	}),
	$("td.box").on("click", function (e) {
		if (!thinking){
			let q = findQuadrant($(this).get(0).getBoundingClientRect(), {x: e.pageX, y:e.pageY});
            
			let x = $(box).attr("col");
			let y = $(box).attr("row");
			if (Math.floor(umpire.board.data[x][y] / Math.ceil(Math.pow(3, q))) % 3 == 0){
				move_promise([
					parseInt(x),parseInt(y),q
				]);
			}
		}
	}),
	$("td.box").on("mouseout", function () {
        colourSquare(umpire.board, $(this).attr("col"), $(this).attr("row"))
	});
