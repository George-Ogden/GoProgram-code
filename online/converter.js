const colourArray = {
    aqua: "#00ffff",
    black: "#000000",
    blue: "#0000ff",
    fuchsia: "#ff00ff",
    green: "#008000",
    gray: "#808080",
    lime: "#00ff00",
    maroon: "#800000",
    navy: "#000080",
    olive: "#808000",
    purple: "#800080",
    red: "#ff0000",
    silver: "#c0c0c0",
    teal: "#008080",
    white: "#ffffff",
    yellow: "#ffff00",
    aliceblue: "#f0f8ff",
    antiquewhite: "#faebd7",
    aqua: "#00ffff",
    aquamarine: "#7fffd4",
    azure: "#f0ffff",
    beige: "#f5f5dc",
    bisque: "#ffe4c4",
    black: "#000000",
    blanchedalmond: "#ffebcd",
    blue: "#0000ff",
    blueviolet: "#8a2be2",
    brown: "#a52a2a",
    burlywood: "#deb887",
    cadetblue: "#5f9ea0",
    chartreuse: "#7fff00",
    chocolate: "#d2691e",
    coral: "#ff7f50",
    cornflowerblue: "#6495ed",
    cornsilk: "#fff8dc",
    crimson: "#dc143c",
    cyan: "#00ffff",
    darkblue: "#00008b",
    darkcyan: "#008b8b",
    darkgoldenrod: "#b8860b",
    darkgray: "#a9a9a9",
    darkgrey: "#a9a9a9",
    darkgreen: "#006400",
    darkkhaki: "#bdb76b",
    darkmagenta: "#8b008b",
    darkolivegreen: "#556b2f",
    darkorange: "#ff8c00",
    darkorchid: "#9932cc",
    darkred: "#8b0000",
    darksalmon: "#e9967a",
    darkseagreen: "#8fbc8f",
    darkslateblue: "#483d8b",
    darkslategray: "#2f4f4f",
    darkslategrey: "#2f4f4f",
    darkturquoise: "#00ced1",
    darkviolet: "#9400d3",
    deeppink: "#ff1493",
    deepskyblue: "#00bfff",
    dimgray: "#696969",
    dimgrey: "#696969",
    dodgerblue: "#1e90ff",
    firebrick: "#b22222",
    floralwhite: "#fffaf0",
    forestgreen: "#228b22",
    fuchsia: "#ff00ff",
    gainsboro: "#dcdcdc",
    ghostwhite: "#f8f8ff",
    gold: "#ffd700",
    goldenrod: "#daa520",
    gray: "#808080",
    grey: "#808080",
    green: "#008000",
    greenyellow: "#adff2f",
    honeydew: "#f0fff0",
    hotpink: "#ff69b4",
    indianred: "#cd5c5c",
    indigo: "#4b0082",
    ivory: "#fffff0",
    khaki: "#f0e68c",
    lavender: "#e6e6fa",
    lavenderblush: "#fff0f5",
    lawngreen: "#7cfc00",
    lemonchiffon: "#fffacd",
    lightblue: "#add8e6",
    lightcoral: "#f08080",
    lightcyan: "#e0ffff",
    lightgoldenrodyellow: "#fafad2",
    lightgray: "#d3d3d3",
    lightgrey: "#d3d3d3",
    lightgreen: "#90ee90",
    lightpink: "#ffb6c1",
    lightsalmon: "#ffa07a",
    lightseagreen: "#20b2aa",
    lightskyblue: "#87cefa",
    lightslategray: "#778899",
    lightslategrey: "#778899",
    lightsteelblue: "#b0c4de",
    lightyellow: "#ffffe0",
    lime: "#00ff00",
    limegreen: "#32cd32",
    linen: "#faf0e6",
    magenta: "#ff00ff",
    maroon: "#800000",
    mediumaquamarine: "#66cdaa",
    mediumblue: "#0000cd",
    mediumorchid: "#ba55d3",
    mediumpurple: "#9370db",
    mediumseagreen: "#3cb371",
    mediumslateblue: "#7b68ee",
    mediumspringgreen: "#00fa9a",
    mediumturquoise: "#48d1cc",
    mediumvioletred: "#c71585",
    midnightblue: "#191970",
    mintcream: "#f5fffa",
    mistyrose: "#ffe4e1",
    moccasin: "#ffe4b5",
    navajowhite: "#ffdead",
    navy: "#000080",
    oldlace: "#fdf5e6",
    olive: "#808000",
    olivedrab: "#6b8e23",
    orange: "#ffa500",
    orangered: "#ff4500",
    orchid: "#da70d6",
    palegoldenrod: "#eee8aa",
    palegreen: "#98fb98",
    paleturquoise: "#afeeee",
    palevioletred: "#db7093",
    papayawhip: "#ffefd5",
    peachpuff: "#ffdab9",
    peru: "#cd853f",
    pink: "#ffc0cb",
    plum: "#dda0dd",
    powderblue: "#b0e0e6",
    purple: "#800080",
    red: "#ff0000",
    rosybrown: "#bc8f8f",
    royalblue: "#4169e1",
    saddlebrown: "#8b4513",
    salmon: "#fa8072",
    sandybrown: "#f4a460",
    seagreen: "#2e8b57",
    seashell: "#fff5ee",
    sienna: "#a0522d",
    silver: "#c0c0c0",
    skyblue: "#87ceeb",
    slateblue: "#6a5acd",
    slategray: "#708090",
    slategrey: "#708090",
    snow: "#fffafa",
    springgreen: "#00ff7f",
    steelblue: "#4682b4",
    tan: "#d2b48c",
    teal: "#008080",
    thistle: "#d8bfd8",
    tomato: "#ff6347",
    turquoise: "#40e0d0",
    violet: "#ee82ee",
    wheat: "#f5deb3",
    white: "#ffffff",
    whitesmoke: "#f5f5f5",
    yellow: "#ffff00",
    yellowgreen: "#9acd32",
};
let 
    colourName = document.getElementById("colourName"),
    colourHex = document.getElementById("hexColour"),
    colourRGB = document.getElementById("rgbColour"),
    colourCMYK = document.getElementById("cmykColour"),
    colourHSL = document.getElementById("hslColour");
function rgb(e, r, o) {
    return (
        "#" +
        (e.toString(16).length > 1 ? e.toString(16) : "0" + e.toString(16)) +
        (r.toString(16).length > 1 ? r.toString(16) : "0" + r.toString(16)) +
        (o.toString(16).length > 1 ? o.toString(16) : "0" + o.toString(16))
    );
}
function rgbConvert(e) {
    return String(parseInt(e.substring(1, 3), 16)) + ", " + String(parseInt(e.substring(3, 5), 16)) + ", " + String(parseInt(e.substring(5), 16));
}
function cmykConvert(e) {
    let r = parseInt(e.substring(1, 3), 16) / 255,
        o = parseInt(e.substring(3, 5), 16) / 255,
        a = parseInt(e.substring(5), 16) / 255,
        l = 1 - Math.max(r, o, a);
    if (1 == l) return "0%, 0%, 0%, 100%";
    let t = (1 - r - l) / (1 - l),
        f = (1 - o - l) / (1 - l),
        n = (1 - a - l) / (1 - l);
    return String(Math.round(100 * t)) + "%, " + String(Math.round(100 * f)) + "%, " + String(Math.round(100 * n)) + "%, " + String(Math.round(100 * l)) + "%";
}
function hslConvert(e) {
    let r = parseInt(e.substring(1, 3), 16) / 255,
        o = parseInt(e.substring(3, 5), 16) / 255,
        a = parseInt(e.substring(5), 16) / 255,
        l = Math.max(r, o, a),
        t = Math.min(r, o, a),
        f = l - t,
        n = 0;
    if (0 != f)
        switch (l) {
            case r:
                n = (((o - a) / f + 6) % 6) * 60;
                break;
            case o:
                n = 60 * ((a - r) / f + 2);
                break;
            case a:
                n = 60 * ((r - o) / f + 4);
        }
    let u = (l + t) / 2,
        c = 0;
    return 0 != f && (c = f / (1 - Math.abs(2 * u - 1))), String(Math.round(n)) + "°, " + String(Math.round(100 * c)) + "%, " + String(Math.round(100 * u)) + "%";
}
function hsltohex() {
    if (((hslcolour = colourHSL.value.toLowerCase().replace(/ +/g, "").trim()), hslcolour.match(/^\d+\s*\°?\,\s*0*(100|[0-9][0-9]|[0-9])\s*\%?\,\s*0*(100|[0-9][0-9]|[0-9])+\s*\%?\,*$/))) {
        (hslcolour = hslcolour.replace("°", "")), (hslcolour = hslcolour.replace(/\%+/g, "")), (hslcolour = hslcolour.replace(/\s+/g, ""));
        let [e, r, o] = hslcolour.split(",");
        (e %= 360), (r /= 100), (o /= 100);
        let a = (1 - Math.abs(2 * o - 1)) * r,
            l = a * (1 - Math.abs(((e / 60) % 2) - 1)),
            t = o - a / 2,
            [f, n, u] = [0, 0, 0];
        e < 60 ? ((f = a), (n = l)) : e < 120 ? ((f = l), (n = a)) : e < 180 ? ((n = a), (u = l)) : e < 240 ? ((u = a), (n = l)) : e < 300 ? ((f = l), (u = a)) : e < 360 && ((f = a), (u = l)),
            ([f, n, u] = [255 * (f + t), 255 * (n + t), 255 * (u + t)]);
        let c = rgb(Math.round(f), Math.round(n), Math.round(u));
        if (((colourHex.value = c.toUpperCase()), (colourRGB.value = rgbConvert(c)), (colourCMYK.value = cmykConvert(c)), Object.values(colourArray).includes(c))) {
            let e = Object.keys(colourArray);
            for (let r = 0; r < e.length; r++) colourArray[e[r]] == c && (colourName.value = e[r]);
        } else colourName.value = "no name";
        set(c);
    }
}
function cmyktohex() {
    let e = colourCMYK.value.trim().toLowerCase().replace(/ +/g, "");
    if (e.match(/^[0]*([0-9]|[0-9][0-9]|100)\s*\%?\s*\,[0]*([0-9]|[0-9][0-9]|100)\s*\%?\s*\,[0]*([0-9]|[0-9][0-9]|100)\s*\%?\s*\,[0]*([0-9]|[0-9][0-9]|100)\s*\%?\s*\,*$/)) {
        e = (e = e.replace(/\%+/g, "")).replace(/\s+/g, "");
        let [r, o, a, l] = e.split(","),
            t = 255 * (1 - r / 100) * (1 - l / 100),
            f = 255 * (1 - o / 100) * (1 - l / 100),
            n = 255 * (1 - a / 100) * (1 - l / 100),
            u = rgb(Math.round(t), Math.round(f), Math.round(n));
        if (((colourHex.value = u.toUpperCase()), (colourRGB.value = rgbConvert(u)), (colourHSL.value = hslConvert(u)), Object.values(colourArray).includes(u))) {
            let e = Object.keys(colourArray);
            for (let r = 0; r < e.length; r++) colourArray[e[r]] == u && (colourName.value = e[r]);
        } else colourName.value = "no name";
        set(u);
    }
}
function rgbtohex() {
    if (
        ((rgbcolour = colourRGB.value.trim().toLowerCase().replace(/ +/g, "")),
        rgbcolour.match(
            /^[0]*([0-9]|[0-9][0-9]|[0-1][0-9][0-9]|2[0-4][0-9]|25[0-5])\s*\,[0]*([0-9]|[0-9][0-9]|[0-1][0-9][0-9]|2[0-4][0-9]|25[0-5])\s*\,[0]*([0-9]|[0-9][0-9]|[0-1][0-9][0-9]|2[0-4][0-9]|25[0-5])\,*$/
        ))
    ) {
        rgbcolour = rgbcolour.replace(/\s+/g, "");
        let [e, r, o] = rgbcolour.split(","),
            a = rgb(parseInt(e), parseInt(r), parseInt(o));
        if (((colourHex.value = a.toUpperCase()), (colourHSL.value = hslConvert(a)), (colourCMYK.value = cmykConvert(a)), Object.values(colourArray).includes(a))) {
            let e = Object.keys(colourArray);
            for (let r = 0; r < e.length; r++) colourArray[e[r]] == a && (colourName.value = e[r]);
        } else colourName.value = "no name";
        set(a);
    }
}
function hex() {
    let e = colourHex.value.trim().toLowerCase().replace(/ +/g, "");
    if (e.match(/^\#?([0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/)) {
        if (
            (3 == (e = (e = e.replace(/\s+/g, "")).replace(/\#+/g, "")).length && (e = e[0] + e[0] + e[1] + e[1] + e[2] + e[2]),
            (e = "#" + e),
            (colourRGB.value = rgbConvert(e)),
            (colourCMYK.value = cmykConvert(e)),
            (colourHSL.value = hslConvert(e)),
            Object.values(colourArray).includes(e))
        ) {
            let r = Object.keys(colourArray);
            for (let o = 0; o < r.length; o++) colourArray[r[o]] == e && (colourName.value = r[o]);
        } else colourName.value = "no name";
        set(e);
    }
}
function set(e) {
    $("#output").css("background",e)
}
function name() {
    let e = colourName.value.toLowerCase().replace(/ +/g, "");
    for (; -1 != e.search(" "); ) e = e.replace(/\s+/g, "");
    if (e in colourArray) {
        let r = colourArray[e].toUpperCase();
        (colourHex.value = r.toUpperCase()), (colourRGB.value = rgbConvert(r)), (colourCMYK.value = cmykConvert(r)), (colourHSL.value = hslConvert(r)), set(r);
    }
}
name(), (colourName.oninput = name), (colourCMYK.oninput = cmyktohex), (colourRGB.oninput = rgbtohex), (colourHSL.oninput = hsltohex), (colourHex.oninput = hex);
