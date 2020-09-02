let network = Neural_Network.from_string({
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
    redInput = document.getElementById("redInput"),
    greenInput = document.getElementById("greenInput"),
    blueInput = document.getElementById("blueInput"),
    redSlider = document.getElementById("redSlider"),
    greenSlider = document.getElementById("greenSlider"),
    blueSlider = document.getElementById("blueSlider"),
    output = document.getElementById("output");
function set(e, t, n) {
    let l = "rgb(" + e + "," + t + "," + n + ")",
        r = network.feedforward([e / 255, t / 255, n / 255]) > 0 ? "rgb(0,0,0)" : "rgb(255,255,255)";
    (output.getElementsByTagName("p")[0].style.background = l), (output.getElementsByTagName("p")[0].style.color = r);
}
function input() {
    let e = redInput.value.trim(),
        t = greenInput.value.trim(),
        n = blueInput.value.trim();
    (parseInt(e) == e && 0 <= e && e < 256) || ("" == e ? (e = 0) : ((e = redSlider.value), (redInput.value = e))),
        (parseInt(t) == t && 0 <= t && t < 256) || ("" == t ? (t = 0) : ((t = greenSlider.value), (greenInput.value = t))),
        (parseInt(n) == n && 0 <= n && n < 256) || ("" == n ? (n = 0) : ((t = greenSlider.value), (greenInput.value = t))),
        (redSlider.value = e),
        (greenSlider.value = t),
        (blueSlider.value = n),
        set(e, t, n);
}
function slider() {
    let e = redSlider.value,
        t = greenSlider.value,
        n = blueSlider.value;
    (redInput.value = e), (greenInput.value = t), (blueInput.value = n), set(e, t, n);
}
input(), (redInput.oninput = input), (greenInput.oninput = input), (blueInput.oninput = input), (redSlider.oninput = slider), (greenSlider.oninput = slider), (blueSlider.oninput = slider);
