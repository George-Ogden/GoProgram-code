let move_promise,
	thinking = !1;
const size = 5,
	umpire = new Noughts_and_Crosses(5, 4),
	pieces = { 0: ".", 1: "X", "-1": "O", ".": 0, X: 1, O: -1 },
	player = {
		move: async function (e, t) {
			w = (e.rss() % 2) * 2 - 1;
			let n = await this.request(
				Matrix.flatten(e)
					.data[0].map((e) => pieces[e])
					.join("")
			);
			if (200 == n.status)
				return Matrix.multiply(
					Matrix.resize(
						Matrix.fromArray([
							n.responseText
								.toUpperCase()
								.split("")
								.map((e) => pieces[e]),
						]),
						5,
						5
					),
					w
				);
		},
		request: function (e) {
			return new Promise(function (t, n) {
				let o = new XMLHttpRequest();
				o.open(
					"GET",
					`https://api.goprogram.ai/games/tictactoe?board=${e}`
				),
					(o.onload = function () {
						200 == this.status && t(o);
					}),
					o.send();
			});
		},
	};
function endGame() {
	finishMove(), (thinking = !0);
    umpire.find()
}
function finishMove() {
	(thinking = !1),
		$(".cover").addClass("d-none"),
		$(".cover").removeClass("darken d-flex");
}
async function displayBoard(e) {
	for (let t = 0; t < e.rows; t++)
		for (let n = 0; n < e.cols; n++) {
			let o = e.data[t][n];
			0 != o &&
				($(`[row=${t}][col=${n}].box circle`).css({
					background: o < 0 ? "red" : "blue",
					opacity: 1,
				}),
				$(`[row=${t}][col=${n}].box`).css(
					"background",
					"var(--primary-light)"
				),
				$(`[row=${t}][col=${n}].box`).hasClass("taken") ||
					$(`[row=${t}][col=${n}].box`).addClass("taken"));
		}
}
async function animateMove() {}
function resize() {
	$("#board").height($("#board").width());
}
$("#board").on("mouseenter", function () {
	$(this).off("mouseenter"), umpire.challenge(player);
}),
	$(window).resize(resize),
	resize(),
	$("td.box").on("mouseover", function () {
		thinking ||
			$(this).is(".taken") ||
			($(this).css("background", "var(--base)"),
			$(this)
				.children("circle")
				.css({ opacity: "0.3", background: "red" }));
	}),
	$("td.box").on("mouseout", function () {
		thinking ||
			$(this).is(".taken") ||
			($(this).css("background", "var(--primary-light)"),
			$(this).children("circle").css("background", "transparent"));
	}),
	$("td.box").on("click", function () {
		thinking ||
			$(this).is(".taken") ||
			((thinking = !0),
			$(".cover").removeClass("d-none"),
			$(".cover").addClass("darken d-flex"),
			$(".box:not(.taken) circle").css("background", "transparent"),
			$(".box").css("background", "var(--primary-light)"),
			move_promise([$(this).attr("row"), $(this).attr("col")]));
	});
