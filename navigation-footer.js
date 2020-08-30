function hover(e) {
    return !!e.filter(function () {
        return $(this).is(":hover");
    }).length;
}
const k = 2,
    reset = function () {
        $("header").stop();
        for (var e = 1; e <= 3; e++) $(`header li.level-${e}`).off();
        if (
            ($("header li").mouseover(function () {
                $(this).children().css("background-color", "var(--secondary-light)");
            }),
            $("header li").mouseout(function () {
                $(this).children().css("background-color", "var(--secondary-dark)");
            }),
            window.matchMedia("(max-width: 799px)").matches)
        )
            $("header a").css("background-color", "var(--secondary-dark)"),
                $("header ul, header li").width("100%"),
                $("header ul, header li").css("margin", "0"),
                $("header li.level-1").click(function (e) {
                    $(this).next().is("ul") &&
                        ($(this).next().stop(),
                        $(this).next().height()
                            ? ($(this)
                                  .next()
                                  .animate({ height: "0px" }, { easing: "linear", duration: 4 * $(this).next().height(), queue: !1 }),
                              $(this)
                                  .next()
                                  .children("ul")
                                  .animate({ height: "0px" }, { easing: "linear", duration: 4 * $(this).next().children("ul").height(), queue: !1 }),
                              $(this).children().css("background-color", "rgb(0,128,255"),
                              $(this).mouseout(function () {
                                  $(this).children().css("background-color", "var(--secondary-dark)");
                              }),
                              $(this).mouseover(function () {
                                  $(this).children().css("background-color", "var(--secondary-light)");
                              }),
                              $(this)
                                  .next()
                                  .children("ul")
                                  .prev()
                                  .mouseout(function () {
                                      $(this).children().css("background-color", "var(--secondary-dark)");
                                  }),
                              $(this)
                                  .next()
                                  .children("ul")
                                  .prev()
                                  .mouseover(function () {
                                      $(this).children().css("background-color", "var(--secondary-light)");
                                  }))
                            : ($(this)
                                  .next()
                                  .animate(
                                      { height: 50 * $(this).next().children("li").length + "px" },
                                      { easing: "linear", duration: Math.abs(4 * (50 * $(this).next().children("li").length - $(this).next().height())), queue: !1 }
                                  ),
                              $(this).children().css("background-color", "var(--secondary-light)"),
                              $(this).off("mouseout"),
                              $(this).off("mouseover")),
                        e.preventDefault());
                }),
                $("header li.level-2").click(function (e) {
                    $(this).next().is("ul") &&
                        ($(this).next().stop(),
                        $(this).next().height()
                            ? ($(this)
                                  .next()
                                  .animate({ height: "0px" }, { easing: "linear", duration: 4 * $(this).next().height(), queue: !1 }),
                              $(this)
                                  .parent()
                                  .animate(
                                      { height: 50 * $(this).parent().children("li").length + "px" },
                                      { easing: "linear", duration: 4 * ($(this).parent().height() - 50 * $(this).parent().children("li").length), queue: !1 }
                                  ),
                              $(this).mouseout(function () {
                                  $(this).children().css("background-color", "var(--secondary-dark)");
                              }),
                              $(this).mouseover(function () {
                                  $(this).children().css("background-color", "var(--secondary-light)");
                              }))
                            : ($(this)
                                  .next()
                                  .animate(
                                      { height: 50 * $(this).next().children("li").length + "px" },
                                      { easing: "linear", duration: 4 * (50 * $(this).next().children("li").length - $(this).next().height()), queue: !1 }
                                  ),
                              $(this)
                                  .parent()
                                  .animate(
                                      { height: 50 * $(this).parent().children("li").length + 50 * $(this).next().children("li").length + "px" },
                                      {
                                          easing: "linear",
                                          duration: 4 * (50 * $(this).parent().children("li").length + 50 * $(this).next().children("li").length - $(this).parent().height()),
                                          queue: !1,
                                      }
                                  ),
                              $(this).children().css("background-color", "var(--secondary-light)"),
                              $(this).off("mouseout"),
                              $(this).off("mouseover")),
                        e.preventDefault());
                });
        else {
            const e = $("li.level-1").length,
                t = $("body").width() / e;
            $("ul.level-1").each((e, i) => {
                $(i)
                    .children("li")
                    .width(t + "px"),
                    $(i)
                        .children("ul.level-2")
                        .width(2 * t + "px"),
                    $(i)
                        .children("ul.level-2")
                        .each((e, i) => {
                            $(i)
                                .children("li")
                                .width(t + "px"),
                                $(i).css("margin", `100px 0 0 ${(e + 1) * t}px`),
                                $(i)
                                    .children("li.level-2")
                                    .each((e, i) => {
                                        $(i).css("margin", `${100 * (e - 1)}px 0 0`),
                                            $(i).next().is("ul") &&
                                                ($(i)
                                                    .next()
                                                    .css("margin", `${100 * (e - 1)}px 0 0 ${t}px`),
                                                $(i).next().width(0),
                                                $(i)
                                                    .next()
                                                    .height(100 * ($(i).next().children().length - 1) + "px"),
                                                $(i)
                                                    .next()
                                                    .children("li")
                                                    .width(t + "px"),
                                                $(i)
                                                    .next()
                                                    .children("li.level-3")
                                                    .each((e, t) => {
                                                        $(t).css("margin", `${100 * (e - 1)}px 0 0 0`);
                                                    }));
                                    });
                        });
            }),
                $("header li.level-2").mouseout(function () {
                    hover($(this).parent().children()) ||
                        hover($(this).parent().prev()) ||
                        ($(this).parent().stop(),
                        $(this)
                            .parent()
                            .animate({ height: 0 }, { easing: "linear", duration: 2 * $(this).parent().height(), queue: !1 })),
                        $(this).next().is("ul") &&
                            !hover($(this).next().children()) &&
                            ($(this).next().stop(),
                            $(this)
                                .next()
                                .animate({ width: 0 }, { easing: "linear", duration: 2 * $(this).next().width(), queue: !1 }));
                }),
                $("header li.level-2").mouseover(function () {
                    $(this).parent().stop(),
                        $(this)
                            .parent()
                            .animate(
                                { height: 100 * ($(this).parent().children("li").length - 1) + "px" },
                                { easing: "linear", duration: 2 * (100 * ($(this).parent().children("li").length - 1) - $(this).parent().height()), queue: !1 }
                            ),
                        $(this).next().is("ul") &&
                            ($(this).next().stop(),
                            $(this)
                                .next()
                                .animate({ width: `${t}px` }, { easing: "linear", duration: 2 * (t - $(this).next().width()), queue: !1 }));
                }),
                $("header li.level-1").mouseover(function () {
                    $(this).next().stop(),
                        $(this)
                            .next("ul")
                            .animate(
                                { height: 100 * ($(this).next().children("li").length - 1) + "px" },
                                { easing: "linear", duration: 2 * (100 * ($(this).next().children("li").length - 1) - $(this).next().height()), queue: !1 }
                            );
                }),
                $("header li.level-3").mouseout(function () {
                    hover($(this).parent().prev()) ||
                        hover($(this).parent().children()) ||
                        ($(this).parent().stop(),
                        $(this)
                            .parent()
                            .animate({ width: 0 }, { easing: "linear", duration: 2 * $(this).parent().width(), queue: !1 })),
                        hover($(this).parent().parent().prev()) ||
                            hover($(this).parent().parent().children()) ||
                            ($(this).parent().parent().stop(),
                            $(this)
                                .parent()
                                .parent()
                                .animate({ height: 0 }, { easing: "linear", duration: 2 * $(this).parent().parent().height(), queue: !1 }));
                }),
                $("header li.level-1").mouseout(function () {
                    hover($(this).next().children()) ||
                        ($(this).next().stop(),
                        $(this)
                            .next("ul")
                            .animate({ height: 0 }, { easing: "linear", duration: 2 * $(this).next().height(), queue: !1 }));
                });
        }
        $("header ul.level-1").css("justify-content", "initial");
    };
$(window).on("resize", reset), $(document).ready(reset);
