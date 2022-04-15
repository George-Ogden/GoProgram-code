let move_promise,
	thinking = !1;
const size = 5,
	umpire = new Noughts_and_Crosses(size, 4),
	pieces = { 0: ".", 1: "X", "-1": "O", ".": 0, X: 1, O: -1 },
	player = {
		move: async function (e, o) {
			w = (e.rss() % 2) * 2 - 1;
			let t = await this.request(
				Matrix.flatten(e)
					.data[0].map((e) => pieces[e])
					.join("")
			);
			if (200 == t.status)
				return Matrix.multiply(
					Matrix.resize(
						Matrix.fromArray([
							t.responseText
								.toUpperCase()
								.split("")
								.map((e) => pieces[e]),
						]),
						size,
						size
					),
					w
				);
		},
		request: function (e) {
			return new Promise(function (o, t) {
				let n = new XMLHttpRequest();
				n.open(
					"GET",
					`https://api.goprogram.ai/games/tictactoe?board=${e}`
				),
					(n.onload = function () {
						200 == this.status && o(n);
					}),
					n.send();
			});
		},
	};
function endGame() {
	finishMove(), (thinking = !0);
}
function finishMove() {
	(thinking = !1),
		$(".cover").addClass("d-none"),
		$(".cover").removeClass("darken d-flex");
}
async function displayBoard(e) {
	for (let o = 0; o < e.rows; o++)
		for (let t = 0; t < e.cols; t++) {
			let n = e.data[o][t];
			0 != n &&
				($(`[row=${o}][col=${t}].box circle`).css({
					background: n < 0 ? "red" : "blue",
					opacity: 1,
				}),
				$(`[row=${o}][col=${t}].box`).css(
					"background",
					"var(--primary-light)"
				),
				$(`[row=${o}][col=${t}].box`).hasClass("taken") ||
					$(`[row=${o}][col=${t}].box`).addClass("taken"));
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
