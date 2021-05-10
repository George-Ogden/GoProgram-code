const size = 7,
	umpire = new Noughts_and_Crosses(7, 4),
	player = new Gamer(
		Genetic_Combined_Network.from_string({
			"type": "Genetic_Combined_Network",
			"activation_function_name": "tanh",
			"activation_function": {},
			"networks": [
			  {
				"type": "Genetic_Convolutional_Neural_Network",
				"activation_function_name": "swish",
				"activation_function": {},
				"length": 1,
				"width": 4,
				"height": 4,
				"weights": [],
				"biases": [],
				"kernels": [
				  {
					"data": [
					  [
						-3.7530441201026705,
						-6.946657163072802,
						-6.014129872804888,
						-9.1685113874304
					  ],
					  [
						-6.091059245330693,
						-7.01619576648955,
						-8.741959893774236,
						-8.160339942637155
					  ],
					  [
						-9.174352468717842,
						-9.850032406372808,
						-5.487638519077924,
						-8.384013636488138
					  ],
					  [
						-5.218035523958747,
						-7.00134419419202,
						-8.497673602692444,
						-6.717001833676291
					  ]
					],
					"rows": 4,
					"cols": 4
				  }
				]
			  },
			  {
				"type": "Genetic_Flatten",
				"activation_function_name": "identity",
				"activation_function": {}
			  },
			  {
				"type": "Genetic_Fully_Connected_Neural_Network",
				"activation_function_name": "tanh",
				"activation_function": {},
				"length": 4,
				"width": 8,
				"weights": [
				  {
					"data": [
					  [
						0.7091813285529542,
						0.17205187073306893,
						2.1600401333911012,
						0.9514293942412082,
						0.4607350205809997,
						-0.1358799098057002,
						1.8730103568724505,
						-4.6698628972909395
					  ],
					  [
						2.60474243448205,
						-1.9438651652482757,
						-1.321726247574219,
						-0.7414623037500498,
						-0.18543126069130667,
						-1.7295946811614664,
						2.805726766114293,
						-1.921037228338903
					  ],
					  [
						1.90565521361345,
						3.595075126114156,
						1.055006271672379,
						-1.8525079900266537,
						-1.0890807152295565,
						-0.29094660990630694,
						-1.3688953371494663,
						1.798458982049878
					  ],
					  [
						-2.3989963767210605,
						1.4630373196002218,
						-0.9551005883641673,
						1.9273678003484953,
						-3.3803756419786137,
						3.0218699780886222,
						1.154951535028335,
						0.5215367692147521
					  ],
					  [
						-1.0493947616432022,
						-1.6993637714786383,
						0.3622707698103156,
						2.755412290693613,
						-0.9162723646696946,
						-2.504238333872983,
						1.2876246916162675,
						2.334996149197984
					  ],
					  [
						1.8603220686537476,
						0.5916545731394494,
						1.367191719306947,
						-0.7420030986517432,
						0.5981842542203761,
						-1.8241428411743135,
						-2.2130265954146418,
						-1.229430344543005
					  ],
					  [
						-1.4130062846807845,
						2.2330449077498367,
						1.8217382918269274,
						2.1280592928459954,
						-0.5737128301424725,
						-0.24499930690413896,
						0.10112269480845226,
						2.494744548565636
					  ],
					  [
						3.4473271887442642,
						0.32224898822288095,
						1.904611327035322,
						0.7716095296336052,
						1.083944819821697,
						1.9247373517909234,
						-4.056472468123319,
						-0.6525273017318423
					  ],
					  [
						0.27648031646121973,
						-2.2157814239024023,
						2.147670913002308,
						-0.5324431963616134,
						-2.3222027344395904,
						1.3084119499232836,
						0.6689195341804259,
						1.6985906468855156
					  ],
					  [
						-3.187980665376377,
						1.9336092465134045,
						0.1895805457392461,
						0.5776334049024165,
						-0.47735150785068114,
						2.8113588094435973,
						-6.567688279494764,
						-0.3565499935713623
					  ],
					  [
						0.4336938149975431,
						-1.980203520766667,
						-0.6519951555815069,
						1.836909801374433,
						-1.9950470808202576,
						-1.3040744635947359,
						-0.8013678682688621,
						-0.3280450545913811
					  ],
					  [
						1.4475999323100313,
						2.437915089152387,
						2.197809043523989,
						1.6254767853121965,
						2.822483183105272,
						-4.82261893024147,
						1.6557109436816715,
						-0.9137773541660212
					  ],
					  [
						-0.955446555217643,
						2.572841078219122,
						0.5111696167036661,
						0.2861712800990739,
						0.5206129830777875,
						-0.058824090582921595,
						-2.275300354367754,
						-2.325584769067329
					  ],
					  [
						-0.9434672154120238,
						2.0254162402966376,
						0.1971199794466778,
						-0.8542142398318213,
						0.6414236814426273,
						-0.7444096436561254,
						-0.1784548211587198,
						-0.2141896915722784
					  ],
					  [
						2.0932872730382015,
						2.015921517519706,
						-0.8311223312012679,
						0.044082824918809216,
						0.18268815383419001,
						2.467209366394575,
						-0.26050829128218034,
						2.629391435555561
					  ],
					  [
						-3.147529082472823,
						-0.0611939022932706,
						1.967815544189608,
						0.451171315871415,
						1.0243394491038025,
						-1.097276255491604,
						1.515253045188869,
						-1.9732461461400008
					  ]
					],
					"rows": 16,
					"cols": 8
				  },
				  {
					"data": [
					  [
						-0.10222197239590924,
						0.9429134180783394,
						-0.23047263007518937,
						-0.4784378824164417,
						0.7715893778821612,
						2.9051370828589698,
						2.4942559384378087,
						-1.1557950588946242
					  ],
					  [
						-0.012310178759775026,
						0.27410597275911774,
						-0.4998963662873077,
						-2.3146745571494063,
						0.04135577466252105,
						-1.2859364746865287,
						0.031460344945037466,
						-2.636756386887243
					  ],
					  [
						-0.6495898358187113,
						2.289511816406182,
						-0.22950309161125504,
						0.1698933924388335,
						1.7798166406227125,
						-3.8702187859914625,
						-0.566380182615128,
						-0.1229207021556662
					  ],
					  [
						2.6733303892842666,
						-0.6557445796098818,
						1.031192597027505,
						-1.3774058553530772,
						2.5354485804451485,
						-1.8258701088415235,
						-0.7001026394144031,
						0.4860898064213386
					  ],
					  [
						-0.09898573447123105,
						-1.182632508241999,
						1.4831675902693742,
						0.44765653810137396,
						-0.4645843882101901,
						-2.9326108674709674,
						-0.991242733319114,
						0.383004395297168
					  ],
					  [
						0.7697841070423936,
						-1.5038745856255957,
						-1.6332827523211009,
						-0.4125632691378902,
						-1.0153074199894006,
						-2.0186905804148663,
						-0.48346540078163414,
						-0.47753050694730215
					  ],
					  [
						3.1668501824534987,
						0.17543268473158724,
						-0.8073057997009112,
						-2.254294700542509,
						0.25961385876463083,
						-1.6065049139725347,
						-1.274061663931611,
						2.5689415257625194
					  ],
					  [
						0.44638287555613254,
						-0.23875548967141436,
						-0.20935613320757818,
						-4.459166404564079,
						-0.7976754626884746,
						1.4369065878808986,
						-1.0227734210594543,
						-1.1187253016521177
					  ]
					],
					"rows": 8,
					"cols": 8
				  },
				  {
					"data": [
					  [
						-1.6663252952688707,
						1.3024548938102578,
						-2.3092716891562373,
						-1.7889134131941566,
						0.029192809841718237,
						-0.8917901587635515,
						-0.8782630575437349,
						2.4453270647530614
					  ],
					  [
						2.942629260797968,
						1.2642842833099595,
						0.27412317478896764,
						0.24615958744970512,
						1.3707252144317974,
						-1.5853934136091297,
						0.36215541245911087,
						-2.438738850637565
					  ],
					  [
						-0.41219447272810905,
						-0.6684435144156753,
						-0.7469378301704332,
						3.0426607633953697,
						0.5723730663206616,
						-1.1984428056533518,
						-0.586695318367747,
						2.903943805564976
					  ],
					  [
						1.176297972295468,
						1.7173131979257241,
						-0.7777997891625463,
						-2.553937202140996,
						0.3984744150677244,
						-0.4475088000932963,
						-0.43907248588055814,
						-1.2646365866858282
					  ],
					  [
						2.66478232418495,
						-3.1469560596794963,
						0.06840505340856318,
						-0.9084064053377805,
						2.4305150196775953,
						0.9262753917487561,
						-1.4181520162395465,
						0.4475620599438175
					  ],
					  [
						2.4231991184064374,
						-0.01759962881947641,
						-0.21680363914074285,
						0.5694751257782378,
						2.0197468857787104,
						-1.33818417718801,
						-1.3176348960137423,
						1.0898054609243877
					  ],
					  [
						0.6443385096842689,
						-2.341070056561084,
						-0.2794234658360164,
						-0.10017882321168692,
						-0.42277175885440355,
						0.04296212207818417,
						-0.05608817150796508,
						1.1256628066583292
					  ],
					  [
						-0.07244926088711612,
						-0.3472604753440609,
						1.4279749308156653,
						1.2828552304233125,
						2.1685633720281845,
						-0.5453699695676772,
						-1.8523988474693285,
						-2.432624349029725
					  ]
					],
					"rows": 8,
					"cols": 8
				  },
				  {
					"data": [
					  [-0.7315034160674808],
					  [1.9517205952055252],
					  [1.0387716516416585],
					  [0.9444576261619777],
					  [-0.3153454919854015],
					  [0.41222962729768886],
					  [0.03140677403918457],
					  [-2.540429226627309]
					],
					"rows": 8,
					"cols": 1
				  }
				],
				"biases": [
				  {
					"data": [
					  [
						0.6181752243858765,
						0.5979759688621826,
						-0.6306529253617461,
						-1.0192376692922456,
						-1.5423431692342382,
						1.8670516154630667,
						2.102231494572265,
						0.07794397113311846
					  ]
					],
					"rows": 1,
					"cols": 8
				  },
				  {
					"data": [
					  [
						0.8460738581667648,
						1.9919157825978089,
						0.8366225208397791,
						-0.00397788111650299,
						0.29461071246857173,
						-0.5317787953877273,
						-0.30513999497570476,
						-0.1358871453696502
					  ]
					],
					"rows": 1,
					"cols": 8
				  },
				  {
					"data": [
					  [
						-0.6255879252984735,
						-0.5306629040916494,
						0.025748376668258688,
						0.4641049088179485,
						-0.37507534125953224,
						-0.758462262543868,
						1.7021891346053701,
						-1.4324127896441308
					  ]
					],
					"rows": 1,
					"cols": 8
				  },
				  { "data": [[2.4157181248618014]], "rows": 1, "cols": 1 }
				]
			  }
			],
			"length": 3,
			"score": 53
		  }),
		umpire,
		3
	);
let move_promise,
	thinking = !1;
function endGame() {
	finishMove(), (thinking = !0);
}
function finishMove() {
	(thinking = !1),
		$(".cover").addClass("d-none"),
		$(".cover").removeClass("darken d-flex");
}
async function displayBoard(t) {
	for (let o = 0; o < t.rows; o++)
		for (let e = 0; e < t.cols; e++) {
			let a = t.data[o][e];
			0 != a &&
				($(`[row=${o}][col=${e}].box circle`).css({
					background: a < 0 ? "red" : "blue",
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
umpire.challenge(player),
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
			).css({
				opacity: "0.3",
				background: "red",
			}));
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
			).css({
				background: "transparent",
			}));
	});
