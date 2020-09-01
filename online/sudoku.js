class square {
    constructor(e, t) {
        (this._value = document.getElementById("_" + e + t).value ? Number(document.getElementById("_" + e + t).value) : 0),
            (this._isConstant = !!document.getElementById("_" + e + t).value),
            (this.x = e),
            (this.y = t);
    }
    get value() {
        return this._value;
    }
    set value(e) {
        this._value = this.isConstant ? this._value : e % 10;
    }
    get isConstant() {
        return this._isConstant;
    }
    set isConstant(e) {
        this._isConstant = e;
    }
}
class Sudoku {
    constructor() {
        this.data = [];
    }
    check_data() {
        for (let i = 0; i < 9; i++)
            for (let j = 0; j < 9; j++)
                try {
                    let x = document.getElementById("_" + i + j).value;
                    if (!x) continue;
                    if (((x = parseInt(x)), x % 1 != 0 || x > 9 || x < 0)) throw "";
                    document.getElementById("_" + i + j).setCustomValidity("");
                } catch (e) {
                    return eval("_" + i + j).setCustomValidity("Invalid Input!"), !1;
                }
        return !0;
    }
    get_data() {
        for (let e = 0; e < 9; e++) {
            this.data.push([]);
            for (let t = 0; t < 9; t++) this.data[e].push(new square(e, t));
        }
        for (var e = 0; e < 9; e++)
            for (var t = 0; t < 9; t++)
                if (
                    !(
                        Sudoku.difference(this.data[e]) &&
                        Sudoku.difference(this.data.map((e) => e[t])) &&
                        Sudoku.difference(
                            this.data.filter((t) => Math.floor(this.data.indexOf(t) / 3) == Math.floor(e / 3)).map((e) => e.filter((n) => Math.floor(e.indexOf(n) / 3) == Math.floor(t / 3))),
                            2
                        )
                    )
                )
                    return (document.getElementById("valid").innerHTML = "INVALID SUDOKU"), (this.data = []), !1;
        return !0;
    }
    set_data() {
        for (let e = 0; e < 9; e++)
            for (let t = 0; t < 9; t++)
                (document.getElementById("_" + e + t).value = this.data[e][t].value || ""),
                    this.data[e][t].isConstant || (document.getElementById("_" + e + t).style.backgroundColor = "var(--secondary-light)");
    }
    print() {
        let e = [];
        for (let t = 0; t < 9; t++) for (let n = 0; n < 9; n++) e.push(this.data[t][n].value);
    }
    static difference(e, t = 1) {
        if (2 == t) {
            let t = [];
            for (let n = 0; n < e.length; n++) for (let a = 0; a < e.length; a++) t.push(e[n][a]);
            e = t;
        }
        for (let t = 0; t < e.length; t++) for (let n = 0; n < e.length; n++) if (t != n && e[t].value == e[n].value && 0 != e[t].value && 0 != e[n].value) return !1;
        return !0;
    }
    async solve() {
        document.getElementById("solve").style.visibility = "collapse";
        try {
            for (var e = 0; e < 9; e++)
                for (var t = 0; t < 9; )
                    if (
                        (await new Promise((e) => setTimeout(e, 0)),
                        (this.currentData = this.data[e][t]),
                        this.currentData.value ||
                            ((this.currentData.value = 1), (document.getElementById("_" + e + t).style.backgroundColor = "var(--secondary-light)"), (document.getElementById("_" + e + t).value = 1)),
                        Sudoku.difference(this.data[e]) &&
                            Sudoku.difference(this.data.map((e) => e[t])) &&
                            Sudoku.difference(
                                this.data.filter((t) => Math.floor(this.data.indexOf(t) / 3) == Math.floor(e / 3)).map((e) => e.filter((n) => Math.floor(e.indexOf(n) / 3) == Math.floor(t / 3))),
                                2
                            ))
                    )
                        (document.getElementById("_" + e + t).value = this.currentData.value || ""), t++;
                    else if (this.currentData.isConstant && 0 == t) (t = 8), e--;
                    else if (this.currentData.isConstant) t--;
                    else if (9 == this.currentData.value) {
                        for (
                            document.getElementById("_" + e + t).value = "", document.getElementById("_" + e + t).style.backgroundColor = "var(--primary-light)", this.currentData.value = 0;
                            0 == t ? ((t = 8), e--) : t--, this.data[e][t].isConstant || 9 == this.data[e][t].value++;

                        );
                        (document.getElementById("_" + e + t).style.backgroundColor = "var(--secondary-light)"), (document.getElementById("_" + e + t).value = this.currentData.value || "");
                    } else
                        this.currentData.value++,
                            (document.getElementById("_" + e + t).style.backgroundColor = "var(--secondary-light)"),
                            (document.getElementById("_" + e + t).value = this.currentData.value || "");
            (document.getElementById("valid").innerHTML = "<br>"), this.set_data(), (solve = !1), (document.getElementById("solve").style.visibility = "visible"), (document.getElementById("solve").style.visibility = "visible");
        } catch (e) {
            (document.getElementById("valid").innerHTML = "INVALID SUDOKU"), (document.getElementById("solve").innerHTML = "Solve"), (this.data = []);
        }
    }
    reset() {
        for (let e = 0; e < 9; e++)
            for (let t = 0; t < 9; t++)
                this.data[e][t].isConstant || (document.getElementById("_" + e + t).value = ""), (document.getElementById("_" + e + t).style.backgroundColor = "var(--primary-light)");
    }
}
let solve = !0,
    sudoku = new Sudoku();
function run() {
    solve
        ? sudoku.check_data() && sudoku.get_data() && ((document.getElementById("solve").innerHTML = "Reset"), sudoku.solve())
        : (sudoku.reset(), (document.getElementById("solve").innerHTML = "Solve"), (sudoku = new Sudoku()), (solve = !0));
}
function resize() {
    (document.getElementById("sudoku").style.height = window.getComputedStyle(document.getElementById("sudoku")).width), window.addEventListener("resize", resize);
}
resize(),
    (document.getElementById("solve").onclick = function (e) {
        e.preventDefault(), run();
    }),
    (document.getElementById("sudoku").onchange = sudoku.check_data),
    (document.body.onload = function () {

            [...document.getElementsByTagName("input")].forEach(function (e) {
                e.oninput = function () {
                    if (1 == this.value.length) {
                        let t = document.getElementById("_" + (parseInt(e.id.slice(1, 3)) < 8 ? "0" : "") + (parseInt(e.id.slice(1, 3)) + (8 == e.id[2] ? 2 : 1)));
                        t ? t.focus() : e.blur();
                    }
                };
            });
    });
