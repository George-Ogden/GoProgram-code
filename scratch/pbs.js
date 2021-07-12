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

$("#calculate").on("click", function () {
	$(".line").remove();
	$(".section.interactive .options .in").each(function () {
		var in_ = $(this);
		if (!$(in_).val()) {
			return;
		}
		$(".section.interactive .options .out").each(function () {
			var out_ = $(this);
			$(this)
				.parent()
				.parent()
				.append(
					line(
						in_.position().left + in_.outerWidth(false),
						in_.position().top + in_.outerHeight(false) / 2,
						out_.position().left +
							(out_.outerWidth(true) - out_.outerWidth(false)) /
								2,
						out_.position().top + out_.outerHeight(false) / 2
					)
				);
		});
	});

	const t = new XMLHttpRequest();
	t.open(
		"PUT",
		`https://hangman.goprogram.ai/update?word=${word.toLowerCase()}`
	),
		t.send();
});
//.append(line(100,100,200,200))
const defaults  = {"3000": 560.1204918616402, "800": 128.0895949694736, "1000": 167.88712211524808, "5M": 1669.5824673526495, "1500": 268.9393741599833, "200": 23.90700972394997, "400": 52.26357749092554, "TJ": 11.956888734448812, "10000": 2154.426032866935, "5000": 1067.4503698623034, "3000SC": 613.689604666458, "Mile": 289.5441703471213, "10M": 3618.307323557738, "HM": 4896.056395688766, "HJ": 1.6392686876832219, "Mar": 10627.716554128732, "400H": 57.852445494269304, "LJ": 5.300191850479601, "100": 11.82995507906262, "300": 38.23575943261794}
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
	"10M": "m",
	HM: "h",
	Mar: "h",
	LJ: "d",
	TJ: "d",
	HJ: "d",
};
function format(x, f){
    console.log(x,f)
    return x
}
$("input.check").on("click",function(){
    if (this.checked) {
        $(this).parent().children("input.in").removeClass("disabled");
        if (!$(this).parent().children("input.in").val()){
            $(this).parent().children("input.in").val(format(defaults[$(this).attr("name")],$(this).attr("name")))
        }
    } else {
          $(this).parent().children("input.in").addClass("disabled");
      }
    
})
$("input.in").on("focus",function(){
    $(this).removeClass("disabled");
    $(this).parent().children("input.check").attr("checked", true);
    
})
$("input.in").on("focusout",function(){
    if (!$(this).val()){
        $(this).addClass("disabled");
        $(this).parent().children("input.check").removeAttr("checked");
    }
    
})