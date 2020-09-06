console.log(
    "  _____       _____ \n / ____|     |  __ \\ \n| |  __  ___ | |__) | __ ___   __ _ _ __ __ _ _ __ ___\n| | |_ |/ _ \\|  ___/ '__/ _ \\ / _` | '__/ _` | '_ ` _ \\ \n| |__| | (_) | |   | | | (_) | (_| | | | (_| | | | | | |\n \\_____|\\___/|_|   |_|  \\___/ \\__, |_|  \\__,_|_| |_| |_|\n                              __/ |\n                             |___/"
 );
  $("a[download]").click(e =>confirm("Are you sure you want to download this file?") || e.preventDefault())

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip({ animation: true });
if (window.location.hash){
    $("section.showcase .section.selection .image").removeClass("selected") 
    $( `[href="${window.location.hash}"]`).children(".image").addClass("selected")
    $(".content").addClass("d-none")
    $(window.location.hash).removeClass("d-none")
    $('html, body').animate({
        scrollTop: $(window.location.hash).offset().top
    }, 2000);
}
});
$("section.showcase .section.selection a").click(function(){
    $("section.showcase .section.selection a").removeClass("selected") 
    $(this).addClass("selected")
    $(".content").addClass("d-none")
    console.log($(this).attr("href"))
    $($(this).attr("href")).removeClass("d-none")
})