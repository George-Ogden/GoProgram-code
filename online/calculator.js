(String.prototype.insert = function (m, a) {
    return this.slice(0, m) + a + this.slice(m, this.length);
}),
    (Array.prototype.remove = function (m) {
        return this.splice(this.indexOf(m), 1);
    });
let keyToId = {
        0: "n0",
        1: "n1",
        2: "n2",
        3: "n3",
        4: "n4",
        5: "n5",
        6: "n6",
        7: "n7",
        8: "n8",
        9: "n9",
        c: "c",
        C: "c",
        m: "mr",
        M: "mr",
        "/": "divide",
        "*": "times",
        x: "times",
        X: "times",
        Backspace: "back",
        "-": "minus",
        "+": "plus",
        "=": "equals",
        "%": "percent",
        ".": "dot",
        Enter: "equals",
        a: "ans",
        A: "ans",
        "(": "bo",
        ")": "bc",
        b: "(",
        B: "(",
        '"': "square",
        "^": "square",
        s: "square",
        S: "square",
        e: "e",
        E: "e",
    },
    buttonIds = [
        "mc",
        "mp",
        "mm",
        "mr",
        "c",
        "divide",
        "times",
        "back",
        "n7",
        "n8",
        "n9",
        "minus",
        "n4",
        "n5",
        "n6",
        "plus",
        "n1",
        "n2",
        "n3",
        "equals",
        "percent",
        "n0",
        "dot",
        "equals",
        "ans",
        "bc",
        "bo",
        "square",
        "e",
    ],
    idToSymbol = { plus: "+", percent: "%", dot: ".", times: "×", minus: "-", divide: "÷", bc: ")", bo: "(", square: "²" },
    mathSymbols = [];
for (let m in idToSymbol) mathSymbols.push(idToSymbol[m]);
mathSymbols.remove(")");
let symbolToMath = { "%": "/100", "×": "*", "÷": "/", "(": "(", ")": ")", "²": "**2" },
    buttons = [];
buttonIds.forEach((m) => buttons.push($("#"+m)));
let command = "Welcome to the calculator",
    memory = 0,
    clear = !0,
    answer = 0;
function output() {
    $("#output").val(command);
}
function calculate() {
    let math = command;
    try {
        for (let m in symbolToMath) {
            let a = (math.match(/\(/g) || []).length - (math.match(/\)/g) || []).length;
            if (a > 0) for (let m = a; m > 0; m--) math += ")";
            if (")" == m)
                for (let a = 0; a < (math.match(/\)/g) || []).length; a++)
                    -1 != math.search(/\)[0-9\.\(]+/) && (math = math.insert(math.search(/\)[0-9\.\(]+/) + 1, "*")), (math = math.replace(m, symbolToMath[m]));
            else if ("(" == m)
                for (let a = 0; a < (math.match(/\(/g) || []).length; a++)
                    -1 != math.search(/[0-9\)]\(/) && (math = math.insert(math.search(/[0-9\)]\(/) + 1, "*")), (math = math.replace(m, symbolToMath[m]));
            else
                for (; -1 != math.search(m); )
                    "%" == m && math.search("%") < math.length - 1 && -1 != math[math.search("%") + 1].search(/[0-9\.\(]/) && (math = math.insert(math.search("%") + 1, "*")),
                        (math = math.replace(m, symbolToMath[m]));
        }
        (math = String(eval(math))), "undefined" == math && ((math = "0"), (command = "0")), (answer = math), (math != 1 / 0 && math != -1 / 0) || ((math = "MathError"), (clear = !0), (answer = 0));
    } catch (m) {
        (math = "SyntaxError"), (clear = !0);
    }
    return math;
}
function number(m) {
    if ((clear && ((clear = !1), (command = "")), "n" == m[0])) command += m[1];
    else if ("e" == command[command.length - 1])
        switch (m) {
            case "plus":
            case "minus":
                command += idToSymbol[m];
                break;
            case "mc":
                memory = 0;
                break;
            case "equals":
                command = calculate();
                break;
            case "back":
                command.length > 0 && (command = command.substring(0, command.length - 1));
        }
    else
        switch (m) {
            case "ans":
                ("" != command && -1 != command.search(/[\.0-9]+$/)) || (command += answer);
                break;
            case "mr":
                ("" != command && -1 != command.search(/[\.0-9]+$/)) || (command += memory);
                break;
            case "mp":
                let a = calculate();
                if (((clear = !0), Number(a) || 0 == Number(a))) {
                    (memory += Number(a)), (command += "m+");
                    break;
                }
                command = a;
                break;
            case "mm":
                let e = calculate();
                if (((clear = !0), Number(e) || 0 == Number(e))) {
                    (memory -= Number(e)), (command += "m-");
                    break;
                }
                command = e;
                break;
            case "mc":
                memory = 0;
                break;
            case "equals":
                command = calculate();
                break;
            case "back":
                command.length > 0 && (command = command.substring(0, command.length - 1));
                break;
            case "c":
                command = "";
                break;
            case "dot":
                -1 == command.search(/((\.[0-9]*)|(e[0-9]*[+-]*[0-9]*))$/) && (command += idToSymbol[m]);
                break;
            case "e":
                -1 == command.search(/(\e[0-9]*[+-]*[0-9]*$)/) && -1 != command.search(/[0-9]$/) && "" != command && (command += m);
                break;
            case "bo":
                ("" == command || ("." != command[command.length - 1] && "(" != command[command.length - 1])) && (command += idToSymbol[m]);
                break;
            case "bc":
                if ((command.match(/\(/g) || []).length - (command.match(/\)/g) || []).length >= 1) {
                    let a = !1;
                    mathSymbols.forEach((m) => {
                        m == command[command.length - 1] && (a = !0);
                    }),
                        a || "" == command || (command += idToSymbol[m]);
                }
                break;
            case "minus":
                -1 == command.search(/[(\-\(\.)|(e\+)]$/) && (command += idToSymbol[m]);
                break;
            case "plus":
                -1 == command.search(/[(\+\(\.)|(e\-)]$/) && (command += idToSymbol[m]);
                break;
            default:
                if (m in idToSymbol) {
                    let a = !1;
                    mathSymbols.forEach((m) => {
                        m == command[command.length - 1] && (a = !0);
                    }),
                        (!a || ("%" == command[command.length - 1] && "percent" != m) || ("²" == command[command.length - 1] && "square" != m)) &&
                            "" != command &&
                            -1 == command.search(/e[0-9]*[+-]*[0-9]*$/) &&
                            (command += idToSymbol[m]);
                    break;
                }
        }
    output();
}
function arrow(m) {
    m.key in keyToId && number(keyToId[m.key]);
}
output(),
    ($(document).on("keydown",arrow)),
    ($("#output").on("input",output)),
    buttons.forEach(
        (m, a) =>
            (m.click(() =>
                number(buttonIds[a])            ))
    ),
    output();
