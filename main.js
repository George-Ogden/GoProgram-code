function scroll() {
    var date = new Date()
    date.setTime(date.getTime() + 60000)
    document.cookie = `scroll${window.location.pathname}=${$("section").scrollTop()};expires=${date.toUTCString()};path=${window.location.pathname}`
	$(document).width() > 800
		? ($(".section:not(.content)").each(function () {
				Math.max($(window).height() / 2, $(this).height() / 4) >
					$(this).offset().top &&
					1 != $(this).attr("visible") &&
					($(this).attr("visible", 1),
					$(this).animate({ opacity: 1 }, 1e3, "easeOutCubic"));
		  }),
		  $("h2, h3").each(async function () {
				if (
					($(window).height() / 2 > $(this).offset().top ||
						$("footer").offset().top <
							$(window).height() + $("footer").height()) &&
					1 != $(this).attr("visible")
				) {
					let t = $(this).text();
					$(this).attr({ text: t, visible: 1 });
					for (let i = 1; i < t.length + 1; i++)
						$(this).text(t.substr(0, i)),
							$(this).css("opacity", 1),
							await new Promise((i) =>
								setTimeout(i, 1e3 / t.length)
							);
				}
		  }),
		  $(
				":not(.section) > .image:not(.section)  >  * > .caption *:not(h1):not(h2)"
		  ).each(function () {
				($(window).height() > $(this).offset().top + $(this).height() ||
					$("footer").offset().top <
						$(window).height() + $("footer").height()) &&
					1 != $(this).attr("visible") &&
					($(this).attr("visible", 1),
					$(this).animate(
						{
							marginLeft:
								($(this).parent().width() - $(this).width()) /
								2,
							marginRight:
								($(this).parent().width() - $(this).width()) /
								2,
							opacity: 1,
						},
						1e3,
						"easeOutExpo",
						function () {
							$(this).css({
								"margin-left": "auto",
								"margin-right": "auto",
							});
						}
					));
		  }))
		: ($(".section:not(.content):not(.icons").each(function () {
				$(window).scrollTop() + $(window).height() >
					$(this).offset().top +
						Math.min(
							$(this).height() / 2,
							(3 * $(window).height()) / 4
						) &&
					1 != $(this).attr("visible") &&
					($(this).attr("visible", 1),
					$(this).animate({ opacity: 1 }, 1e3, "easeOutCubic"));
		  }),
		  $("h2, h3").each(async function () {
				if (
					($(window).scrollTop() >
						$(this).offset().top - $(window).height() / 1.3 ||
						$("footer").offset().top <
							$(window).height() + $("footer").height()) &&
					1 != $(this).attr("visible")
				) {
					let t = $(this).text();
					$(this).attr({ text: t, visible: 1 });
					for (let i = 1; i < t.length + 1; i++)
						$(this).text(t.substr(0, i)),
							$(this).css("opacity", 1),
							await new Promise((i) =>
								setTimeout(i, 1e3 / t.length)
							);
				}
		  }),
		  $(
				":not(.section) > .image:not(.section)  >  * > .caption *:not(h1):not(h2)"
		  ).each(function () {
				($(window).scrollTop() + $(window).height() >
					$(this).offset().top + $(this).height() ||
					$("footer").offset().top <
						$(window).height() + $("footer").height()) &&
					1 != $(this).attr("visible") &&
					($(this).attr("visible", 1),
					$(this).animate(
						{
							marginLeft:
								($(this).parent().width() - $(this).width()) /
								2,
							marginRight:
								($(this).parent().width() - $(this).width()) /
								2,
							opacity: 1,
						},
						1e3,
						"easeOutExpo",
						function () {
							$(this).css({
								"margin-left": "auto",
								"margin-right": "auto",
							});
						}
					));
		  }));
}
console.log(
	"  _____       _____ \n / ____|     |  __ \\ \n| |  __  ___ | |__) | __ ___   __ _ _ __ __ _ _ __ ___\n| | |_ |/ _ \\|  ___/ '__/ _ \\ / _` | '__/ _` | '_ ` _ \\ \n| |__| | (_) | |   | | | (_) | (_| | | | (_| | | | | | |\n \\_____|\\___/|_|   |_|  \\___/ \\__, |_|  \\__,_|_| |_| |_|\n                              __/ |\n                             |___/"
),
	$("a[download]").click(
		(t) =>
			confirm("Are you sure you want to download this file?") ||
			t.preventDefault()
	),
	$("section > :not(footer) a:not(.select)").attr({
		title: "Go there",
		"data-toggle": "tooltip",
	}),
	$("section a.icon").attr("title", "View"),
	$("section a[download]").attr("title", "Download"),
	$(document).ready(function () {
		$('[data-toggle="tooltip"]').tooltip({ animation: !0 }),
			window.location.hash &&
				($("section.showcase .section.selection a").removeClass(
					"selected"
				),
				$(`[href="${window.location.hash}"]`).addClass("selected"),
				$(".content").addClass("d-none"),
				$(window.location.hash).removeClass("d-none"),
				$("section").animate(
					{ scrollTop: $(window.location.hash).offset().top },
					1e3
				));
	}),
	$("section.showcase .section.selection a").click(function () {
		$("section.showcase .section.selection a").removeClass("selected"),
			$(this).addClass("selected"),
			$(".content").addClass("d-none"),
			$($(this).attr("href")).removeClass("d-none");
	}),
	$(document).scroll(scroll),
	$("section").scroll(scroll),
    $("section").scrollTop(((`${document.cookie};scroll${window.location.pathname}=`).split(";").filter(x => x.split("=")[0].trim() == "scroll" + window.location.pathname))[0].split("=")[1].trim()),
	scroll(),
	$("h1:not(.loaded)").each(async function () {
		let t = $(this).text();
		$(this).attr({ text: t, visible: 1 });
		for (let i = 1; i < t.length + 1; i++)
			$(this).text(t.substr(0, i)),
				$(this).css("opacity", 1),
				await new Promise((i) => setTimeout(i, 1e3 / t.length));
	});
