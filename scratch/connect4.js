const size = 7,
	umpire = new Noughts_and_Crosses(7, 4),
	pieces = { 0: ".", 1: "X", "-1": "O", ".": 0, X: 1, O: -1 },
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
	history = "";
function endGame() {
	finishMove(), (thinking = !0);
    umpire.find();
}
function finishMove() {
	(thinking = !1),
		$(".cover").addClass("d-none"),
		$(".cover").removeClass("darken d-flex");
}
async function displayBoard(t) {
	for (let o = 0; o < t.rows; o++)
		for (let e = 0; e < t.cols; e++) {
			let r = t.data[o][e];
			0 != r &&
				($(`[row=${o}][col=${e}].box circle`).css({
					background: r < 0 ? "red" : "blue",
					opacity: 1,
				}),
				$(`[row=${o}][col=${e}].box`).css(
					"background",
					"var(--primary-light)"
				),
				$(`[row=${o}][col=${e}].box`).hasClass("taken") ||
					$(`[row=${o}][col=${e}].box`).addClass("taken"));
		}
}
async function animateMove(t, o) {
	(history += String(o)),
		(t = parseInt(t)),
		(distance =
			$("#board").offset().top -
			$(`[row=${t}][col=${o}].box circle`).offset().top),
		$(`[row=${t}][col=${o}].box circle`).css(
			"transform",
			`translate(0,${distance}px`
		),
		await new Promise((t) => setTimeout(t, 100)),
		$(`[row=${t}][col=${o}].box circle`).css(
			"transition",
			`transform ${
				Math.sqrt(-1 * distance) / 100
			}s cubic-bezier(.3,0,.69,.17)`
		),
		$(`[row=${t}][col=${o}].box circle`).css("transform", "translate(0,0)");
}
function resize() {
	$("#board").height($("#board").width());
}
$("#board").on("mouseenter", function () {
	$(this).off("mouseenter"), umpire.challenge(player);
}),
	$(window).resize(resize),
	resize(),
	$("td.box").on("mouseover", function () {
		!thinking &&
			$(`[col=${$(this).attr("col")}]:not(.taken)`).length > 0 &&
			($(`[col=${$(this).attr("col")}]:not(.taken)`).css(
				"background",
				"var(--base)"
			),
			$(
				`[row=${Object.values(
					$(`[col=${$(this).attr("col")}]:not(.taken)`)
				).reduce(
					(t, o) => Math.max(t, $(o).attr("row") || 0),
					0
				)}][col=${$(this).attr("col")}] circle`
			).css({ opacity: "0.3", background: "red" }));
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
		$(`[col=${$(this).attr("col")}]:not(.taken)`).length > 0 &&
			($(`[col=${$(this).attr("col")}]:not(.taken)`).css(
				"background",
				"var(--primary-light)"
			),
			$(
				`[row=${Object.values(
					$(`[col=${$(this).attr("col")}]:not(.taken)`)
				).reduce(
					(t, o) => Math.max(t, $(o).attr("row") || 0),
					0
				)}][col=${$(this).attr("col")}] circle`
			).css({ background: "transparent" }));
	});
