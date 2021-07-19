function line(x1, y1, x2, y2) {
	var a = x1 - x2,
		b = y1 - y2,
		c = Math.sqrt(a * a + b * b);

	var sx = (x1 + x2) / 2,
		sy = (y1 + y2) / 2;

	var x = sx - c / 2,
		y = sy;
	var angle = Math.PI - Math.atan2(-b, a);
	return `<div class=line style='border: 1px solid #000; width: ${c}px; height: 0px; -moz-transform: rotate(${angle}rad); -webkit-transform: rotate(${angle}rad);
    -o-transform: rotate(${angle}rad); -ms-transform: rotate(${angle}rad); position: absolute; top: ${y}px; left: ${x}px'</div>`;
}

function parse(x, f) {
	if (
		x == undefined ||
		!x.replace(" ", "").match(/^(\d*:){0,2}\d*(\.\d*)?$/)
	) {
		return undefined;
	}
	switch (f) {
		case "d":
		case "s":
			return parseFloat(x) || undefined;
		case "m":
			if (!x.includes(":")) {
				return 60 * parse(x, "s");
			} else {
				return parse(x);
			}
		case "h":
			if (x.split(":").length < 3) {
				return 60 * parse(x, "m");
			} else {
				return parse(x);
			}
		default:
			return x
				.replace(" ", "")
				.split(":")
				.reverse()
				.reduce((a, c, i) => a + parseFloat(c || 0) * 60 ** i, 0);
	}
}

function draw() {
	$(".line").remove();
	$(".section.interactive .options input.in.use").each(function () {
		var in_ = $(this);
		$(".section.interactive .options input.out").each(function () {
			var out_ = $(this);
			$(this)
				.parent()
				.parent()
				.append(
					line(
						in_.position().left +
							in_.outerWidth(false) +
							parseInt(in_.css("marginLeft")),
						in_.position().top + in_.outerHeight(false) / 2,
						out_.position().left +
							parseInt(out_.css("marginLeft")),
						out_.position().top + out_.outerHeight(false) / 2
					)
				);
		});
	});
}

document.body.onresize = draw

$("#calculate").on("click", function () {
	let data = {};
	$(".section.interactive .options input.in").each(
		function () {
			var in_ = $(this);
			in_.removeClass("use");
			var val = parse(in_.val(),formats[in_.attr("name")]);
			var name = in_.attr("name");
			if (in_.hasClass("disabled") || 
				val == undefined ||
				(formats[name] == "d"
					? val > defaults[name] * 2
					: val < defaults[name] / 2)
			) {
				return;
			}
			in_.addClass("use");
			data[name] = val;
		}
		);
		if (Object.keys(data).length) {
			const t = new XMLHttpRequest();
			t.open("GET", `https://timings.goprogram.ai/?${$.param(data)}`),
				t.send();
			t.onload = () => {
				if (200 == t.status) {
					var e = JSON.parse(t.response);
					for (let k in e) {
						if (
							$(`input.in[name=${k}]`).hasClass("disabled")
							) {
							$(`input.out[name=${k}-predicted]`).css(
								"background","initial"
								);
						} else {
							$(`input.out[name=${k}-predicted]`).css(
								"background",
								1 || $(`input.in[name=${k}]`).val() == e[k]
									? "silver"
									: $(`input.in[name=${k}]`).val() > e[k]
									? "var(--green)"
									: "red"
							);
						}
						$(`input.out[name=${k}-predicted]`).val(
							format(e[k], formats[k]))
						
					}draw();
				} else console.error("Error!");
			};
		}
});
//.append(line(100,100,200,200))
let defaults = {};
const t = new XMLHttpRequest();
t.open("GET", `https://timings.goprogram.ai?HM=0`), t.send();
t.onload = () => {
	if (200 == t.status) {
		defaults = JSON.parse(t.response);
	} else console.error("Error!");
};
const formats = {
	100: "s",
	200: "s",
	300: "s",
	400: "s",
	"400H": "s",
	800: "m",
	1000: "m",
	1500: "m",
	Mile: "m",
	3000: "m",
	"3000SC": "m",
	5000: "m",
	"5M": "m",
	10000: "m",
	"10M": "h",
	HM: "h",
	Mar: "h",
	LJ: "d",
	TJ: "d",
	HJ: "d",
};
function pad(n, width = 2, z = "0") {
	return String(n).padStart(width, z);
}
function format(x, f) {
	switch (f) {
		case "d":
		case "s":
			return x.toFixed(2);
		case "m":
			return Math.floor(x / 60) + ":" + pad((x % 60).toFixed(2), 5);
		case "h":
			return (
				Math.floor(x / 3600) +
				":" +
				pad(Math.floor((x % 3600) / 60)) +
				":" +
				pad((x % 60).toFixed(0))
			);
		default:
			return x;
	}
}
$("input.check").on("click", function () {
	if (this.checked) {
		$(this).parent().children("input.in").removeClass("disabled");
		if (!$(this).parent().children("input.in").val()) {
			$(this)
				.parent()
				.children("input.in")
				.val(
					format(
						defaults[$(this).attr("name")],
						formats[$(this).attr("name")]
					)
				);
		}
	} else {
		$(this).parent().children("input.in").addClass("disabled");
	}
});
$("input.in").on("focus", function () {
	$(this).removeClass("disabled");
	$(this).parent().children("input.check").prop("checked", true);
});
$("input.in").on("focusout", function () {
	if (!$(this).val()) {
		$(this).addClass("disabled");
		$(this).parent().children("input.check").prop("checked",false);
	}
});
