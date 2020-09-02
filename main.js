console.log(
    "  _____       _____ \n / ____|     |  __ \\ \n| |  __  ___ | |__) | __ ___   __ _ _ __ __ _ _ __ ___\n| | |_ |/ _ \\|  ___/ '__/ _ \\ / _` | '__/ _` | '_ ` _ \\ \n| |__| | (_) | |   | | | (_) | (_| | | | (_| | | | | | |\n \\_____|\\___/|_|   |_|  \\___/ \\__, |_|  \\__,_|_| |_| |_|\n                              __/ |\n                             |___/"
);
let downloads = document.querySelectorAll("a[download]");
for (let e = 0; e < downloads.length; e++)
    downloads[e].onclick = function (e) {
        confirm("Are you sure you want to download this file?") || e.preventDefault();
    };
let isChromium = window.chrome,
    winNav = window.navigator,
    vendorName = winNav.vendor,
    isOpera = void 0 !== window.opr,
    isIEedge = winNav.userAgent.indexOf("Edge") > -1,
    isIOSChrome = winNav.userAgent.match("CriOS");
(null != isChromium && "Google Inc." === vendorName && !1 === isOpera && !isIOSChrome) ||
    isIEedge ||
    (document.getElementsByTagName("nav").length > 0 && (document.getElementsByTagName("nav")[0].style.visibility = "hidden")),
    (images = document.getElementsByClassName("image"));
for (let e = 0; e < images.length; e++)
    images[e].onmousemove = function (t) {
        try {
            tooltip_ = images[e].getElementsByClassName("tooltip_ mouse")[0];
            let o = t.clientX,
                _ = t.clientY;
            (tooltip_.style.top = _ + 10 + "px"), (tooltip_.style.left = o + 10 + "px");
        } catch (e) {}
    };
headings = document.getElementsByClassName("h2");
for (let e = 0; e < headings.length; e++)
    headings[e].onmousemove = function (t) {
        try {
            tooltip_ = headings[e].getElementsByClassName("tooltip_ mouse")[0];
            let o = t.clientX,
                _ = t.clientY;
            (tooltip_.style.top = _ + 10 + "px"), (tooltip_.style.left = o + 10 + "px");
        } catch (e) {}
    };
codes = document.getElementsByClassName("code");
for (let e = 0; e < codes.length; e++)
    codes[e].onmousemove = function (t) {
        try {
            tooltip_ = codes[e].getElementsByClassName("tooltip_ mouse")[0];
            let o = t.clientX,
                _ = t.clientY;
            (tooltip_.style.top = _ + 10 + "px"), (tooltip_.style.left = o + 10 + "px");
        } catch (e) {}
    };
try {
    document.getElementById("BG").onmousemove = function (e) {
        tooltip_ = document.getElementById("BG").getElementsByClassName("tooltip_ mouse")[0];
        let t = e.clientX,
            o = e.clientY;
        (tooltip_.style.top = o + 10 + "px"), (tooltip_.style.left = t + 10 + "px");
    };
} catch (e) {}
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip({ animation: true });
});
