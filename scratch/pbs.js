
function line(x1, y1, x2, y2) {
    var a = x1 - x2,
        b = y1 - y2,
        c = Math.sqrt(a * a + b * b);

    var sx = (x1 + x2) / 2,
        sy = (y1 + y2) / 2;

    var x = sx - c / 2,
        y = sy;
    var angle = Math.PI - Math.atan2(-b, a);
    return `<div style='border: 1px solid #000; width: ${c}px; height: 0px; -moz-transform: rotate(${angle}rad); -webkit-transform: rotate(${angle}rad);
    -o-transform: rotate(${angle}rad); -ms-transform: rotate(${angle}rad); position: absolute; top: ${y}px; left: ${x}px'</div>`;
}
$(".section.interactive .options .in").each(function(){
    var in_ = $(this)
    $(".section.interactive .options .out").each(function(){
        var out_ = $(this)
        $(this).parent().parent().append(line(in_.position().left + in_.outerWidth(false),in_.position().top + in_.outerHeight(false) / 2,out_.position().left,out_.position().top + out_.outerHeight(false) / 2))
    })
})
//.append(line(100,100,200,200))