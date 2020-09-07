console.log(
    "  _____       _____ \n / ____|     |  __ \\ \n| |  __  ___ | |__) | __ ___   __ _ _ __ __ _ _ __ ___\n| | |_ |/ _ \\|  ___/ '__/ _ \\ / _` | '__/ _` | '_ ` _ \\ \n| |__| | (_) | |   | | | (_) | (_| | | | (_| | | | | | |\n \\_____|\\___/|_|   |_|  \\___/ \\__, |_|  \\__,_|_| |_| |_|\n                              __/ |\n                             |___/"
);
$("a[download]").click((e) => confirm("Are you sure you want to download this file?") || e.preventDefault());
$("section a:not(.select)").attr({"title":"Go there","data-toggle":"tooltip"})
$("section a.icon").attr("title","View")
$("section a[download]").attr("title","Download")
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip({ animation: true });
    if (window.location.hash) {
        $("section.showcase .section.selection a").removeClass("selected");
        $(`[href="${window.location.hash}"]`).addClass("selected");
        $(".content").addClass("d-none");
        $(window.location.hash).removeClass("d-none");
        $("html, body").animate(
            {
                scrollTop: $(window.location.hash).offset().top,
            },
            2000
        );
    }
});
$("section.showcase .section.selection a").click(function () {
    $("section.showcase .section.selection a").removeClass("selected");
    $(this).addClass("selected");
    $(".content").addClass("d-none");
    $($(this).attr("href")).removeClass("d-none");
});
