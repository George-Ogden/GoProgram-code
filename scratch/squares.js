const size = 7,
	umpire = new Squares(7),
	sides=["top", "right", "bottom", "left"],
	player = {
		move: async function (t) {
			w = (t.rss() % 2) * 2 - 1;
			let o = await this.request(
				Matrix.flatten(t)
					.data[0].map((t) => pieces[t])
					.join("")
			);
			if (200 == o.status)
				return Matrix.multiply(
					Matrix.resize(
						Matrix.fromArray([
							o.responseText
								.toUpperCase()
								.split("")
								.map((t) => pieces[t]),
						]),
						7,
						7
					),
					w
				);
		},
		request: function (t) {
			return new Promise(function (t) {
				let o = new XMLHttpRequest();
				o.open(
					"GET",
					`https://api.goprogram.ai/games/connect4?board=${history}`
				),
					(o.onload = function () {
						200 == this.status && t(o);
					}),
					o.send();
			});
		},
	};
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
            let s = r % 3;
            for (let j = 0; j < 4; j++){
                if (r % 3){
                    $(`[row=${o}][col=${e}]`).css(
                        `border-${sides[j]}`, ((r % 3) > 1 ? "red":"blue") +" 5px solid"
                    )
                }
                if (r % 3 != s){
                    s = 0;
                }
                r = Math.floor(r/3);
            }
            if (s){
                $(`[row=${o}][col=${e}].box`).css({
                    background: s > 1 ? "red" : "blue",
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
async function animateMove(t, o) {
}
function resize() {
	$("#board").height($("#board").width());
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
            $(this).css(
                `border-${sides[q]}`, "red 5px dashed"
            )}
	}),
	$("td.box").on("click", function () {
		!thinking &&
			$(`[col=${$(this).attr("col")}]:not(.taken)`).length > 0 &&
			(move_promise([
				Object.values(
					$(`[col=${$(this).attr("col")}]:not(.taken)`)
				).reduce((t, o) => Math.max(t, $(o).attr("row") || 0), 0),
				$(this).attr("col"),
			]),
			(thinking = !0),
			$(".cover").removeClass("d-none"),
			$(".cover").addClass("darken d-flex"),
			$(".box:not(.taken) circle").css("background", "transparent"),
			$(".box").css("background", "var(--primary-light)"));
	}),
	$("td.box").on("mouseout", function () {
        colourSquare(umpire.board, $(this).attr("col"), $(this).attr("row"))
	});
