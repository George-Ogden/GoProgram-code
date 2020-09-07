let network = Fully_Connected_Network.from_string({
        length: 3,
        width: 3,
        weights: [
            {
                data: [
                    [1.687971080923032, 2.3996765942681364, 2.2490047361337124],
                    [5.291709732450355, 7.716856106158909, 7.1919219418842735],
                    [0.617865453644063, 0.7293371564840068, 0.6982632263604316],
                ],
                rows: 3,
                cols: 3,
            },
            {
                data: [
                    [0.535211482032725, 0.5867731754173288, -0.31615880117560224],
                    [2.4091319931802495, 2.023427101762659, -1.8131984394580714],
                    [1.6220593170238309, 1.566766413436295, -1.578087197795609],
                ],
                rows: 3,
                cols: 3,
            },
            { data: [[2.0079817690572734], [1.2818977061866599], [-0.7245054952858461]], rows: 3, cols: 1 },
        ],
        biases: [
            { data: [[-3.9743355102915183, -5.831916288764293, -5.4279525222622445]], rows: 1, cols: 3 },
            { data: [[-0.2623158343575185, -0.07768138078865461, -0.09935367789448749]], rows: 1, cols: 3 },
            { data: [[0.06578443141327074]], rows: 1, cols: 1 },
        ],
        activation_function_name: "tanh",
        activation_function: {},
        learning_rate: 0.1,
        process: [
            { data: [[0.9607843137254902, 0.9607843137254902, 0.9607843137254902]], rows: 1, cols: 3 },
            { data: [[0.0051599851339187985, 0.00041337248519512926, 0.0007163754762753438]], rows: 1, cols: 3 },
            { data: [[0.0007337645011411542, 0.001105079929876407, 0.001979763199891127]], rows: 1, cols: 3 },
            { data: [[0.001147359416745486]], rows: 1, cols: 1 },
        ],
    }),
    redInput = $("#redInput"),
    greenInput = $("#greenInput"),
    blueInput = $("#blueInput"),
    redSlider = $("#redSlider"),
    greenSlider = $("#greenSlider"),
    blueSlider = $("#blueSlider"),
    output = $("#output");
function set(e, t, n) {
    let l = "rgb(" + e + "," + t + "," + n + ")",
        r = network.forward_propagate(Matrix.fromArray([[e / 255, t / 255, n / 255]])).data[0][0] > 0 ? "rgb(0,0,0)" : "rgb(255,255,255)";
    (output.children("p").css("background",l)), (output.children("p").css("color",r));
}
function input() {
    let e = redInput.val().trim(),
        t = greenInput.val().trim(),
        n = blueInput.val().trim();
    (parseInt(e) == e && 0 <= e && e < 256) || ("" == e ? (e = 0) : ((e = redSlider.val()), (redInput.val(e)))),
        (parseInt(t) == t && 0 <= t && t < 256) || ("" == t ? (t = 0) : ((t = greenSlider.val()), (greenInput.val(t)))),
        (parseInt(n) == n && 0 <= n && n < 256) || ("" == n ? (n = 0) : ((t = greenSlider.val()), (greenInput.val(t)))),
        (redSlider.val(e)),
        (greenSlider.val(t)),
        (blueSlider.val(n)),
        set(e, t, n);
}
function slider() {
    let e = redSlider.val(),
        t = greenSlider.val(),
        n = blueSlider.val();
    (redInput.val(e)), (greenInput.val(t)), (blueInput.val(n)), set(e, t, n);
}
input(), (redInput.on("input",input)), (greenInput.on("input",input)), (blueInput.on("input",input)), (redSlider.on("input",slider)), (greenSlider.on("input",slider)), (blueSlider.on("input",slider));
