class square {
    constructor(e, t) {
        (this._value = $("#_" + e + t).val() ? Number($("#_" + e + t).val()) : 0), (this._isConstant = !!$("#_" + e + t).val()), (this.x = e), (this.y = t);
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
                    let x = $("#_" + i + j).val();
                    if (!x) continue;
                    if (((x = parseInt(x)), x % 1 != 0 || x > 9 || x < 0)) throw "";
                    $("#_" + i + j)[0].setCustomValidity("");
                } catch (e) {
                    $("#valid").show();
                    return $("#_" + i + j)[0].setCustomValidity("Invalid Input!"), !1;
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
                    return $("#valid").show(), (this.data = []), !1;
        return !0;
    }
    set_data() {
        for (let e = 0; e < 9; e++)
            for (let t = 0; t < 9; t++) $("#_" + e + t).val(this.data[e][t].value) || "", this.data[e][t].isConstant || $("#_" + e + t).css("background", "var(--secondary-light)");
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
        $("#solve").hide();
        try {
            for (var e = 0; e < 9; e++)
                for (var t = 0; t < 9; )
                    if (
                        (await new Promise((e) => setTimeout(e, 0)),
                        (this.currentData = this.data[e][t]),
                        this.currentData.value || ((this.currentData.value = 1), $("#_" + e + t).css("background", "var(--secondary-light)"), $("#_" + e + t).val(1)),
                        Sudoku.difference(this.data[e]) &&
                            Sudoku.difference(this.data.map((e) => e[t])) &&
                            Sudoku.difference(
                                this.data.filter((t) => Math.floor(this.data.indexOf(t) / 3) == Math.floor(e / 3)).map((e) => e.filter((n) => Math.floor(e.indexOf(n) / 3) == Math.floor(t / 3))),
                                2
                            ))
                    )
                        $("#_" + e + t).val(this.currentData.value || ""), t++;
                    else if (this.currentData.isConstant && 0 == t) (t = 8), e--;
                    else if (this.currentData.isConstant) t--;
                    else if (9 == this.currentData.value) {
                        for (
                            $("#_" + e + t).val(""), this.currentData.value = 0;
                            $("#_" + e + t).css("background", "var(--primary-light)"),
                                this.data[e][t].isConstant ? $("#_" + e + t).val("") : {},
                                0 == t ? ((t = 8), e--) : t--,
                                this.data[e][t].isConstant || 9 == this.data[e][t].value++;

                        );
                        $("#_" + e + t).css("background", "var(--secondary-light)"), $("#_" + e + t).val(this.currentData.value || "");
                    } else this.currentData.value++, $("#_" + e + t).css("background", "var(--secondary-light)"), $("#_" + e + t).val(this.currentData.value || "");
            this.set_data(), (solve = !1), ($("#solve").hide()), ($("#solve").show()),$("#solve").html("Reset");
        } catch (e) {
            $("#solve").show();
            $("#valid").html("INVALID SUDOKU"), $("#solve").html("Solve"), (this.data = []);
        }
    }
    reset() {
        for (let e = 0; e < 9; e++) {
            for (let t = 0; t < 9; t++) {
                this.data[e][t].isConstant || ($("#_" + e + t).val("")), $("#_" + e + t).css("background", "var(--primary-light)");
            }
        }
    }
}
let solve = !0,
    sudoku = new Sudoku();
function run() {
    $("#valid").hide();
    solve ? sudoku.check_data() && sudoku.get_data() && ( sudoku.solve()) : (sudoku.reset(), $("#solve").html("Solve"), (sudoku = new Sudoku()), (solve = !0));
    
}
$("#solve").click(function (e) {
    e.preventDefault(), run();
});
$("#sudoku").change(sudoku.check_data);
$("input").on("input", function () {
    if (
        $(this)
            .val()
            .match(/^[0-9]$/)
    ) {
        let t = $("#_" + (parseInt($(this).attr("id").slice(1, 3)) < 8 ? "0" : "") + (parseInt($(this).attr("id").slice(1, 3)) + (8 == $(this).attr("id")[2] ? 2 : 1)));
        t ? t.focus() : {};
    }
});
function resize() {
    $("#sudoku").height($("#sudoku").width());
}
$(window).resize(resize);
resize();
